<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    
    <div class="auth-wrapper">
    
        <div class="auth-content">
            
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
                <form action="/signupdata" method="POST"> 
                @csrf
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Registrasi</h3>
                    <div class="input-group mb-4">
                        <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Lengkap" autofocus required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" minlength="6" name="username" class="form-control" placeholder="Username" autofocus required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Kata Sandi" id="txtPassword" autofocus required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" placeholder="Ulangi Kata Sandi" id="txtConfirmPassword" class="form-control" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" minlength="10" maxlength="13" name="no_telp" class="form-control" placeholder="Nomor Telepon" autofocus required>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4" id="btnSubmit" value="Submit" onclick="return Validate()">Daftar</button>
                    <p class="mb-0 text-muted">Sudah punya akun? <a href="/"> Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
