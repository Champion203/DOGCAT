<?php
header('Content-Type: text/html; charset=utf-8'); 
require('connectdatabase.php'); 
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

    <div class="col-sm-6 text-left"> 
      <h1>ลงทะเบียนขอรับบริการทำบัตรประชาชนล่วงหน้า</h1>
      <hr>
      <form class="m-t-30" method="post" action="profile_user2.php">
        <div class="form-group">
         <label for="exampleInputPassword1">ป้อนรหัสการจอง</label>
         <input class="form-control form-control-lg" type="text" id="SumQ" name="SumQ" maxlength="5" required="">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%;">ค้นหา</button> <hr>
        <a href="Adddata.php" type="submit" class="btn btn-danger" style="width: 100%;">จองคิว</a><hr>
      </form>
    </div>
    <div class="col-sm-6 text-left">
      <div class="well">
        <font color="FF0000"><h3>**ขั้นตอนและหลักเกณฑ์ระบบสำรองคิวล่วงหน้าทางอินเตอร์เน็ต เพื่อขอรับบริการทำบัตรประจำตัวประชาชน**</h3></font></br>

        <h4>1.การจองคิวผ่านระบบออนไลน์ (รับเฉพาะผู้ที่มีชื่อในทะเบียนบ้านตำบลประชาธิปัตย์ เท่านั้น) </br>
            2.การสำรองคิวเปิดบริการเฉพาะทำบัตรประจำตัวประชาชน เท่านั้น (รับรอบละ 35 คิว/ รอบ)</br>
            3.ระบบจะทำการเปิดจองคิวในวันที่กำหนดเท่านั้น  <font color="FF0000">(หยุดทุกวันจันทร์หรือตามที่เจ้าหน้าที่กำหนด)</font></br>
            4.สามารถจองคิวล่วงหน้าได้ 10 วันเท่านั้น</br>
            5.ท่านต้องมาถึงสถานที่ ที่เลือกขอรับบริการไว้ล่วงหน้า 30 นาทีก่อนช่วงเวลาที่ได้รับบริการ   </br>
            6.ต้องเเคปภาพหน้าจอหรือมีรหัสการจองคิว ในการเข้ารับบริการ  </br>
</h4>


    </div>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</footer>

</body>
</html>
