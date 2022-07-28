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
                    <h3 class="m-b-10">Daftar Obat</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_admin"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/daftar_obat">Daftar Obat</a></li>
                    <li class="breadcrumb-item"><a href="/detail_obat_admin/{{$allobat['id_obat']}}">{{$allobat->nama_obat}}</a></li>
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
            <div class="col-xl-12">
                <div class="card Recent-Users">
                    <div class="card-header">
                        <h5>Detail Obat</h5>
                    </div>
                    @csrf  
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <td class="card-header">
                                            <img src="/assets/images/obat/{{ $allobat->gambar }}" width="150" height="160" />
                                            <br>
                                            <br>
                                            <h6>Nama Obat &nbsp &nbsp &nbsp: &nbsp{{$allobat->nama_obat}}</h6>
                                            <h6>Harga &emsp; &emsp; &emsp; &nbsp:&nbsp Rp. {{$allobat->harga}} </h6>
                                            <h7>Stok &emsp; &emsp;&emsp; &emsp;&nbsp:&nbsp {{$allobat->stok}}</h7>
                                        </td>
                                        <td style="width:65%" class="card-header">
                                            <h5> Deskripsi</h5>
                                            <div class="card-body collapse show" >
                                                <p class="mb-0">{{$allobat->deskripsi}}</p>
                                            </div>
                                            <h5> Efek Samping</h5>
                                            <div class="card-body collapse show" >
                                                <p> {{$allobat->efek_samping}}</p>
                                            </div>
                                            <div>
                                                <a  href="/edit_obat/{{$allobat['id_obat']}}"> <button type="button" class="btn btn-success" >Edit</button></a>
                                            </div>
                                        </td>
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

@endsection              


