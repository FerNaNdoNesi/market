<?php
	require_once dirname (__FILE__)."/library/library.php";
	session_start();
	//echo $_POST['inputEmail'];
	//echo $_POST['inputSenha'];
	//echo $_POST['local'];
	
	
	if(isset($_POST['inputEmail']) && isset($_POST['inputSenha'])){
		$email = addslashes($_POST['inputEmail']);
		$senha = addslashes($_POST['inputSenha']);
		
		$r=constroiDadosLogin($email, $senha);
		
		if(mysql_num_rows($r) == 0){
			//$_SESSION['error'] = 5;
			header("Location: entrar.php?e=5"); 
			//header("Location: entrar.php?e=5&l=".$_POST['local']." "); // dont existing user
		}
		else if(mysql_num_rows($r) == 1){
			$_SESSION['acess'] = TRUE;
			$row = mysql_fetch_array($r);
			$_SESSION['nome'] = $row['nome'];
			$_SESSION['idUsuario'] = $row['idUsuario'];			
			header("Location: ".$_POST['local']." ");
		}
	}
?>