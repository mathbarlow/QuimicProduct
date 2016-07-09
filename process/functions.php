<?php

session_start();
mysql_connect("localhost","root","") or die("No se pudo conectar a la BD, Favor revisar servicio MYSQL");
mysql_select_db("jac") or die("No encontro la BD");

function loggedin()
{		
	if(isset($_SESSION['username']) || isset($_COOKIE['username']) )
	{		

		$loggedin = TRUE;
		return $loggedin;

	}

}

?>