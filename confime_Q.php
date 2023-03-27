<?php
require('connectdatabase.php');

$idQ = $_GET['idQ'];


$sql = "UPDATE Dogcat SET Status = 'เสร็จสิ้น'
                            WHERE ID = $idQ";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:dasboard_admin.php');
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
}

?>