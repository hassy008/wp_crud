<?php
$OpsCrudUser = new OpsCrudUser(); //instance extended class file
$allUser 	 = $OpsCrudUser->getAll('id');
 // echo "<pre>";
 //    print_r($allUser);
 // echo"</pre>"; 
?>
<a href="<?php echo home_url('add-user');?>"> Add User </a>	

<table class="tblone">
<tr>
	<th width="10%">Serial</th>
	<th width="15%">First Name</th>
	<th width="15%">last Name</th>
	<th width="15%">Email</th>
	<th width="15%">Phone</th>
	<th width="20%">Action</th>
</tr>
<?php //$i=1;
	foreach ($allUser as $user) {
?>			
<tr>
	<td><?php /*echo $i++*/ echo $user->id; ?></td>
	<td><?php echo $user->first_name; ?></td>
	<td><?php echo $user->last_name; ?></td>
	<td><?php echo $user->email; ?></td>
	<td><?php echo $user->phone; ?></td>
	<td>
		<a href="<?php echo home_url('update-crud');?>?editID=<?php echo ($user->id); ?>">
 	 Edit</a>
 	  ||<a href="</?delete=<?php echo ($user->id); ?>"> Delete</a>
 	 <!--  <a href="<?php echo home_url('delete-crud');?>?delete=<?php echo ($user->id); ?>"> Delete</a> -->
 	</td>
</tr>
<?php } ?>
<!-- <?php //} else{ ?>
	<p>Data is not available !!</p>
<?php //} ?>	 -->

</table>

