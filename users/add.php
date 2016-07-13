<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	include_once('../process/functions.php');
	
	$nombre = $_POST['nombre'];
	$clave = md5(parse_str($_POST['clave']));
	$perfil = $_POST['perfil'];

	$sql = "SELECT username FROM users where username = '$nombre';";
	$result = mysql_query($sql);
	if ( !$result ) {	
		$sql = "INSERT INTO users (username, password, profile,status) 
					VALUES ('$nombre', '$clave', '$perfil', 1);";
		$res = mysql_query($sql);
		if ( !$res ) 
			echo "  Error: ".mysql_error();	
		else
			echo "correcto";
	}
	else{
		echo "  Error: Usuario ya existe";
	}

?>
