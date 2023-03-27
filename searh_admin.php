<?php
session_start();
if (!isset($_SESSION['Username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login_admin.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: login_admin.php");
}

require('connectdatabase.php'); 
$sql = "SELECT * FROM Idcard";
    $result = $conn->query($sql);

$order=1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ตรวจสอบสถานะการจองคิว</title>
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
      <a class="navbar-brand" href="dasboard_admin.php">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="30" class="d-inline-block align-text-top"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="dasboard_admin.php">Home</a></li>
        <li><a href="OpenQ.php">ปิดจองคิว</a></li>
        <li><a href="searh_user.php">ตรวจสอบสถานะการจองคิว</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php  if (isset($_SESSION['Username'])) : ?>
        <div align="right">
        <li><a href="dasboard_admin.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </div>
    <?php endif ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid ">

              <div class="row">
                  <div class="col-lg-12">
                        
                  </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card border-dark">
                        <h1 class="text-center" >ตรวจสอบสถานะการจองคิว</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form class="m-t-30" method="post" action="profile_user2.php">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ป้อนรหัสการจอง</label>
                                                <input class="form-control form-control-lg" type="text" id="SumQ" name="SumQ" maxlength="5" required="">
                                            </div>

                                            <!--
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ชื่อ</label>
                                                <input type="text" class="form-control form-control-lg" id="data2" name="data2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">เลขบัตร</label>
                                                <input type="text" class="form-control form-control-lg" id="data14" name="data14">
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">วันที่กรอกข้อมูล</label>
                                                <input class="form-control form-control-lg" type="text" name="datein" id="datein" value="">
                                            </div>
                                            -->
                                            <button type="submit" class="btn btn-primary">ค้นหา</button>
                                            <button type="Reset" class="btn btn-primary">Reset</button>
                                        </form>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->


              <br>

              <br>
              <center><a class="btn btn-primary" href="dasboard_admin.php">ย้อนกลับ</a></center>

                
            </div>