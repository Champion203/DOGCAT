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
$mydate = $_POST['mydate'];
$order=1;
$dateime = $mydate;
$date = explode('-', $dateime);
$dateime = implode('-', array($date[2], $date[1], $date[0]+543));

  $sql = "SELECT * FROM Dogcat WHERE Datelist LIKE '%$dateime%'";
    $result = $conn->query($sql);
    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

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
<nav class="navbar navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      เทศบาลนครรังสิต
    </a>
    <ul class="nav navbar-nav navbar-right">
      <div id="A">
      <?php  if (isset($_SESSION['Username'])) : ?>
        <div align="right">
        <!--<div align="right"> <input type="button" value="Print" onclick="printWindow();">-->
        <li><a href="dasboard_admin.php?logout='1'" class="btn btn-danger "> Logout</a></li>
        </div>
    <?php endif ?> </div>
  </div>
</nav>
<div class="container-fluid ">
    <div class="col-md-12">
    <form action="searh_date.php" class="form-group" method="POST">
    <div class="col-sm-12 text-left"> 
    <div class="alert alert-info" role="alert">
      <center><h1><img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="40" height="40" ><i class='fas fa-dog' style='font-size:36px'></i>
        รายชื่อผู้ลงทะเบียนฉีดวัคซีนสุนัขเเละแมว <i class='fas fa-cat' style='font-size:36px'></i>
        </h1></center>
  </div> <hr>
  <div class="col-12 col-sm-12 mb-2">
        <label for="">วันที่</label>
        <input type="date" name="mydate"  placeholder="วันที่" required> 
        <input type="submit" value="Search" class="btn btn-info "> 
        <a href="dasboard_admin.php"><input type="button" class="btn btn-info"  value="HOME"></a><hr> </div>
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
                <th><center>พิมพ์</center></th>

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
                <td><center><?php if ($row[9] == 'รอเข้ารับบริการ') { 
                      echo "<a href='confime_Q.php?idQ= $row[0]' class='btn btn-danger' role='button'>รอเข้ารับบริการ</a>";
                     }elseif ($row[9] == 'เสร็จสิ้น') { 
                      echo "<a href='Noconfime_Q.php?idQ= $row[0]' class='btn btn-success' role='button'>เสร็จสิ้น</a>";
                     };?></td></center>
                <td><?php echo "<a href='PDF2.php?idQ= $row[0]' class='btn btn-warning' role='button'>พิมพ์</a>";?></td>
            </tr>
            <?php $order++; }?> 
        </tbody>
        <tfoot>
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
                <th><center>พิมพ์</center></th>

            </tr>
            <?php $order++; 
            ?> 
            <?php echo 'วันที่ ',$dateime,' มีคนลงทะเบียนจำนวน ' , ($num), 'คน'; ?>
            <div align="right"> <input type="button" value="Print" onclick="printWindow();"> 
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <div class="card-footer text-muted">
        เทศบาลนครรังสิต | Rangsit City Municipality.
    <script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        $(document).ready(function () {
                $('#example').DataTable();
            });
        });
</script>
      </div>
    </div>
    </div>
</body>
</html>


<script language="javascript" type="text/javascript">
 function printWindow()
{
   var printReadyEle = document.getElementById("printContent");
   var shtml = '<HTML>\n<HEAD>\n';
   if (document.getElementsByTagName != null)
   {
      var sheadTags = document.getElementsByTagName("head");
      if (sheadTags.length > 0)
         shtml += sheadTags[0].innerHTML;
    }
    shtml += '</HEAD>\n<BODY>\n';
    if (printReadyEle != null)
    {
       shtml += '<form name = frmform1>';
       shtml += printReadyEle.innerHTML;
    }
    shtml += '\n</form>\n</BODY>\n</HTML>';
    var printWin1 = window.open();
    printWin1.document.open();
    printWin1.document.write(shtml);
    printWin1.document.close();
    printWin1.print();
}
</script>