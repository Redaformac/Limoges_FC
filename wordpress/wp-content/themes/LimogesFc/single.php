<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>
<?php require get_template_directory() . '/header-page.php'; ?>
<?php require get_template_directory() . '/nav.php'; ?>
<div class="main single container">
	<div class="row">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-8 offset-2">
					<img class="img-fluid card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
				</div>
				<div class="post col-12">
					<h1 class="post-title text-center"><?php the_title(); ?></h1>
					<div class="post-content text-justify">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
