<footer class="bright hide-for-print">
	<div class="set-in">

		<?php wp_nav_menu( array(
			'theme_location'	=> 'footer', // this is slightly unusal as it would normally be the primary menu but we are doing things slightly different
			'menu_id'			=> 'menu-footer'
		) ); ?>

		<p class="clear">Canterbury Homekill <?php echo date ('Y'); ?></p>
	</div>

	<picture>
		<source set="<?php echo get_template_directory_uri(); ?>/img/pig.webp" type="image/webp"><!-- this isnt much smaller but its helping for google audit -->
		<img src="<?php echo get_template_directory_uri(); ?>/img/pig.png" alt="pig" class="show-for-medium" loading="lazy" > <!-- this should come from the customizer -->
	</picture>

</footer>

<?php wp_footer(); ?>

</body>
</html>