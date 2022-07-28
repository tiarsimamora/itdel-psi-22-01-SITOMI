@extends('layouts.admin')

@section('container')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h3 class="m-b-10">Daftar Konsultasi</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_admin"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/konsultasi_admin">Daftar Konsultasi</a></li>
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
            <!--[ Konsultasi Admin ] start-->
            <div class="col-xl-12">
                <div class="card Recent-Users">
                    <div class="card-header">
                        <h5>{{$allkonsultasi->group->nama_pengguna}}</h5>
                    </div>
                    <div class="card-block px-3 py-3">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <form action="/kirim_balasan" method="POST"> 
                                @csrf  
                                <h3 class="text-center">Balas Konsultasi</h3>
                                <input type="hidden" name="id_konsultasi" class="form-control" value ="{{$allkonsultasi->id_konsultasi}}">
                                <h5>Isi Pesan : </h5>
                                <div class="input-group mb-3">
                                    <textarea readonly rows="3" cols="50" type="text" name="isi_pesan" class="form-control"><?php 
                                            $allkonsultasi = "{$allkonsultasi->isi_pesan}"; 
                                            $token = strtok($allkonsultasi, "\n"); 
                                            while ($token !== false) 
                                            {echo "$token"; $token = strtok("\n");}
                                        ?>
                                    </textarea> <br><br>
                                </div>
                                <h5>Isi Balasan : </h5>
                                <div class="input-group mb-3">
                                    <textarea rows="3" cols="50" type="text" name="isi_balasan" class="form-control"></textarea>
                                    <br><br>
                                </div>
                                <div class="text-right">
                                    <a href="/konsultasi_admin" class="btn btn-warning shadow-2 mb-4">Kembali</a>
                                    <button class="btn btn-success shadow-2 mb-4"> &nbsp Balas &nbsp</button> &nbsp&nbsp&nbsp
                                </div>
                            </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ Konsultasi Admin ] end-->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection
