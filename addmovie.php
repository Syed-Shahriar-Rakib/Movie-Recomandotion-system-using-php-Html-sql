<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>RaksFlims-Admin</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="Ahomepage.php" class="navbar-brand"> <img src="images/logo.jpg" alt=""> </a>
           <span class="navbar-text">RaksFlims</span>

           <ul class="navbar-nav">
           <li class='nav-item'> <a href='Aaccount.php' class='nav-link'>Account</a> </li> 
                  <li class='nav-item'>  <a href='Addadmin.php' class='nav-link'>Registrer Admin</a></li>
                  <li class='nav-item'>  <a href='adminlist.php' class='nav-link'>Admin List</a></li>
                  <li class='nav-item'>  <a href='movielist.php' class='nav-link'>Movie</a></li>
                  <li class='nav-item'> <a href='addmovie.php' class='nav-link'>Add Movie</a></li>
                  <li class='nav-item'>  <a href='logout.php' class='nav-link'>Logout</a>
                   </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1> Enter the Movie details</h1>
           <p> <b></b> </p> <br>

           <form class="" action="moviepost.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Movie Title" name="Title" value=""><br>
            <input type="text" class="form-control" placeholder="Director" name="director" value=""><br>
            <input type="text" class="form-control" placeholder="Star" name="Star" value=""><br>
             <input type="text" class="form-control" placeholder="Year of Release" name="pdate" value="">
             <br>
             <input type="text" class="form-control" placeholder="Genre" name="genres" value="">
             <br>
             <input type="url" class="form-control" placeholder="Download link" name="link" value=""><br>
        
             <br>
  
             <br>
             <div class="row">
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">

                              <input type="file" name="image" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
                     </td>
                   </tr>
                 </table>

               </div>
             </div> <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>


           </form>

        </div>


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
