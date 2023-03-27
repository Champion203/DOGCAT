<?php
header('Content-Type: text/html; charset=utf-8');
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
$sql = "SELECT * FROM Dogcat";
    $result = $conn->query($sql);

$order=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid text-center">
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
        <li class="active"><a href="dasboard_admin.php">Home</a></li>
        <li><a href="OpenQ.php">ปิดจองคิว</a></li>
        <li><a href="searh_admin.php">ตรวจสอบสถานะการจองคิว</a></li>
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
    <div class="col-md-12">
    <form action="searh_date.php" class="form-group" method="POST">
    <div class="col-sm-12 text-left"> 
    <div class="alert alert-info" role="alert">
      <center><h1><i class='fas fa-dog' style='font-size:36px'></i>
        รายชื่อผู้ลงทะเบียน <i class='fas fa-cat' style='font-size:36px'></i>
        </h1></center>
  </div> <hr>
    <div class="col-12 col-sm-5 mb-3">
        <label for="">วันที่</label>
        <input type="date" name="mydate" class="form-control" placeholder="วันที่" required> </div>
        <div class="col-12 col-sm-5 mb-3">
        <label for="">เวลา</label>
        <select name="time" class="form-control" required> 
                  <option value="">-ช่วงเวลาที่เข้ารับบริการ-</option>
                  <option value="รอบ1">11.00-12.00 น.</option>
                  <option value="รอบ2">14.00-15.00 น.</option>
                  <option value="ทั้งสองรอบ">ทั้งสองรอบ</option>
                </select> </div>
        <div class="col-12 col-sm-4 mb-3">
        <input type="submit" value="Search" class="btn btn-info "> <hr> </div>
        <div class="container-fluid text-center">
    <div class="col-md-12">
        <thead>
            <tr>
            <th><center>ลำดับ</center></th>
                <th><center>รหัสการจอง</center></th>
                <th><center>ชื่อ-นามสกุล</center></th>
                <th><center>เบอร์โทรศัพท์</center></th>
                <th><center>ที่อยู่</center></th>
                <th><center>ชนิด</center></th>
                <th><center>วันที่จอง</center></th>
                <th><center>ช่วงเวลา</center></th>
                <th><center>สถานะ</center></th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_row($result)){ ?>
            <tr>
                <td><?php echo $order;?></td>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2]," ",$row[3]," ",$row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row[7], "พันธุ์", $row[8];?></td>
                <td><?php echo $row[10];?></td>
                <td><?php echo $row[11];?></td>
                <td><?php echo $row[9];?></td>
            </tr>
            <?php $order++; }?> 
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
</script>
    </table>
    </div>
    </div>
    </div>
</body>
</html>
