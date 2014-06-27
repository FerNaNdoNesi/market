<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html">
		<meta charset="iso-8859-1"><!-- charset="iso-8859-1">-->
		<title>Painel de controle</title>
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
            <li class="dropdown">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i> FerNaNdoNesi <span class="caret"></span>
              </a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
                <li><a href="#">Editar perfil</a></li>
                <li><a href="#">Meus anúncios</a></li>
                <li><a href="#">Sair</a></li>
              </ul>
            </li>
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
              <strong><i class="glyphicon glyphicon-cog"></i> PAINEL DE CONTROLE</strong>  
              
              <hr>
              
              <ul class="nav nav-pills2 nav-stacked" role="tablist">
              	<li><a href="#resumo" role="tab" data-toggle="tab"><i2 class="glyphicon glyphicon-star"></i2><i3> Resumo </i3></a></li>
                <li><a href="#listarAnuncios" role="tab" data-toggle="tab"><i2 class="glyphicon glyphicon-star"></i2><i3> Listar anúncios </i3></a></li>
                <li><a href="#criarAnuncio" role="tab" data-toggle="tab"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Criar anúncio </i3></a></li>
                <li><a href="#editarPerfil" role="tab" data-toggle="tab"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Editar Perfil </i3></a></li>
                <li><a href="index.php"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Voltar aos anúncios </i3></a></li>
              </ul>
              
              <hr>
              
            </div><!-- /Left column /col-3 -->
            
            <!-- column principal -->	
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                    	<strong><i class="glyphicon glyphicon-th-list"></i> CENTRAL DE CONFIGURAÇÕES DO USUÁRIO </strong>
              			<hr>
                        <ol class="breadcrumb">
                          <li><a href="painel.php"><i class="glyphicon glyphicon-cog"></i> Painel de controle</a></li>                         
                        </ol>
                        <div class="tab-content">
                          <div class="tab-pane active" id="resumo">                          
                          <?php
						  	verResumoUsuario(3);
						  ?>
                          </div><!-- /resumo -->
                          <div class="tab-pane" id="listarAnuncios">Listar
                          <?php
						  	echo'	<div class="panel-group" id="accordion">';
						  	listarMeusAnuncios(4);
						  	echo'	</div>';//<!-- /accordion -->  
						  ?>                       
                          </div><!-- /listarAnuncios -->
                          
                          <div class="tab-pane" id="criarAnuncio">Criar</div>
                          <div class="tab-pane" id="editarPerfil">Perfil</div>
                        </div>
                    </div><!-- /col-md-12 -->
                </div><!-- /row -->
                <?php
					if(isset($_GET['a']))
					verAnuncio($_GET['a']);
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
