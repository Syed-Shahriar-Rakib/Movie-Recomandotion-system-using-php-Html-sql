

<?php
  session_start();
  include 'dbh.php';


  
    $phn =  $_POST['phn'];
    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $dob = $_POST['date'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
      $result = $conn->query($sql);
      
    if(!preg_match('/^(?:\+?88)?01[13-9]\d{8}$/', $phn)){
        echo '<script type="text/javascript">alert("Enter your Valid mobile number.. :"); window.location.href="signup.php"; </script>';
      }
    
    else if (mysqli_num_rows($result)>0) {
      echo '<script type="text/javascript">alert("User already exists.. :"); window.location.href="login.php"; </script>';
    }
  
    else{
    
      
    $hash = password_hash("$password", PASSWORD_BCRYPT);


    $sql = "INSERT INTO user(username, passwd, name, phone, email, DOB)
    values('$username','$hash','$name','$phn','$email','$dob')";
    $result = $conn->query($sql);
    if ($result) {
      echo '<script type="text/javascript">alert("Successfully Registered.. :"); window.location.href="index.php"; </script>';
  
    }
    else{
      echo '<script type="text/javascript">alert("Something Wrong Try again.. :"); window.location.href="signup.php"; </script>';
    }}
?>
