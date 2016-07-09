<?php

include("others/functions.php");

if (!loggedin())
{
    header("Location: index.php");
    exit();
}

if (isset($_SESSION['username'])){ $username = $_SESSION['username']; } 
if (isset($_COOKIE['username'])) { $username = $_COOKIE['username'];  }


if (isset($username) and isset($session)){
    echo "<div class='row'><div class='container-fluid'><div class='side-body'><h1>PERRAS!</h1><p>este menu PRINCIPAL</p></div></div></div>";    
    exit();   
}

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MENU</title>

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <script src="js/jquery-3.0.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js" type="text/javascript"></script>
    
</head>

<body>

 <div class="row">
    <!-- Menu -->
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--
            <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                <img src="img/logo.png" alt="LOGO">
            </a>
            -->
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $username; ?> T <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Editar Perfil</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Cambiar Clave</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Salir</a></li>
                </ul>
            </li>
        </ul>
    </nav>    
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="side-menu">


        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <?php

                    if (isset($username)){
                        
                      
                         
                        $loginx = mysql_query("SELECT profile FROM users WHERE username='$username'");
                        $rowx = mysql_fetch_assoc($loginx);
                        $pedry = "jola estjsbdjksbdkj";                        
                        
                           switch ($rowx['profile']){
                                case 1:
                                     echo ('<li><a href="products.php"><span class="glyphicon glyphicon-home"></span>LA QUE TE PARIO!!</a></li>');
                                    echo ('<li><a href="products.php"><span class="glyphicon glyphicon-home"></span>HUEPUTAS!</a></li>');break;                    
                                case 2:
                                    
                                    echo ("<li><a href='products.php'><span class='glyphicon glyphicon-home'></span> Listar Productos</a></li>");
                                    echo ("<li><a href='#'><span class='glyphicon glyphicon-edit'></span> Adicionar Producto</a></li>");
                                    echo ("<li><a href='#'><span class='glyphicon glyphicon-tag'></span> Modificar/Eliminar Producto</a></li>");break;
                                case 3: 
                                    echo ("<li><a href='products.php'><span class='glyphicon glyphicon-home'></span> USUARIOS</a></li>");
                                    echo ("<ul><li><a href='users/create.php'><span class='glyphicon glyphicon-home'></span> Crear Usuario</a></li></ul>");
                                    echo ("<ul><li><a href='products.php'><span class='glyphicon glyphicon-home'></span> Buscar Usuario</a></li></ul>");
                                    echo ("<ul><li><a href='products.php'><span class='glyphicon glyphicon-home'></span> Administrar Usuario</a></li></ul>");
                     
                                    echo ("<li><a href='#'><span class='glyphicon glyphicon-edit'></span> Adicionar Producto</a></li>");
                                    echo ("<li><a href='#'><span class='glyphicon glyphicon-tag'></span> Modificar/Eliminar Producto</a></li>");break;
                                    echo ('<li><a href="products.php"><span class="glyphicon glyphicon-home"></span>'.$pedry.'</a></li>');
                                    echo ('<li><a href="products.php"><span class="glyphicon glyphicon-home"></span>MI PERRRIT</a></li>');break;
                                    
                                }
                    }            
                        
                    
                ?>       
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> SALIR</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->


 
    </div>   

                
</div>
     
<?php $session = 1; ?>




