@extends('layouts.pembeli')

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
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Tampilan Semua Konsultasi</a></li>
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
            <!-- [ Morris Chart ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tampilan Semua Konsultasi</h5>
                    </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:12%">Tanggal</th>
                                    <th style="width:15%">Pesan</th>
                                    <th style="width:55%">Balasan</th>
                                    <th style="width:12%">Status</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($allkonsultasi as $row)
                                <tr>                                                       
                                    <td>
                                        <h6 class="m-0">{{$row->created_at->isoFormat('D MMM Y')}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">
                                        {{substr($row->isi_pesan,0,20)}} ...
                                        </h6>
                                    </td>
                                    <td><?php
                                            $allkonsultasi = "{$row->isi_balasan}";
                                            $token = strtok($allkonsultasi, "\n");

                                            while ($token !== false)
                                            {    
                                                echo "$token<br>";
                                                $token = strtok("\n");
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        @if ($row->isi_balasan == NULL )
                                            <h6 class="m-0 text-c-purple">Menunggu</h6>
                                        @endif
                                        @if ($row->isi_balasan != NULL )
                                            <h6 class="m-0 text-c-green">Dibalas</h6>
                                        @endif
                                    </td>
                                        @if ($row->isi_balasan == NULL )
                                            <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                                        @endif
                                        @if ($row->isi_balasan != NULL )
                                            <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                        @endif
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
                
@endsection