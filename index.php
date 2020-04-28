<?php 
include 'vendor/autoload.php';
;
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$data = "Welcome to pdf";

// Write some HTML code:
$html = <<<MYPDF
<!DOCTYPE html>
<html>
<head>
	<title>pdf doc</title>
</head>
<body>
	<h2>$data</h2>
</body>
</html>
MYPDF;

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();

?>