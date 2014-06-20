<?php

	$banco = 'local';
	//$banco = 'server';

	if($banco == 'server'){
		$host = "mysql.hostinger.com.br";
		$user = "u388869315_dbamc";
		$pass = "t3051696";
	}

	if($banco == 'local'){
		$host = "localhost";
		$user = "root";
		$pass = "";
	}

	$app = "u388869315_dbmc";

	mysql_connect($host, $user, $pass);
	
	mysql_select_db($app);

	function dbConsulta($sql){
		($a = mysql_query($sql)) or (die ("error: ".mysql_error()));
		return $a;
	}
?>