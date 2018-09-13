<?php 
$pdf_link = $pdf1;
$admin_email = get_option('admin_email');

$to = $m_email;
$subject = "Master Form";

$message = "
<html>
<head>
<title>Master Form</title>
</head>
<body>
<p>Hello $m_name,</p>
<p>Thank you for submitting the form. We have received your request.</p>
<p><a href='$pdf_link'>Click here</a> to view the PDF or copy paste the below link into your browser.$pdf_link</p>
</body>
</html>
";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <$admin_email>" . "\r\n";
$headers .= "Cc: $admin_email" . "\r\n";

$mail = mail($to,$subject,$message,$headers);
?>