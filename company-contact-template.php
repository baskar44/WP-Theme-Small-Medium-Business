<?php
/**
 * Template Name: Company Contact Layout
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
					
					<!-- Getting Sub-Menu if available -->
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
					<?php endif; ?><!-- / Getting Sub-Menu if available -->

					<div id="contactPageContent">
						
						<div class="address-box">
							<h4>Lindsay Almond Glass & Aluminium</h4>
							<p>Unit 3 Block 2, 22 Northumberland Rd, Caringbah NSW 2229</p>

							<p>	Tel: 9542 8255
								Fax: 9542 8299
							</p>

							<p>sales@lindsayalmondwindows.com.au</p>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.5022220694746!2d151.13032495077482!3d-34.03098613483077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b806fcc00e4d%3A0xb262dfe7a61c7e44!2sUnit+3+Block+2%2F22+Northumberland+Rd%2C+Caringbah+NSW+2229!5e0!3m2!1sen!2sau!4v1530157833042" width="240px" height="240px" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						
						<div class="featured-image">
							<?php if(has_post_thumbnail()) : ?>
								<div class="post-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php endif; ?>
						</div>

						<div class="content">
							<?php the_content(); ?>
						</div>

						
						


						
					</div>
					

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





