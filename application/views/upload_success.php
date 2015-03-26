<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> Your file was successfully uploaded!
    </div>

    <ul>
        <?php foreach ($upload_data as $item => $value): ?>
            <li><?php echo $item; ?>: <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
</div>