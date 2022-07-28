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
                    <h5 class="m-b-10">Daftar Konsultasi</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Buat Konsultasi</a></li>
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Kepada Toko Obat Naomi</h5> 
                    </div>
                    <div class="card-body">
                        <h5>Tulis pesan anda pada kolom dibawah ini:</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="/buat_konsultasi" method="POST">
                                @csrf
                                    <input type="hidden" name="id_pengguna" class="form-control" value ="{{auth()->user()->id_pengguna}}"></input>
                                    <div class="form-group">
                                        <textarea type="text" name="isi_pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button class="btn btn-primary">Kirim</button>
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
                
@endsection
