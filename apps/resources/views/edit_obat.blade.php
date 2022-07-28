@extends('layouts.admin')

@section('container')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Obat</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_admin"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/daftar_obat">Daftar Obat</a></li>
                    <li class="breadcrumb-item"><a href="/detail_obat_admin/{{$allobat['id_obat']}}">{{$allobat->nama_obat}}</a></li>
                    <li class="breadcrumb-item"><a href="/edit_obat/{{$allobat['id_obat']}}">Edit Obat</a></li>
                </ul>
                
            </div>
        </div>
    </div>
</div>

<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Edit Obat ] start -->
            <div class="col-xl-12 col-md-6">
                <div class="card edit-obat">
                    <div class="card-header">
                        <h5>Tambah Obat</h5>
                    </div>
                    <div class="card-body">
                    <form action="/simpan_edit" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <input type="hidden" name="id_obat" class="form-control" value ="{{$allobat->id_obat}}"> <br><br>
                        <div class="col-md-6 mb-4">
                            <div class="image-upload">
                                <img src="/assets/images/obat/{{ $allobat->gambar }}" width="150" height="100" alt="User-Profile-Image">
                                <input name="gambar" id="file-input" type="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputNamaobat">Nama Obat</label>
                                    <input name="nama_obat" type="text" class="form-control" value="{{$allobat->nama_obat}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputJumlahobat">Jumlah Stok</label>
                                    <input name="stok" type="text" class="form-control" value="{{$allobat->stok}}">
                                </div>
                                <div class="form-group">
                                    <label>Harga Obat</label>
                                    <input name="harga" type="text" class="form-control" value="{{$allobat->harga}}">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success" tittle="btn btn-primary" data-toggle="tooltip">Simpan</button>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="EfekSamping">Efek Samping</label>
                                    <textarea name="efek_samping" class="form-control" rows="3" cols="100">{{$allobat->efek_samping}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Deskripsiobat">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="3px" cols="100">{{$allobat->deskripsi}}</textarea>
                                </div>
                            </div>
                        </div>  
                    </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection
