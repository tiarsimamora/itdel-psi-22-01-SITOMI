@extends('layouts.pembeli')

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
                    <h3 class="m-b-10">Keranjang Saya</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Keranjang Saya</a></li>
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
                        <h5>Keranjang</h5>
                        <span class="d-block m-t-5">Daftar keranjang saya </span>
                    </div>

                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:20%">Nama Obat</th>
                                        <th style="width:20%"> </th>
                                        <th>Harga</th>
                                        <th style="width:12%">Jumlah</th>
                                        <th>Total Harga</th>
                                        <th style="width:12%">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allpesanan as $row)
                                        @if ($row->status == NULL)
                                        <tr>
                                            <td>{{ $row->nama_obat}}</td>
                                            <td>
                                                <img src="/assets/images/obat/{{ $row->group->gambar }}" width="100" height="100" class="img-responsive"/>
                                            </td>
                                            <td>
                                                Rp. {{ $row->group->harga }}
                                            </td>
                                            <td>
                                                {{ $row->jumlah_obat }}
                                            </td>
                                            <td>
                                                Rp. {{ $row->jumlah_obat * $row->group->harga }} 
                                            </td>
                                            <td>
                                                <a href= "/lanjutpesanan/{{$row['id_pesanan']}}" class="btn btn-success shadow-2">Pesan</a>
                                                <a href= "/hapuspesanan/{{$row['id_pesanan']}}" class="btn btn-danger shadow-2">Hapus</a>
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