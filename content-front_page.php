<div id="frontPage" class="container">
	<?php get_template_part('content-showcase_full'); ?>
	<?php get_template_part('content-about_us_excerpt'); ?>
	
	<!-- Our Range Section -->
	<div id="frontPageOurRange" class="range-box container">
		<div id="ourRangeTitle" class="block">
			<h1>Our Range</h1>
		</div>
		<div id="ourRangeWindow" class="block">
			<a href="http://localhost/wordpress/our-range/windows/"><img src="#"></a>
			<a href="http://localhost/wordpress/our-range/windows/"><h4> Windows </h4></a>
			<p></p>
		</div>

		<div id="ourRangeDoor" class="block">
			<a href="http://localhost/wordpress/our-range/doors/"><img src="#"></a>
			<a href="http://localhost/wordpress/our-range/doors/"><h4>Doors</h4></a>
			<p></p>
		</div>

		<div id="ourRangeComm" class="block">
			<a href="http://localhost/wordpress/our-range/commercial-specialised/"><img src="#"></a>
			<a href="http://localhost/wordpress/our-range/commercial-specialised/"><h4>Commercial & Specialised</h4></a>
		</div>

		<div id="ourRangeOther" class="block">
			<a href="http://localhost/wordpress/our-range/other/"><img src="#"></a>
			<a href="http://localhost/wordpress/our-range/other/"><h4>Other</h4></a>
		</div>
		
	</div><!-- /Our Range Section -->
	

	<!-- Sidebar -->
	<div id="frontPageSidebar" class="sidebar">
		<?php if(is_active_sidebar('sidebar')) : ?>
			<?php dynamic_sidebar('sidebar'); ?>
		<?php endif; ?>
	</div>

</div>