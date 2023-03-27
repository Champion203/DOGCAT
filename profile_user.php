<?php
require('connectdatabase.php'); 
session_start();
$random = $_SESSION['$random'];
$sql = "SELECT * FROM dogcat WHERE SumQ LIKE '%$random%'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ค้นหาผู้ใช้</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
        <li><a href="searh_user.php">ตรวจสอบสถานะการจองคิว</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    

<div class="col-sm-12 text-left"> 
    <div class="alert alert-info" role="alert">
      <center><h1><i class='fas fa-dog' style='font-size:36px'></i>
        ลงทะเบียนขอรับบริการฉีดวัคซีนสุนัขเเละเเมว <i class='fas fa-cat' style='font-size:36px'></i>
        </h1></center>
  </div>
      <hr>
      <center><font color="FF0000"><h4>**โปรดจำรหัสการจองเเละเก็บภาพไว้เป็นหลักฐานในการเข้ารับบริการ**</h4></font></center>
      <h4><?php echo "ชื่อ : ", $row[2]," ",$row[3]," ",$row[4];?></h4>
      <h4><?php echo "เบอร์โทร : ", $row[5];?></h4>
      <h4><?php echo "รหัสการจอง : ", $row[1];?></h4>
      <h4><?php echo "ประเภท : ", $row[7];?></h4>
      <h4><?php echo "สายพันธ์ุ : ", $row[8];?></h4>
      <h4><?php echo "วันที่ : ", $row[9];?></h4>
      <h4><?php if ($row[10] == 'รอบ1') { 
                      echo "เวลา : 11.00-12.00 น. (ต้องมาก่อนเวลานัดหมาย 10 นาที)";
                     }elseif ($row[10] == 'รอบ2') { 
                      echo "เวลา : 14.00-15.00 น. (ต้องมาก่อนเวลานัดหมาย 10 นาที)";
                     } ?></h3>
      <h4><?php echo "สถานะ : ", $row[11];?></h4>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</footer>

</body>
</html>
