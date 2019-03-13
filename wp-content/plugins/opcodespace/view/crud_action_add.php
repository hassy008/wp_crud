
<form class="" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
    <input type="hidden" name="action" value="crud_user_link">
    <?php wp_nonce_field('userAdd-nonce', 'userAdd');?>

<table>
 <tr>
  <td>First Name</td>
  <td><input type="text" name="first_name" placeholder="Please enter name"/></td>
 </tr>
 <tr>
  <td>Last Name</td>
  <td><input type="text" name="last_name" placeholder="Please enter name"/></td>
 </tr>
 <tr>
  <td>Email</td>
  <td><input type="text" name="email" placeholder="Please enter email"/></td>
 </tr>
 <tr>
  <td>Address</td>
  <td><input type="text" name="address" placeholder="Please enter Address"/></td>
 </tr>
 <tr>
  <td>Phone</td>
  <td><input type="int" name="phone" placeholder="Please enter Phone"/></td>
 </tr>
 <tr>
  <td></td>
  <td>
  <input type="submit" name="submit" value="Submit"/>
  <input type="reset" Value="Cancel" />
  </td>
 </tr>

</table>
</form>
<a href="<?php echo home_url('crud_action_select');?>">Go Back</a>