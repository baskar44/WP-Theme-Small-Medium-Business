<?php
/**
 * The template for displaying all single windows
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lindsay_Almond_Glass_&_Aluminium
 */
?>

<?php get_header(); ?>
<div id="productIndex" class="container content">
	<div id="productIndexMain" class="main block">
		<?php if(have_posts()) : ?>
			<?php while(have_posts() ) : the_post(); ?>
				<div class="item-single">
					<?php get_template_part('content-showcase'); ?>
					<div class="block">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?><br>
					</div>
				</div>
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

