<?php
include("connect.php");


if (isset($_POST['Login'])) {
  $log_in_email= $_POST['email'];
  $log_in_password= $_POST['password'];
  if($log_in_email  == '')
  {
    echo "<script>alert ('Please enter e-mail') </script>";
    echo "<script>window.open('./prim_signin.php','_self') </script>";
    exit();
  }
  if($log_in_password  == '')
  {
    echo "<script>alert ('Please enter Password') </script>";
    echo "<script>window.open('./prim_signin.php','_self') </script>";
    exit();
}
  $check_log_in =  "select * from user where Email ='$log_in_email' and Password ='$log_in_password '";
  $return_login = mysqli_query($conn, $check_log_in );
if (mysqli_num_rows($return_login)) {

    session_start();
    $_SESSION['email']=$log_in_email;
    echo "<script>window.open('./prime_movie.php','_self') </script>";

}
else {
  echo "<script>alert('Wrong E-mail or Password')</script>";
  echo "<script>window.open('./prim_signin.php','_self') </script>";
}
}
else {
  echo "<script>window.open('./prim_signin.php','_self') </script>";
}

 ?>
