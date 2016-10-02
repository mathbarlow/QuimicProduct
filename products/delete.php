<?php  
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	include_once('../process/functions.php');
	$idcli=$_POST['idcli'];
	$sql = "UPDATE products SET status=0  WHERE id = $idcli;";// eliminamos cambiando el estado
	$res = mysql_query($sql);

	if ( isset($res) )
		echo "Correcto";
	else
		echo "Incorrecto";
?>
