<?php
   session_start();
 ?>  
 
  <!DOCTYPE html>
  <html lang="en">
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <title>Bootstrap 3, from LayoutIt!</title>
 
     <meta name="description" content="Source code generated using layoutit.com">
     <meta name="author" content="LayoutIt!">
 
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

 
   </head>
   <body>
 
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">


      <?php 
      
       echo "<h2>Seja bem-vindo, {$_SESSION["nme_usuario"]}  ";
     ?>
    <!--  {$_SESSION["email_usuario"]}</h3> -->

            <a href="page.php">
            <center>
                <img class="img-circle img-responsive img-center" src="img/logado.png" alt=""> </a>
                
                <h2>
                <p>Clique <a href= "page.php"> aqui</a> para entrar no site</p>
               </h2>
               
               </center>
            </div>
    
          
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="js/login.js">
    </body>
    </html>