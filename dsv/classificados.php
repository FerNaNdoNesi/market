<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!-- charset=utf-8">-->
		<meta charset="utf-8">
		<title>Classificados</title>
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
            <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Criar An&uacute;ncio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                <i class="glyphicon glyphicon-user"></i> FerNaNdoNesi <span class="caret"></span>
              </a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
                <li><a href="#">Painel de controle</a></li>
                <li><a href="#">Meus an&uacute;ncios</a></li>
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
              <strong><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> CATEGORIA </strong>      
              <hr>      
              <ul class="list-unstyled">                
                <?php
					if(isset($_GET['cat']))
					listaMenuCategorias($_GET['cat']); 
					else
					listaMenuCategorias(0);                
                ?>
              </ul>
                   
              <hr>
              
              <strong><i class="glyphicon glyphicon-sort-by-attributes"></i> VER AN&Uacute;NCIOS:</strong>  
              
              <hr>
              
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i2 class="glyphicon glyphicon-star"></i2><i3> Mais visitados </i3></a></li>
                <li><a href="#"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Melhores an&uacute;ncios </i3></a></li>
                <li><a href="#"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Eventos </i3></a></li>
                <li><a href="#"><i2 class="glyphicon glyphicon-star-empty"></i2><i3> Promo&ccedil;&otilde;es </i3></a></li>
              </ul>
              
              <hr>
              
            </div><!-- /Left column /col-3 -->
            
            <!-- column principal -->	
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                    	<strong><i class="glyphicon glyphicon-th-list"></i> AN&Uacute;NCIOS </strong>
              			<hr>
                        <ol class="breadcrumb">
                          <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                          <?php if(isset($_GET['cat']))breadcrumbCategoria($_GET['cat']); ?>
                          <?php if(isset($_GET['scat']))breadcrumbSubCategoria($_GET['cat'], $_GET['scat']); ?>
                        </ol>
                    </div><!-- /col-md-12 -->
                </div><!-- /row -->                                           
                            
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
                    </strong>
                </div>
                <hr>
				<?php
				$color = 0;
			  for($i = 0; $i <21; $i++){
				echo"<a href='anuncio.php?cat=1&scat=1' class='list-group-item'>";
              	echo"<div class='row'>";
				echo"	<div class='col-md-2'>";
				echo"		<img class='media-object' src='img/555.gif' width='100px' alt='...'>";
				echo"	</div>";
				echo"	<div class='col-md-5'>";
				echo"		<h4><i3>Anúncio com um nome maior que o normal e totalizando ".$i."</i3></h4>";
				echo"	</div>";
				echo"	<div class='col-md-2 text-right'>";
				echo"		<h6><i3>R$ ".$i."00.100,90</i3></h6>";
				echo"	</div>";
				echo"	<div class='col-md-1 text-right'>";
				echo"		<i3><span class='badge badge-info'>".$i++."</span></i3>";
				echo"	</div>";
				echo"	<div class='col-md-2 text-right'>";
				echo"		<h6><i3>18/06/2014</i3></h6>";
				echo"	</div>";
				echo"</div>";
				echo"</a>";
			  }
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