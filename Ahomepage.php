<?php
session_start();


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>RaksFlims-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> <img src="images/logo.jpg" alt=""> </a>
            <span class="navbar-text">RaksFlims</span>

            <p class="navbar-nav">
              <?php
              echo"<li class='nav-item'> <a href='Aaccount.php' class='nav-link'>Account</a> </li> 
                  <li class='nav-item'>  <a href='Addadmin.php' class='nav-link'>Registrer Admin</a></li>
                  <li class='nav-item'>  <a href='adminlist.php' class='nav-link'>Admin List</a></li>
                  <li class='nav-item'>  <a href='aclickmovie.php' class='nav-link'>Movie</a></li>
                  <li class='nav-item'> <a href='addmovie.php' class='nav-link'>Add Movie</a></li>
                  <li class='nav-item'>  <a href='logout.php' class='nav-link'>Logout</a>
                   </li>
                  </p>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM admin WHERE id = '$id' ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);



              echo"<h1 style='color:black;position:sticky;'>WELCOME </h1><b style = 'color: black;font-size: 25px'><i> ".ucwords($rel['name'])." !</i></b>
                  </div>
                  </header>
                  <section>


                <div class='jumbotron' style='margin-right:5px;margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class='row'>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px;' required>
                        <option value='Title'>Name</option> 
                        <option value='genres'>Genre</option>
                        <option value='pdate'>Release year</option>
                      </select>
                      <input type='text' placeholder='Enter..' style='margin-left:10px;margin-top:10px;padding:5px;' name='textoption' required>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-top:5px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      
      <div class="jumbotron">
        <h2>  All movies</h2>
          <?php
            include 'movielist.php';
            ?>


      </div>

  </section>
  <footer class="page-footer font-small blue">

<div class="footer-copyright text-center py-3">© 2022 Copyright:
<Br> 
  <a href="programmer.php"> <img src="images/programmer.jpg" alt="" width="100" height="100"> </a>
  <BR><a href="programmer.php">Syed Shahriar Rakib</a>
</div>

</footer>
</html>
