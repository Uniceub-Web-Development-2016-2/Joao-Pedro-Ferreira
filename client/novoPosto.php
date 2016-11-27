<?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/combustiveis.css">


</head>
<script type="text/javascript">
  
  $(document).ready(function(){
  
  
 });
</script>
<body>




</select>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
    

              <form action="novoPostoCad.php" method="post" role="login">
       
         <center>
          <h1>Qual combustivel deseja anunciar?</h1>         
          </center>
                   
              <p>
                
              </p>

                   <td>Nome Posto:</td>
                   <p> 
                 <label><input type="text" name="nomePosto" name="nomePosto" size="20"></label>
</p>
                 <td>Latitude:</td>
                   <p> 
                 <label><input type="text" name="latitude" name="latitude" size="20"></label>
              </p>
                <td>Longitude:</td>
                   <p> 
                 <label><input type="text" name="longitude" name="longitude" size="20"></label>
              </p>  <td>Endereco:</td>
                   <p> 
                 <label><input type="text" name="endereco" name="endereco" size="20"></label>
              </p>
                </p>  <td>Data:</td>
                   <p> 
                 <label><input type="date" name="data" name="data" ></label>
              </p>

               <label><input type="hidden" name="ativo" name="ativo" size="4" value="1"></label>
               <label><input type="hidden" name="inativo" name="inativo" size="4" value="0"></label>
               <label><input type="hidden" name="usuario" name="usuario" size="4" value="<?php echo $_SESSION["idt_usuario"];?>"></label>

               
              <button type="submit" class="btn btn-lg btn-primary btn-block">Registrar</button>

              
            </form>
             
          
            

 </section>  
 </div>



</body>