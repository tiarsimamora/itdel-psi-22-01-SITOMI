@extends('layouts.kasir')

@section('container')
<!-- [ breadcrumb ] start -->
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
                <h3 class="m-b-10 font-weight-bold">Pembelian Manual</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_kasir"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/pembelian_manual">Form Pembelian Manual</a></li>
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Form Pembelian Manual</h5>
                        <hr>
                        <div class="row"> 
                            <div class="col-sm-6">
                                <form action="/input_pembelian" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <select name="id_obat" type="text" class="form-control" placeholder="Masukkan Nama Obat" autofocus required>
                                            <option value="" disabled selected hidden>== Pilih Obat ==</option>
                                            @foreach ($allobat as $allobat)
                                            <option value="{{ $allobat->id_obat }}">{{ $allobat->nama_obat }} Rp. {{ $allobat->harga }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputGST">Harga Obat</label>
                                        <input name="harga" type="text" id="inputGST" class="form-control" placeholder="Masukkan Kembali Harga Obat   cth = 5000 / 2000" oninput="myFunction()" autofocus required>
                                    </div>
                                    <input type="hidden" name="id_pengguna" class="form-control" value ="{{auth()->user()->id_pengguna}}"></input>
                                    <div class="form-group">
                                        <label for="inputDelivery">Jumlah Obat</label>
                                        <input name="jumlah_obat" id="inputDelivery" type="text" class="form-control" placeholder="Masukkan Jumlah obat yang ingin dibeli" oninput="myFunction()" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Harga</label>
                                        <h1>Rp.<span id="totalPrice">0</span></h1>
                                        <input name="total_harga" type="text" class="form-control" placeholder="Masukkan Kembali Total Harga   cth = 10000 / 15000" autofocus required>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary"> Tambah Pembelian </button> 
                                    </div>
                                </form>                                
                            </div>
                            <div class="col-sm-6">
                            Perhatian ! <br> <br>Mohon mengisi Harga obat secara manual sesuai dengan <br> Harga yang tertera pada Nama Obat, <br> Dan memasukkan Total Harga sesuai dengan Total harga yang tertera.       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<script>
    function myFunction() {
            var harga = document.getElementById("inputGST").value;
            var jumlah = document.getElementById("inputDelivery").value;
            var total = +harga * +jumlah;
            document.getElementById("totalPrice").innerHTML = total;    
        }
</script>


@endsection
