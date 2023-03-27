
<?php
header('Content-Type: text/html; charset=utf-8');
require('connectdatabase.php');
$errors = array(); 
session_start(); 
$fname = $_SESSION['$Fname'];
$lname = $_SESSION['$Lname'];
$kname = $_SESSION['$Kname'];
$mydate = $_SESSION['$mydate'];
$time = $_SESSION['$time'];
$phone = $_SESSION['$phone'];
$type = $_SESSION['$type'];
$species = $_SESSION['$species'];
$addres = $_SESSION['$addres'];

$random = Random(5);

$dateime = $mydate;
$date = explode('-', $dateime);
$dateime = implode('-', array($date[2], $date[1], $date[0]+543));

isset( $_POST['mydate'] ) ? $mydate = $_POST['mydate'] : $mydate = "";

$sql = "INSERT INTO dogcat (SumQ, Prefix, Fname, Lname, Phone, Addres, Type, Spe, datelist, timelist)
    VALUES ('$random', '$kname', '$fname', '$lname', '$phone', '$addres', '$type', '$species', '$dateime', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>";
        echo "alert(\" จองคิวสำเร็จ รหัสการจองของคุณคือ $random\",);"; 
        echo "window.location = 'profile_user.php';";
        $_SESSION['$random'] = $random;
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
exit();
$conn->close();



function Random($length){//Randon srting use in Upload picture
    $possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; //ตัวอักษรที่ต้องการสุ่ม
            $str = "";
        while(strlen($str)<$length){
            $str.=substr($possible,(rand()%strlen($possible)),1);
        }
        return $str;
    }
//เวลาใช้งาน
echo Random(5);
?>


