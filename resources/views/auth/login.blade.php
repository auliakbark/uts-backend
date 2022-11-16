<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Profil (UTS) | Login (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Sistem Profil (UTS)</b></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silakan login dengan akun anda</p>

      <div class="alert alert-info">
        <span>
            Login Admin : <br>
            Email : admin@gmail.com <br>
            Password : 12345678
        </span>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        @error('email')
        <div class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-triangle"></i>
            {{ $message }}
        </div>
        @enderror
        <div class="input-group mb-3">
          <input type="email" 
                class="form-control @error('email') is-invalid @enderror" placeholder="Email" 
                id="email" name="email" required autocomplete="email" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" 
                class="form-control @error('email') is-invalid @enderror" placeholder="Password" 
                id="password" name="password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <p>Belum punya akun? <a href="{{ url('/register18') }}" class="text-center">Register</a></p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../assets/dist/js/adminlte.min.js"></script>
</body>
</html>
