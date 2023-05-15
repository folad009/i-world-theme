<?php get_header(); ?>
    
    <!-- Grid -->
    <section class="container gd-container">

        <?php 
        
        if (have_posts()) {

            while (have_posts()) {

                the_post();
                the_content();
            }
        }
        
        ?>

    </section>

<?php get_footer(); ?>