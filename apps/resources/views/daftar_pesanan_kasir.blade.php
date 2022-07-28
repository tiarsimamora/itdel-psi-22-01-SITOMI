@extends('layouts.kasir')

@section('container')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                <h3 class="m-b-10 font-weight-bold">Pesanan</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard_kasir"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="daftar_pesanan_kasir">Daftar Pesanan</a></li>                 
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
            <!-- [Pesanan ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Pesanan</h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Nama Pembeli</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($allpesanan as $row)
                                @if ($row->status != NULL)
                                        <tr>
                                            <td>{{ $row->updated_at->isoFormat('dddd, D MMM Y')}}</td>
                                            <td>
                                                {{ $row->groupuser->nama_pengguna}}
                                            </td>
                                            <td>
                                                Rp. {{ $row->jumlah_obat * $row->group->harga }} 
                                            </td>
                                            <td>
                                                @if ($row->status == 'menunggu')
                                                    <h6 class="m-0 text-c-purple">Menunggu</h6>
                                                @endif
                                                @if ($row->status == 'terima')
                                                    <h6 class="m-0 text-c-green">Menunggu Pengambilan</h6>
                                                @endif
                                                @if ($row->status == 'selesai')
                                                    <h6 class="m-0 text-c-yellow">{{ $row->status }}</h6>
                                                @endif
                                                @if ($row->status == 'tolak')
                                                    <h6 class="m-0 text-c-red">Ditolak</h6>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($row->status != 'selesai')
                                                <a class="btn-sm btn-primary" href="/detail_pesanan_kasir/{{$row['id_pesanan']}}">Lihat</a>
                                                @endif
                                            </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ Pesanan ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection