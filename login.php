<!DOCTYPE html>
<html lang="en">
<head>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Selamat Datang</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Login</p>

      <form action="autentikasi.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          <p class="mb-0">
        <a href="registrasi.php" class="text-center">Registrasi akun</a>
      </p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

</body>
<?php
if(isset($_GET['error'])){
$x = ($_GET ['error']);
  if ($x==1){
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Login Gagal.'
    })
    </script>";
  }
  else if ($x==2){
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan Inputkan Username & Password.'
    })
    </script>";
  }
  else{
    echo '';
  }
}

?>
</html>