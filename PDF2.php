<?php 
require('connectdatabase.php');
require ('pdf/fpdf.php');
$idQ = $_GET['idQ'];
$sql = "SELECT * FROM Dogcat WHERE ID = $idQ";
$result = $conn->query($sql);

$row = mysqli_fetch_row($result);
$pdf = new FPDF();

$pdf ->AddPage();
$pdf ->AddFont('sarabun','','THSarabun.php');
$pdf ->Image('img/formdog.jpg',0,0,210,297);
$pdf ->SetY(75);
$pdf ->SetX(40);
$pdf ->SetFont('sarabun','',20);
$pdf ->SetFont('sarabun','',16);

if ($row[10] == 'รอบ1') { 
    $times =  "11.00-12.00 น.";
   }elseif ($row[10] == 'รอบ2') { 
    $times =  "14.00-15.00 น.";
   }

$pdf ->Cell(20,10,iconv('utf-8','cp874',$row[2]),0,0,'L');
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row[3]),0,0,'L');
$pdf ->Cell(60,10,iconv('utf-8','cp874',$row[4]),0,0,'L');
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row[5]),0,1,'L');
$pdf ->SetY(87);
$pdf ->SetX(34);
$pdf ->Cell(5,10,iconv('utf-8','cp874',$row[6]),0,1,'L');
$pdf ->SetY(96);
$pdf ->SetX(110);
$pdf ->Cell(40,10,iconv('utf-8','cp874',$row[7]),0,0,'L');
$pdf ->Cell(25,10,iconv('utf-8','cp874',$row[8]),0,1,'L');
$pdf ->SetY(105);
$pdf ->SetX(70);
$pdf ->Cell(50,10,iconv('utf-8','cp874',$row[9]),0,0,'L');
$pdf ->Cell(25,10,iconv('utf-8','cp874',$times),0,1,'L');
$pdf ->SetY(200);
$pdf ->SetX(158);
$pdf ->Cell(20,10,iconv('utf-8','cp874','(.................................................)'),0,0,'L');
$pdf ->SetY(210);
$pdf ->SetX(172);
$pdf ->Cell(25,10,iconv('utf-8','cp874','ผู้เข้ารับบริการ'),0,1,'L');






$pdf ->Output();
?>