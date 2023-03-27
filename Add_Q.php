<?php
header('Content-Type: text/html; charset=utf-8');
require('connectdatabase.php');
$errors = array(); 
session_start(); 
$time = $_POST['time'];
$mydate = $_POST['mydate'];

$dateime = $mydate;
$date = explode('-', $dateime);
$dateime = implode('-', array($date[2], $date[1], $date[0]+543));

isset( $_POST['mydate'] ) ? $mydate = $_POST['mydate'] : $mydate = "";

$sql = "INSERT INTO Idcard (Datelist, timelist, Status)
 VALUES ('$dateime', '$time', 'ปิดจองคิว')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>";
        echo "alert(\" ปิดจองคิววันที่ $dateime $time เรียบร้อยแล้ว\",);"; 
        $_SESSION['time2'] = $time;
        $_SESSION['mydate2'] = $dateime;
        echo "window.location = 'OpenQ.php';";
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
exit();
$conn->close();
?>


