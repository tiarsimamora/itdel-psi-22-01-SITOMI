@extends('layouts.kasir')

@section('container')

<div class="pcoded-inner-content">
    <div class="clearfix"></div>
    <div class="page-header-title-pembeli">
        <h17> Sistem Informasi Toko Obat Naomi </h17>
        </div>
    <br>
    <div class="row">
        <b style="font-size:200%; color:black;" class="col-9"> Penyimpanan</b>
            <a class="btn btn-success" href="/pembelian_manual">Pembelian Manual <span class="feather icon-plus" align="right"></span> </a>
    </div>
    <br>

    <div class="main-body">
        <div class="page-wrapper">
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card Monthly-sales">
                        <div class="card-block">
                            <h4 class="mb-2"><a class="font-weight-bold text-c-green" href="daftar_obat_kasir">Obat Tersedia</a></h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-9">
                                    <h3 class="f-w-500 d-flex align-items-center m-b-2"></i><?php
                                        $balance = DB::table('obat')->where('stok', '!=', 0)->count();
                                        echo $balance;
                                    ?> 
                                </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3">
                    <div class="card Monthly-sales">
                        <div class="card-block">
                            <h4 class="mb-2"><a class="font-weight-bold text-c-red" href="daftar_obat_kasir">Obat Habis</a></h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-9">
                                    <h3 class="f-w-500 d-flex align-items-center m-b-2"></i><?php
                                        $balance = DB::table('obat')->where('stok', '=', 0)->count();
                                        echo $balance;
                                    ?> 
                                </h3>
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