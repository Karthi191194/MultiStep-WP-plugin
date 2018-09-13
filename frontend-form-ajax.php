<?php
function masterFrontendFormAjax(){
	$mform = array();
	foreach($_POST['formdata'] as $key=>$value){
		$mform[$value['name']][] = $value['value'];
	}
	$m_name = $mform['m-name'][0];
	$m_email = $mform['m-email'][0];
	$m_dob = $mform['m-dob'][0];
	$m_age = $mform['m-age'][0];
	$m_address = $mform['m-address'][0];
	$m_phone = $mform['m-phone'][0];
	$m_date = $mform['m-date'][0];
	$m_spouseinculded = $mform['m-spousedetails'][0];
	$m_spousename = $mform['m-spousename'][0];
	$m_spousedob = $mform['m-spousedob'][0];
	$m_spouseage = $mform['m-spouseage'][0];
	$m_spouseaddresscontent = $mform['m-spouseaddresscontent'][0];
	$m_spouseaddress = $mform['m-spouseaddresshidden'][0];
	$m_spousephonecontent = $mform['m-spousephonecontent'][0];
	$m_spousephone = $mform['m-spousephonehidden'][0];
	$m_dependentinculded = $mform['m-dependentdetails'][0];
	$m_dependentname = serialize($mform['m-dependentname[]']);
	$m_dependentdob = serialize($mform['m-dependentdob[]']);
	$m_dependentage = serialize($mform['m-dependentage[]']);
	$m_dependentaddresscontent = serialize($mform['m-dependentaddresscontent[]']);
	$m_dependentaddress = serialize($mform['m-dependentaddresshidden[]']);
	$m_dependentphonecontent = serialize($mform['m-dependentphonecontent[]']);
	$m_dependentphone = serialize($mform['m-dependentphonehidden[]']);
	$m_creditcardacceptance = $mform['m-creditcardacceptancehidden'][0];
	$m_monthlyamount = $mform['m-monthlyamount'][0];
	$m_incidentalcharges = $mform['m-incidentalchargeshidden'][0];
	$m_startdate = $mform['m-startdate'][0];
	$m_enddate = $mform['m-enddate'][0];
	$m_cardtype = $mform['m-cardtype'][0];
	$m_creditcardno = $mform['m-creditcardno'][0];
	$m_expdatemm = $mform['m-expdatemm'][0];
	$m_expdateyy = $mform['m-expdateyy'][0];
	$m_cvc = $mform['m-cvc'][0];
	$m_cardholdername = $mform['m-cardholdername'][0];
	$m_providername = $mform['m-providername'][0];
	$m_provideraddres = $mform['m-provideraddress'][0];
	$m_providerphone = $mform['m-providerphone'][0];
	$m_providerfax = $mform['m-providerfax'][0];
	
	require_once "frontend-form-insert.php";
	require_once "masterpdf.php";
	require_once "emailtemplate.php";
	
	echo "1"; die; //success

}
add_action('wp_ajax_masterform', 'masterFrontendFormAjax');
add_action('wp_ajax_nopriv_masterform', 'masterFrontendFormAjax');