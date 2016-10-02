
<?php


ob_start();

//$html = file_get_contents("tabla.html");

echo $_POST['html'];

$html = $_POST['html']


require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

if($_POST['style'] == "preview"){
	$dompdf->stream("codexworld",array("Attachment"=>0));
	//$dompdf->stream("codexworld","I");
	//$dompdf->Output('D','filename.pdf');
	//$output = $dompdf->output();
	//file_put_contents('C:\xampp\htdocs\script3\myfile.pdf', $output);
	
}	
else{
	#$dompdf->stream();
	/*
	$dompdf->stream("codexworld","F");
	$mpdf->SetJS('this.print();');
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	*/
	$dompdf->stream("codexworld",array("Attachment"=>1));

}

?>