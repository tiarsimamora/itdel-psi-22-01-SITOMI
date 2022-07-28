@extends('layouts.admin')

@section('container')
        
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h3 class="m-b-10">Daftar Pengguna</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard_admin"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="daftar_user">Daftar User</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-12 mb-2">
                        <a href="tambah_pegawai"> <button class="btn btn-primary" >Tambahkan Pegawai &nbsp&nbsp<span class="feather icon-plus-circle"></span></button> </a>
                    </div>
                    <!-- [ basic-table ] start -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Tampilan Semua Pegawai</h5>
                                <!-- <span class="d-block m-t-5">use class <code>table</code> inside table element</span> -->
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Role</th>
                                                    <th>Dibuat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($alluser as $row)
                                            @if ($row->role == 'kasir' || $row->role == 'admin')
                                                <tr>
                                                    <td>{{$row->id_pengguna}}</td>
                                                    <td>{{$row->username}}</td>
                                                    <td>{{$row->nama_pengguna}}</td>
                                                    <td>{{$row->role}}</td>
                                                    <td>{{$row->created_at}}</td>
                                                    <td><a href= "/hapus_user/{{$row['id_pengguna']}}" class="btn btn-danger btn-sm shadow-2">Hapus</a></td>
                                                </tr>
                                                @endif
                                            @endforeach
                                            </tbody>                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Tampilan Semua Pembeli</h5>
                                <!-- <span class="d-block m-t-5">use class <code>table</code> inside table element</span> -->
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Dibuat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($alluser as $row)
                                            @if ($row->role == NULL)
                                                <tr>
                                                    <td>{{$row->id_pengguna}}</td>
                                                    <td>{{$row->username}}</td>
                                                    <td>{{$row->nama_pengguna}}</td>
                                                    <td>{{$row->created_at}}</td>
                                                    <td><a href= "/hapus_user/{{$row['id_pengguna']}}" class="btn btn-danger btn-sm shadow-2">Hapus</a></td>
                                                </tr>
                                                @endif
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
    </div>
</div>

@endsection 

