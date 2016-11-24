<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../client/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../js/login.js">
</head>
<script type="text/javascript">
  
  $(document).ready(function(){
  

  $.ajax({
            type:"GET",
            url: "http://localhost/servidor/joaoLoko/verValor/?idt_combustivel=3",
            dataType:'json',
            error:function(erro){
                alert(erro);
            },
                success: function (data) {
     			
     			$('.comboGenero').append(
					"<tr>"+
				    "<th>Nome</th>"+
				    "<th>Endereço</th>"+
				    "<th>Nome Posto</th>"+
				    "<th>Valor</th>"+
				    "<th>Tipo</th>"+
				    "<th>Data</th>"+
				  "</tr>"
			);

            $.each(data, function (i){

            console.log(data[i]);

            $('.comboGenero').append(

                "<tr>"+
				    "<td>"+ data[i].nme_usuario +"</td>"+
				    "<td>"+ data[i].endereco_posto +"</td>"+
				    "<td>"+ data[i].nme_posto +"</td>"+
				    "<td>"+ data[i].var_valor +"</td>"+
				    "<td>"+ data[i].nme_tipo_combustivel +"</td>"+
				    "<td>"+ data[i].dta_modificacao_posto +"</td>"+
				"</tr>"

            );
            });

        }
            
        });

$('#endereco_posto').val('JOAO');


 });
</script>
<body>
  
<div class="container">
  
  <div >
    
    
    <div class="col-md-10">
      <table class="table table-striped comboGenero"></table>
      
      

  	</div>    
  
	</div>
</div>

</body>
  <center><form action="page.php" method="GET"> <input type="submit" value="Voltar"/></form></center>
</html>