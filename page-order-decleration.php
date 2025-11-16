<?php
/*
 *  Template Name: order declaration
 */

get_header();

//define variable for url bar .php?n=
$animal = $_GET['a'];
?>

<!-- posts and pages -->
<?php get_header(); ?>

<div class="container main-border over-background">
	<main>

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

						<?php the_post_thumbnail(); ?>

						<h2 class="featured-title">Featured:</h2>
						<h2><?php the_title(); ?></h2>

						<hr>

						<?php the_content(); ?>
						
						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

							<fieldset>

								<legend>For Canterbury Homekill to be able to process your animal you must declare one the following</legend>

								<input type="hidden" name="action" value="declaration<?php echo $animal; ?>">
								<input type="hidden" name="data" value="declaration<?php echo $animal; ?>id">

								<hr>

								<h3>Ownership</h3>

								<div class="stripe">
									<input value="owner" name="declaration" id="DecOwner" type="radio" checked> <!-- this should style red -->
									<label for="DecOwner">I declare that I am the owner of the animal material <em>And</em> I have been activeley involved in the day to day maintenance of the animal, including providing for the physical, health and behavaioral needs of the animal for at least 28 days.</label>
								</div>
							
								<div class="set-in"> <!-- match the stripe -->
									<input value="farmer" name="declaration" id="DecFarmer" type="radio">
									<label for="DecFarmer">I am a farmer of animals of this kind.</label>
								</div>
							
								<div class="stripe">
									<input value="wild" name="declaration" id="DecWild" type="radio">
									<label for="DecWild">This animal is wild game. <em>Which you do not need to be actively involved with.</em></label>
								</div>

								<hr>

								<h3>Booking</h3>

								<div class="stripe">
										<input id="confirm" name="confirm" type="checkbox" required>
										<label for="confirm">I understand this is not a booking form. <em>I have already booked my animal in either by <a href="contact.php">email enquiry</a> or phone <a href="tel:03-313-4771">(03) 313 4771</a></em></label>
								</div>

								<button type="submit" id="submit" name="submit">Next Step</button>
							</fieldset>
						</form>

					</article>

				<?php endwhile; // while have posts

			} else { ?>
				<section>
					<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
					<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
				</section><!-- row -->

			<?php } ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div><!-- container -->
<?php get_footer(); ?>
