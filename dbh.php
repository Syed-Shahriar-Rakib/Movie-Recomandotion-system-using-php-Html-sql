<?php
  $conn = mysqli_connect("localhost","root","","RaksFlims");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   if(!isset($_SESSION['id'])){
      header('location:login.php');}
?>
