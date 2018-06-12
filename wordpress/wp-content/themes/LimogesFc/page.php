
<?php get_header(); ?>
<?php require get_template_directory() . '/header-page.php'; ?>
<?php //require get_template_directory() . '/nav.php'; ?>
<section class="container-fluid text-center flag-page">
    <div class="container">
        <div class="row">
            <h1 class="col-12"> <?php wp_title('', true,''); ?> </h1>
            <?php
                //echo get_the_title() ;
             ?>
        </div>
    </div>
</section>

 <?php get_footer(); ?>
