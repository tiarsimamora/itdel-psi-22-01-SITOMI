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
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Tambah Pegawai</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard_admin"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="daftar_user">Daftar User</a></li>
                        <li class="breadcrumb-item"><a href="tambah_pegawai">Tambah Pegawai</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    

    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ Edit Obat ] start -->
        <div class="col-xl-12 col-md-6">
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!-- [ Edit Obat ] start -->
                        <div class="col-xl-12 col-md-6">
                            <div class="card edit-obat">
                                <div class="card-header">
                                    <h5>Tambah Pegawai</h5>
                                </div>
                                <div class="card-body">
                                <form action="/signupdata" method="POST"> 
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input name="username" type="text" class="form-control" id="inputNamaObat" >
                                            </div>
                                            <div class="form-group">
                                                <label>Nama pengguna</label>
                                                <input name="nama_pengguna" type="text" class="form-control" id="inputJumlahobat" >
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="password" type="text" class="form-control">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success" tittle="btn btn-primary" data-toggle="tooltip">Tambah</button>
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input name="no_telp" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select name="role" class="form-control" id="exampleFormControlSelect0" aria-describedby="emailHelp" placeholder="Pilih Pelanggaran" autofocus required>
                                                    <option value="" disabled selected hidden>--Pilih Role--</option>
                                                    <option>admin</option>
                                                    <option>kasir</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>  
                                </form>
                                </div>
                            </div>  
                        </div>
                    </div>  
                </form>
                </div>
            </div>  
        </div>
    </div>
@endsection
