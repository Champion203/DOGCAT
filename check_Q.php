<?php
require('connectdatabase.php'); 
header('Content-Type: text/html; charset=utf-8');
session_start();
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$kname = $_POST['Kname'];
$mydate = $_POST['mydate'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$species = $_POST['species'];
$addres = $_POST['addres'];

$dateime = $mydate;
$date = explode('-', $dateime);
$dateime = implode('-', array($date[2], $date[1], $date[0]+543));

$sql = "SELECT * FROM Dogcat WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);
    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $numF=mysqli_num_rows($result1);
    print_r  ($numF);

if ($numF >=1){
    echo "<script>";
    echo "alert(\" ยังไม่เปิดให้บริการในวันที่ท่านเลือก\",);"; 
    echo "window.history.back()";
    echo "</script>";
} else {
    $sql = "SELECT * FROM Dogcat WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE '%$time%') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $numQ=mysqli_num_rows($result1);
    print_r  ($numQ);

if ($numQ >=1){
    echo "<script>";
    echo "alert(\" ยังไม่เปิดให้บริการในวันที่ท่านเลือก\",);"; 
    echo "window.history.back()";
    echo "</script>";
    
} else{
    $sql = "SELECT * FROM Dogcat WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE '%$time%')";
    $result = $conn->query($sql);

    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    print_r  ($num);

if ($num >= 5) {
    echo "<script>";
    echo "alert(\" ไม่สามารถจองในวันนี้ได้เนื่องจากคิวเต็มแล้วโปรดจองในรอบหรือวันถัดไป\",);"; 
    echo "window.history.back()";
    echo "</script>";
} if($num <=4) {
    $_SESSION['$Kname'] = $kname;
    $_SESSION['$Fname'] = $fname;
    $_SESSION['$Lname'] = $lname;
    $_SESSION['$mydate'] = $mydate;
    $_SESSION['$time'] = $time;
    $_SESSION['$phone'] = $phone;
    $_SESSION['$type'] = $type;
    $_SESSION['$species'] = $species;
    $_SESSION['$addres'] = $addres;


    header('location:save_userData.php');
    exit(0);
}
}
}
?> 
