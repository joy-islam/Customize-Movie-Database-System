<?php
include("connect.php");



if (isset($_POST['registration'])) {
  $email= $_POST['Email'];
  $user_name =$_POST['name'];
  $password= $_POST['password'];
  $phnnum= $_POST['Phone-Number'];
  $tid = $_POST['tid'];
  if($email  == '')
  {
    echo "<script>alert ('Please enter e-mail') </script>";
    echo "<script>window.open('./Registration.php','_self') </script>";
    exit();
  }
if($user_name  == '')
{
  echo "<script>alert ('Please enter UserName') </script>";
  echo "<script>window.open('./Registration.php','_self') </script>";
  exit();
}

if($password  == '')
{
  echo "<script>alert ('Please enter Password') </script>";
  echo "<script>window.open('./Registration.php','_self') </script>";
  exit();
}
if($phnnum  == '')
{
  echo "<script>alert ('Please enter Phone Number') </script>";
  echo "<script>window.open('./Registration.php','_self') </script>";
  exit();
}

$check_email = "select * from user where Email ='$email'";
$result = mysqli_query($conn,$check_email );
if (mysqli_num_rows($result)>0) {
    echo "<script>alert ('E-mail $email Already Exist....') </script>";
    echo "<script>window.open('./Registration.php','_self') </script>";
    exit();

}
else {
  $insert_user = "insert into user(Name,Password,Email,Phone_Number,Transction_ID) value
  ('$user_name ','$password','$email','$phnnum','$tid ')";
   if (mysqli_query($conn,$insert_user )) {
    echo "<script>window.open('signin.php','_self') </script>";
   }
}
}

else {
  echo "<script>window.open('./Registration.php','_self') </script>";
}?>
