<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../client/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../client/css/cadastro.css">

</head>
<body>
  
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="cadastroScript.php" role="login">
         <center>
          <h1>Cadastro:</h1>         
          </center>
          <input type="hidden" name="cod_perfil" class="form-control input-lg" id="name" placeholder="Nome*" required="" value="2"/>
          <input type="name" name="nme_usuario" class="form-control input-lg" id="name" placeholder="Nome*" required="" />

          <input type="email" name="email_usuario" placeholder="Email*" required class="form-control input-lg" required="" />
          
          <input type="password" name="psw_usuario" class="form-control input-lg" id="password" placeholder="Senha*" required="" /> 
          <input type="integer" name="cpf_usuario" class="form-control input-lg" id="cpf" placeholder="CPF*" required="" />

          <input type="integer" name="cnpj_usuario" class="form-control input-lg" id="cnpj" placeholder="CNPJ" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" class="btn btn-lg btn-primary btn-block">Criar conta</button>
         
          
        </form>
        
        
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>    
  
</div>


</body>



</html>
