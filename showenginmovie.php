<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>RaksFlims-Homepage-search</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> <img src="images/logo.jpg" alt=""> </a>
            <span class="navbar-text">RaksFlims</span>

            <ul class="navbar-nav">
              <?php
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";

                  include 'dbh.php';
                  $id =$_SESSION['id'];
                  $quer = "SELECT * FROM user WHERE id = '$id' ";
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
                      <input type='text' placeholder='Enter..' style='margin-left:10px;margin-top:10px;padding:5px;' name='textoption'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-top:5px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";



 

  echo"<h2 style='margin-left:30px;'>Your favourite movie(generted by recent activity):</h2> ";

  $sql = "SELECT * FROM movies WHERE genres ='$rel[lastcata]' " ;
  $records = mysqli_query($conn,$sql);
 
  //start:
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
     

     /* if ($i==6) {

        echo"</div>";
        
        goto start;
      }
      $i++;*/
    }
    echo"</div>";
    ?>

<div class="jumbotron">
        <h2>  All movies</h2>
          <?php
            include 'showmovie.php';
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

