<div class="item">
	<?php get_template_part('content-showcase'); ?>

	<div class="block">
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?><br>
		<a class="button" href="<?php echo the_permalink(); ?>">Learn more</a>
	</div>
</div>