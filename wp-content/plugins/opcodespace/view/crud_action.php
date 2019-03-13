<?php 
//fetch data from database, so use getAll() function
$OpsActionCrud = new OpsCrud();
$allUser 	   = $OpsActionCrud->getAll('id');
echo "<pre>";
print_r($allUser);
echo "</pre>";
?>
<?php 
//Delete data from here
$delete = $OpsActionCrud->delete(['id' => $_GET['delete']]);
?>

<a href="<?php echo home_url('crud-action-add'); ?>"> Add User </a>

<table class="tblone">
    <tr>
        <th width="10%">Serial</th>
        <th width="15%">First Name</th>
        <th width="15%">last Name</th>
        <th width="15%">Address</th>
        <th width="15%">Email</th>
        <th width="15%">Phone</th>
        <th width="20%">Action</th>
    </tr>
    <?php  //$i=1;
	foreach ($allUser as $user) {
		?>
    <tr>
        <td><?php echo $user->id; ?></td>
        <td><?php echo $user->first_name; ?></td>
        <td><?php echo $user->last_name; ?></td>
        <td><?php echo $user->address; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->phone; ?></td>
        <td>
            <a href="<?php echo home_url('crud-action-update'); ?>?editID=<?php echo ($user->id); ?>">
                Edit</a>
            ||<a href="<?php echo home_url('crud_action_select'); ?>?delete=<?php echo ($user->id); ?>"> Delete</a>
        </td>
    </tr>
    <?php 
} ?>
    <!-- <?php  ?>
	<p>Data is not available !!</p>
<?php  ?>	 -->

</table> 