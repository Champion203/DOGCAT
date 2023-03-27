<?php
header('Content-Type: text/html; charset=utf-8'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>หน้าเเรก</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="30" class="d-inline-block align-text-top"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="searh_user.php">ค้นหา</a></li>
        <li><a href="Adddata.php">จองคิว</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login_admin.php"><span class="glyphicon glyphicon-log-in"></span> ADMIN</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    

    <div class="col-sm-12 text-left"> 
    <center><h1>กรณีเปลี่ยนชื่อตัว หรือชื่อสกุล</h1></center>
      <hr>
      <div class="well">
        <h4> 
           <font color="FF0000"><h3> เอกสารหลักฐาน</h3></font></br>
           (1) บัตรประจำตัวประชาชน</br>
           (2) หลักฐานการเปลี่ยนชื่อตัว หรือชื่อสกุล แล้วแต่กรณี (ฉบับจริง)</br>
        </h4> <hr>
        <div class="form-group">
        <a href="http://rangsit.org/IDCARD/Adddata.php" type="submit" class="btn btn-primary" style="width: 100%;">ถัดไป</a><hr>
        </div>
        <input type='button' value='ย้อนกลับ' onclick='javascript:window.history.back()' class="btn btn-danger" style="width: 100%;">
    </div>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</footer>

</body>
</html>
