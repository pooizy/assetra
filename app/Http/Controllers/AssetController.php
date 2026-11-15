<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Room;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    // Menampilkan semua data aset
    public function index()
    {
        $assets = Asset::with(['category', 'room', 'employee'])
            ->latest()
            ->get();

        return view('assets.index', compact('assets'));
    }

    // Menampilkan formulir tambah aset
    public function create()
    {
        $categories = Category::all();
        $rooms = Room::all();
        $employees = Employee::orderBy('nama_pegawai')->get();

        return view('assets.create', compact(
            'categories',
            'rooms',
            'employees'
        ));
    }

    // Menyimpan data aset baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_aset' => 'required|unique:assets,kode_aset',
            'nama_aset' => 'required',
            'category_id' => 'required|exists:categories,id',
            'room_id' => 'nullable|exists:rooms,id',
            'employee_id' => 'nullable|exists:employees,id',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required',
            'tanggal_perolehan' => 'nullable|date',
            'keterangan' => 'nullable',
        ]);

        Asset::create($validated);

        return redirect()
            ->route('assets.index')
            ->with('success', 'Data aset berhasil ditambahkan.');
    }

    // Menampilkan detail aset
    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    // Menampilkan formulir edit aset
    public function edit(Asset $asset)
    {
        $categories = Category::all();
        $rooms = Room::all();
        $employees = Employee::orderBy('nama_pegawai')->get();

        return view('assets.edit', compact(
            'asset',
            'categories',
            'rooms',
            'employees'
        ));
    }

    // Memperbarui data aset
    public function update(Request $request, Asset $asset)
    {
        $validated = $request->validate([
            'kode_aset' => 'required|unique:assets,kode_aset,' . $asset->id,
            'nama_aset' => 'required',
            'category_id' => 'required|exists:categories,id',
            'room_id' => 'nullable|exists:rooms,id',
            'employee_id' => 'nullable|exists:employees,id',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required',
            'tanggal_perolehan' => 'nullable|date',
            'keterangan' => 'nullable',
        ]);

        $asset->update($validated);

        return redirect()
            ->route('assets.index')
            ->with('success', 'Data aset berhasil diperbarui.');
    }

    // Menghapus data aset
    public function destroy(Asset $asset)
    {
        $memilikiMutasi = DB::table('asset_mutations')
            ->where('asset_id', $asset->id)
            ->exists();

        if ($memilikiMutasi) {
            return redirect()
                ->route('assets.index')
                ->with(
                    'error',
                    'Aset tidak dapat dihapus karena masih memiliki riwayat mutasi.'
                );
        }

        $asset->delete();

        return redirect()
            ->route('assets.index')
            ->with('success', 'Data aset berhasil dihapus.');
    }
}
