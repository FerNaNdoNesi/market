<?php
	require_once dirname (__FILE__)."/biblioteca/biblioteca.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!-- charset=utf-8">-->
		<meta charset="utf-8">
		<title>An&uacute;ncio</title>
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
              <i3><strong>M</strong>ercado<strong>Chapec&oacute;</strong></i3>
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
              <strong><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> SUB CATEGORIAS </strong>      
              <hr>      
              <ul class="list-unstyled">
                <li class="nav-header">
                    <a data-toggle="collapse" data-target="#userMenu">
                        <h5>Categorias mais visitadas<i class="glyphicon glyphicon-chevron-down"></i></h5>
                    </a>
                    <ul class="list-unstyled collapse in" id="userMenu">
                        <li><a href="#"> Home <span class="badge badge-info">96</span></a></li>
                        <li><a href="#"> Messages <span class="badge badge-info">3</span></a></li>
                        <li><a href="#"> Options <span class="badge badge-info">47</span></a></li>
                        <li><a href="#"> Shoutbox <span class="badge badge-info">4</span></a></li>
                        <li><a href="#"> Acess&oacute;rios automotivos <span class="badge badge-info">5</span></a></li>
                        <li><a href="#"> Som e acess&oacute;rios automotivos <span class="badge badge-info">10</span></a></li>
                        <li><a href="#"> Rules <span class="badge badge-info">120</span></a></li>
                        <li><a href="#"> Logout <span class="badge badge-info">45</span></a></li>
                    </ul>
                </li>
                <?php
                for($i = 0; $i<35; $i++){
                    echo"<li class='nav-header'>";
                    echo"	<a data-toggle='collapse' data-target='#categoria".$i."'>";
                    echo"   	<h5>Categoria ".$i." <i class='glyphicon glyphicon-chevron-right'></i></h5>";
                    echo"   </a>";
                    echo"   <ul class='list-unstyled collapse' id='categoria".$i."'>";
                    echo"   	<li>";
                    echo"			<a href='#'> Facebook <span class='badge badge-info'>".$i."</span></a>";
                    echo"		</li>";
                    echo"       <li>";
                    echo"			<a href='#'> Twitter <span class='badge badge-info'>".$i."</span></a>";
                    echo"		</li>";
                    echo"    </ul>";
                    echo"</li>";
                }
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
                          <li><a href="classificados.php">Categoria</a></li>
                          <li><a href="classificados.php">SubCategoria</a></li>
                          <li class="active">An&uacute;ncio</li>
                        </ol>
                    </div><!-- /col-md-12 -->
                </div><!-- /row -->
                <?php   
                echo" <div class='panel panel-success'>";
                echo"  <div class='panel-heading'>";
                echo"    <h3 class='panel-title'>Titulo do anúncio</h3>";
                echo"  </div>";
                echo"  <div class='panel-body'>";
                echo"    <div class='row'>";
                echo"        <div class='col-md-8'>";
                echo"        	Toda descrição do anúncio";
				echo"        	<hr>";
                echo"        </div>";
                echo"        <div class='col-md-4'>";
                echo"        	Fotos";
				echo"        	<hr>";
                echo"        </div>";
                echo"    </div>";
                echo"  </div>";
                echo"</div>";
				?>      
              
            </div><!--/col-span-9 -->
        </div><!-- /row -->
    </div><!-- /container -->
    <!-- /Main -->

	<!-- Rodape -->
	<footer class="text-center">
		<i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>
        <i3><strong>M</strong>ercado<strong>Chapec&oacute;</strong></i3>
        <i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i><i class="glyphicon glyphicon-barcode"></i>	
    </footer>
    <!-- /Rodape -->
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>