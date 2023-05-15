<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        wp_head();
    ?>  
    </head>
  <body>
    <!-- Header section -->
    <section class="header-main">
        <div class="container" style="padding-top: 30px;">
            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-lg menu-bg">
                <a class="navbar-brand" href="#">
                    <?php
                        if  (function_exists('the_custom_logo')){
                            the_custom_logo();
                        }
                    ?>
                    
                </a>

                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    
                    <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav" id="">%3$s</ul>',
                        )
                    );
                
                    ?>

                    
                </div>
                <div class="justify-content-end" id="navbarNav">
                    <a href="#" class="btn btn-orange ml-3">Contact us</a>
                </div>
            </nav>

            <!-- Hero Banner -->
            <section class="hero d-flex flex-wrap justify-content-center align-items-center">
                <div class="hero-text col-md-6">
                    <h1>Our services</h1>
                    <p>The best service provider you’ll never find else where</p>
                </div>
                <div class="hero-image col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/original.png" alt="Hero Image">
                </div>
            </section>
        </div>  
</section>