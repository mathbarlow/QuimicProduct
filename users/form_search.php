<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	sleep(1);
	include("../process/functions.php");
	$sql = "SELECT * FROM users WHERE status = 1;";
	$res = mysql_query($sql);
	$ide = "";
	echo "<div id='' class='datatables-page' style='margin-top:0px;'>";            
	echo "           <div class='row'>";
	echo "               <div class='col-md-11'>";
	echo "                    <table id='example' class='table table-hover'>";
	echo "                        <thead>";
	echo "                            <tr>";
	echo "                                <th style = 'display:none;' tabindex='0' rowspan='1' colspan='1'>ID</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Nombre</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Clave</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Perfil</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1' class=''></th>";
	echo "                            </tr>";
	echo "                        </thead>";
	echo "                        <tbody>";
			while ($clientes = mysql_fetch_array($res)) {
	echo "                            <tr>";
	echo "                                <td style = 'display:none;'>$clientes[0]</td>";
	echo "                                <td width='100%'>".$clientes[1]."</td>";
	echo "                                <td>".$clientes[2]."</td>";
	echo "                                <td class='center'>$clientes[3]</td>";
	echo "                                <td class='center'><a onclick='MU(".$ide=$clientes[0].");' style='cursor:pointer;'><i class='glyphicon glyphicon-eye-open'></i></a></td>";
	echo "                            </tr>";
			}
	echo "                        </tbody>";
	echo "                    </table>";
	echo "                </div>";
	echo "            </div>";
	echo "        </div>";

	


	echo " <script type='text/javascript'>
			$(document).ready(function() {
				$('#example').dataTable({
					'sPaginationType': 'full_numbers',
					'oLanguage':{
						'sProcessing':     'Cargando...',
						'sLengthMenu':     'Filtrar por: _MENU_ registros',
						'sZeroRecords':    'No se encontraron resultados',
						'sEmptyTable':     'Ningún dato disponible en esta tabla',
						'sInfo':           'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
						'sInfoEmpty':      'Mostrando registros del 0 al 0 de un total de 0 registros',
						'sInfoFiltered':   '(filtrado de un total de _MAX_ registros)',
						'sInfoPostFix':    '',
						'sSearch':         'Buscar:',
						'sUrl':            '',
						'sInfoThousands':  '',
						'sLoadingRecords': 'Cargando...',
						'oPaginate': {
							'sFirst':    'Primero',
							'sLast':     'Ultimo',
							'sNext':     'Siguiente',
							'sPrevious': 'Anterior'
						},
						'oAria': {
							'sSortAscending':  ': Activar para ordenar la columna de manera ascendente',
							'sSortDescending': ': Activar para ordenar la columna de manera descendente'
						}
					},
					'aaSorting': [[ 0, 'desc' ]],//ordenar
					'iDisplayLength': 5,
					'aLengthMenu': [[5, 10, 20, -1], [5, 10, 20, 'All']]
				});
			});			
			</script>";
 ?>