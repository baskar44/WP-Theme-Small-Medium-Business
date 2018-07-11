<?php if(is_search() || is_archive()) : ?>
<div class="archive-post">
	<h4>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h4>
	<p>
		Posted on: <?php the_time('F j, Y g:i a'); ?>
	</p>

	<hr>
</div>
<?php else : ?>
	<article class="post">
		<h2><?php the_title(); ?></h2>
		<p class="meta">
			Posted on 
			<?php the_time('F j, Y g:i a'); ?>
			by 
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>

		</a> 
		|
		Posted in
		<?php 
		$categories = get_the_category();
		$separator = ", ";
		$output = '';

		if($categories){
			foreach($categories as $category) {
				$output .= '<a href="'.get_category_link($category -> term_id).'">'.$category->cat_name.'</a>'. $separator;
			}
		}

		echo trim($output, $separator);

		?>
	</p>


	<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	
	<?php if(is_single()) : ?>
		<p><?php the_content(); ?></p>
	<?php else : ?>
		<p><?php the_excerpt(); ?></p>
		<a class="button" href="<?php the_permalink(); ?>">Learn more</a>
	<?php endif; ?>

	

	
</article>
<?php endif; ?>






