<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Room;
use App\Models\Employee;
use App\Models\AssetMutation;

class DashboardController extends Controller
{
    public function index()
    {
        // =====================================
        // TOTAL DATA
        // =====================================

        // Menghitung total jumlah barang/aset
        $totalAset = Asset::sum('jumlah');

        // Menghitung jumlah kategori
        $totalKategori = Category::count();

        // Menghitung jumlah ruangan
        $totalRuangan = Room::count();

        // Menghitung jumlah pegawai
        $totalPegawai = Employee::count();

        // Menghitung jumlah mutasi
        $totalMutasi = AssetMutation::count();


        // =====================================
        // GRAFIK KONDISI ASET
        // =====================================

        $kondisiAset = Asset::selectRaw(
            'kondisi, SUM(jumlah) as jumlah'
        )
            ->groupBy('kondisi')
            ->pluck('jumlah', 'kondisi');


        // =====================================
        // GRAFIK JENIS ASET BERDASARKAN KATEGORI
        // =====================================

        $jenisAset = Asset::with('category')
            ->get()
            ->groupBy(function ($asset) {

                $category = $asset->category;

                if (!$category) {
                    return 'Tanpa Kategori';
                }

                return $category->getAttribute('nama_kategori')
                    ?? $category->getAttribute('nama')
                    ?? $category->getAttribute('name')
                    ?? 'Kategori ' . $asset->category_id;

            })
            ->map(function ($items) {

                return $items->sum('jumlah');

            })
            ->sortDesc();


        // =====================================
        // 4 DATA ASET TERBARU
        // =====================================

        $asetTerbaru = Asset::with([
            'category',
            'room'
        ])
            ->orderByDesc('tanggal_perolehan')
            ->orderByDesc('created_at')
            ->take(4)
            ->get();


        // =====================================
        // TAMPILKAN DASHBOARD
        // =====================================

        return view('dashboard', compact(
            'totalAset',
            'totalKategori',
            'totalRuangan',
            'totalPegawai',
            'totalMutasi',
            'kondisiAset',
            'jenisAset',
            'asetTerbaru'
        ));
    }
}
