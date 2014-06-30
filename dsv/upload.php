<?php
#error_reporting (E_ALL); 
# author : Rafael Clares  [clares.wordpress.com] 
# Setando as configurações permitidas
$larguraMax = 2000; // largura em pixels
$alturaMax  = 2000; // altura em pixels
$tamanhoMax = 500000; // tamanho em bytes
$formatos   = "pjpeg|jpeg|png|gif|bmp|x-png|jpg"; // extensoes permitidas
# Criando as mensagens de erro
$erro[] = "Tamanho do arquivo maior que o permitido [".($tamanhoMax/1000)." kb] </br> acesse: www.reduzfoto.com.br";
$erro[] = "A Largura da imagem maior que o permitido.";
$erro[] = "A Altura da imagem maior que o permitido.";
$erro[] = "Você atingiu a quantidade maxíma de fotos [3]. Exclua algumas fotos!!";
$erro[] = "Formato do arquivo não permitido ou inválido.";

if(isset($_FILES["fotos"]))
{
	function retira_acentos( $texto )
	{
	  $array1 = array(   "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç"
						 , "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç" );
	  $array2 = array(   "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c"
						 , "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C" );
	  return str_replace( $array1, $array2, $texto );
	} 
	
	foreach ($_FILES["fotos"]["name"] as $key => $name) 
	{
		if(!empty($_FILES["fotos"]))
		{
			$arquivo   = $_FILES["fotos"];
			if($arquivo["tmp_name"][$key])
			$dimensoes = getimagesize($arquivo["tmp_name"][$key]);
			$nomefoto  = strtolower($_FILES["fotos"]["name"][$key]);
			$nomefoto = retira_acentos($nomefoto);
			$nomefoto = $_SESSION['idUsuario'].'_'.$_GET['f'];
			
			// renomeando foto 1
			if(!file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_1.png"))		
				$nomefoto = $_SESSION['idUsuario'].'_'.$_GET['f'].'_1';
			
			// renomeia foto 2
			if(!file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_2.png"))
			if(file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_1.png")){
				$nomefoto = $_SESSION['idUsuario'].'_'.$_GET['f'].'_2';
			}
			
			// renomeando foto 3
			if(!file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_3.png"))
			if(file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_2.png")){
				$nomefoto = $_SESSION['idUsuario'].'_'.$_GET['f'].'_3';
			}
			#Verificando se a imagem foi enviada
			if($arquivo["name"][$key] != "")
			{
				# Retirando espacos no nome do arquivo
				$espacos = explode(" ",$nomefoto);
				if(count($espacos) > 1)
				{
					$nomefoto = strtolower(ereg_replace(' ', '_', $nomefoto));
				}		
				# Se o Tamanho do arquivo é permitido
				if($arquivo["size"][$key] > $tamanhoMax)
				{
				# Adiciona o erro no array erros[]
				$erros[] = 
				'<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <strong>'.$erro[0].'</strong>
				</div>';
				//"[$nomefoto] $erro[0]";
				}
				# Se a Largura do arquivo é permitida
				if($dimensoes[0] > $larguraMax)
				{
				$erros[] = 
				'<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <strong>'.$erro[1].'</strong>
				</div>';
				//"[$nomefoto] $erro[1]";
				}
				# Se a Altura do arquivo é permitida
				if($dimensoes[1] > $alturaMax)
				{
				$erros[] =
				'<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <strong>'.$erro[2].'</strong>
				</div>';
				// "[$nomefoto] $erro[2]";
				}
				# Verifica se já foram postadas 3 fotos
				if(file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_1.png"))
				if(file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_2.png"))
				if(file_exists("fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto."_3.png"))
				{
				$erros[] = 
				'<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <strong>'.$erro[3].'</strong>
				</div>';			
				//"[$nomefoto] $erro[3]";
				}	
				# Verifica se extensao é pertida
				if(!eregi("^image\/($formatos)$", $arquivo["type"][$key]))
				{
					$erros[] = 
					'<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <strong>'.$erro[4].'</strong>
				</div>';
				//"[$nomefoto] $erro[4]".$arquivo["type"][$key];
				}
				# O array erros nao tiver nenhum indice o upload é permitido/realizado
				if(!isset($erros))
				{
					$imagem_dir = "fotos/".$_SESSION['idUsuario']."/".$_GET['f']."/".$nomefoto.'.png';
					move_uploaded_file($_FILES["fotos"]["tmp_name"][$key], $imagem_dir);
					//$sucesso[] = '<h4><p class="bg-success">['.$nomefoto.'] Foto salva com sucesso!!.</p></h4>';//"[$nomefoto] upload com sucesso.";
					$sucesso[] = '
					 <div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert">
					  	<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					  </button>
					  <strong>Foto salva com sucesso!!</strong>
					</div>';
				}
			}
		}
	}
	# Verifica se existem erros  no array
    if(isset($erros))
    {
		echo "<ul class='erro'>";
        foreach($erros as $erro)
        {
			echo "<p><span>$erro</span></p>";
		}
		echo "</ul>";
	}
	# Verifica quais imagens tiveram sucesso no upload
    if(isset($sucesso))
    {
		echo "<ul class='sucesso'>";
        foreach($sucesso as $up)
        {
			echo "<p><span>$up</span></p>";
		}
		echo "</ul>";
	}
}
?>