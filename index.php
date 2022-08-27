<?php require_once "db.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="sytle.css">
  </head>
  <body>
    <h1>INDEX</h1>
    <div class="btns">
      <?php 
        if(isset($_SESSION['oturum'])){
          if($_SESSION['oturum'])
            {
              echo '
                <a href="dashboard.php"><button type="button" class="btn btn-danger btn-lg">dashboard</button></a>
              ';
            }
            else
            {
              echo '
                <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Giriş Yap</button></a>
                <a href="register.php"><button type="button" class="btn btn-secondary btn-lg">Kayıt Ol</button></a>
              ';
            }
        }
        else
        {
          echo '
            <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Giriş Yap</button></a>
            <a href="register.php"><button type="button" class="btn btn-secondary btn-lg">Kayıt Ol</button></a>
          ';
          }
      ?>
       
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>