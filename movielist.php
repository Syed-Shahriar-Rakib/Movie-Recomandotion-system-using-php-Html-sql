<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echo"<form action='delete.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='thumb/".$result['img']."' height='250' width='200' style='margin-top: 30px;margin-left:30px;margin-right:20px;' />";
        echo"<div class='noob'>";
          echo "<label> Are you want to delete, click the title: <br>";
          echo"<input type='submit' name='submit' style='font-size: 20px;color:Red;border:1px solid orange;margin-left:50px;' placeholder='Delete'; value='".ucwords($result['Title'])."'/>";
          echo"</label>";
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
