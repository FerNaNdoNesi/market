<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();
	if(isset($_SESSION['nome']) && isset($_SESSION['acess']) && $_SESSION['acess'] == TRUE){
		
	}else{
		header('Location: entrar.php?l=painel.php');	
	}
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
        <script src="js/tinymce/tinymce.min.js"></script><!--http://www.tinymce.com-->
		<script>
                tinymce.init({
                selector:'textarea',
                language : 'pt_BR',
                name: 'descricao',
                label: 'Descricao',
                width: 550,
                height: 300,
                resize: false,
                menubar : false,
                plugins: "textcolor",
                plugins: "code",
                  toolbar: "undo redo | hr | link | styleselect | bold italic | alignleft aligncenter alignright | numlist bullist | forecolor | code"
                });
        </script>
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
			if(isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE){
				echo'<li><a href="painel.php?c=1"><i class="glyphicon glyphicon-plus"></i> Criar Anúncio</a></li>';
			}
			?>
			<?php 
			if(isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE){
				echo'<li class="dropdown">';
				echo'  <a class="dropdown-toggle" role="button" data-toggle="dropdown">';
				echo'    <i class="glyphicon glyphicon-user"></i> '.$_SESSION['nome'].' <span class="caret"></span>';
				echo'  </a>';
				echo'  <ul id="g-account-menu" class="dropdown-menu" role="menu">';
				echo'    <li><a href="painel.php">Painel de controle</a></li>';
				echo'    <li><a href="#">Meus anúncios</a></li>';
				echo'    <li><a href="sair.php">Sair</a></li>';
				echo'  </ul>';
				echo'</li>';
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
              <strong><i class="glyphicon glyphicon-cog"></i> PAINEL DE CONTROLE</strong>  
              
              <hr>
              
              <ul class="nav nav-pills2 nav-stacked" role="tablist">
              	<li><a href="#resumo" role="tab" data-toggle="tab"><i2 class="glyphicon glyphicon-star"></i2><i3> Resumo </i3></a></li>
                <li><a href="#listarAnuncios" role="tab" data-toggle="tab"><i2 class="glyphicon glyphicon-star"></i2><i3> Meus anúncios </i3></a></li>
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
                        <div class="tab-content">
                          <div class="tab-pane <?php if(!isset($_GET['c']) && !isset($_GET['f']) && !isset($_GET['l'])) echo'active';?> " id="resumo">
                          	<ol class="breadcrumb">
                          		<li><a href="painel.php"><i class="glyphicon glyphicon-cog"></i> Painel de controle</a></li>
                                <li class="active"> Resumo</li>                           
                        	</ol>                          
                          <?php
						  	verResumoUsuario(3);
						  ?>
                          </div><!-- /resumo -->
                          <div class="tab-pane <?php if(isset($_GET['l'])) echo'active';?>" id="listarAnuncios">
                          	<ol class="breadcrumb">
                          		<li><a href="painel.php"><i class="glyphicon glyphicon-cog"></i> Painel de controle</a></li>
                                <li class="active"> Meus anúncio</li>                           
                        	</ol> 
                          <?php
						  	//echo'	<div class="panel-group" id="accordion">';							
						  	listarMeusAnuncios($_SESSION['idUsuario'], 0);
						  	//echo'	</div>';//<!-- /accordion -->  
						  ?>                       
                          </div><!-- /listarAnuncios -->
                          
                          <div class="tab-pane <?php if(isset($_GET['c']) && !isset($_GET['f'])) echo'active';?>" id="criarAnuncio">
                          <ol class="breadcrumb">
                          		<li><a href="painel.php"><i class="glyphicon glyphicon-cog"></i> Painel de controle</a></li>
                                <li class="active"> Criar anúncio</li>                           
                        	</ol> 
                          	<!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#modelo0" role="tab" data-toggle="tab">Modelo em branco</a></li>
                              <li><a href="#modelo1" role="tab" data-toggle="tab">Modelo 1</a></li>
                              <li><a href="#modelo2" role="tab" data-toggle="tab">Modelo 2</a></li>
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div class="tab-pane active" id="modelo0"></br>
                              	<form action="cadastraAnuncio.php" class="form-horizontal" role="form">
                               	  <div class="form-group">
                                     <label for="inputSubCategoria" class="col-sm-2 control-label">Categoria</label>
                                     <div class="col-sm-5">
                                        <?php listarDropMenuCategorias(); ?>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputTitulo" class="col-sm-2 control-label">Titulo</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="inputTitulo" placeholder="Titulo do anúncio">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputValor" class="col-sm-2 control-label">Valor</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" name="inputValor" placeholder="Valor do anúncio">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                                    <div class="col-sm-10">
                                    	<textarea name="inputDescricao" form="form-control">
                                    
                                		</textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                     <label for="inputSubCategoria" class="col-sm-2 control-label">Tipo produto</label>
                                     <div class="col-sm-5">
                                        <?php listarDropMenuTipoProduto(); ?>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label for="inputSubCategoria" class="col-sm-2 control-label">Dias anúnciado</label>
                                     <div class="col-sm-5">
                                        <?php listarDropMenuDias(); ?>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-success">Criar anúncio</button>
                                    </div>
                                  </div>
                                </form>                                                              
                              </div><!-- /modelo0 -->                                                            
                              <div class="tab-pane" id="modelo1">
                              	Modelo 1                                                            
                              </div><!-- /modelo1 -->
                              <div class="tab-pane" id="modelo2">
                              	Modelo 2                              
                              </div><!-- /modelo2 -->
                            </div>                                     
                                                                     
                          </div><!-- / tab-pane /criar anuncio -->
                          <div class="tab-pane" id="editarPerfil">
                          	<ol class="breadcrumb">
                          		<li><a href="painel.php"><i class="glyphicon glyphicon-cog"></i> Painel de controle</a></li>
                                <li class="active"> Editar perfil</li>                           
                        	</ol> 
                          
                          </div>
                          <div class="tab-pane <?php if(isset($_GET['f'])) echo'active';?>" id="editarFotos">
                          	<ol class="breadcrumb">
                          		<li><a href="painel.php"><i class="glyphicon glyphicon-cog"></i> Painel de controle</a></li>
                                <li class="active"> Editar fotos</li>                           
                        	</ol>
                            <?php listarMeusAnuncios($_SESSION['idUsuario'], $_GET['f']); ?>
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="file" name="fotos[]" /></br>
                            <input type="file" name="fotos[]" /></br>
                            <input type="file" name="fotos[]" /></br></br>
                            <input type="submit" value="Enviar fotos" />
                            </form>
                            <p>&nbsp;</p>
                            <!-- 3 Incluindo o programa que faz o upload das imagens -->                            
                            <? 								
								include 'upload.php'; 
							?>  
                          
                          </div>
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
