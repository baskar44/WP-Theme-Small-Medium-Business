<?php
/**
 * Template Name: Company Layout
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
						
					<?php the_content(); ?>
				</article>
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


