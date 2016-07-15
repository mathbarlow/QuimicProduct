<?php 
/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
include_once('../process/functions.php');
$ide = $_POST['ide'];
$sql_edit= "SELECT id, username, password, profile from users where id =$ide;";
$res_edit = mysql_query($sql_edit);
$edit_clientes = mysql_fetch_array($res_edit);


echo "

<!-- Modal para Editar-->

  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel' align='center'>Editar Usuario</h4>
      </div>

      <div class='modal-body'>
                  <!-- statistics chart built with jQuery Flot -->           
        
        <form class='form-horizontal well' data-async data-target='#rating-modal'>
            <div class='col-lg-10'>
                        <input type='hidden' class='form-control' name='ideditar' id='ideditar' value='$edit_clientes[0]'>
                    </div>
            <div class='form-group'>
                    <label for='nom_edit' class='col-lg-2 control-label'>Nombre</label>
                    <div class='col-lg-10'>
                        <input type='text' class='form-control' name='nom_edit' id='nom_edit' value='$edit_clientes[1]'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='ape_pedit' class='col-lg-2 control-label'>password</label>
                    <div class='col-lg-10'>
                        <input type='text' class='form-control' name='password_edit' id='password_edit' value='$edit_clientes[2]'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='ape_medit' class='col-lg-2 control-label'>profile</label>
                    <div class='col-lg-10'>
                        <input type='text' class='form-control' name='profile_edit' id='profile_edit' value=".$edit_clientes[3].">
                    </div>
                </div>                
        </form>                
                          
      </div>
                    <div id='mensaje class='col-md-6'>
                        
                    </div>
      <div class='modal-footer'>
        <button onclick='MD();' type='button' class='btn-flat'>Guardar</button>
        <button type='button' class='btn-flat white' data-dismiss='modal'>Cerrar</button>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->";

?>
