<?php
session_start();

  $Title = $_POST['submit'];
  echo $Title;

  include 'dbh.php';
  $sql = "DELETE FROM `movies` WHERE Title = '$Title'" ;

  $records = mysqli_query($conn,$sql);

  if($records){
    echo '<script type="text/javascript">alert("Deleted successfull.. :"); window.location.href="Ahomepage.php"; </script>';
  }

?>
