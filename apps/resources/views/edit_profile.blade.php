<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
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
					<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
				</ol>
			  </nav>
		<form action="/simpan_edit_profile" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id_pengguna" class="form-control" value ="{{$alluser->id_pengguna}}">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<div class="image-upload">
									<img src="/assets/images/user/{{ $alluser->image }}" width="150" height="100" alt="User-Profile-Image">
									<input name="image" id="file-input" type="file">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nama Lengkap</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="nama_pengguna" type="text" class="form-control" value="{{$alluser->nama_pengguna}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Username</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="username" type="text" minlength="6" class="form-control" value="{{$alluser->username}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">No Telpon</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="no_telp" maxlength="12" value="{{$alluser->no_telp}}" class="form-control" />  
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<button type="submit" class="btn btn-primary px-4" tittle="btn btn-primary" data-toggle="tooltip">Save Changes</button>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</form>
		</div>
	</div>

<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>