<?php
$id = $m_insertid;
global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}masterform WHERE id = $id", OBJECT );
?>
<html>
<head>
<title>MasterPDF</tile>
</head>
<body>
<div>
<h2 style="text-align:center;">PATIENT AGREEMENT ACCESS ENTERPRISE, LLC d/b/a ACCESS FAMILY MEDICINE</h2>
<p>Test PDF from <?php echo $results[0]->name; ?></p>
</div>
</body>
</html>