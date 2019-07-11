<?php
   include('conn.php');

session_start();
 
   if(!isset($_SESSION['login_user'])){
      header("location: ../index.html");
   }
   else 
    $login_session = $_SESSION['login_user'];
?>