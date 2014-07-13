<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html">
		<meta charset="UTF-8"><!-- charset="iso-8859-1">-->
		<title>Mercado Laranjeiras</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
    <!-- Header -->
    <div id="top-nav" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
              <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
              <i3><strong>M</strong>ercado<strong>Laranjeiras</strong></i3>
              <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<?php 
			if(isset($_SESSION['nome']) && isset($_SESSION['acess']) && $_SESSION['acess'] == TRUE){
				echo'<li><a href="painel.php?c=1"><i class="glyphicon glyphicon-plus"></i> Criar Anúncio</a></li>';
			}else{
				echo'<li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Criar Anúncio</a></li>';
			}
			?>
			<?php 
			if(isset($_SESSION['nome']) && isset($_SESSION['acess']) && $_SESSION['acess'] == TRUE){
				echo'<li class="dropdown">';
				echo'  <a class="dropdown-toggle" role="button" data-toggle="dropdown">';
				echo'    <i class="glyphicon glyphicon-user"></i> '.$_SESSION['nome'].' <span class="caret"></span>';
				echo'  </a>';
				echo'  <ul id="g-account-menu" class="dropdown-menu" role="menu">';
				echo'    <li><a href="painel.php">Painel de controle</a></li>';
				echo'    <li><a href="painel.php?l=1">Meus anúncios</a></li>';
				echo'    <li><a href="sair.php">Sair</a></li>';
				echo'  </ul>';
				echo'</li>';
			}else{
				echo'<li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar</a></li>';
			}
			?>
          </ul>
        </div>
      </div><!-- /container -->
    </div>    
    <!-- /Header -->

    <!-- Main --></br></br></br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <!-- Left column -->
              <strong><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> CATEGORIAS </strong> 
              <hr>      
              <ul class="list-unstyled">                
                <?php
					listaMenuCategorias(0);                
                ?>
              </ul>
                   
              <hr>
              
              <strong><i class="glyphicon glyphicon-sort-by-attributes"></i> VER ANÚNCIOS:</strong>  
              
              <hr>
              
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i2 class="glyphicon glyphicon-star"></i2><i3> Mais visitados </i3></a></li>
                <li><a href="#"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Melhores anúncios </i3></a></li>
                <li><a href="#"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Eventos </i3></a></li>
                <li><a href="#"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Promoções </i3></a></li>
              </ul>
              
              <hr>
              
              <strong><i class="glyphicon glyphicon-user"></i> ÁREA DO USUÁRIO:</strong>  
              
              <hr>
              
              <ul class="nav nav-pills nav-stacked">              	
              <?php
              if(isset($_SESSION['nome']) && isset($_SESSION['acess']) && $_SESSION['acess'] == TRUE){
				echo'<li><a href="painel.php?c=1"><i class="glyphicon glyphicon-plus"></i><i3> Criar anúncio </i3></a></li>';
				}else{
					echo'<li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">';
                	echo'	<i class="glyphicon glyphicon-plus"></i><i3> Criar anúncio </i3></a>';
                	echo'</li>';
				}
				?>
                <?php 
				if(isset($_SESSION['nome']) && isset($_SESSION['acess']) && $_SESSION['acess'] == TRUE){
					echo'<li class="dropdown">';
					echo'  <a class="dropdown-toggle" role="button" data-toggle="dropdown">';
					echo'    <i class="glyphicon glyphicon-user"></i> '.$_SESSION['nome'].' <span class="caret"></span>';
					echo'  </a>';
					echo'  <ul id="g-account-menu" class="dropdown-menu" role="menu">';
					echo'    <li><a href="painel.php">Painel de controle</a></li>';
					echo'    <li><a href="painel.php?l=1">Meus anúncios</a></li>';
					echo'    <li><a href="sair.php">Sair</a></li>';
					echo'  </ul>';
					echo'</li>';
				}else{
					echo'<li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">';
					echo'<i class="glyphicon glyphicon-log-in"></i><i3> Entrar</i3></a>';
					echo'</li>';
					echo'<li><a href="cadastrar.php"><i class="glyphicon glyphicon-list-alt"></i><i3> Cadastre-se </i3></a></li>';					
				}
				?>
                
              </ul>
              
              <hr>
              
            </div><!-- /Left column /col-3 -->
            
            <!-- column principal -->	
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <strong><i class="glyphicon glyphicon-usd"></i> PROMOÇÕES </strong>
                        <hr>
                        <?php 
						for($i = 0; $i<1; $i++){
							echo"<div class='row'>";
							for($j = 0; $j<2; $j++){
								echo"	<div class='col-md-6'>";
								echo"		<a href='#' class='thumbnail'>";
								echo"			<img src='img/555.gif' class='img-rounded' alt='...'>";
								echo"		</a>";
								echo"	</div>";
							}
							echo"</div>";
						}
						?>
                    </div><!-- /col-md-6 PROMOï¿œ?ES -->
                    <div class="col-md-6">
                        <strong><i class="glyphicon glyphicon-glass"></i> EVENTOS </strong>  
                        <hr>
                        <?php 
						for($i = 0; $i<1; $i++){
							echo"<div class='row'>";
							for($j = 0; $j<2; $j++){
								echo"	<div class='col-md-6'>";
								echo"		<a href='#' class='thumbnail'>";
								echo"			<img src='img/555.gif' class='img-rounded' alt='...'>";
								echo"		</a>";
								echo"	</div>";
							}
							echo"</div>";
						}
						?> 
                    </div><!-- /col-md-6 EVENTOS -->
                </div><!-- /row -->
              
              <strong><i class="glyphicon glyphicon-th"></i> CLASSIFICADOS </strong>
              <hr>
                
                <div class="panel panel-default">
                  <div class="panel-body">	
                  <?php
				  	mostraCategorias(0);
				  ?>                    
                  </div>
               </div>
              
               <strong><i class="glyphicon glyphicon-tasks"></i> ULTIMOS AN&Uacute;NCIOS </strong>
               <hr>
                            
                <div class='row'>
                	<strong>
                    <div class='col-md-2'>
                        <i3>Foto</i3>
                    </div>
                    <div class='col-md-5 text-left'>
                        <i3>Titulo</i3>
                    </div>
                    <div class='col-md-2 text-center'>
                        <i3>Valor</i3>
                    </div>
                    <div class='col-md-1 text-left'>
                        <i3>Visitas</i3>
                    </div>
                    <div class='col-md-2 text-center'>
                        <i3>An&uacute;nciado</i3>
                    </div>
                    <strong>
                </div>
                <hr>
				<?php
					listarUltimosAnuncios(10);
			  	?>       
              
            </div><!--/col-span-9 -->
        </div><!-- /row -->
    </div><!-- /container -->
    <!-- /Main -->

	<!-- Rodape -->
	<footer class="text-center">
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

	<!-- INICIO POPUP LOGIN -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <div id="top-nav" class="navbar navbar-inverse navbar-fixed-top navbar-fixed-top2">
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
            <input type="hidden" name="local" value="index.php">
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
        </div><!-- /modal-content -->
      </div><!-- /modal-dialog modal-lg -->
    </div><!-- /modal fade bs-example-modal-lg -->
    <!-- FIM POPUP LOGIN -->
