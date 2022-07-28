@extends('layouts.admin')

@section('container')
        
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h3 class="m-b-10">Laporan Penjualan</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_admin"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/laporan_penjualan">Laporan Penjualan</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        
        <div class="row">
            <div class="col-md-2 mb-2">
                    <a href="{{ route('export_excel') }}" type="button" class="btn btn-dark" data-toggle="tooltip">Download Report &nbsp<span class="feather icon-download"></span> </a>
            </div>
            
            <!-- [ basic-table ] start -->
            
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Penjualan</h5>
                    </div>
                    
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal & Waktu</th>
                                        <th>Pesan/Langsung</th>
                                        <th>Nama Obat</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldatapenjualan as $row)
                                    <tr>
                                        <td>{{ $row->created_at->isoFormat('dddd, D MMM Y')}}</td>
                                        @if ($row->id_pesanan == NULL)
                                            <td class="m-0 text-c-green">Langsung</td>
                                        @endif
                                        @if ($row->id_pesanan != NULL)
                                            <td class="m-0 text-c-yellow">Dipesan</td>
                                        @endif
                                        <td>{{ $row->grouppenjualan->nama_obat }}</td>
                                        <td>{{ $row->jumlah_obat }}</td>
                                        <td>Rp. {{ $row->total_harga }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
