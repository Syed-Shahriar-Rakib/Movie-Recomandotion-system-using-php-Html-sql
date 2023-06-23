<?php
  session_start();
  include 'dbh.php';




    $username =  $_POST['mail'];
    $password =  $_POST['pass'];

  

    $sql = "SELECT * FROM user WHERE username = '$username' ";

    $result = $conn->query($sql);
    

     
      if (mysqli_num_rows($result)>0) {
      $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['passwd'])) {
          echo '<script type="text/javascript">alert("Log in Successfull :"); window.location.href="homepage.php"; </script>';
          $_SESSION['id'] = $row['id'];
          header("Location: homepage.php");
        } 
          echo '<script type="text/javascript">alert("Incorrect password...Please try again :"); window.location.href="login.php"; </script>';
  }

   else {
    echo '<script type="text/javascript">alert("You have no account yet. Please register yourself. :"); window.location.href="signup.php"; </script>';
      }
    

?>
 
