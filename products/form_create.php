<?php
  include("../process/mainpage.php");
?>
    
        <!-- libraries -->
    <link href="../css/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../css/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="../css/select2.css" type="text/css" rel="stylesheet" />
    <link href="../css/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="../css/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link rel="stylesheet" type="text/css" href="../css/elements.css" />
    <link rel="stylesheet" type="text/css" href="../css/icons.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../css/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/form-showcase.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/datatables.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/pb.css" type="text/css"/>
    <link rel="stylesheet" href="../css/jquery-ui.css" />

    <script src="../js/wysihtml5-0.3.0.js"></script>
    <script src="../js/bootstrap.datepicker.js"></script>
    <script src="../js/jquery.uniform.min.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/jquery-ui-1.10.2.custom.min.js"></script>  
    <script src="../js/theme.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/personal.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> ADMINISTRACION DE PRODUCTOS</h3>
            <div class="col-lg-12">
                <p>En este modulo podra administrar el inventario de los productos del sistema</p>
                </div>
            <div id="dialog1" title="Error Agregar Producto" hidden="hidden">Producto ya existe, por favor cambiar el Nombre</div>    
            <div class="row mt">
                <!-- main container -->
    <div class="content">

        <!-- end upper main stats -->

        <div id="pad-wrapper" class="form-page">

            <!-- statistics chart built with jQuery Flot -->
            <div class="row form-wrapper">
                <!-- left column -->
                <div id="miPagina" class="col-md-5 column pull-left">

                    <form method="POST">
    
                        <div class="field-box">
                            <label>Producto:</label>
                            <div class="col-lg-3">
                                <input name="nombre" id="nombre" class="form-control" required autofocus type="text">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Descripcion:</label>
                            <div class="col-md-7">
                                <input name="clave" id="clave" class="form-control" required type="text">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Codigo:</label>
                            <div class="col-md-7">
                                <input name="perfil" id="perfil" class="form-control" required type="text">
                            </div>                            
                        </div>
                        

                        <div class="action">
                            <input type="submit"  class="btn-flat" id="registrar" value="Registrar" ></input>
                            <input type="button" onclick="listarProductos();"  class="btn-flat" id="mostrar" value="Mostrar" ></input>
                        </div> 
                        
                    </form>

                    <div id="mensaje" class="col-md-6">
                        
                    </div>

                </div>

                <!-- right column -->
                <div id="miTabla" class="col-md-7 column pull-right">
                    <div id="cargando"></div>
                </div>
            </div>
        </div>
    </div>



            </div>
            
        </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->



            <!--common script for all pages-->            
            <script>
              $(document).ready(function(){
                  $("#productsmenu").toggleClass('active');                  
              });
            </script>  
                <!-- scripts -->
            <script src="../js/personal.js"></script>
            <script type="text/javascript">
                registrarProducto();
            </script>
             

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - JAC
              <a href="form_create.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    


  </body>
</html>


