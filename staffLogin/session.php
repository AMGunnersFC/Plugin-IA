<?php
   include_once('../dbconnect.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($connection,"SELECT * from StaffLogin where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql);

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
      header("location:staffLogin.php");
   }
   if(isset($_SESSION['login_user'])){
      header("location:welcome.php");
   }
?>
