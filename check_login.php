<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');
include("connectdatabase.php");
        if(isset($_POST['Username'])){
                  $Username = mysqli_real_escape_string ($conn, $_POST['Username']);
                  $password = mysqli_real_escape_string ($conn, $_POST['Password']);

                  $sql = "SELECT * FROM admins Where username= '$Username' AND password= '$password' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION['Username'] = $Username;
                      $_SESSION['password'] = $password;
                      
                      Header("Location: dasboard_admin.php");

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{
             Header("Location: loginuser.php"); //user & password incorrect back to login again

        }
?>