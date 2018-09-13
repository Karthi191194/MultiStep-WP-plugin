<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf = new Dompdf();
ob_start();
include 'pdf/patientagreement.tpl';
$html = ob_get_clean();
$pdf->loadHtml($html);
$pdf->setPaper('A4','portrait');
$pdf->render();
$output = $pdf->output();
$timestamp = date("ymdHis");
file_put_contents(wp_upload_dir()['basedir'].'/masterpdf/masterpdf'.$timestamp.'.pdf', $output);

$pdf1 = wp_upload_dir()['baseurl'].'/masterpdf/masterpdf'.$timestamp.'.pdf';

/*update pdf URL to db*/
global $wpdb;
$tablename = $wpdb -> prefix .'masterform';
$wpdb->update( 
	$tablename, 
	array( 
		'pdf1' => $pdf1
	), 
	array( 'id' => $m_insertid ), 
	array( 
		'%s'
	), 
	array( '%d' ) 
);

?>


