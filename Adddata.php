<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>ลงทะเบียนขอรับบริการฉีดวัคซีนสุนัขเเละเเมว</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  </head>
  <body>
  <nav class="navbar navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      เทศบาลนครรังสิต
    </a>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="alert alert-info" role="alert">
          <center><h1><i class='fas fa-dog' style='font-size:36px'></i>
            ลงทะเบียนขอรับบริการฉีดวัคซีนสุนัขเเละเเมว <i class='fas fa-cat' style='font-size:36px'></i>
            </h1></center>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <form action="check_Q.php" method="post" onsubmit="return checkAgree()" enctype="multipart/form-data">
            <h5>ชื่อ-นามสกุล เจ้าของสัตว์เลี้ยง</h5>

            <div class="row">
              <div class="col-12 col-sm-2 mb-3">
                <select name="Kname" class="form-control" required>
                  <option value="">-คำนำหน้าชื่อ-</option>
                  <option value="เด็กชาย">-เด็กชาย</option>
                  <option value="เด็กหญิง">-เด็กหญิง</option>
                  <option value="นาย">-นาย</option>
                  <option value="นาง">-นาง</option>
                  <option value="นางสาว">-นางสาว</option>
                </select>
              </div>
              <div class="col-12 col-sm-5 mb-3">
                <input type="text"  name="Fname" class="form-control" placeholder="ชื่อ" required> 
              </div>
              <div class="col-12 col-sm-5 mb-3">
                <input type="text" name="Lname" class="form-control" placeholder="นามสกุล" required>
            </div>
            <h5>เบอร์โทร ที่อยู่</h5>
            <div class="col-12 col-sm-4 mb-3">
                <input type="text" name="phone" class="form-control" maxlength="10" placeholder="เบอร์โทร" required>
            </div>
            <div class="col-12 col-sm-8 mb-3">
                <input type="text" name="addres" class="form-control"  placeholder="ที่อยู่" required>
            </div>
            <h5>ประเภท-สายพันธุ์ สัตว์เลี้ยง</h5>
            <div class="col-12 col-sm-4 mb-3">
                <select name="type" class="form-control" required>
                  <option value="">-ประเภท-</option>
                  <option value="สุนัข">สุนัข</option>
                  <option value="เเมว">เเมว</option>
                </select> </div> 
                <div class="col-12 col-sm-8 mb-3">
                <input type="text" name="species" class="form-control" maxlength="10" placeholder="สายพันธุ์(ไม่จำเป็นต้องใส่ก็ได้)" >
            </div>
            <h5>วันที่-เวลาที่เข้ารับบริการ</h5>
            <div class="col-12 col-sm-4 mb-3">
            <?php
              $timestamp = (time()+ 86400 * 10);?>
              <input type="date" name="mydate" class="form-control" placeholder="วันที่" min="<?php echo date('Y-m-d');?>" max="<?php echo date("Y-m-d", $timestamp);?>"required> 
            </div>
              <div class="col-12 col-sm-4 mb-3">
                <select name="time" class="form-control" required>
                  <option value="">-ช่วงเวลาที่เข้ารับบริการ-</option>
                  <option value="รอบ1">รอบ1 เวลา 11.00-12.00 น.</option>
                  <option value="รอบ2">รอบ2 เวลา 14.00-15.00 น.</option>
                </select>
              </div>    
            </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12">
              <h7> กรุณาอ่าน<a data-toggle="modal" href="#myModal1">เงื่อนไขเเละข้อกำหนด</a>ในการใช้บริการเเละให้ความยินยอมในการเก็บข้อมูลส่วนบุคคล
              </h7> </br>
              <input type="checkbox"  id="agree" >ยอมรับเงื่อนไข <br/> <hr>
              <button type="submit" class="btn btn-primary" style="width: 100%;">บันทึกข้อมูล</button> <hr>
              <input type='button' value='ย้อนกลับ' onclick='javascript:window.history.back()' class="btn btn-danger" style="width: 100%;">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    <footer>

    </p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<script>
function checkAgree(){
	if(!document.getElementById('agree').checked ){
		alert("กรุณากดยอมรับเงื่อนไขก่อน");
		return false;
	}
return true;
}
</script>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" style="font-family: Mitr;">ระบบร้องเรียน ร้องทุกข์ </h5-->
        <a >เงื่อนไขเเละข้อกำหนด</a><p></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12"> 
            <h7>1. ท่านสามารถจองคิวล่วงหน้า ได้ 10 วัน  </br></br>
            2. การจองคิวล่วงหน้า ทำได้ 1 นัดหมาย ต่อสัตว์เลี้ยง 1 ตัว เท่านั้น</br></br>
            3. จำกัดสิทธิ์การจองคิวขอรับบริการ จำนวน 10 คิว/วัน</br></br>
            4. ท่านต้องเดินทางไปยื่นคำร้องตามวันเวลานัดหมาย เเละไปถึงก่อนเวลานัดหมายอย่างน้อย 10 นาที </br></br>
            5. กรณีการลงทะเบียนจองคิวไม่สมบูรณ์ หรือ ไม่ปรากฏข้อมูลการจองคิวของท่านในฐานข้อมูล
            หรือ เอกสารหลักฐานไม่สมบูรณ์ ท่านจะไม่สามารถขอรับบริการตามวัน เวลาที่ได้จองคิวล่วงหน้าไว้ </br></br>
        </h7>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"></span>ตกลง</button>
      </div>
    </div>
  </div>
</div>