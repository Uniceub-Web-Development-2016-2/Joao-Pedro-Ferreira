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
   <link rel="stylesheet" type="text/css" href="css/page.css">
   <link rel="stylesheet" type="text/css" href="js/bootstrap.js">


</head>
<script type="text/javascript">
$(document).ready(function(){
  

  $.ajax({
            type:"GET",
            url: "http://localhost/servidor/tb_usuario/verificarCombustivel/?idt_posto=<?php echo $_GET["id"];?>",
            dataType:'json',
            error:function(erro){
                alert(erro);
            },
                success: function (data) {
          
        if(data == ''){

                  $('#valor').val('');
                  $('#gasolina').val('1');
                  $('#posto').val('<?php echo $_GET["id"];?>');
                  $('#idValor').val('');
                  $("#gas").attr("action","gasolinaCadastro.php");

                   $('#valorAlcool').val('');
                  $('#alcool').val('2');
                  $('#postoAlcool').val('<?php echo $_GET["id"];?>');
                  $('#idValorAlcool').val('');
                  $("#alc").attr("action","AlcoolCadastro.php");

                   $('#valorDiesel').val('');
                  $('#diesel').val('3');
                  $('#postoDiesel').val('<?php echo $_GET["id"];?>');
                  $('#idValorDiesel').val('');
                  $("#die").attr("action","DieselCadastro.php");  
      }

      if(data.length == 1){

         $.each(data, function (i){

          if(data[i].cod_combustivel == 1){
                  $('#valor').val(data[i].var_valor);
                  $('#gasolina').val('1');
                  $('#posto').val('<?php echo $_GET["id"];?>');
                  $('#idValor').val(data[i].idt_valor);
                  $("#gas").attr("action","gasolinaEditar.php");

                   $('#valorAlcool').val('');
                  $('#alcool').val('2');
                  $('#postoAlcool').val('<?php echo $_GET["id"];?>');
                  $('#idValorAlcool').val('');
                  $("#alc").attr("action","AlcoolCadastro.php");

                   $('#valorDiesel').val('');
                  $('#diesel').val('3');
                  $('#postoDiesel').val('<?php echo $_GET["id"];?>');
                  $('#idValorDiesel').val('');
                  $("#die").attr("action","DieselCadastro.php");  
          }

          if(data[i].cod_combustivel == 2){


                  $('#valor').val('');
                  $('#gasolina').val('1');
                  $('#posto').val('<?php echo $_GET["id"];?>');
                  $('#idValor').val('');
                  $("#gas").attr("action","gasolinaCadastro.php");

                  $('#valorAlcool').val(data[i].var_valor);
                  $('#alcool').val('2');
                  $('#postoAlcool').val('<?php echo $_GET["id"];?>');
                  $('#idValorAlcool').val(data[i].idt_valor);
                  $("#alc").attr("action","AlcoolEditar.php");

                   $('#valorDiesel').val('');
                  $('#diesel').val('3');
                  $('#postoDiesel').val('<?php echo $_GET["id"];?>');
                  $('#idValorDiesel').val('');
                  $("#die").attr("action","DieselCadastro.php");  
          }
          if(data[i].cod_combustivel == 3){
                  $('#valor').val('');
                  $('#gasolina').val('1');
                  $('#posto').val('<?php echo $_GET["id"];?>');
                  $('#idValor').val('');
                  $("#gas").attr("action","gasolinaCadastro.php");

                   $('#valorAlcool').val('');
                  $('#alcool').val('2');
                  $('#postoAlcool').val('<?php echo $_GET["id"];?>');
                  $('#idValorAlcool').val('');
                  $("#alc").attr("action","AlcoolCadastro.php");

                   $('#valorDiesel').val(data[i].var_valor);
                  $('#diesel').val('3');
                  $('#postoDiesel').val('<?php echo $_GET["id"];?>');
                  $('#idValorDiesel').val(data[i].idt_valor);
                  $("#die").attr("action","DieselEditar.php");  
          }

         });

      }

       
              
     }
       
            
        });

 });
</script>
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
            

            		<form class="form-horizontal" action="gasolina.php" method="POST" id="gas">
            				  <div class="form-group">
                     <h4> <center><label> Gasolina </label></center></h4>
            				    <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
            				    <div class="col-sm-10">
            				      <input type="text" class="form-control" id="valor" name="valor">
            				       <input type="hidden" class="form-control" id="gasolina"  name="gasolina" value="1">
            				        <input type="hidden" class="form-control" id="posto" name="posto"">
                            <input type="hidden" class="form-control" id="idValor"  name="idValor" value="1">
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

         <form class="form-horizontal" action="alcool.php" method="POST" id="alc">
          <div class="form-group">

          <h4> <center><label> Alcool </label></center></h4>
            <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="valorAlcool" name="valorAlcool">
               <input type="hidden" class="form-control" id="alcool"  name="alcool" value="1">
                <input type="hidden" class="form-control" id="postoAlcool" name="postoAlcool"">
                <input type="hidden" class="form-control" id="idValorAlcool"  name="idValorAlcool" value="1">
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
             
                      <div class="form-group">
                            <form class="form-horizontal" action="diesel.php" method="POST" id="die">
                            <div class="form-group">
                            <h4> <center><label> Diesel </label></center></h4>
                              <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="valorDiesel" name="valorDiesel">
                                 <input type="hidden" class="form-control" id="diesel"  name="diesel" value="1">
                                  <input type="hidden" class="form-control" id="postoDiesel" name="postoDiesel" ">
                                  <input type="hidden" class="form-control" id="idValorDiesel"  name="idValorDiesel" value="1">
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
