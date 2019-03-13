<?php
$editCrud = new OpsCrud();
$getData  = $editCrud->getRow(['id' => $_GET['editID']]);
echo "<pre>";
print_r($getData);
echo "</pre>";
?>
<form class="" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
    <input type="hidden" name="action" value="crud_user_edit_link">
    <?php wp_nonce_field('userEdit-nonce', 'userEdit'); ?>

    <table>
        <tr>
            <td>First Name</td>
            <td>
                <input type="text" name="first_name" value="<?php echo $getData->first_name; ?>" />
                <input class="form-control" type="text" name="data[<?php echo $getData->id; ?>][id]" value="<?php echo $getData->id; ?>">
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" value="<?php echo $getData->last_name; ?>" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $getData->email; ?>" /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $getData->address; ?>" /></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="int" name="phone" value="<?php echo $getData->phone; ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Submit" />
                <input type="reset" Value="Cancel" />
            </td>
        </tr>

    </table>
</form>
<a href="<?php echo home_url('crud_action_select'); ?>">Go Back </ a> 