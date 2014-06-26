<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!-- charset=utf-8">-->
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
            <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Criar Anúncio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                <i class="glyphicon glyphicon-user"></i> FerNaNdoNesi <span class="caret"></span>
              </a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
                <li><a href="#">Painel de controle</a></li>
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
              <strong><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> CATEGORIAS </strong> 
              <hr>      
              <ul class="list-unstyled">
                <!--<li class="nav-header">
                    <a data-toggle="collapse" data-target="#userMenu">
                        <h5>Categorias mais visitadas<i class="glyphicon glyphicon-chevron-down"></i></h5>
                    </a>
                    <ul class="list-unstyled collapse in" id="userMenu">
                        <li><a href="#"> Home <span class="badge badge-info">96</span></a></li>
                        <li><a href="#"> Messages <span class="badge badge-info">3</span></a></li>
                        <li><a href="#"> Options <span class="badge badge-info">47</span></a></li>
                        <li><a href="#"> Shoutbox <span class="badge badge-info">4</span></a></li>
                        <li><a href="#"> Acess�rios automotivos <span class="badge badge-info">5</span></a></li>
                        <li><a href="#"> Som e acess�rios automotivos <span class="badge badge-info">10</span></a></li>
                        <li><a href="#"> Rules <span class="badge badge-info">120</span></a></li>
                        <li><a href="#"> Logout <span class="badge badge-info">45</span></a></li>
                    </ul>
                </li>-->
                <?php
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
                    <div class="col-md-6">
                        <strong><i class="glyphicon glyphicon-usd"></i> PROMO��ES </strong>
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
                    </div><!-- /col-md-6 PROMO�?ES -->
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
