<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../client/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../client/css/login.css">
<link rel="stylesheet" type="text/css" href="../js/login.js">
</head>

<body>
  
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="loginScript.php" role="login">
        <center>
          <h1>Combustivel X</h1>
          </center>
          <input type="email" name="email_usuario" placeholder="Email" required class="form-control input-lg" required="" />
          
          <input type="password" name="psw_usuario" class="form-control input-lg" id="password" placeholder="Senha" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" class="btn btn-lg btn-primary btn-block">Logar</button>
          <div>
            <a href="http://localhost/client/cadastro.php">Criar conta</a> 
          </div>
          
        </form>
        
        
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>    
  
</div>


</body>
</html>