<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Littlehubs
 */
?>

<?php get_header('front-custom');?>
<div id="defaultPage" class="container content">
	<div id="defaultPageMain" class="main block">

		<?php if(have_posts()) : ?>
			<?php while(have_posts() ) : the_post(); ?>
				<?php if( 'post' == get_post_type() ) : ?>
					<?php get_template_part('content', get_post_format()); ?>
					<?php else : ?>
						<div class="blogCard">
							<?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
							<?php endif ;?>	
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_time('F j, Y g:i a'); ?> | <strong><?php the_author(); ?></strong></p> 

							<p><?php the_content(); ?></p>
							<hr>
						</div>
					<?php endif; ?>
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
		<?php get_footer('front-custom');?>

