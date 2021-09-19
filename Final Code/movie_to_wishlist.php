<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: ./movie.php');
}
$email = $_SESSION['email'];
include("connect.php");

if (isset($_POST['add'])) {
  $movie= $_POST['moviename'];
  if($movie  == '')
  {
    echo "<script>alert ('Please enter Movie Name') </script>";
    echo "<script>window.open('./wishlist.php','_self') </script>";
    exit();
  }
  $id ="select User_ID from user where Email = '$user_email'";
  $get_id = mysqli_query($conn,$id );



$insert = "insert into wishlist(User_email,Movie_Name) value( '$email','$movie')";


$query = mysqli_query($conn,$insert );

if ($query) {
  header('Location:'.'wishlist.php');
}
else {
  echo "Something went Wrong!!!";
}
}
 ?>
