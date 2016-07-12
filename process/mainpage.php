<?php

include("functions.php");

if (!loggedin())
{
    header("Location: ../index.php");
    exit();
}

if (isset($_SESSION['username'])){ $username = $_SESSION['username']; } 
if (isset($_COOKIE['username'])) { $username = $_COOKIE['username'];  }


if (isset($username) and isset($session)){
    echo "<div class='row'><div class='container-fluid'><div class='side-body'><h1>PERRAS!</h1><p>este menu PRINCIPAL</p></div></div></div>";    
    exit();   
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <title>JAC - QuimicProduct</title>
    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
  
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>    
    
    <script class="include" type="text/javascript" src="../js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Mostrar/Ocultar Menu"></div>
            </div>
            
            <a href="../process/mainpage.php" class="logo"><b>JAC QUIMIC</b></a>

            <div class="top-menu">
                <ul class="nav pull-right  pull-right top-menu">
                    <li><a class="logout" href="login.html">Salir</a></li>
                </ul>

            </div>
            <!-- Single button -->
            
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="../img/profile.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">ADMINISTRADOR</h5>
                    
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-user-md"></i>
                          <span>Perfil</span>
                      </a>
                  </li>

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
                                    
                                    echo ('<li class="sub-menu active"><a href="javascript:;" ><i class="glyphicon glyphicon-list-alt"></i><span>Productos</span></a>');
                                    echo ('<ul class="sub"><li><a href="../products/create.php" ><i class="fa fa-plus-circle fa-fw"></i>Adicionar</a></li>');
                                    echo ('<li><a href="buttons.html"><i class="fa fa-search" ></i>Buscar</a></li>');
                                    echo ('<li><a href="panels.html"><i class="fa fa-cogs" ></i>Administrar</a></li></ul></li>');break;
                                    
                                case 3: 
                                    echo ("<li class='sub-menu'><a href='' class='' id='usermenu'><i class='fa fa-users'></i><span>Usuarios</span></a>");
                                    echo ("<ul class='sub'><li><a href='../users/create.php'><i class='fa fa-plus fa-fw'></i>Adicionar</a></li>");
                                    echo ("<li><a href='../users/search.php'><i class='fa fa-search'></i>Buscar</a></li>");
                                    echo ("<li><a href='panels.html'><i class='fa fa-cogs' ></i>Administrar</a></li></ul></li>");
                     
                                    echo ('<li class="sub-menu"><a href="" class="" id="productsmenu"><i class="glyphicon glyphicon-list-alt"></i><span>Productos</span></a>');
                                    echo ('<ul class="sub"><li><a href="../products/create.php"><i class="fa fa-plus-circle fa-fw"></i>Adicionar</a></li>');
                                    echo ('<li><a href="../products/search.php"><i class="fa fa-search" ></i>Buscar</a></li>');
                                    echo ('<li><a href="panels.html"><i class="fa fa-cogs" ></i>Administrar</a></li></ul></li>');break;
                                    
                                }
                    }            
                        
                    
                ?>       
               
                <li><a href="panels.html"><i class="fa fa-sign-out" ></i>SALIR</a></li>

                      
                      
                      
                      

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      
  <!--common script for all pages-->
            <script src="../js/common-scripts.js"></script>



    



<?php $session = 1; ?>




