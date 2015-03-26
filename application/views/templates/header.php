<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Nikunj Shekhada">
        <link rel="shortcut icon" href="public/ico/favicon.png">
        <title>Welcome to CodeIgniter</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/CDN/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/CDN/css/bootstrap-theme.min.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="<?php echo base_url(); ?>/public/css/carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/public/css/starter-template.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/public/css/sticky-footer-navbar.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/welcome/view/about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/upload">Upload</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/welcome/view/contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>