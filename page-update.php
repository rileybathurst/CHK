<?php
/*
* Template Name: Update
*/
?>

<?php get_header(); ?>

<?php 
	//define variable for url bar .php?n=
	$unid = $_GET['n'];
?>

<div class="row over-background border drop" data-equalizer>
	<div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

		<!-- Start the main container -->
		<div class="container" role="document">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); 

					$format = get_post_format();
					get_template_part( 'format', $format );
					?>


						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- post -->

							<?php include("page-title.php"); ?>

							<div class="row">

								<div class="small-12 medium-8 large-12 columns end text-justify">

									<?php 
										$current_user = wp_get_current_user();
										$current_login = $current_user->user_login;
										$current_id = $current_user->ID;

										$field_address = $wpdb->get_results( "SELECT * FROM chk_bp_xprofile_fields WHERE name = 'Address'" ); foreach ( $field_address as $address )
										$field_phone = $wpdb->get_results( "SELECT * FROM chk_bp_xprofile_fields WHERE name = 'Phone'" ); foreach ( $field_phone as $phone )
										$field_mobile = $wpdb->get_results( "SELECT * FROM chk_bp_xprofile_fields WHERE name = 'Mobile'" ); foreach ( $field_mobile as $mobile )   
									?>

									<!-- start form -->

									<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

										<input type="hidden" name="action" value="xprofileupdate">
										<input type="hidden" name="data" value="xprofileupdateid"><!-- slightly different value to differentiate, not used -->

										<!-- use the url unid variable in the form to keep it on the same one -->
										<input type="hidden" name="user_id" value="<?php echo $current_id; ?>">

										<input type="hidden" name="address_field" value="<?php echo $address->id; ?>">
										<input type="hidden" name="phone_field" value="<?php echo $phone->id; ?>">
										<input type="hidden" name="mobile_field" value="<?php echo $mobile->id; ?>">

										<label>Name
											<input type="text" name="name" id="name" value="<?php echo $current_user->display_name; ?>" />
										</label>

										<!-- if has the form it can be updated otehrwise it has to go down to the next form to add instead of update -->

										<!-- address -->
										<?php if (bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()) !== '') { ?>
											<label>Address
												<input type="text" name="address" id="address" value="<?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?>" />
											</label>
										<?php } ?>

										<!-- phone -->
										<?php if (bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()) !== '') { 
											echo '
												<label>Phone
													<input type="text" name="phone" id="phone" value=" '. bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()) . '" />
												</label>
												'; } ?>

										<!-- mobile -->
										<?php if (bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()) !== '') { 
											echo '
												<label>Mobile
													<input type="text" name="mobile" id="mobile" value=" '. bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()) . '" />
												</label>
												'; } ?>

										<input type="submit" value="submit">
									</form>

									<!-- address -->
									<?php if (bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()) == '') { 
										echo '
											<div class="row">
												<div class="small-12 columns">
													<div class="flagbanner drop fall">
														<h2 class="flagbuttonbanner category-title">Add New Address</h2>
													</div> 
												</div>
											</div>


											<form action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">

												<input type="hidden" name="action" value="xprofileaddress">
												<input type="hidden" name="data" value="xprofileaddressid"><!-- slightly different value to differentiate, not used -->

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
										echo '
											<div class="row">
												<div class="small-12 columns">
													<div class="flagbanner drop fall">
														<h2 class="flagbuttonbanner category-title">Add New Phone</h2>
													</div> 
												</div>
											</div>


											<form action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">

												<input type="hidden" name="action" value="xprofileaddphone">
												<input type="hidden" name="data" value="xprofileaddphoneid"><!-- slightly different value to differentiate, not used -->

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
										echo '
											<div class="row">
												<div class="small-12 columns">
													<div class="flagbanner drop fall">
														<h2 class="flagbuttonbanner category-title">Add New mobile</h2>
													</div> 
												</div>
											</div>


											<form action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">

												<input type="hidden" name="action" value="xprofileaddmobile">
												<input type="hidden" name="data" value="xprofileaddmobileid"><!-- slightly different value to differentiate, not used -->

												<input type="hidden" name="user_id" value="'. $current_id . '">
												<input type="hidden" name="mobile_field" value="'. $mobile->id . '">

												<label>mobile
													<input type="text" name="mobile" id="mobile" placeholder="mobile" />
												</label>

												<input type="submit" value="submit">

											</form>
										'; } ?>

							</div><!-- small-12 columns -->

						</div><!-- row -->

						<div class="row">
							<div class="small-12 columns">
								<hr >
								<p>For a deeper list of options including password resets use the backend tools at</p>
								<a href="<?php echo home_url(); ?>/wp-admin/profile.php">Account Management</a>
							</div>    
						</div>
					</div><!-- post -->

					<?php endwhile; ?><!-- while have posts -->

				<?php else : ?>
					<div class="row">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
							<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
						 </div><!--.entry-->
					</div>
				<?php endif; ?><!-- if have posts -->
			</div><!-- container -->
		</div><!-- equilizer watch -->
	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>