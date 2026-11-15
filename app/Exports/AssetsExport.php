<?php

namespace App\Exports;

use App\Models\Asset;
use Illuminate\Support\Collection;
use Illuminate\Support\Enumerable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AssetsExport implements FromCollection, WithHeadings, WithMapping
{
    protected array $filters;

    public function __construct(array $filters = [])
    {
        $this->filters = $filters;
    }

    public function collection(): Enumerable
    {
        $query = Asset::with(['category', 'room', 'employee']);

        // Filter kategori
        if (!empty($this->filters['category_id'])) {
            $query->where('category_id', $this->filters['category_id']);
        }

        // Filter ruangan
        if (!empty($this->filters['room_id'])) {
            $query->where('room_id', $this->filters['room_id']);
        }

        // Filter kondisi
        if (!empty($this->filters['kondisi'])) {
            $query->where('kondisi', $this->filters['kondisi']);
        }

        return $query->latest()->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Kode Aset',
            'Nama Aset',
            'Kategori',
            'Ruangan',
            'Pegawai Penanggung Jawab',
            'Jumlah',
            'Kondisi',
        ];
    }

    public function map($asset): array
    {
        return [
            $asset->id,
            $asset->kode_aset,
            $asset->nama_aset,
            $asset->category->nama_kategori ?? '-',
            $asset->room->nama_ruangan ?? '-',
            $asset->employee->nama ?? '-',
            $asset->jumlah,
            $asset->kondisi,
        ];
    }
}
