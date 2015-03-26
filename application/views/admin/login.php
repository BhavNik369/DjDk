<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Nikunj Shekhada">
        <link rel="shortcut icon" href="public/ico/favicon.png">
        <title>Admin Login</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/CDN/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/CDN/css/bootstrap-theme.min.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="<?php echo base_url(); ?>/public/css/carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/public/css/signin.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/public/css/sticky-footer-navbar.css" rel="stylesheet">
    </head>
    <body>
        <div class="container login">
            <?php
            $attributes = array('class' => 'form-signin');
            echo form_open('admin/login/validate_credentials', $attributes);
            echo '<h2 class="form-signin-heading">Login</h2>';
            //echo form_input('user_name', '', 'placeholder="Username"');
            //echo form_password('password', '', 'placeholder="Password"');
            ?>

            <label for="inputEmail" class="sr-only">Username</label>
            <input type="email" id="inputEmail" name="user_name" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

            <?php
            if (isset($message_error) && $message_error) {
                echo '<div class="alert alert-error">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
                echo '</div>';
            }
            //  echo "<br />";
            //  echo anchor('admin/signup', 'Signup!');
            // echo "<br />";
            echo "<br />";
            echo form_submit('submit', 'Login', 'class="btn btn-lg btn-primary btn-block"');
            echo form_close();
            ?>      
        </div><!--container-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>/public/CDN/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/holder.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>/public/CDN/js/bootstrap.min.js"></script>
    </body>
</html>    
