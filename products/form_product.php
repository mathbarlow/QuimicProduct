
<link href="../css/style.css" rel="stylesheet">

<?php

	
	
	//ob_start();
	include("../process/functions.php");
	require_once '../dompdf/autoload.inc.php';

	echo "<div class='center'><h4>VISTA DETALLADA DEL PRODUCTO</h4></div>";

	$id = $_POST["id"];
	$sql = mysql_query("SELECT * FROM products WHERE id='$id'");
    $rowx = mysql_fetch_assoc($sql);

	$name = $rowx['name'];
	$description = $rowx['description'];
	$code = $rowx['code'];
	$section1 = utf8_encode( $rowx['seccion1'] );
	$section2 = utf8_encode( $rowx['seccion2'] );
	$section3 = utf8_encode( $rowx['seccion3'] );
	$section4 = utf8_encode( $rowx['seccion4'] );
	//print utf8_encode($rowx['seccion1'])."<br><br>";
	//print utf8_encode($rowx['seccion2']."<br>");

$htmlcode = "


<h1>{$name}</h1>

<style type='text/css'>
    textarea { border: none; font-size: 11px; position: relative; text-align: left; word-wrap: break-word} 
    input { font-size: 18px; }
    table, th, td { border: 1px solid black; font-size: 12px}
    div {display:inline-block; border: solid 0px #000; min-height:10px; text-align: justify}
</style>

	<table style='width: 100%;' border='1' cellspacing='0' cellpadding='0' height='11px' >
		<tbody>

		<tr>	
			<td colspan='3' rowspan='2' valign='middle' align='center'><img height='80px' width='80px'  src='cuadrado.png'></img></td>
			<td align='center' width='50%'><b>TARJETA DE&nbsp;EMERGENCIA</td>
			<td rowspan='2' valign='middle' align='center' width='50%'><img height='80px' width='80px'  src='inflamable.png'></img></td>
		</tr>
		<tr>		
			<td align='center'><font color='#C41212'><strong>{$name}</strong></font></td>
			
		</tr>

		<tr>
			<th colspan='2' bgcolor='#3551E0' width='40%' ><font color='white'>SALUD</th>
			<td width='20px' align='center'>2</td>
			<td colspan='2' rowspan='4'>
				<div contentEditable='true'>{$description}</div></td>
			
		</tr>
		<tr>
			<th colspan='2' bgcolor='#E0354D' ><font color='white'>INFLAMABILIDAD</th>
			<td align='center'>8</td>	
		</tr>
		<tr>
			<th colspan='2' bgcolor='#E0AE35' ><font color='white'>PELIGRO FISICO</th>
			<td align='center'>82</td>	
		</tr>
		<tr>
			<th colspan='2' bgcolor='#E3E4E7' >PROTECCION SOCIAL</th>
			<td align='center'>8</td>	
		</tr>
		<tr>
			<th colspan='5'>&nbsp;</th>
			
		</tr>
		<tr>
			<th colspan='2'>&nbsp;CODIGO</th>
			
			<td colspan='3' style='font-size: 11px'>&nbsp;&nbsp;{$code}</td>
			
		</tr>
		</tbody>
	</table>

	<!--  TABLA DE SECCIONES -->
	<br>
	<br>
	<table width='100%'>
	  <tr><th height='20' bgcolor='#B1ACAC'><font color='black'><b>TARJETA DE EMERGENCIA<b></font></th></tr>
	  <tr><th ><font color='red'><b>{$name}<b></font></th></tr>
	  <tr><th height='5' bgcolor='#2E09B7' align='left'><font color='white'><b>SECCIÓN 1. IDENTIFICACIÓN DEL PRODUCTO QUÍMICO<b></font></th></tr>
	  <tr>
	  	<th>
			<div contentEditable='true'> 
				{$section1}
			</div>
		</th>
	  </tr>
	  <tr><th height='5' bgcolor='#2E09B7' align='left'><font color='white'><b>SECCIÓN 2. IDENTIFICACIÓN DE PELIGROS<b></font></th></tr>
	  <tr>
	  	<th>
			<div contentEditable='true'> 
				{$section2}<br>
			</div>
		</th>
	  </tr>
	  <tr><th height='5' bgcolor='#7309B7' align='left'><font color='white'><b>SECCIÓN 3. CONTROLES DE EXPOSICIÓN, PROTECCIÓN PERSONAL<b></font></th></tr>
	  <tr>
	  	<th>
			<div contentEditable='true'> 
				{$section3}
			</div>
		</th>
	  </tr>
	</table>


";

$dbResult = "<b>{$table}</b>";

	//echo "<br><embed src='http://192.168.0.111/script3/demo.pdf' type='application/pdf' width='180%' height='550'></embed>";

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($htmlcode);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->Output('D','preview.pdf');
$output = $dompdf->output();

$dbResult = utf8_decode( $htmlcode );
/* */
file_put_contents("preview.pdf", $output);
file_put_contents("preview.html", $dbResult );

$htmlresult = file_get_contents("preview.html");

echo "HOLA MI PERROS EL PRODUCTO QUE ESCOGIO> {$name}<br>";

echo "<a class='buttonref' href=\"preview.pdf\" onclick=\"window.open(this.href, 'mywin',
'left=-20,top=-20,width='+(screen.width -13)+',height='+(screen.availHeight - 65)+',toolbar=0,resizable=0'); return false;\" >Abrir en ventana</a>";

echo "<input type='button' value='Inicio' id='boton' name='boton' /> ";

echo "<br><br><embed src='preview.pdf' type='application/pdf' width='97%' height='550'></embed>";



?>

<form action="form_product.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Run me now!">
</form>

<script type="text/javascript">

 $('#boton').click(function() {

 	console.log("lo presiono");

 	
 	var data = '<?= $htmlresult ?>';

 	console.log(data);
	/*
	$.post('file_operation.php', {style:'download', html: myvar}, function(data) {
          //error check here
        });
    return false;
	*/
 });

</script>

</body>
</html>
