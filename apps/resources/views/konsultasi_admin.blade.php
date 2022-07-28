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
                        <h5>Konsultasi Baru-baru ini</h5>
                    </div>
                    <div class="card-block px-3 py-3">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                @foreach($allkonsultasi as $row)
                                    <tr class="unread">
                                        <td style="width:1%"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">{{$row->group->nama_pengguna}}</h6>
                                            <h6 class="text-muted"></i>{{$row->created_at->isoFormat('dddd, D MMM Y')}}</h6>
                                        </td>
                                        <td style="width:55%">
                                            <p class="m-0"><?php
                                            $allkonsultasi = "{$row->isi_pesan}";
                                            $token = strtok($allkonsultasi, "\n");

                                            while ($token !== false)
                                            {    
                                                echo "$token<br>";
                                                $token = strtok("\n");
                                            }
                                        ?></p>
                                        </td>
                                        <td style="width:55%">
                                            <p class="m-0 text-c-yellow"><?php
                                            $allkonsultasi = "{$row->isi_balasan}";
                                            $token = strtok($allkonsultasi, "\n");

                                            while ($token !== false)
                                            {    
                                                echo "$token<br>";
                                                $token = strtok("\n");
                                            }
                                        ?></p>
                                        </td>
                                        <td class="text-right">
                                        @if ($row->isi_balasan == NULL )
                                            <a href="/balas_pesan/{{$row['id_konsultasi']}}" class="label theme-bg text-white f-12">Balas</a> &nbsp&nbsp&nbsp
                                            <i class="fas fa-circle text-c-red f-10 m-r-15"></i>   
                                        @endif
                                        @if ($row->isi_balasan != NULL )  
                                            <h6 class="m-0 text-c-blue">Sudah dibalas &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-circle text-c-green f-10 m-r-15"></i> </h6>
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
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