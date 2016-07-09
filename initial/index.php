<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    
    <title>LOGIN PAG QUIMIC</title>

    <link href="css/bootstrap.css" rel="stylesheet"> 
    <link href="css/login.css" rel="stylesheet">
    <script src="js/jquery-3.0.0.min.js" type="text/javascript"></script>    

    <script language= javascript type= text/javascript >
          function showalert(message,alerttype) {
    		$('#alert_placeholder').append('<div id="alertdiv" class="alert ' +  alerttype + '"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>')
    		setTimeout(function() { 
		      $("#alertdiv").remove();
		    }, 3000);
 		 } 		 
    </script>
  </head>

  <body>

	<?php	
		include 'others/functions.php';
	?>

	<form class="form form-signup" role="form" action="index.php" method="POST">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-md-offset-4">
            	<div class="panel panel-default">
                	<div class="panel-body" align="center">
                    	<h4 class="text-center" style="padding:8px"><b>INICIAR SESION</h4><p>                 

	                    <div class="form-group">
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	                            <input type="text" class="form-control" name="username" placeholder="Usuario" required autofocus />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
	                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required/>
	                        </div>
	                    </div>

             			<div class="form-group" >
			            	<input type="checkbox" name="rememberme" id="fancy-checkbox-primary" autocomplete="off" />
			            	<div class="[ btn-group btn-block btn-group-justified text-center]" >			                
			            		<label  for="fancy-checkbox-primary" class="[ btn btn-primary center-block ]" style="width: 12%; height:33px">
			                    	<span align="center"  class="[ glyphicon glyphicon-ok ]" ></span>
			                    	<span align="center"> </span>
			                	</label>
			                	<label for="fancy-checkbox-primary" class="[ btn btn-default center-block ]" style='width: 88%; height:33px'>Recordar sesion en este PC</label>
			            	</div>
			        	</div>	
			        </div>
                <input class="btn btn-primary btn-block"  type="submit" name="login" value="INGRESAR" >      
				</div>
            	<div id="alert_placeholder" align="center"></div> 
       		</div>
    	</div>
	</div>
	</form>

  </body>
</html>

<?php

if (loggedin())
{

	if (isset($_SESSION['username'])){ $username = $_SESSION['username']; }	
	if (isset($_COOKIE['username'])) { $username = $_COOKIE['username'];  }

	if (isset($username)){
		header("Location: mainpage.php");
		exit();
	}		
}

if (isset($_POST['login']))	//Obtener datos
{	

	$username = $_POST['username'];
	$password = $_POST['password'];
	if (isset($_POST['rememberme'])){ 
		$rememberme = $_POST['rememberme']; }
	else{ $rememberme = "off"; }	

	if($username&&$password){
		$password = md5($password);
		
		$login = mysql_query("SELECT * FROM users WHERE username='$username' and password='$password'");		

		if (mysql_num_rows($login) == 0)
		{
			echo "<script>showalert('<b>Error: </b>Usuario o contraseña no valida','alert-danger fade in');</script>";							
			die();
		}	
		while ($row = mysql_fetch_assoc($login)) 
		{	

			if ($rememberme=="on")
				setcookie("username",$username, time()+(60*60*24*365));
			else if ($rememberme=="off")
				$_SESSION['username']=$username;
				header("Location: mainpage.php");
				exit();
					
		}
	}
}	

?>