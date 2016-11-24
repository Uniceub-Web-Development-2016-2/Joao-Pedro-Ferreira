 
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/page.css">
   <link rel="stylesheet" type="text/css" href="js/bootstrap.js">


</head>


<body>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
        
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>


        <div class="row">
            <div class="col-sm-4">
            

		<form class="form-horizontal" action="gasolina.php" method="POST">
				  <div class="form-group">
         <h4> <center><label> Gasolina </label></center></h4>
				    <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="valor" name="valor">
				       <input type="hidden" class="form-control" id="gasolina"  name="gasolina" value="1">
				        <input type="hidden" class="form-control" id="posto" name="posto" value="<?php echo $_GET['id'] ?>">
				    </div>

				  </div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Salvar</button>
				    </div>
				  </div>
		</form>



              </div>
              <div class="col-sm-4">

                 <form class="form-horizontal" action="alcool.php" method="POST">
          <div class="form-group">
          <h4> <center><label> Alcool </label></center></h4>
            <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="valor" name="valor">
               <input type="hidden" class="form-control" id="alcool"  name="alcool" value="1">
                <input type="hidden" class="form-control" id="posto" name="posto" value="<?php echo $_GET['id'] ?>">
            </div>

          </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Salvar</button>
            </div>
          </div>
    </form>

  </form>
              </div>
              <div class="col-sm-4">
             <form class="form-horizontal">
    <div class="form-group">
          <form class="form-horizontal" action="diesel.php" method="POST">
          <div class="form-group">
          <h4> <center><label> Diesel </label></center></h4>
            <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="valor" name="valor">
               <input type="hidden" class="form-control" id="diesel"  name="diesel" value="1">
                <input type="hidden" class="form-control" id="posto" name="posto" value="<?php echo $_GET['id'] ?>">
            </div>

          </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Salvar</button>
            </div>
          </div>
    </form>
            </div>
        </div>


</body>

</html>
