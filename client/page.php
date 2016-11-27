<?php
   session_start();
if( @$_GET['token'] === md5(session_id()) ){
   // limpe tudo que for necessário na saída.
   // Eu geralmente não destruo a seção, mas invalido os dados da mesma
   // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
   session_destroy();
   header("location: http:page.php");
   exit();
} else {
    echo "<h4> Ola {$_SESSION["nme_usuario"]}  ";
   echo "<h4><a href='login.php'.md5(session_id())>Logout</a>";
}
 ?>  

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Combustivel X</title>

   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/page.css">
   <link rel="stylesheet" type="text/css" href="js/bootstrap.js">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>


                 

                <a class="navbar-brand" href="http://localhost/client/page.php">Inicio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                
                      <li>
                        <a href="combustiveis.php">Combustiveis proximos</a>
                    </li>
                 
                    <li>
                        <a href="postos.php">Meus Postos</a>
                    </li>
                </ul>
            </div>

        </div>
  

    </nav>
 


    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Combustivel X</h1>
                </div>
            </div>
        </div>
        
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>O que nós fazemos?</h2>
                <p>Ajudamos você a procurar e compartilhar os preços dos combustiveis mais baratos e proximo de você! </p>
            
                <p>
                    <a class="btn btn-default btn-lg" href="#">Duvidas &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>Distrito Federal</strong>
                    <br>Brasilia-DF
                    <br>Asa norte, 714
                    <br>
                </address>
                <address>
                    <abbr title="Phone">Telefone:</abbr>+55(061) 9 9999-9999
                    <br>
                    <abbr title="Email">Email:</abbr> <a href="mailto:#">fuelx@combustivelx.com</a>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
            <a href="tb_gas.php">
                <img class="img-circle img-responsive img-center" src="img/gas.jpg" alt=""> </a>
                <h2>Gasolina</h2>
                <p>Clique aqui ver a tabela de <b>Gasolina</b></p>
            </div>
            <div class="col-sm-4">
            <a href="tb_alcool.php">
                <img class="img-circle img-responsive img-center" src="img/alcool.jpg" alt=""> </a>
                <h2>Etanol</h2>
                <p>Clique aqui para ver a tabela de <b>Etanol</b></p>
            </div>
            <div class="col-sm-4">
            <a href="tb_diesel.php">
                <img class="img-circle img-responsive img-center" src="img/diesel.jpg" alt=""> </a>
                <h2>Diesel</h2>
                <p>Clique aqui para buscar a tabela de <b>Diesel</b></p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
