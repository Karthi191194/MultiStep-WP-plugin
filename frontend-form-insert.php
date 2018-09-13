<?php 
global $wpdb;
$tablename = $wpdb -> prefix .'masterform';

$wpdb->insert( 
	$tablename, 
	array( 'name' => $m_name,
		   'email' => $m_email,
		   'dob' => $m_dob,
		   'age' => $m_age,
		   'address' => $m_address,
		   'phone' => $m_phone,
		   'date' => $m_date,
		   'spouse_included' => $m_spouseinculded,
		   'spousename' => $m_spousename,
		   'spousedob' => $m_spousedob,
		   'spouseage' => $m_spouseage,
		   'spousesaddressnew' => $m_spouseaddresscontent,
		   'spouseaddress' => $m_spouseaddress,
		   'spousephone' => $m_spousephone,
		   'spousesphonenew' => $m_spousephonecontent,
		   'dependent_included' => $m_dependentinculded,
		   'dependentname' => $m_dependentname,
		   'dependentdob' => $m_dependentdob,
		   'dependentage' => $m_dependentage,
		   'dependentaddressnew' => $m_dependentaddresscontent,
		   'dependentaddress' => $m_dependentaddress,
		   'dependentphonenew' => $m_dependentphonecontent ,
		   'dependentphone' => $m_dependentphone,
		   'monthlyamount' => $m_monthlyamount,
		   'incidentalcharges' => $m_incidentalcharges,
		   'startdate' => $m_startdate,
		   'enddate' => $m_enddate,
		   'cardtype' => $m_cardtype,
		   'creditcardnumber' => $m_creditcardno,
		   'expirationdate_mm' => $m_expdatemm,
		   'expirationdate_yy' => $m_expdateyy,
		   'CVC' => $m_cvc,
		   'cardholdername' => $m_cardholdername,
		   'providername' => $m_providername,
		   'provideraddress' => $m_provideraddres,
		   'providerphone' => $m_providerphone,
		   'providerfax' => $m_providerfax ), 
	array( '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s','%d','%s', '%d','%s', '%s', '%s','%s','%s','%s', '%s', '%s', '%d', '%d', '%s', '%s','%s', '%s', '%d', '%d', '%d', '%s','%s', '%s', '%s', '%s' ) 
	);

$m_insertid = $wpdb->insert_id;	