<?php
$id = $_GET['id'];
global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}masterform WHERE id = $id", OBJECT );

?>
<style>
.master-backend-list td{width: 50%;}
</style>
<div class="wrap master-backend-list">
<h1 >Master Form</h1>
<h3>User Information</h3>
<table style="width:100%;">
<tr>
<td><strong>Name</strong></td>
<td><?php echo $results[0]->name; ?></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td><?php echo $results[0]->email; ?></td>
</tr>
<tr>
<td><strong>DOB(date of birth)</strong></td>
<td><?php echo $results[0]->dob; ?></td>
</tr>
<tr>
<td><strong>Age</strong></td>
<td><?php echo $results[0]->age; ?></td>
</tr>
<tr>
<td><strong>Address(Primary Address)</strong></td>
<td><?php echo $results[0]->address; ?></td>
</tr>
<tr>
<td><strong>Phone #(Primary Phone)</strong></td>
<td><?php echo $results[0]->phone; ?></td>
</tr>
<tr>
<td><strong>Date</strong></td>
<td><?php echo $results[0]->date; ?></td>
</tr>
</table>
<hr>
<h3>Spouse Information</h3>
<table style="width:100%;">
<tr>
<td><strong>Spouse Inculded</strong></td>
<td><?php echo strtoupper($results[0]->spouse_included);?></td>
</tr>
<tr>
<?php if($results[0]->spouse_included == 'yes'){?>
<td><strong>Spouse’s Name</strong></td>
<td><?php echo $results[0]->spousename; ?></td>
</tr>
<tr>
<td><strong>Spouse’s DOB(date of birth)</strong></td>
<td><?php echo $results[0]->spousedob; ?></td>
</tr>
<tr>
<td><strong>Spouse’s Age</strong></td>
<td><?php echo $results[0]->spouseage; ?></td>
</tr>
<tr>
<td><strong>Spouse’s Address</strong></td>
<td><?php if($results[0]->spouseaddress == 0){ echo $results[0]->spousesaddressnew; } else { echo 'Same as primary address.';} ?></td>
</tr>
<tr>
<td><strong>Spouse’s Phone #</strong></td>
<td><?php if($results[0]->spousephone == 0){ echo $results[0]->spousesphonenew; } else { echo 'Same as primary phone.';} ?></td>
</tr>
<?php } ?>
</table>
<hr>
<h3>Dependent(s) Information</h3>
<table style="width:100%;margin-bottom:10px;">
<tr>
<td><strong>Dependent(s) Inculded</strong></td>
<td><?php echo strtoupper($results[0]->dependent_included);?></td>
</tr>
</table>
<?php if($results[0]->dependent_included == 'yes'){ 
$dependentname = unserialize($results[0]->dependentname);
$dependentdob = unserialize($results[0]->dependentdob);
$dependentage = unserialize($results[0]->dependentage);
$dependentaddressnew = unserialize($results[0]->dependentaddressnew);
$dependentaddress = unserialize($results[0]->dependentaddress);
$dependentphonenew = unserialize($results[0]->dependentphonenew);
$dependentphone = unserialize($results[0]->dependentphone);
$dependent_count = count($dependentname);

for($i = 0; $i < $dependent_count; $i++){ ?>
<table style="width:100%;margin-bottom:10px;">
   <tr><td>Dependent Name<?php echo $i+1;?></td><td><?php echo $dependentname[$i]; ?></td>
   <tr><td>Dependent DOB<?php echo $i+1;?></td><td><?php echo $dependentdob[$i]; ?></td>
   <tr><td>Dependent Age<?php echo $i+1;?></td><td><?php echo $dependentage[$i]; ?></td>
   <tr><td>Dependent Address<?php echo $i+1;?></td><td><?php echo $dependentaddress[$i] == 0 ? $dependentaddressnew[$i] : 'Same as primary address.'; ?></td>
   <tr><td>Dependent Phone<?php echo $i+1;?></td><td><?php echo $dependentphone[$i] == 0 ? $dependentphonenew[$i] : 'Same as primary phone.' ; ?></td>
</table>
<?php }
 } ?>

<hr>
<h3>Credit Card Authorization</h3>
<table style="width:100%;">
<tr>
<td><strong>Monthly Amount</strong></td>
<td>$<?php echo $results[0]->monthlyamount; ?></td>
</tr>
<tr>
<td><strong>Incidental Charges</strong></td>
<td><?php echo $results[0]->incidentalcharges; ?></td>
</tr>
<tr>
<td><strong>Start Date</strong></td>
<td><?php echo $results[0]->startdate; ?></td>
</tr>
<tr>
<td><strong>End Date</strong></td>
<td><?php echo $results[0]->enddate; ?></td>
</tr>
<tr>
<td><strong>Card Type</strong></td>
<td><?php echo $results[0]->cardtype; ?></td>
</tr>
<tr>
<td><strong>Credit Card Number</strong></td>
<td><?php echo $results[0]->creditcardnumber; ?></td>
</tr>
<tr>
<td><strong>Expiration Date [MM]</strong></td>
<td><?php echo $results[0]->expirationdate_mm; ?></td>
</tr>
<tr>
<td><strong>Expiration Date [YY]</strong></td>
<td><?php echo $results[0]->expirationdate_yy; ?></td>
</tr>
<tr>
<td><strong>CVC (Security Code)</strong></td>
<td><?php echo $results[0]->CVC; ?></td>
</tr>
<tr>
<td><strong>Cardholder’s Name (as it appears on the card)</strong></td>
<td><?php echo $results[0]->cardholdername; ?></td>
</tr>
</table>
<hr>
<h3>Previous Provider Information</h3>
<table style="width:100%;">
<tr>
<td><strong>Provider’s Name</strong></td>
<td><?php echo $results[0]->providername; ?></td>
</tr>
<tr>
<td><strong>Provider’s Address</strong></td>
<td><?php echo $results[0]->provideraddress; ?></td>
</tr>
<tr>
<td><strong>Provider’s Phone #</strong></td>
<td><?php echo $results[0]->providerphone; ?></td>
</tr>
<tr>
<td><strong>Provider’s Fax #</strong></td>
<td><?php echo $results[0]->providerfax; ?></td>
</tr>
</table>
<hr>
<h3>PDF Links</h3>
<table style="width:100%;">
<tr>
<td><strong>PDF1</strong></td>
<td><a target="_blank" href="<?php echo $results[0]->pdf1; ?>"><?php echo $results[0]->pdf1; ?></a></td>
</tr>
</table>
<!--<em>*Date format (MM/DD/YY)</em>-->
</div>