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
                    <h3 class="m-b-10">Pesanan</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_kasir"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/daftar_pesanan_kasir">Daftar Pesanan</a></li>   
                    <li class="breadcrumb-item"><a href="/detail_pesanan_kasir/{{$allpesanan['id_pesanan']}}">{{$allpesanan->groupuser->nama_pengguna}}</a></li>
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
            <!-- [ Morris Chart ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Nama : {{$allpesanan->groupuser->nama_pengguna}}</h3>
                            @if ($allpesanan->status == 'terima')
                                <h6 class="m-0 text-c-green">Menunggu Pengambilan</h6>
                            @endif
                            @if ($allpesanan->status == 'tolak')
                                <h6 class="m-0 text-c-red">Ditolak</h6>
                            @endif
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Obat</th>
                                        <th>Stok</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$allpesanan->updated_at->isoFormat('dddd, D MMM Y')}}</td>
                                        <td>{{$allpesanan->nama_obat}} &nbsp<img src="/assets/images/obat/{{ $allpesanan->group->gambar }}" width="150" height="160" /></td>
                                        <td>{{$allpesanan->group->stok}}</td>
                                        <td>{{$allpesanan->jumlah_obat}}</td>
                                        <td>Rp. {{$allpesanan->total_harga}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                @if ($allpesanan->status == 'menunggu')
                                    <a href= "/terima_pesanan/{{$allpesanan['id_pesanan']}}" class="btn btn-success shadow-2">Terima</a>
                                    <a href= "/tolak_pesanan/{{$allpesanan['id_pesanan']}}" class="btn btn-danger shadow-2">Tolak</a>
                                @endif
                                @if ($allpesanan->status == 'terima')
                                    <a href= "/selesai_pesanan/{{$allpesanan['id_pesanan']}}" class="btn btn-warning text-right">Pesanan Diambil</a>
                                    <a href= "/tolak_pesanan/{{$allpesanan['id_pesanan']}}" class="btn btn-danger shadow-2">Batalkan</a>
                                @endif
                                <form action="/tambah_data_penjualan/{id_pesanan}" method="POST">
                                    @csrf
                                    @if ($allpesanan->status == 'selesai')
                                        
                                            <!-- data -->
                                            <input type="hidden" name="id_obat" class="form-control" value ="{{$allpesanan->id_obat}}"></input>
                                            <input type="hidden" name="id_pengguna" class="form-control" value ="{{auth()->user()->id_pengguna}}"></input>
                                            <input type="hidden" name="id_pesanan" class="form-control" value ="{{$allpesanan->id_pesanan}}"></input>
                                            <input type="hidden" name="stok" class="form-control" value ="{{$allpesanan->group->stok}}"></input>
                                            <input type="hidden" name="jumlah_obat" class="form-control" value ="{{$allpesanan->jumlah_obat}}"></input>
                                            <input type="hidden" name="total_harga" class="form-control" value ="{{$allpesanan->total_harga}}"></input> 
                                            
                                            <div class="text-right">
                                                <button class="btn btn-success text-right" onclick="return Validate()">Tambahkan Ke data Penjualan</button>
                                            </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Morris Chart ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<script type="text/javascript">
    function Validate() {
        alert("Pesanan akan ditambahkan ke data Penjualan, untuk menghindari duplikasi data, harap tidak kembali kehalaman sebelumnya");
    }
</script>

@endsection