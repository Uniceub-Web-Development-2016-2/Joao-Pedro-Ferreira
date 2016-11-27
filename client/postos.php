<?php
 session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<script type="text/javascript">
  
  $(document).ready(function(){
  

  $.ajax({
            type:"GET",
            url: "http://localhost/servidor/tb_posto/?cod_usuario=<?php echo $_SESSION["idt_usuario"]; ?>",
            dataType:'json',
            error:function(erro){
                alert(erro);
            },
                success: function (data) {
          console.log(data);
          $('.comboGenero').append(
          "<tr>"+
            "<th>Nome Posto</th>"+
            "<th>Endereço</th>"+
            
            "<th>Operacao</th>"+
            
          "</tr>"
      );

            $.each(data, function (i){

            console.log(data[i]);

            $('.comboGenero').append(

                "<tr>"+
            "<td>"+ data[i].nme_posto +"</td>"+
            "<td>"+ data[i].endereco_posto +"</td>"+
            "<td><a href='genrenciarPostos.php?id=" +data[i].idt_posto+"' class='btn'>Gerenciar</a>"+
            "<a href='genrenciarPostos.php?id=" +data[i].idt_posto+"' class='btn'>Editar</a>"+

            "</td>"+
            
        "</tr>"

            );
            });

        }
            
        });



 });
</script>
<body>
  
<div class="container">
  
  <div >
    
  
    <div class="col-md-10">
      <table class="table table-striped comboGenero"></table>
<a href='novoPosto.php' class='btn btn-danger' type="submit" >Cadastrar novo posto</a>
    </div>    
  
  </div>
</div>

</body>
 <form class="form-signin"  action="page.php">
                <center> <button class="btn btn-danger" type="submit" onclick="submitSignIn()">Voltar</button></center>
            </form>
</html>