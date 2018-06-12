<div class="container-fluid baniere">
    <div class="container">
        <div class="row">
            <?php $query = new WP_Query( array( 'category_name' => 'logo_page' ) ); ?>
            <?php if(have_posts()) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="<?php the_field('logo'); ?>" alt="">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<section class="container-fluid baniere">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a class="a-page" href="<?php bloginfo('url'); ?>">Accueil </a>
            </div>
        </div>
    </div>
</section>
