
<div class="page-sub-nav">
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
</div>






