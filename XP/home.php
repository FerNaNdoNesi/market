    <!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
    
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
      </head>
      <body>
        
      <div class="tooper" id="id-tooper">
			<div class="logo"><img src="img/logoUFFS.png" alt="logoUFFS" height="42"/></div>
      </div>
      
        <div class="row">
          <div class="col-md-2 topp"> <!-- 18 largura maxima mobile || 12 largura maxima desktop  (outros tamanhos são configuraveis) -->
            <div class="list-group-success">
              <a href="home.php" class="list-group-item list-group-item-success leftt">Inicio</a>
              <a href="servidor.php" class="list-group-item leftt">Servidor</a>
              <a href="relatorios.php" class="list-group-item leftt">Relatórios</a>
              <a href="#" class="list-group-item leftt">Curso</a>
              <a href="#" class="list-group-item leftt">Permissões</a>
              <a href="#" class="list-group-item leftt">Salas</a>
              <a href="#" class="list-group-item leftt">Horários</a>
              <a href="#" class="list-group-item leftt">Alocação</a>
              <a href="logout.php" class="list-group-item leftt">Sair</a>
            </div>
            <!--
            <button type="button" class="btn btn-success btn-block" href="#">Inicio</button>
            <button type="button" class="btn btn-default btn-block" href="#">Relatórios</button>
            <button type="button" class="btn btn-default btn-block" href="#">Servidor</button>
            <button type="button" class="btn btn-default btn-block" href="#">Curso</button>
            <button type="button" class="btn btn-default btn-block" href="#">Permisões</button>
            <button type="button" class="btn btn-default btn-block" href="#">Salas</button>
            <button type="button" class="btn btn-default btn-block" href="#">Horários</button>
            <button type="button" class="btn btn-default btn-block" href="#">Alocação</button>
            <button type="button" class="btn btn-default btn-block" href="#">Sair</button>
            --> 
          </div>
          <div class="col-md-10 topp">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Inicio</a>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">       
                <div class="panel-body">
                    <h1>Bem-Vindo</h1>
                    <div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Success!</strong> Ocorreu um sucesso.
					</div>
                    <div class='alert alert-warning alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Warning!</strong> Ocorreu warning.
					</div>
                    <div class='alert alert-danger alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <strong>Oops!</strong> Ocorreu erro.
					</div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      
      <div class="footer" id="id-footer">
          <p>Universidade Federal da Fronteira Sul </br> Ciência da Computação</p>
      </div>	
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>