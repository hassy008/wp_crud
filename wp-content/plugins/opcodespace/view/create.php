<?php
  $OpsCrudUser = new OpsCrudUser(); //instance extended class file 
?>
<?php 
if (isset($_POST['submit'])) {
   global $wpdb;
  $first_name = sanitize_text_field( $_POST['first_name'] ); 
  $last_name  = sanitize_text_field($_POST['last_name']); 
  $email      = sanitize_email($_POST['email']);
  $phone      = esc_sql($_POST['phone']);

  if($first_name == '' || $last_name == '' || $email == '' || $phone == ''){
    $error = "Field must not be Empty !!";
  } else
    {
    $table_name = $wpdb->prefix.'crud_user';
    $data = array(
      'first_name' => $_POST['first_name'],
      'last_name'  => $_POST['last_name'],
      'email'      => $_POST['email'],
      'phone'      => $_POST['phone']
    );
     $wpdb->insert($table_name, $data);
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

<form action="" method="post">

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
<a href="<?php echo home_url('short-code');?>">Go Back</a>
