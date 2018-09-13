<div class="wrap">
	<h1>Master Form</h1>
<?php 
global $wpdb;
$tablename = $wpdb -> prefix .'masterform';
$rows = $wpdb->get_results( "SELECT id, name, date, monthlyamount FROM $tablename" );
?>
	<table id="master-backend-list" class="stripe">
		<thead>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Name</th>
				<th>Monthly Amount</th>
				<th>Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<?php foreach($rows as $key => $value){ ?>
				<td><?php echo $value->id; ?></td>
				<td><?php echo $value->date; ?></td>
				<td><?php echo $value->name; ?></td>
				<td>$<?php echo $value->monthlyamount; ?></td>
				<td><a  href="<?php echo admin_url().'admin.php?page=masterformdetails&id='.$value->id; ?>">View Details</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<!--admin backend list-->
<script>
jQuery(document).ready( function () {
    jQuery('#master-backend-list').DataTable({
        "ordering": false
    } );
} );
</script>
<style>
#master-backend-list td{ text-align: center;}
#master-backend-list td a{ text-decoration: none;}
</style>