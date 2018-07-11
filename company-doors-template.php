<?php
/**
 * Template Name: Doors Index
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


<div id="customDoorsPage" class="container content">

	<?php if(have_posts()) : ?>
		<?php while(have_posts() ) : the_post(); 
			
			?>
			<div class="list-page">
				<?php get_template_part('content-sub_nav'); ?>
			<div class="page-items-list">
				<?php 
				$args = array(
					'post_type' => 'door'
				);?>

				<?php $the_query = new WP_QUERY($args);?>
				
				<?php if($the_query->have_posts()) : ?>
					<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php get_template_part('content-item_in_list'); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php echo wpautop('Sorry, no items were found'); ?>
					<?php endif; ?>

				<?php endwhile; ?>

				<?php else : ?>
					<?php echo wpautop('Sorry, no items were found'); ?>
				<?php endif; ?>
			</div>
		</div>

	<div id="customDoorsPageSidebar" class="sidebar">
		<?php if(is_active_sidebar('sidebar')) : ?>				
			<?php dynamic_sidebar('sidebar'); ?>
		<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>


