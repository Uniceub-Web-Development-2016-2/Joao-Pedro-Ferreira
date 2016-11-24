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
  

  $.ajax({
            type:"GET",
            url: "http://localhost/servidor/tb_posto/",
            dataType:'json',
            error:function(erro){
                alert(erro);
            },
                success: function (data) {
  


            $.each(data, function (i, item){
           

            $('#comboPosto').append(

                "<option value='"+ data[i].idt_posto +"'>"+ data[i].nme_posto +"</option>"


            );
            });

        }
            
        });

   $.ajax({
            type:"GET",
            url: "http://localhost/servidor/tb_combustivel/",
            dataType:'json',
            error:function(erro){
                alert(erro);
            },
                success: function (data) {
  


            $.each(data, function (i, item){
           

            $('#comboCombustivel').append(

                "<option value='"+ data[i].idt_combustivel +"'>"+ data[i].nme_tipo_combustivel +"</option>"


            );
            });

        }
            
        });

 });
</script>
<body>




</select>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
       
         <center>
          <h1>Qual combustivel deseja anunciar?</h1>         
          </center>
         

              <form action="anunciar.php" method="post" role="login">
              <!--   <input type="radio" name="idt_combustivel" value="1"> Gasolina<br>
                <input type="radio" name="idt_combustivel" value="2"> Etanol<br>
                <input type="radio" name="idt_combustivel" value="3"> Diesel<br> -->
              <p></p>
                   <!-- <td>Endereço:</td>
                 <label><input type="text" id="endereco_posto" name="endereco_posto" size="25"></label>
 -->
                   <td>Posto:</td>
                   <p> 
                 <select class="form-control" id="comboPosto" name="codPosto"></select>

                 <td>Combustivel:</td>
                   <p> 
                 <select class="form-control" id="comboCombustivel" name="comboCombustivel"></select>
              </p>
                <td>Valor:</td>
                   <p> 
                 <label><input type="double" name="var_valor" size="4"></label>
              </p>  <!-- <td>Data:</td>
                   <p> 
                 <label><input type="date" name="dta_criacao_posto" size="4"></label>
              </p> -->
               </body>

                <div class="pwstrength_viewport_progress"></div>
              <button type="submit" class="btn btn-lg btn-primary btn-block">Registrar</button>
              </form>	


 </section>  
 </div>



</body>