<?php
include 'dbh.php';
session_start();


    $phn =  $_POST['phn'];
    $name = strtolower($_POST['name']);
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $dob = $_POST['date'];

    if(!preg_match('/^(?:\+?88)?01[13-9]\d{8}$/', $phn)){
    echo '<script type="text/javascript">alert("Enter your Valid mobile number.. :"); window.location.href=addadmin.php"; </script>';
      }

      $sql = "SELECT * FROM admin WHERE username = '$username'";
      $result = $conn->query($sql);

    if (mysqli_num_rows($result)>0) {
       echo '<script type="text/javascript">alert("User already exists.. :"); window.location.href="addadmin.php"; </script>';
    }

    else{
  
  
      $hash = password_hash("$password", PASSWORD_BCRYPT);


      $sql = "INSERT INTO admin(username, passwd, name, phone, email, DOB)
      values('$username','$hash','$name','$phn','$email','$dob')";
      $result = $conn->query($sql);
      if ($result) {
      echo '<script type="text/javascript">alert("Successfully Registered.. :"); window.location.href="adminlist.php"; </script>';

        }
    else{
        echo '<script type="text/javascript">alert("Something Wrong Try again.. :"); window.location.href="addadmin.php"; </script>';
      }
    }
?>