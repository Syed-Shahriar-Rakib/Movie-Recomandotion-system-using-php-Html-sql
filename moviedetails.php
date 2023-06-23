<?php
session_start();
if (isset($_POST['submit'])) {

  $Title = $_POST['submit'];

  include 'dbh.php';
  $sql = "SELECT * FROM movies WHERE Title = '$Title'" ;

  $records = mysqli_query($conn,$sql);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$Title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body>";

        echo"<div class='jumbotron-fluid'>";
        echo"<div class='container'>";

        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['Title'];
            $mdir= $result['director'];
            $star = $result['Star'];
            $catagory = $result['genres'];
            $link = $result['link'];
            $image = $result['img'];
            $pubyear = $result['pdate'];
            $id =$_SESSION['id'];

            $nsql = "UPDATE user SET lastcata = '$catagory' WHERE id ='$id' ";
            $update = mysqli_query($conn,$nsql);
           
           

            echo"<br>";
           
            
        
         
          echo "<img src='thumb/".$image."' height='350px' width='auto' style='margin-top:30px'/>";
          echo "<br><br><h5 style='display: inline; margin-right: 45px;'><br>Movie Name</h5>:<h1 style='display: inline; margin-left:5px;'>".$mname."</h1>";
          echo"<br><h5 style='display: inline; margin-right: 88px;' >Director</h5>:<h4 style='display: inline; margin-left:5px;'>".$mdir."</h4>";
          echo"<br><h5 style='display: inline; margin-right: 119px;' >Star  </h5>:<h4 style='display: inline; margin-left:5px;'>".$star."</h4>";
          echo"<br><h5 style='display: inline; margin-right: 5px;' > Genres/Category</h5>:<h4 style='display: inline; margin-left:5px;'>".$catagory."</h4>";
          echo"<br><h5 style='display: inline; margin-right: 48px;' >Publish Year</h5>:<h4 style='display: inline; margin-left:5px;'>".$pubyear." </h4>";
          

          echo"<br><br><br>";
          echo"<a href='$link' style='font-size: 20px;color:white;border:1px solid orange;border-radius:5px;padding:10px;background:red;'>Download </a>";
          echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;margin-left:150px; border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
          echo"</div>";

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
