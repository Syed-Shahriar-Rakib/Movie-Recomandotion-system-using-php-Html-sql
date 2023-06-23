
<?php
session_start();

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
              <li class="nav-item"> <a href="index.php" class="nav-link"> Home</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1>Login to your account</h1> <br>
            <form class="" action="Alogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Email Address" name="mail" value="" required>
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="" required>
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login">Log in</button>

              </div>
              </form>
              <br>
              <p>If you forget your password. Please Click <a href="forget.php">Forget Password </a> </p>


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
