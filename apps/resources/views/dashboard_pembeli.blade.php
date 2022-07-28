@extends('layouts.pembeli')

@section('container')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title-pembeli">
                    <h17> Sistem Informasi Toko Obat Naomi </h17>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<!-- [ breadcrumb ] end -->
<div class="main-body">
    <div class="page-wrapper">
        
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Daftar Obat ] start -->
            @foreach($allobat as $asd)
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <form action="/buat_pesanan" method="POST">
                            @csrf
                            <div>
                                <!-- data -->
                                <input type="hidden" name="nama_obat" class="form-control" value ="{{$asd->nama_obat}}"></input> 
                                <input type="hidden" name="id_obat" class="form-control" value ="{{$asd->id_obat}}"></input>
                                <input type="hidden" name="id_pengguna" class="form-control" value ="{{auth()->user()->id_pengguna}}"></input>

                                <!-- view -->
                                <img src="/assets/images/obat/{{ $asd->gambar }}" width="180" height="180" class="" ></img>
                                <h3 class="font-weight-bold">{{ $asd->nama_obat }}</h3> 
                                <h6 class="mb-1">Rp. {{ $asd->harga }} </h6>
                                <h7 class="font-weight-bolder"> Stok : {{ $asd->stok }}</h7>
                                <br><br>
                                <div class="form-group">
                                <h6>Masukkan jumlah :</h6>
                                    <input name="jumlah_obat" type="text" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-success btn-block text-center">+ Keranjang</button>
                            </div>
                        </form>
                        <a class="btn btn-primary btn-block text-center" data-toggle="collapse" href="#{{$asd->id_obat }}" role="button" aria-expanded="false" aria-controls="{{ $asd->id_obat }}">Detail</a>
                        <div class="collapse multi-collapse mt-2" id="{{$asd->id_obat}}">
                            <div class="card-body">
                            <h6 class="mb-1">Deskripsi : </h6>
                                <p class="mb-0">{{ $asd->deskripsi}}</p><br>
                                <h6 class="mb-1">Efek Samping : </h6>
                                <p class="mb-0">{{ $asd->efek_samping}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- [ Daftar Obat ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
       
@endsection 