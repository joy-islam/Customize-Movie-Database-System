<?php
include("connect.php");


if (isset($_POST['Login'])) {
  $log_in_name= $_POST['name'];
  $log_in_password= $_POST['password'];
  if($log_in_name  == '')
  {
    echo "<script>alert ('Please enter Name') </script>";
    echo "<script>window.open('./adminlogin.php','_self') </script>";
    exit();
  }
  if($log_in_password  == '')
  {
    echo "<script>alert ('Please enter Password') </script>";
    echo "<script>window.open('./adminlogin.php','_self') </script>";
    exit();
}
  $check_log_in =  "select * from admin where Name ='$log_in_name' and Password ='$log_in_password '";
  $return_login = mysqli_query($conn, $check_log_in );
  if (mysqli_num_rows($return_login)) {
  session_start();
  $_SESSION['name']=$log_in_name;
  echo "<script>window.open('./adminnav.php','_self') </script>";
}
else {
  echo "<script>alert('Wrong Name or Password')</script>";
  echo "<script>window.open('./adminlogin.php','_self') </script>";
}
}
else {
  echo "<script>window.open('./adminlogin.php','_self') </script>";
}
 ?>
