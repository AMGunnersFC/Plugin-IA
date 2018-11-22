<?php
   //include_once('session.php');
   session_start();
   if(!isset($_SESSION['login_user'])){
      header("location:staffLogin.php");
   }
   if(isset($_SESSION['login_user'])){
      header("location:welcome.php");
   }
?>
<html>

   <head>
      <title>Welcome</title>
   </head>

   <body>

      <h1>Welcome</h1>
      <a href="staffForm.php">Click Here</a> for the Shabbat Form
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>
