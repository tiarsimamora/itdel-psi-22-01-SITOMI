@extends('layouts.pembeli')

@section('container')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h4 class="m-b-10">Dashboard</h4>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardPembeli.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Daftar Obat</a></li>
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
            <!-- [ Daftar Obat ] start -->
            <div class="col-xl-12 col-md-6">
                <div class="card Recent-Users">
                    <div class="card-header">
                        <h5>Detail Obat</h5>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>

                                    <td class="card-header">
                                        <img src="assets\images\obat\flutamol-sirup.jpg" width="150" height="160" />
                                        <h6>Flutamol</h6>
                                        <h6>Rp. 9000 </h6>
                                        <h7> stok : 15</h7>
                                    </td>
                                    <td class="card-header">
                                        <h5> Deskripsi</h5>
                                        <div class="card-body collapse show" >
                                            <p class="mb-0">FLUTAMOL SIRUP 60 ML merupakan obat yang digunakan untuk mengatasi gejala flu seperti demam, </p>
                                            <p>sakit kepala, hidung tersumbat, bersin-bersin yang disertai batuk.</p>
                                        </div>
                                        <h5> Efek Samping</h5>
                                        <div class="card-body collapse show" >
                                            <p> Mual, Muntah, Konstipasi</p>
                                        </div>
                                        <button class="btn btn-success" href="#" >Tambahkan Keranjang</button>
                                    </td>
                                </tbody>
                            </table>
                        </div>    
                    </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection