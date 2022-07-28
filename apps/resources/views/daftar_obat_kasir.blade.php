@extends('layouts.kasir')

@section('container')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                <h3 class="m-b-10 font-weight-bold">Daftar Obat</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_kasir"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/daftar_obat_kasir">Daftar Obat</a></li>
                </ul>
                
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="main-body">
    <div class="page-wrapper">        
        <div class="row">
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
                                        <th style="width:30%">Nama Obat</th>
                                        <th style="width:20%">Harga Obat</th>
                                        <th style="width:15%">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($allobat as $row)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td class="i-main i-block">{{$row->nama_obat}}</td>
                                        <td>Rp. {{$row->harga}}</td>
                                        <td>{{$row->stok}}</td>
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
