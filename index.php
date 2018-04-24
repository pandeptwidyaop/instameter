<?php
  require('autoload.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Instameter</title>
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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0)" id="btn_user"><img src="img/user2.png" alt="" class="img-responsive"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" id="btn_upload"><img src="img/upload2.png" alt="" class="img-responsive"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php include('main.php') ?>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Instameter 2018</p>
      </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      $('#btn_user').on('click',function(){
        $('#profile').modal('show');
      });
      $('#btn_upload').on('click', function(){
        $('#upload').modal('show');
      });
    </script>
  </body>

</html>
