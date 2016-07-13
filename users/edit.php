<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	include_once('../process/functions.php');
	$ideditar = $_POST['ideditar'];
	$nom_edit = $_POST['nom_edit'];
	$password_edit = md5($_POST['password_edit']);
	$profile_edit = $_POST['profile_edit'];

	$sql = "SELECT id FROM users where username = '$nom_edit';";  // Juan - 4
	$result = mysql_query($sql);
	$id_user = mysql_fetch_array($result);
	

	if ($id_user[0] != $ideditar){		
		
		$sql = "SELECT username FROM users where username = '$nom_edit';"; // Luisa - 7
		$result = mysql_query($sql);
		$rows = mysql_num_rows($result);
		
		if ( $rows > 0) {	
			echo "  Error: Nombre ya existe";
			die();
		}	
	}
		$sql= "UPDATE users SET username = '$nom_edit', password='$password_edit', profile='$profile_edit' WHERE id =$ideditar;";
		$res = mysql_query($sql);

		if ( isset($res) )
			echo "Correcto";
		else
			echo "Incorrecto";	
?>

