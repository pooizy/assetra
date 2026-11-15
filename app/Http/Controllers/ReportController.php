<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Exports\AssetsExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    // Menampilkan laporan aset
    public function index(Request $request)
    {
        $query = Asset::with(['category', 'room', 'employee']);

        // Filter berdasarkan kategori
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filter berdasarkan ruangan
        if ($request->filled('room_id')) {
            $query->where('room_id', $request->room_id);
        }

        // Filter berdasarkan kondisi
        if ($request->filled('kondisi')) {
            $query->where('kondisi', $request->kondisi);
        }

        $assets = $query->latest()->get();

        $categories = Category::all();
        $rooms = Room::all();

        $totalAset = $assets->count();
        $totalJumlah = $assets->sum('jumlah');

        return view('reports.index', compact(
            'assets',
            'categories',
            'rooms',
            'totalAset',
            'totalJumlah'
        ));
    }

    // Export Excel mengikuti filter laporan
    public function export(Request $request)
    {
        return Excel::download(
            new AssetsExport($request->only([
                'category_id',
                'room_id',
                'kondisi'
            ])),
            'laporan-aset-assetra.xlsx'
        );
    }
}
