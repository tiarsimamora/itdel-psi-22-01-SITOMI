<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>{{$alluser->nama_pengguna}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="main-body">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                @if (auth()->user()->role == 'admin')
                  <li class="breadcrumb-item"><a href="/dashboard_admin">Home</a></li>
                @endif
                @if (auth()->user()->role == 'kasir')
                  <li class="breadcrumb-item"><a href="/dashboard_kasir">Home</a></li>
                @endif
                @if (auth()->user()->role == NULL)
                  <li class="breadcrumb-item"><a href="/dashboard_pembeli">Home</a></li>
                @endif
                  <li class="breadcrumb-item active" aria-current="page"><a href="/profile/{{ auth()->user()->id_pengguna }}">User</a></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    @if (auth()->user()->image == NULL)
                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" width="145" height="145" class="img-radius" alt="User-Profile-Image">
                    @endif
                    @if (auth()->user()->image != NULL)
                        <img src="/assets/images/user/{{ $alluser->image }}" width="50" height="50" class="img-radius" alt="User-Profile-Image">
                    @endif
                    <div class="mt-3">
                      <h4>{{$alluser->nama_pengguna}}</h4>
                      <p class="text-secondary mb-1">{{$alluser->role}}</p>
                      <p class="text-muted font-size-sm">Sistem Informasi Toko Obat Naomi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$alluser->nama_pengguna}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$alluser->username}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Telpon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$alluser->no_telp}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" href="/edit_profile/{{$alluser['id_pengguna']}}">Edit</a>
                    </div>
                  </div>  
                  </hr>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>