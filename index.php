<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lindsay_Almond_Glass_&_Aluminium
 */
?>

<?php get_header(); ?>
<div id="productIndex" class="container content">
	<div id="productIndexMain" class="main block">

		<?php if(have_posts()) : ?>
			<?php while(have_posts() ) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php echo wpautop('Sorry, no items were found'); ?>
		<?php endif; ?>

	</div>

	<div class="sidebar">
		<?php if(is_active_sidebar('sidebar')) : ?>
			<?php dynamic_sidebar('sidebar'); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>


