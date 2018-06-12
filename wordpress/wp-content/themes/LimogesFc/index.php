<?php get_header(); ?>
<!-- <div class="baniere">
    <div class="container ">
        <div class="row">
            <?php $query = new WP_Query( array( 'category_name' => 'baniere_club' ) ); ?>
            <?php if(have_posts()) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-2">
                        <img class="img-fluid" src="<?php the_field('logo_club'); ?>" alt="">
                    </div>
                    <div class="col-8 text-center">
                        <h2><?php the_field('nom_club_nav'); ?></h2>
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" src="<?php the_field('national2_nav'); ?>" alt="">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</div> -->
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
<?php require get_template_directory() . '/nav.php'; ?>
<?php get_template_part('slider', 'home'); ?>
<section class="container-fluid body">
    <div class="container">
        <div class="row">
            <?php $query = new WP_Query( array( 'category_name' => 'acceuil' ) ); ?>
            <?php if(have_posts()) : while ( $query->have_posts() ) : $query->the_post();
                $date = sprintf('<time class="entry-data" datetime="%1$s">%2$s</time>', esc_attr(get_the_date('c')), esc_html(get_the_date()));?>
                <div class="card card-acceuil" style="width: 18rem;">

                    <?php if($thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail')) : $thumbnail_src = $thumbnail_html['0']; ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img class="card-img-top img-responsive" src="<?php echo $thumbnail_src; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </div>
                        </a>
                        <div class="card-text">
                            <p><?php //the_excerpt(); ?></p>
                        </div>
                        <p class="text-center text-publication a-page">publié le : <?php echo $date; ?></p>
                    <?php endif; ?>

                </div>
            <?php endwhile; ?>
            <?php  endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
