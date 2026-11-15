<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetMutation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetMutationController extends Controller
{
    public function index()
    {
        $mutations = AssetMutation::with([
            'asset',
            'fromRoom',
            'toRoom'
        ])->latest()->get();

        return view('mutations.index', compact('mutations'));
    }

    public function create()
    {
        $assets = Asset::all();
        $rooms = Room::all();

        return view('mutations.create', compact('assets', 'rooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'asset_id' => 'required|exists:assets,id',
            'from_room_id' => 'nullable|exists:rooms,id',
            'to_room_id' => 'required|exists:rooms,id|different:from_room_id',
            'tanggal_mutasi' => 'required|date',
            'alasan' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);

        DB::transaction(function () use ($validated) {

            $mutation = AssetMutation::create($validated);

            $asset = Asset::findOrFail($validated['asset_id']);

            $asset->update([
                'room_id' => $validated['to_room_id']
            ]);
        });

        return redirect()->route('mutations.index')
            ->with('success', 'Mutasi aset berhasil disimpan.');
    }

    // MENGHAPUS RIWAYAT MUTASI
    public function destroy($id)
    {
        try {

            DB::transaction(function () use ($id) {

                $mutation = AssetMutation::whereKey($id)
                    ->lockForUpdate()
                    ->firstOrFail();

                $asset = Asset::whereKey($mutation->asset_id)
                    ->lockForUpdate()
                    ->firstOrFail();

                // Cari mutasi terbaru dari aset yang sama
                $latestMutation = AssetMutation::where(
                    'asset_id',
                    $mutation->asset_id
                )
                    ->orderByDesc('tanggal_mutasi')
                    ->orderByDesc('id')
                    ->first();

                // Hanya mutasi terbaru yang boleh dihapus
                if (!$latestMutation || $latestMutation->id != $mutation->id) {

                    throw new \Exception(
                        'Riwayat mutasi ini tidak dapat dihapus karena masih ada mutasi yang lebih baru untuk aset tersebut.'
                    );
                }

                // Kembalikan lokasi aset ke ruangan asal
                $asset->update([
                    'room_id' => $mutation->from_room_id
                ]);

                // Hapus riwayat mutasi
                $mutation->delete();

            });

            return redirect()->route('mutations.index')
                ->with('success', 'Riwayat mutasi berhasil dihapus dan lokasi aset telah dikembalikan.');

        } catch (\Exception $e) {

            return redirect()->route('mutations.index')
                ->with('error', $e->getMessage());

        }
    }
}
