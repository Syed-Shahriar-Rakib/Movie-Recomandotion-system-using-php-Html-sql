<?php
session_start();
if (isset($_POST['upload'])) {

  include 'dbh.php';

 
 
  $Title = strtolower($_POST['Title']);
  $pdate = $_POST['pdate'];
  $director=$_POST['director'];
  $Star=$_POST['Star'];
  $link=$_POST['link'];
  $genres = strtolower($_POST['genres']);
  $image = $_FILES['image']['name'];
  

  $sql = "INSERT INTO movies (Title, director, Star, genres, link, img, pdate)
    VALUES('$Title','$director','$Star','$genres','$link','$img','$pdate')";

  

  if (mysqli_query($conn,$sql)) {
    echo '<script type="text/javascript">alert("Upload Done.. :"); window.location.href="Ahomepage.php"; </script>';
  }
  else {
    echo "error uploading";
  }
}


?>
