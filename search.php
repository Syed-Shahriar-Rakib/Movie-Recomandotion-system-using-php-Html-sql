<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>RaksFlims-search</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="homepage.php" class="navbar-brand"> <img src="images/logo.jpg" alt=""> </a>
            <span class="navbar-text">RaksFlims</span>

            <ul class="navbar-nav">
              <?php
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  </ul>
                  </nav>
                  <br><br><br>";
                  include 'dbh.php';
                  

                  $option =  $_POST['option'];
                  $search =  $_POST['textoption'];

                  echo"<h2 style='margin-left:30px;'> Your Search is generated with ' ".$option." ' option and ' ".$search." ' text: </h2>" ;

                  $querry = "SELECT * FROM movies WHERE $option LIKE '%$search%' ";
                  $records = mysqli_query($conn,$querry);
                  echo "<h5 style='margin-left:30px; '>We find out ".mysqli_num_rows($records)." results</h5>";
                  start:
            $i=0;

        echo"<div class='row'>";
          while($result = mysqli_fetch_assoc($records)){
              
               echo"<form action='moviedetails.php' method='POST'>";
               echo"<div class='col'>";
              echo "<img src='thumb/".$result['img']."' height='250' width='200' style='margin-top: 30px;margin-left:30px;margin-right:20px;' />";
              echo"<div class='noob'>";
               echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;' value='".ucwords($result['Title'])."'/>";
              echo"</div>";
            echo"</div>";
             echo"</form>";

      if ($i==5) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";
    ?>

      <div class="jumbotron">
        <a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;margin-left:150px; border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>

      </div>


  </section>
  <footer class="page-footer font-small blue">

<div class="footer-copyright text-center py-3">© 2022 Copyright:
<Br> 
  <a href="programmer.php"> <img src="images/programmer.jpg" alt="" width="100" height="100"> </a>
  <BR><a href="programmer.php">Syed Shahriar Rakib</a>
</div>

</footer>
  </body>
</html>
