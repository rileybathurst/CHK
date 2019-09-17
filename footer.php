<div class="row bright hide-for-print">
	<div class="small-12 medium-9 columns">

		<ul class="inline drop">
			<li><a href="<?php echo home_url(); ?>">Home</a></li> 
			<li><a href="<?php echo home_url(); ?>/about"><?php echo (get_page_by_title('about')->post_title); ?> Us</a></li> 
			<li><a href="<?php echo home_url(); ?>/order"><?php echo (get_page_by_title('order')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/prices"><?php echo (get_page_by_title('prices')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/contact"><?php echo (get_page_by_title('contact us')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/gallery"><?php echo (get_page_by_title('gallery')->post_title); ?></a></li>
			<!-- <li><a href="<?php echo home_url(); ?>/booking-form"><?php echo (get_page_by_title('booking form')->post_title); ?></a></li> -->
		</ul>

		<ul class="inline">
			<li><a href="<?php echo home_url(); ?>/beef"><?php echo (get_page_by_title('beef')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/pig"><?php echo (get_page_by_title('pig')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/deer"><?php echo (get_page_by_title('deer')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/sheep"><?php echo (get_page_by_title('sheep')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/alpaca-llama"><?php echo (get_page_by_title('alpaca llama')->post_title); ?></a></li> 
			<li><a href="<?php echo home_url(); ?>/small-goods"><?php echo (get_page_by_title('small goods')->post_title); ?></a></li> 
		</ul>

		<ul class="inline">    
			<li><a href="<?php echo home_url(); ?>/terms">Terms &amp; Conditions</a></li> 
			<li><a href="https://rileybathurst.com">Site by Riley Bathurst Design</a></li> 
		</ul>

		<p class="clear">Canterbury Homekill <?php echo date ('Y'); ?></p>
	</div>

	<img src="<?php echo get_template_directory_uri(); ?>/img/pig.png" alt="pig" class="show-for-medium medium-3 columns drop">

</div>

		<!-- </div> inner wrap -->
	<!-- </div> off canvas wrap -->
<!-- </div> background image header this can't be right anymore -->

<?php wp_footer(); ?>

</body>
</html>