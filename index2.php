<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

      <div class="container">
         <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

        <div class="login">
          <h2>Login Admin / Petugas</h2>
        </div>
          <form action="proses-login-petugas.php" method="post">
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda.." required">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda.." required">
          </div>
      
          <button type="submit" name="login" class="btn-login">Login</button>
          <div class="submit">
            <a href="index.php"> Login Sebagai Siswa</a>
          </form>

          </div>
      </div>



<script type="js/bootstrap.bundle.min.js"></script>
  </head>
  </html>
  