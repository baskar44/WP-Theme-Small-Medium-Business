<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
				<article class="page">
					<h2><?php the_title(); ?></h2>

					<?php if(page_is_parent() || $post->post_parent > 0) : ?>
						<nav class="navigation sub-nav">
							<ul>
								<span class="parent-link">
									<a 
										href="<?php echo the_permalink(get_top_parent()); ?>">

									<?php echo get_the_title(get_top_parent()); ?> 
								</a>
							</span>
							<?php 
							$args = array(
								'child_of' => get_top_parent(),
								'title_li' => ''
							);
							?>

							<?php wp_list_pages($args); ?>
						</ul>
					</nav>
				<?php endif; ?>
				
				
				<?php if(has_post_thumbnail()) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
				
			</article>
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


