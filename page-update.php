<?php
/*
* Template Name: Update
*/

get_header();

//define name variable from url bar .php?n=
if (isset($_GET['n'])) {
	$unid = $_GET['n'];
}
?>

<div class="container main-border over-background">
	<main>

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

						<?php the_post_thumbnail(); ?>

						<h2><?php the_title(); ?></h2>

						<hr>

						<?php the_content(); ?>

						<?php if (is_user_logged_in()) {
							// deal with different installations
							// echo $wpdb->prefix;
							$prefix_fields = $wpdb->prefix . 'bp_xprofile_fields';
							// echo $prefix_fields;

							// seems like a lot of steps to get an ID this should be checked
							$current_user = wp_get_current_user();
							$current_login = $current_user->user_login;
							$current_id = $current_user->ID;

							$field_address = $wpdb->get_results( "SELECT * FROM $prefix_fields WHERE name = 'Address'" ); foreach ( $field_address as $address )
							$field_phone = $wpdb->get_results( "SELECT * FROM $prefix_fields WHERE name = 'Phone'" ); foreach ( $field_phone as $phone )
							$field_mobile = $wpdb->get_results( "SELECT * FROM $prefix_fields WHERE name = 'Mobile'" ); foreach ( $field_mobile as $mobile )
							?>

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

								<fieldset class="run-the-stripes">
									<input type="hidden" name="action" value="xprofileupdate">
									<input type="hidden" name="data" value="xprofileupdateid"><!-- slightly different value to differentiate, not used -->

									<!-- use the url unid variable in the form to keep it on the same one -->
									<input type="hidden" name="user_id" value="<?php echo $current_id; ?>">

									<input type="hidden" name="address_field" value="<?php echo $address->id; ?>">
									<input type="hidden" name="phone_field" value="<?php echo $phone->id; ?>">
									<input type="hidden" name="mobile_field" value="<?php echo $mobile->id; ?>">

									<div>
										<label>Name
											<input type="text" name="name" id="name" value="<?php echo $current_user->display_name; ?>" />
										</label>
									</div>

									<!-- if the user has something set it can be updated here otehrwise it has to go down to the next form to add instead of update -->

									<!-- address -->
									<div>
										<?php if (bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()) !== '') { ?>
											<label>Address
												<input type="text" name="address" id="address" value="<?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?>" />
											</label>
										<?php } ?>
									</div>

									<!-- phone -->
									<div>
										<?php if (bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()) !== '') { 
											echo '
												<label>Phone
													<input type="text" name="phone" id="phone" value=" '. bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()) . '" />
												</label>
												';
										} ?>
									</div>

									<!-- mobile -->
									<div>
										<?php if (bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()) !== '') { 
											echo '
												<label>Mobile
													<input type="text" name="mobile" id="mobile" value=" '. bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()) . '" />
												</label>
											';
										} ?>
									</div>

									<input type="submit" value="submit">
								</fieldset>
							</form>

							<!-- address -->
							<?php if (bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()) == '') { 
								echo '<h2>Add New Address</h2>

									<form action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">

										<input type="hidden" name="action" value="xprofileaddress">
										<input type="hidden" name="data" value="xprofileaddressid">

										<input type="hidden" name="user_id" value="'. $current_id . '">
										<input type="hidden" name="address_field" value="'. $address->id . '">

										<label>Address
											<input type="text" name="address" id="address" placeholder="address" />
										</label>

										<input type="submit" value="submit">

									</form>
							'; } ?>

							<!-- phone -->
							<?php if (bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()) == '') { 
								echo 'Add New Phone</h2>

									<form action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">

										<input type="hidden" name="action" value="xprofileaddphone">
										<input type="hidden" name="data" value="xprofileaddphoneid">

										<input type="hidden" name="user_id" value="'. $current_id . '">
										<input type="hidden" name="phone_field" value="'. $phone->id . '">


										<label>Phone
											<input type="text" name="phone" id="phone" placeholder="phone" />
										</label>

										<input type="submit" value="submit">

									</form>
							'; } ?>

							<!-- mobile -->
							<?php if (bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()) == '') { 
								echo '<h2>Add New mobile</h2>

									<form action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">

										<input type="hidden" name="action" value="xprofileaddmobile">
										<input type="hidden" name="data" value="xprofileaddmobileid">
										<input type="hidden" name="user_id" value="'. $current_id . '">
										<input type="hidden" name="mobile_field" value="'. $mobile->id . '">

										<label>mobile
											<input type="text" name="mobile" id="mobile" placeholder="mobile" />
										</label>

										<input type="submit" value="submit">

									</form>
							'; } ?>

							<hr >

							<h4>For a deeper list of options including password resets use the backend tools at</h4>
							<h4><a href="<?php echo home_url(); ?>/wp-admin/profile.php" class="button">Account Management</a></h4>
						<?php } else { ?>
							<p>You must be logged in to view this page.
							<?php wp_login_form(); ?>

							<h4><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a></h4><!-- this is more of a button? it does something? -->
						<?php } ?>

					</article>
				<?php endwhile; // while have posts
			} ?><!-- if have posts -->
		</section><!-- container -->
	</main><!-- columns -->

	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>