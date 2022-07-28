<?php

namespace App\Exports;

use App\Models\DataPenjualan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPenjualan::all();
    }

    public function map($alldatapenjualan): array
    {
        return [
            $alldatapenjualan->id_penjualan,
            $alldatapenjualan->id_pengguna,
            $alldatapenjualan->id_pesanan,
            $alldatapenjualan->id_obat,
            $alldatapenjualan->grouppenjualan->nama_obat,
            $alldatapenjualan->jumlah_obat,
            $alldatapenjualan->total_harga,
            $alldatapenjualan->tanggal_penjualan
        ];
    }

    public function headings(): array
    {
        return [
            'ID PENJUALAN',
            'ID PENGGUNA',
            'ID PESANAN',
            'ID OBAT',
            'NAMA OBAT',
            'JUMLAH OBAT',
            'TOTAL HARGA',
            'TANGGAL PENJUALAN',
        ];
    }
}
