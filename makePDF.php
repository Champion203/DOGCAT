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

   if ($row[11] == 'รอบ1') { 
      $times =  "11.00-12.00 น.";
   }elseif ($row[5] == 'รอบ2') { 
      $times =  "14.00-15.00 น.";
   }

$pdf ->SetFont('sarabun','',20);
$pdf ->Cell(0,10,iconv('utf-8','cp874','แบบฟอร์มลงทะเบียนฉีดวัคซีนสุนัข-เเมว'),0,1,'C'); 
$pdf ->SetFont('sarabun','',16);
$pdf ->Cell(20,10,iconv('utf-8','cp874','ข้าพเจ้า ชื่อ : '),0,1,'L');
$pdf ->Cell(13,10,iconv('utf-8','cp874',$row[2]),0,0,'L');
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row[3]),0,0,'L');
$pdf ->Cell(17,10,iconv('utf-8','cp874','นามสกุล : '),0,0,'L');
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row[4]),0,0,'L');
$pdf ->Cell(25,10,iconv('utf-8','cp874','เบอร์โทรศัพท์ : '),0,0,'L');
$pdf ->Cell(30,10,iconv('utf-8','cp874',$row[5]),0,1,'L');
$pdf ->Cell(10,10,iconv('utf-8','cp874','ที่อยู่ : '),0,0,'L');
$pdf ->Cell(60,10,iconv('utf-8','cp874',$row[6]),0,1,'L');
$pdf ->Cell(37,10,iconv('utf-8','cp874','มีความประสงค์ที่จะนำ : '),0,0,'L');
$pdf ->Cell(15,10,iconv('utf-8','cp874',$row[7]),0,0,'L');
$pdf ->Cell(16,10,iconv('utf-8','cp874','สายพันธุ์ : '),0,0,'L');
$pdf ->Cell(25,10,iconv('utf-8','cp874',$row[8]),0,0,'L');
$pdf ->Cell(15,10,iconv('utf-8','cp874','เข้ารับการฉีดวัคซีนตามที่เทศบาลนครรังสิตได้จัดทำโครงการขึ้น '),0,1,'L');
$pdf ->Cell(15,10,iconv('utf-8','cp874','ในวันที่ :  '),0,0,'L');
$pdf ->Cell(25,10,iconv('utf-8','cp874',$row[10]),0,0,'L');






$pdf ->Output();
?>