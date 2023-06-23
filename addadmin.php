<?php
session_start();

if(!isset($_SESSION['id'])){
  header('location:login.php');}


 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Registration</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="Ahomepage.php" class="navbar-brand"> <img src="images/logo.jpg" alt=""> </a>
           <span class="navbar-text">RaksFlims</span>

           

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1>Add Admin</h1>

           <form class="" action="adminregister.php" method="POST">
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="Name" name="name" value="" required>

             </div> <br>
             <input type="text" class="form-control" placeholder="Mobile Number" name="phn" value="" required>
             
             
             <br>
             <input type="email" class="form-control" placeholder="Email Address" name="mail" value="" required>
             <br>
             <input type="password" class="form-control" placeholder="Password" name="pass" value="" required>
             <br>
             <label> Enter your birthday:
              <input type="date" class="form-control" placeholder="Birthday" name="date" value="" required>
              </label>

                 <div class="signupbutton">
                   <br><br>
                   <button type="submit" class="btn btn-success btn-lg" name="sub" value="submit">Register</button>

                 </div>

             </div>
           </form>




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
