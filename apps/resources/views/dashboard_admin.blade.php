@extends('layouts.admin')

@section('container')

<div class="clearfix"></div>
<div class="page-header-title-pembeli">
    <h17> Sistem Informasi Toko Obat Naomi </h17>
</div>
<br>
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!--[ Laporan Penjualan] starts-->
            <div class="col-md-4 col-xl-3">
                <div class="card Monthly-sales">
                    <div class="card-block">
                        <h4 class="mb-2 "><a class="font-weight-bold text-c-orange" href="laporan_penjualan">Laporan Penjualan</a></h4>
                        <div class="row d-flex align-items-center">
                            <div class="col-12">
                                <h3 class="f-w-500 d-flex align-items-center m-b-2"></i>Rp. <?php
                                    $balance = DB::table('data_penjualan')->sum('total_harga');
                                    echo $balance;
                                ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[Laporan Penjualan ] end-->
            <!--Total Konsultasi start-->
            <div class="col-md-4 col-xl-3">
                <div class="card daily-sales">
                    <div class="card-block">
                        <h4 class="mb-2"><a class="font-weight-bold text-c-blue" href="konsultasi_admin">Total Konsultasi</a></h4>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-500 d-flex align-items-center m-b-2">
                                <?php
                                    $balance = DB::table('konsultasi')->count();
                                    echo $balance;
                                ?> 
                                </h3>
                            </div>                                          
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--[ Total Konsultasi] end-->
                <!--[ Jenis Obat ] starts-->
                <div class="col-md-4 col-xl-3">
                <div class="card Monthly-sales">
                    <div class="card-block">
                    <h4 class="mb-2"><a class="font-weight-bold text-c-green" href="daftar_obat">Jenis Obat</a></h4>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-500 d-flex align-items-center  m-b-2"></i>
                                <?php
                                    $balance = DB::table('obat')->count();
                                    echo $balance;
                                ?>   
                            </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ Jenis Obat ] end-->
            
                <!--[ Obat Habis ] starts-->
                <div class="col-md-4 col-xl-3">
                <div class="card Monthly-sales">
                    <div class="card-block">
                        <h4 class="mb-2"><a class="font-weight-bold text-c-red" href="daftar_obat">Obat Habis</a></h4>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-500 d-flex align-items-center m-b-2"></i>
                                    <?php
                                        $balance = DB::table('obat')->where('stok', '=', 0)->count();
                                        echo $balance;
                                ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ Obat Habis ] end-->
        </div>
    </div>
</div>

<div>
    <div class="col-xl-30">
        <div class="card">
            <div class="card-block card-border-c-red">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <h3 class="mb-2"><a class="font-weight-bold text-c-pink" href="daftar_obat">Stok Obat</a></h3>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="row align-items-center justify-content-center card-active">
                    <div class="col-6">
                        <h3 class="text-center m-b-10"><span class="text-muted m-r-5">Total Obat:</span>
                            <?php
                                $balance = DB::table('obat')->sum('stok');
                                echo $balance;
                            ?>   
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block card-border-c-red">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <h3 class="mb-2"><a class="font-weight-bold text-c-brown" href="daftar_user">Pengguna</a></h3>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="row align-items-center justify-content-center card-active">
                    <div class="col-6">
                        <h3 class="text-center m-b-10"><span class="text-muted m-r-5">Total Pembeli:</span>
                            <?php
                                $balance = DB::table('pengguna')->groupBy('role')->where('role', '=', NULL)->count();
                                echo $balance;
                            ?>   
                        </h3>
                    </div>
                    <div class="col-6">
                    <h3 class="text-center m-b-10"><span class="text-muted m-r-5">Total Pegawai:</span>
                            <?php
                                $balance = DB::table('pengguna')->groupBy('role')->where('role', '=', 'kasir')->count();
                                echo $balance;
                            ?>   
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block card-border-c-red">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <h3 class="mb-2"><a class="font-weight-bold text-c-gaktau" href="laporan_penjualan">Laporan Singkat</a></h3>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="row align-items-center justify-content-center card-active">
                    <div style="width:35%">
                        <h3><span class="text-muted m-r-5">Total Penjualan:</span><?php
                                $balance = DB::table('data_penjualan')->where('id_pesanan', '=', NULL)->count();
                                echo $balance;
                            ?></h3>
                    </div>
                    <div style="width:35%">
                        <h3><span class="text-muted m-r-5">Total Pesanan:</span><?php
                                $balance = DB::table('data_penjualan')->where('id_pesanan', '!=', NULL)->count();
                                echo $balance;
                            ?></h3>
                    </div>
                    <div style="width:20%">
                        <h3><span class="text-muted m-r-5">Obat Terjual:</span><?php
                                $balance = DB::table('data_penjualan')->sum('jumlah_obat');
                                echo $balance;
                            ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection 