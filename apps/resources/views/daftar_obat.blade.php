@extends('layouts.admin')

@section('container')
        
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
                    <h3 class="m-b-10">Daftar Obat</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_admin"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/daftar_obat">Daftar Obat</a></li>
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
            <div class="col-xl-12 mb-2">
                <a href="tambah_obat"> <button class="btn btn-primary" >Tambahkan Obat &nbsp&nbsp<span class="feather icon-plus-circle"></span></button> </a>
            </div>
            <!-- [ basic-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Obat Yang Tersedia</h5>
                    </div>
                    
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:5%">No.</th>
                                        <th style="width:8%">Tgl. Ditambah</th>
                                        <th style="width:8%">Tgl. Diubah</th>
                                        <th style="width:35%">Nama Obat</th>
                                        <th style="width:20%">Harga Obat</th>
                                        <th style="width:15%">Stok</th>
                                        <th style="width:20%">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($allobat as $row)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{ $row->created_at->isoFormat('D MMM Y')}}</td>
                                        <td>{{ $row->updated_at->isoFormat('D MMM Y')}}</td>
                                        <td>{{$row->nama_obat}}</td>
                                        <td>Rp. {{$row->harga}}</td>
                                        <td>{{$row->stok}}</td>
                                        <td>
                                            <a class="btn btn-dark" href="/detail_obat_admin/{{$row['id_obat']}}">Lihat</a>
                                        </td>
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

