@extends('layouts.pembeli')

@section('container')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Pesanan Saya</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Pesanan Saya</a></li>
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
                        <h3>Daftar Pesanan</h3>
                        <span class="d-block m-t-5">Berikut daftar pesanan anda</span>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Tanggal Pemesanan</th>
                                        <th>Nama Obat</th>
                                        <th>Harga Obat</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>Status Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allpesanan as $row)
                                        @if ($row->status != NULL)
                                        <tr>
                                            <td>{{ $row->updated_at}}</td>
                                            <td>
                                                {{ $row->nama_obat}} &nbsp
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
                                                @if ($row->status == 'terima')
                                                    <h6 class="m-0 text-c-blue">Silahkan Diambil</h6>
                                                @endif
                                                @if ($row->status == 'menunggu')
                                                    <h6 class="m-0 text-c-purple">{{ $row->status }}</h6>
                                                @endif
                                                @if ($row->status == 'tolak')
                                                    <h6 class="m-0 text-c-red">Pesanan Anda Ditolak</h6>
                                                @endif
                                                @if ($row->status == 'selesai')
                                                    <h6 class="m-0 text-c-green">Selesai</h6>
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