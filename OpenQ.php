<?php
session_start();
header('Content-Type: text/html; charset=utf-8'); 
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
$order=1;

$sql = "SELECT * FROM Idcard WHERE Status LIKE 'ปิดจองคิว'";
    $result = $conn->query($sql);

    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ปิดจองคิว</title>
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
  <div class="container-fluid text-center">
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
        <li><a href="searh_admin.php">ค้นหา</a></li>
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
    <form action="Add_Q.php" class="form-group" method="POST">
    <h1 class="text-center" >ปิดวันลงทะเบียน</h1><hr>
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
        <input type="submit" value="ปิดจอง" class="btn btn-info "> <hr> </div>
<div class="container-fluid text-center">
    <div class="col-md-12">
    <table class="table table-bordered ">
        <th>
            <tr>
            <th>ลำดับ</th>
                <th>วันที่ปิด</th>
                <th>ช่วงเวลา</th>
                <th>สถานะ</th>
                <th>ปิดการจอง</th>

            </tr>
        </th>
        <tbody>
        <?php while($row = mysqli_fetch_row($result)){ ?>
            <tr>
                <td><?php echo $order;?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[7];?></td>
                <td><a href="close_Q.php?idQ=<?php echo $row[0];?>" class="btn btn-info" role="button" onclick="return confirm('คุณต้องการเปิดการจองหรือไม่')">เปิดการจอง</a></td>
                
            </tr>
            <?php $order++; 
            }?> 
        </tbody>
    </table>
    </div>
    </div>
    <div class="card-footer text-muted">
        เทศบาลนครรังสิต | Rangsit City Municipality.
    <script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
</script>
      </div>
    </div>
    </div>
</body>
</html>
