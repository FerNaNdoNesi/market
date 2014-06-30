<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();	
	session_destroy();	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html">
		<meta charset="iso-8859-1"><!-- charset="iso-8859-1">-->
		<title>Mercado Laranjeiras</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
    <!-- INICIO POPUP LOGIN -->        
            <div id="top-nav" class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.php">
                      <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
                      <i3><strong>M</strong>ercado<strong>Laranjeiras</strong></i3>
                      <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
                  </a>
                </div>
               </div><!-- /container -->
            </div></br></br></br>
        
        	<form action="validaLogin.php" class="form-horizontal" role="form" method="post">
            <input type="hidden" name="local" value="
			<?php 
			if(isset($_GET['l']))echo $_GET['l'];
			else echo'index.php';			
			?>">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label"><i3>Email</i3></label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label"><i3>Senha</i3></label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" name="inputSenha" placeholder="Senha">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked> <i3>Lembrar-me</i3>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                  <i3><button type="submit" class="btn btn-success">Continuar..</button></i3>
                </div>
              </div>
              <div class="form-group">
                <label for="inputCadastro" class="col-sm-4 control-label"></label>
                <div class="col-sm-5">
                  <i3><strong>Não tem cadastro? </strong></i3><i3><a href="cadastrar.php"> Cadastre-se agora mesmo! É grátis!</a></i3>
                </div>
              </div>
            </form>
            <!-- Rodape -->
            <footer class="text-center">
                <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
                <i3><strong>M</strong>ercado<strong>Laranjeiras</strong></i3>
                <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>	
            </footer>
            <!-- /Rodape -->
    <!-- FIM POPUP LOGIN -->
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>