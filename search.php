<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Lindsay_Almond_Glass_&_Aluminium
 */
?>
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lindsay_Almond_Glass_&_Aluminium
 */
?>
<?php get_header(); ?>
<div class="container content">
	<div class="main block">
		<h1 class="page-header">
			Search Results
		</h1>

		<?php if(have_posts()) : ?>
			<?php while(have_posts() ) : the_post(); ?>

				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile; ?>

		<?php else : ?>
			<?php echo wpautop('Sorry, no items were found'); ?>
		<?php endif; ?>

	</div>

	<div id="productIndexSidebar" class="sidebar">
		<div class="block">
			<h3>Sidebar Head</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati dolor deserunt molestiae cumque quam incidunt! Perspiciatis totam facere nesciunt, explicabo suscipit, tempore praesentium beatae accusamus cum, dolores nihil quis ullam.</p>
			<a href="<?php the_permalink(); ?>" class="button">Read more</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>
