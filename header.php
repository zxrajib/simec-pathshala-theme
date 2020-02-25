<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?><?php wp_title(' |', true, 'left'); ?></title>
    <meta charset="<?php esc_attr(bloginfo('charset')); ?>">
    <meta name="description" content="<?php esc_attr(bloginfo('description')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?php echo bloggermart_THEMEROOT ?>/assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <script src="<?php echo bloggermart_THEMEROOT ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body <?php body_class(); ?>>
  <!---------------- Header ----------------->
  <header class="header_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light header_navbar">
                        <a class="navbar-brand" href="tel:+880 1000 00000">+880 1000 00000</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenudContent" aria-controls="navbarMenudContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarMenudContent">
                            <?php
                                $args = array(
                                    'menu'            => '',
                                    'container'       => 'false',
                                    'theme_location' => 'primary',
                                    'container_class' => '',
                                    'menu_class' => 'header_menu_ul'
                                );
                                wp_nav_menu($args);
                             ?>
                        </div>
                      </nav>
                </div>
            </div>
            <div class="row">
                <div class="colmd-12">
                    <div class="header_logo">
                        <a href="<?php echo site_url() ?>">
                            <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/logo.png" alt="" class="img-fluid" />
                        </a>                       
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('header-top-sec'); ?>
    </header>    
  