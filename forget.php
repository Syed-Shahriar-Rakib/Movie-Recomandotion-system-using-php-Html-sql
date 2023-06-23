
<?php
  session_start();
  include 'dbh.php';



  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $phn=$_POST['phn'];

    if(!preg_match('/^(?:\+?88)?01[13-9]\d{8}$/', $phn)){
        echo '<script type="text/javascript">alert("Enter your Valid mobile number.. :"); window.location.href="login.php"; </script>';
    }

    $sql = "SELECT * FROM user WHERE username = '$username' AND phone='$phn'  ";

    $result = $conn->query($sql);
    
    if(!$row = $result->fetch_assoc()) {
      echo '<script type="text/javascript">alert("You have no account yet. Please register yourself. :"); window.location.href="signup.php"; </script>';
    }
    else {
        $hash = password_hash("$password", PASSWORD_BCRYPT);
        $sql = "UPDATE `user` SET `passwd` = '$hash' WHERE username = '$username' ";
        $result = $conn->query($sql);
        if ($result) {
            echo '<script type="text/javascript">alert("Your Password Change Successfully.. :"); window.location.href="login.php"; </script>';
        
          }
          else{
            echo '<script type="text/javascript">alert("Something Wrong Try again.. :"); window.location.href="forget.php"; </script>';
          }
      }
    }
    

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RaksFlims-Login</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand"> <img src="images/logo.jpg" alt=""> </a>
            <span class="navbar-text">RaksFlims</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="signup.php" class="nav-link"> SignUp</a> </li>
              <li class="nav-item"> <a href="login.php" class="nav-link"> Log in</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1>Recover your password </h1> <br>
            <form class="" action="forget.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Email Address" name="mail" value="" required>
              <br>
              <input type="text" class="form-control" placeholder="Mobile Number" name="phn" value="" required>
              <br>
              <input type="password" class="form-control" placeholder="New Password" name="pass" value="" required>
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="updatepass">Update Password</button>

              </div>
              </form>
              <br>
              <p>If you want to log in. Please Click <a href="login.php">Log in </a> </p>
              <p>If you have no account, please register yourself. Please Click <a href="signup.php">Sign Up </a> </p>


              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <Br> 
        <a href="programmer.php"> <img src="images/programmer.jpg" alt="" width="100" height="100"> </a>
        <BR><a href="programmer.php">Syed Shahriar Rakib</a>
      </div>

    </footer>
  </body>

</html>
