<?php
require('connectdatabase.php'); 
$id=$_GET["idQ"];

$sql = "DELETE FROM Idcard WHERE ID =$id";

$result = mysqli_query($conn,$sql);

if($result){
    header('location:OpenQ.php');
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
}
?>