<?php
  $OpsCrudUser = new OpsCrudUser(); //instance extended class file 
  $user        = $OpsCrudUser->getRow(['id' => $_GET['editID']]);
  echo "<pre>";
  print_r($user);
  echo "<pre>";
?>
<?php  
if (isset($_POST['submit'])) {
  global $wpdb;
  $first_name  = sanitize_text_field( $_POST['first_name'] );
  $last_name   = sanitize_text_field( $_POST['last_name'] ); 
  $email       = sanitize_email( $_POST['email'] );
  $phone       = esc_sql( $_POST['phone'] );

  if($first_name == '' || $last_name == '' || $email == '' || $phone == ''){
    $error = "Field must not be Empty !!";
  } 
  else {
    $table_name = $wpdb->prefix.'crud_user';
    $data = array(
      'first_name' => $_POST['first_name'],
      'last_name'  => $_POST['last_name'],
      'email'      => $_POST['email'],
      'phone'      => $_POST['phone']
    );
     $wpdb->update($table_name, $data, ['id' => $_POST['id']]);
  }
}
echo "<pre>";
  print_r($data);
echo"</pre>"; 
?>

<?php  
  if(isset($error)){
    echo "<span style='color:red'>".$error."</span>";
  }
?>

<form action="<?php echo home_url('update-crud');?>?editID=<?php echo $user->id; ?>" method="post">

<table>
 <tr>
  <td>First Name</td>
  <td>
    <input type="text" name="first_name" value="<?php echo $user->first_name ?>" />
    <input type="hidden" name="id" value="<?php echo $user->id ?>" />
  </td>
 </tr>
 <tr>
  <td>Last Name</td>
  <td><input type="text" name="last_name" value="<?php echo $user->last_name ?>" /></td>
 </tr>
 <tr>
  <td>Email</td>
  <td><input type="text" name="email" value="<?php echo $user->email ?>"/></td>
 </tr>
 <tr>
  <td>Phone</td>
  <td><input type="int" name="phone" value="<?php echo $user->phone ?>"/></td>
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
<a href="<?php echo home_url('short-code');;?>">Go Back</a>