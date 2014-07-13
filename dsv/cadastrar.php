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
        </div></br></br></br></br></br>
        <div class="row">
            <div class="col-sm-12 text-center upa">
            <h4><strong>
                <i class="glyphicon glyphicon-bullhorn"></i>
                 SEJAM MUITO BEM-VINDOS NOVOS USUÁRIOS DO NOSSO SITE GRATUÍTO DE ANÚNCIOS.
                <i class="glyphicon glyphicon-shopping-cart"></i>
            </strong></h4>            
            </div>
        </div></br></br></br>
    
        <form action="validaNovoUsuario.php" class="form-horizontal" role="form" method="post">
        <input type="hidden" name="local" value="painel.php">
        <?php 
        //if(isset($_GET['l']))echo''.$_GET['l'];
        //else echo'index.php';			
        ?>
          <div class="form-group">
            <label for="inputNome" class="col-sm-4 control-label"><i3>Nome completo</i3></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="inputNome" placeholder="Nome completo">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-4 control-label"><i3>Email</i3></label>
            <div class="col-sm-5">
              <input type="email" class="form-control" name="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTelefone" class="col-sm-4 control-label"><i3>Telefone</i3></label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="inputTelefone" placeholder="Telefone">
            </div>
          </div>
          <div class="form-group">
            <label for="inputSenha1" class="col-sm-4 control-label"><i3>Senha</i3></label>
            <div class="col-sm-3">
              <input type="password" class="form-control" name="inputSenha1" placeholder="Senha">
            </div>
          </div>
          <div class="form-group">
            <label for="inputSenha1" class="col-sm-4 control-label"><i3>Confirmar senha</i3></label>
            <div class="col-sm-3">
              <input type="password" class="form-control" name="inputSenha1" placeholder="Confirmar senha">
            </div>
          </div>           
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              <i3><button type="submit" class="btn btn-success">Cadastrar</button></i3>
            </div>
          </div>
            <?php
                if(isset($_GET['e']) && $_GET['e'] == 5){
                    echo' <div class="col-sm-12">';
                    echo' <div class="alert alert-danger alert-dismissible text-center" role="alert">
                          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
                          <span class="sr-only">Close</span></button>
                          <strong>ERRO!</strong> Usuário ou senha inválidos.
                          </div>';
                      
                    echo' </div>';
                }
            ?>          
        </form>
        <!-- Rodape --></br></br></br>
        <footer class="text-center upa">
            <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
            <i3><strong>M</strong>ercado<strong>Laranjeiras</strong></i3>
            <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>	
        </footer>
        <!-- /Rodape -->
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>