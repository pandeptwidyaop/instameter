<?php
  require('modul/Database.php');
  require('modul/Authentication.php');
  $auth = new Authentication;
  $auth->check($_POST);
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Instameter : Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="css/2-col-portfolio.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Instameter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0)" id="btn_user"><img src="img/user2.png" alt="" class="img-responsive"></a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top:100px">
      <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">Registrasi berhasil, silakan login.</div>
      <?php endif; ?>
      <div class="col-md-4 offset-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><strong>Login </strong></h3></div>
            <div class="panel-body">
             <form role="form" action="login.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" placeholder="Enter username" name="username" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
              </div>
              <button type="button" class="btn btn-sm btn-primary" id="register">Register</button>
              <button type="submit" class="btn btn-sm btn-primary pull-md-right">Login</button>
            </form>
            </div>
          </div>
      </div>
    </div>
    <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id=""></h4>
          </div>
          <form action="action/register.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" required>
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" placeholder="" name="phone" required>
              </div>
              <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="" name="address" required>
              </div>
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" placeholder="" name="username" required>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password" required>
              </div>
            </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      $('#register').on('click', function(){
        $('#modalReg').modal('show');
      });
    </script>
  </body>

</html>
