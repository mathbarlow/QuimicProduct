<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	include_once('../process/functions.php');
	
	$nombre = $_POST['nombre'];
	$clave = md5(parse_str($_POST['clave']));
	$perfil = $_POST['perfil'];

	$sql = "SELECT name FROM products where name = '$nombre';";
	$result = mysql_query($sql);
	$rows = mysql_num_rows($result);

	if ( $rows <= 0 ) {	
		$sql = "INSERT INTO products (name, description, code,status) 
					VALUES ('$nombre', '$clave', '$perfil', 1);";
		$res = mysql_query($sql);
		if ( !$res ) 
			echo "  Error: ".mysql_error();	
		else
			echo "correcto";
	}
	else{
		echo "  Error: Producto ya existe";
	}

?>
