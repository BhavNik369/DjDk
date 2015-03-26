<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <?php if(isset($error) && !empty($error) && $error != ' '): ?>
    <div class="alert alert-danger" role="alert">
        <strong>Oh Snap...</strong><?php echo $error; ?>
    </div>
    <?php endif; ?>

    <?php echo form_open_multipart('upload/do_upload'); ?>

    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" class="btn btn-sm btn-default" value="upload" />

</form>

</div>