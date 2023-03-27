<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    
    <!--content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <!-- nav -->
          <nav class="navbar navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      เทศบาลนครรังสิตระบบลงทะเบียนฉีดวัคซีนสุนัขเเละแมว
    </a>
  </div>
</nav>
<form  method="post" action="check_login.php">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 col-xs-12">
          <h3 style="margin-top: 50px">แอดมินเข้าสู่ระบบ</h3>
          <form class="form-horizontal">
          <div class="form-group">
              <label for="exampleInputEmail1"> Username</label>
              <input type="text" class="form-control" id="Username"  name ="Username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="text" class="form-control" id="Password" name ="Password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
    <center>
    <footer class="footer" style="margin-top: 50px">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
  </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>