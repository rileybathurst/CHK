<?php get_header(); ?>

<div class="container main-border over-background">
	<main>
		<div> <!-- due to the flex on the layer below I have to nest the padding -->
			<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little slower but its fine for now -->

			<hr>
			<?php $intro = get_page_by_title('Intro');
			if ( $intro == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No Intro page</p>
				<?php } // admin
			} else { ?>
				<p><?php echo (get_page_by_title('Intro')->post_content); ?></p><!-- not quite sure why this isnt bringing in the p tags by default -->
			<?php } 

			$about =  get_page_by_title('about');
			if ( $about == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No about page</p>
				<?php } // admin
			} else { ?>
				<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h3>

				<hr> <!-- purposley inside the if incase we dont have it looks wierd -->
			<?php } ?>

			<?php $how =  get_page_by_title('HOW CHK WORKS');
			if ( $how == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No HOW CHK WORKS page</p>
				<?php } // admin
			} else { ?>
				<?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?>
			<?php }

			$prices =  get_page_by_title('Prices');
			if ( $prices == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No Prices page</p>
				<?php } // admin
			} else { ?>	
				<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>"><?php echo (get_page_by_title('Prices')->post_title); ?></a></h3>
			<?php } ?>
		
			<!-- <p>The first step to having us work on your animal would be our online booking form.</p>
			<h3><a href="?php echo home_url(); ?>/?page_id=?php echo (get_page_by_title('Booking Form')->ID); ?>">?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3> this hasnt been built yet-->
		</div>
	</main><!-- first area -->
			
	<div class="light-back"> <!-- hold the second area together -->
		<section><!-- Order Animals -->

			<div class="set-in"> <!-- this cant be higher level as the animals go all the way to the edge -->

				<?php $order =  get_page_by_title('Order');
				if ( $order == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No order page</p>
					<?php } // admin
				} else { ?>
					<h3 class="set-in"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3> <!-- this has a double set in which makes things go wrong in a print style -->

					<?php echo (get_page_by_title('order')->post_content);
				} ?>
			</div>

			<div class="animals">

				<?php $beef =  get_page_by_title('beef');
				if ( $beef == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No beef page</p> <!-- if more than one of these they will sit in a line due to the animals flex as its an error only admins can see its down the list on a fix -->
					<?php } // admin
				} else { ?>
					<div> <!-- these need to be contained for the animals flex -->
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>">
							<div class="round hover-back animals-svg">
							<!-- put these styles in the css -->
								<svg enable-background="new 0 0 126 126" viewBox="0 0 126 126" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="m76.89 30.12c-5.45.85-11.26.85-12.84 1.33-1.58.36-1.94 1.09-8.72 1.09s-8.72-.24-13.32.24c-4.48.48-5.93 1.94-9.32 2.3-3.27.37-6.66.49-8.48 1.7s-2.78 1.45-2.78 1.45h-.36s.48-1.45-.37-1.57c-.72-.24-.6.24-1.33-.49-.85-.73-.85-.97-1.82-.85-.85.24-.73.97-1.33.97s-.97-.73-2.06 0c-1.09.85-1.09 1.33-1.33 1.94s-.12.85-.12.85-.48.61-1.82 1.33c-1.33.73-2.18 1.21-2.18 1.21s-.97-1.7-2.78-1.7c-1.82 0-3.76.73-4.85 1.57-1.09.85-.24 2.42.97 3.39 1.09.97 2.79 1.7 4.72 1.94 1.94.24 2.3-.37 2.3-.37h.85s-.97 1.09-.73 1.45c.37.49.73.36.73.36s.61.12.49.97.24 1.82.61 3.03.73 2.79 1.21 3.88c.36 1.09.73 1.58.61 3.15s-.36 3.39.12 3.75 1.45 0 1.57.36c.24.48.73 1.09 1.57 1.21h1.58c.73 0 .48.24 1.33.12.97-.12 1.21-.48 1.21-.48s.85.73 1.45 1.21c.49.6.12 1.58.97 2.3.85.73 1.7 1.45 1.94 3.51.36 2.18.97 3.88 2.18 5.81 1.21 1.94 1.82 1.82 2.3 2.54.6.73.85.85 1.33 1.33.49.36.97.49.97.49s-.48 3.02-.36 5.21c.12 2.3.6 1.7 0 3.39-.49 1.69-.97 3.03-1.82 4.72-.97 1.82-1.7 2.54-2.06 3.27s.97 1.33 3.27.73c2.3-.61 2.54-1.82 2.54-1.82s.85.12 1.09-.36c.24-.49.85-3.27.97-4.24 0-1.09.49-2.91 1.09-4.12.6-1.33 1.57-1.7 2.06-2.91.6-1.33.72-2.18.72-2.18s2.42-.24 4.12-1.33c1.69-.97 3.27-1.94 3.27-1.94s1.21 2.79 2.18 4.84c.97 2.06 2.06 3.39 2.42 4.48.36 1.21.49 1.57.49 3.27 0 1.69.6 3.15.48 4.72 0 1.45-.36 1.82-.36 2.42-.12.61.48.97 1.7.97 1.21-.12 2.54-.49 3.03-1.09.48-.73.36-1.58.36-1.58s.61.12.73-.24c.24-.36-.97-3.39-1.21-4.97-.24-1.57-1.09-4-1.09-4.96-.12-1.09.12-2.3 0-4.72-.12-2.3-.24-4.48-.36-5.09 0-.73 0-1.7 0-1.7s3.27-1.21 4.97-1.45c1.82-.24 6.78-1.09 11.87-.49 5.09.73 7.51 1.09 8.36 1.09.73 0 2.3-.36 4.48-1.7 2.06-1.45 4.36-2.79 7.51-4.24 3.03-1.57 5.93-3.51 5.93-3.51s1.21.24 1.21 3.03c.12 2.66 0 4.36.73 6.3.61 1.94 1.7 3.15 1.09 4.6-.48 1.33 0 1.45 0 3.03 0 1.57-.97 4.6-1.81 6.42-.97 1.7-2.79 5.81-3.63 7.15-.73 1.33-1.09 2.3 1.09 2.18 2.3-.12 4.36-.61 4.85-1.09.48-.61.48-1.21.48-1.21s1.33.36 1.45-.36c0-.85.36-2.3.49-2.79.24-.61 2.06-5.09 2.79-7.39.72-2.3 1.82-5.45 2.54-6.42.73-.85 1.7-1.45 1.7-1.45s.49 1.57.73 3.63c.12 1.94.36 2.91.24 4.96-.12 1.94.36 1.82-.37 4.36s-.73 2.67-1.21 4.24-1.21 2.06-.73 2.67c.48.48 4.6.61 5.21-.12.6-.85 1.09-1.82 1.09-1.82s1.09.61 1.09-.36-.24-3.03 0-5.33.49-8.24 1.45-11.26c.97-3.03 1.09-3.75.61-5.93-.49-2.18-2.91-6.54-2.3-9.45.48-3.03 1.45-4.24 2.06-7.99.73-3.75.61-4.36 1.7-5.57 1.21-1.33 1.09-1.45 1.09-1.45s-.36 7.99-.24 11.38c.24 3.27 1.46 1.57.73 8.24-.61 6.54-1.21 7.27-.61 9.81.61 2.54 1.21.97 1.21 3.39.12 2.54-.49 2.54.97 4 1.45 1.46.97 2.06.48-.48-.48-2.54-.61-2.42-.12-4.24.49-1.7-1.94-2.66-.61-6.54 1.33-3.75.73-7.39.73-7.39s.24 2.91.12 4.72c0 1.7-.12 3.51-.12 3.51s.49-1.57.49-4.36c0-2.66-.12-5.21-.12-5.21s.85 1.94.85 3.64c0 1.69-.12 1.57-.12 1.57s.85-1.57.24-4.72-.97-3.27-1.57-4.48c-.49-1.21-.49-1.57-.49-3.63 0-2.18 0-4.72 0-6.3 0-1.45-.72-8.72-.6-11.63s-1.94-7.51-3.63-9.57c-1.57-1.94-3.03-4.6-6.54-4.72s-5.33.48-9.2.36c-3.75 0-4.72-.61-8.6.73-3.75 1.21-7.99 2.3-11.63 2.54-3.56.28-6.11 1.01-6.11 1.01z"/></svg>
							</div>
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" loading="lazy" /> -->
							</a> <!-- these need to be tested as svg, its not great they are part of the theme but for now it will do -->
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="animals-link">Beef</a></h3>
					</div>
				<?php }

				$deer =  get_page_by_title('deer');
				if ( $deer == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No deer page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>">
							<div class="round hover-back animals-svg">
								<svg enable-background="new 0 0 97 97" viewBox="0 0 97 97" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="m31.93 24.99s1.17 0 1.41.82l2.34.24s.93-1.17 1.52-.82c.86.59 2.85-5.28.24-9.01 0 0 .11-3.16 1.29-.59 0 0 1.64 3.04 1.4 5.97 0 0 0 1.52 1.76.7 0 0 3.98-1.64 4.8-1.64 0 0 .7.35.7-2.69 0 0 .24-10.42-2.46-12.99 0 0-1.29-3.4.59-1.64 0 0 2.22 4.1 2.57 4.8 0 0 .24-4.8-2.11-6.32 0 0-2.69-2.58-.11-1.75 0 0 2.69 1.29 3.28 3.86 3.45.83 3.73 6.18 3.98 9.83 1.93 1.72.79 7.79-5.15 9.6 0 0-5.62.82-6.32 2.46-1.01 2.33-3.62 4.56-1.99 10.18 2.25 17.98 38.53-7.38 39.44 17.68.34 5.74-1.67 2.58-4.56 8.19 0 0-2.69 4.68-1.52 6.55 0 0 2.22 1.87 2.34 2.58 0 0 1.29 7.61.47 9.95-.3.67.52 9.06.59 11.71-2.13.6.76 2.68-4.45 2.22 0 0-.82-.82.94-2.34 0 0 1.64-4.8.58-14.39 0 0-.47-1.52-1.17-1.99-.9 4.28-4.33 8.94-3.98 15.8 1.16 1.22-1.36 1.07-1.29 2.92 0 0-.23.47-3.51 0 0 0-1.48-1.57 1.02-2.02 1.52-4.7 4.67-10.89 5.07-19.64 0 0-3.51-5.97-5.38-6.91 0 0-7.37 3.75-11.94 1.64-1.29 5.55-3.52 16.36-1.05 24.81 0 0-.24.7-.47 2.22 0 0 1.05 1.17-1.99 1.05 0 0-3.86.71-1.52-1.29 0 0 .93-11.82.7-14.63 0 0-1.52-1.29-.47-3.98l-.12-9.01s-2.22.35-3.51 0c-.58 4.57-1.63 18.92-.35 25.98 0 0 1.76 1.29-.12 2.11 0 0-.82.35-.82.94-.26.4-6.3 1.57-2.34-2.58 0 0 1.4-7.49.23-15.45 0 0-3.63-11.47-3.63-14.51-4.16-3.32-3-7.05-5.73-16.5 0 0-1.76-7.73-.7-11 0 0-.47-4.1-1.05-5.38-3.69.02-3.66-.95-6.08-4.33-1.64-2.74 4.07-.69 5.03.7 2.23.63-1.33-4.99-6.67-5.38-1.87-.13-6.41-2.11-3.63-6.55-.71-2.64-2.34-12.36 4.45-12.53 0 0 1.52-3.28 3.51-2.69 0 0 .94.82-.35 1.41 0 0-2.11.11-2.46 7.49 0 0 3.63-1.17-.23 1.4l-.3 1.53s1.35.11 2.4-.95c0 0 2.69-1.4.12 1.52 0 0-1.52 1.75-2.46 1.87 0 0 .23 4.33.82 5.73 0 0 4.33 1.64 4.56 2.22 0 0 1.29.82 1.06-1.4 0 0-.36-6.2.82-3.4.24 1.03.26 5.87 1.96 7.62z"/></svg>
							</div>
							<!-- <img src="php echo get_template_directory_uri(); ?>/img/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" loading="lazy" /> -->
						</a>
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="animals-link">Deer</a></h3>
					</div>
				<?php }

				$pig =  get_page_by_title('pig');
				if ( $pig == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No pig page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>">
							<div class="round hover-back animals-svg">
								<svg enable-background="new 0 0 80 80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="m79.09 39.62c.72 3.65-5.75 2.14-7.39 2.38-4.78-16.46-13.68-27.46-31.8-30.05-8.09-.8-17.22 2.55-24.91 7.14-3.89 2.65-6.77 8.75-8.01 11.89-.09.2-1.74-.21-1.63-.25 5.62-7.82-8.99-6.88-2.75.88.04.28-2.8 2.87-2.75 2.75.43.54 3.97-1.62 3.88-2-.18.31 3.44.67 3.38.38-.97 7.16 4.57 10.08 6.01 15.4.02 2.98.62 5.2 1.88 7.26 1.22 1.85.02 4.81.5 6.63.49.3.5 4.68 1.25 3.76.38-.63.75-1.38.75-1.38-.14 1.93 3.11 5.15 5.01 3.13 2.03-.15-.15-1.95-.88-3.25-1.62-2.26-.78-4.81-1-7.26-.53-1.91-.11-3.48.5-4.5.62.61.6 2.96.63 3.75.86.29.58 8.32 1.5 5.26-.07 1.45 2.53 3.42 3.88 1.75 1.07-1.07-1.33-2.92-1.5-3.76-.25-.63 0-3.38-.13-4.13-1.08-3.69 1.36-5.98 1.88-10.27.12-2.5.38-3.13.38-3.13.69-.43 2.38.63 3 1 1.81-2.24 8.29-.35 10.77-.75-4.19 5.47 4.06 11.49 2 16.78-.37.73-.89 7.04.5 4.51.75-1.5.75-1.75.75-1.75-.35 1.39-.56 4.89 2.25 4.88 1.18.18 1.36.48 1.5-.25 1.54.02.49-2.15.12-2.75.1.3 2.36.28 2.51-.13-1.48-2.47-2.35-8.94-.88-11.77-.16.09 1.66 2.6 1.88 2.5-.52 3.31 3.31 1.41 5.13 9.14.76 1.8 1.12 1.89 1.88 2.5.42.54-.89 1.2.5 1.5-.16.59 8.55 1.02 7.39-.75-1.93-1.79-.41-4.01-.13-6.26-.22-2.15.02-4.86 1.63-6.51 1.37-1.8 2.85-5.31 3.25-7.38 2.05.66 10.37-4.69 7.27-6.89zm-74.36-13.27c1.7.01-.75 4.46-1 4.38-2.65-.89-1.98-5.38 1-4.38z"/></svg>
							</div>
							<!-- <img src="php echo get_template_directory_uri(); ?>/img/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" loading="lazy" /> -->
						</a>
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="animals-link">Pig</a></h3>
					</div>
				<?php }

				$sheep =  get_page_by_title('sheep');
				if ( $sheep == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No sheep page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>">
							<!-- <div class="round any-center hover-back animals-svg">

							</div> -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/sheep-flat.png" alt="lamb homekill" class="round any-center hover-back animals-before-svg" loading="lazy" />
						</a>
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="animals-link">Sheep</a></h3>
					</div>
				<?php }

				$alpaca =  get_page_by_title('alpaca llama');
				if ( $alpaca == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No alpaca llama page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/alpaca-llama">
							<div class="round any-center hover-back animals-svg">
								<svg enable-background="new 0 0 391.05 391.05" viewBox="0 0 391.05 391.05" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="m369.75 65.61c.28-14.75-3.49-14.66-15.38-21.35-4.77-3.25-7.16-3.82-11.49-6.95-3.63-3.5-7.29-6.49-12.55-8.09.43-3.81 2.69-12.9 4.53-16.26.31-2.29 4.88-9.77 3.4-11.89-3.68-.62-9.75 11.23-10.58 12.94l.13-1.18c-.27.67-2.04 6.07-2.74 6.4l.13-.91c-.79 2.08-2.75 3.42-5.07 5.73 2.97-4.46 3.58-11.71 5.59-16.05.92-1.18 4.84-6.53 3.79-7.32-4.08-3.06-10.65 8.62-11.89 9.8-2.37 1.75-6.39 5.89-7.44 7.96v-1.3.01-.01c-1.21 2.02-1.89 8.09-4.44 9.53v-1.43.01-.01c-.1.5-1.85 3.63-3.28 4.05-5.16-.53-14.36 6.32-18.27 7.19l4.05-.78c-3.2.01-8.23 7.4-12.15 8.75-1.7 1.05-2.87 6.53-3.53 7.32l3.53-2.74s-1.83 3.4-3.39 5.09c-1.44 1.83-1.44 4.44-2.87 6.66-1.96 3.61-6.35 9.13-8.23 12.67l3.66-3.53c-1.55 2.49-5.17 11.82-6.14 16.59-.28 6.24-2.01 11.57-3.4 15.28l2.87-3.92c.36 5.49-3.56 10.89-5.36 14.89l3.01-3.4c.54 2.53-4.8 10.08-5.62 11.63l3.14-2.87c-1.67 1.74-2.96 7.72-4.31 10.45-1.05 1.44-2.22 5.62-2.22 5.62l1.96-1.7c-.51 4.84-8.97 8.56-14.63 6.27-3.57-1.66-2.66-.58-2.62-.53l-4.7-1.18.52 1.18c-.04-.01-4.04.29-5.48-.45-4.63-2.15-9.67-3.87-12.81-5.82l1.31 2.22s-3.4-2.48-8.75-2.22c-8.27-.03-16.65-4.16-22.21-5.09l1.83 1.44c-6.29.52-12.87-3.3-21.55-3.4-4.7.26-11.24-2.22-13.19-4.83l1.44 2.88-6.79-2.35 2.22 1.7c-4.47.54-11.09-.17-18.03-.78-8.53-1.9-11.36-3.05-17.24-4.57l1.44 1.44c.01-1.13-20.13-1.56-19.33-1.7l2.35.91c-3.65-1.2-21.82 2.68-24.82 2.48l3.4.91c-1.28 1.16-13.13 1.78-14.11 2.48l2.87.52c-2.84.83-6.95.74-6.41.87 0 0-3.79 1.7-6.4 1.7-2.69-.51-11.71 8.04-12.8 9.93l2.46-1.07c-2.22 2.35-3.24 3.6-3.24 3.6l.55-.25c-2.16 2.41-6.38 4.95-6.56 6.65-.52 2.74-5.75 11.63-5.75 11.63l1.44.78c-1.97 1.38-2.11 18.32-2.35 19.59l1.05-1.57c1.34 1.37.02 13.34.39 14.5 0 0 1.05 8.1 2.35 11.63l.52-1.44s3 9.8 5.36 11.76c.43.38 1.15-1.74 2.01-5.5 2.33 7.55-3.57 21.14-3.61 27.54l1.44-2.87c-1.01 2.05 0 11.58-1.04 14.37-.13 1.7-.39 5.75-1.7 7.32-1.17 1.44-1.7 7.19-1.7 7.19l1.31-1.44s-.26 2.22.91 3.4c3.07 5.48.77 14.82-.52 19.99l1.7-2.48c-2.18 5.2-.99 7.18.87 12.07.91 6-2.14 7.96 1.13 13.57 3.06 5.81 6.14 19.28 6.27 25.08l.78-2.22 1.96 10.45.39-1.96s1.96 3.92 1.96 5.1c0 1.31 3.4 6.4 3.92 10.06.23 5.57-.17 10.21 5.24 12.22 2.29 10.48 5.38 9.61 15.53 11.42 3.32 0-1.24-4.79.13-5.62 1.19.59 7.22 2.8 4.58-1.31-1.14-1.26-3.41-6.13-5.23-7.58-.1-.08-.2-.13-.29-.16.14-2.04-.55-5.1-1.93-5.84-1.7-1.04-5.88-9.8-7.58-12.41 0 0-.65-6.79-4.18-12.41-2.71-10.24-5.91-27.54-4.43-43.4.1-.06.2-.12.29-.18.31 3.6 1.11 7.94 2.43 13.52.39 1.96.65 12.54 1.04 10.06.91-6.53 3.01 7.58 4.31 14.63 3.66 18.94 6.59 21.53 9.28 27.57-.13 1.18.91 4.31 2.48 5.88 1.99 1.24 11.05 4.28 13.39 2.75.43-1.5-1.74-3.69-1.26-4.94 1.24.06 7.39 2.92 4.86-1.48-1.18-.81-4-8.1-5.97-7.62-1.43-6.39-6.42-9.03-8.93-15.37-.92-2.61-1.83-8.75-2.87-10.19-1.19-12.7-2.92-32.65.59-46.57l5.7-5.25-.7 1.1s.54-.35 1.25-.88l-.3.91c.94-.6 4.7-5.93 5.99-7.52-.03.28-.14 1.77-.27 2l.08-.08-.05.51c1.93-3.17 5.83-4.45 9-8.41l-.18 2.02s.18-.51.44-1.29l-.34 1.38c.67-.35 3.06-5.97 3.29-8.01l.27.73s-.1-1.37.53-1.97l.48 1.94s.12-1.66.52-2.86c.65-.58 1.34-1.15 1.34-1.15s-.13-.09-.31-.21c.73-.61 1.05-1.74 2.11-1.39 1.31.52 7.58 5.36 7.58 5.36s-1.44-2.35-1.44-3.4c4.81 4.04 18.28 7.02 24.04 11.76l-2.53-2.95c1.32.87 2.43 1.55 2.43 1.55s-.84-.74-1.86-1.65c6.71 3.1 11.19.11 16.98 6.18l-1.96-3.4s.24.08.94.27c0 .01.01.02.01.02s0-.01-.01-.02c4.52.64 11.42 3.75 13.95 6l-2.87-3.52s2.09.91 4.05 1.57c1.96.79 3.27 2.74 4.96 3.01 1.7.13 3.4.91 3.4.91l-3.27-2.22c-.15-.12 2.19-.05 2.39.3-.11-.05-.25-.13-.4-.23 1.08.42 5.37 2.88 5.59 2.94l-2.22-2.74 2.2 1.25.07.49.52.13s.16-.03.39-.06l.75.42-.21-.47c.49-.02 1.04.05 1.3.38 0 0 .29-.43.69-1.05-.39.82-.82 1.84-.82 1.84l.95-1.9c.29 1.72-.83 3.98-.86 3.81l1.7-.91c.15.54-3.12 8.46-2.74 8.49l3.66-4.18s0 .54-.03 1.27c-.04.04-.07.07-.07.07l.07-.04c.04 4.34-4.05 10.56-1.93 14.89l2.48-4.18c-.79 1.27-1.04 5.22 0 6.79l1.7-4.18v3.66l2.61-4.44c-.73 1.11-1.16 9.61-1.7 11.23l2.22-4.57c.02-.03.04 1.41-.23 1.74l.24-.15c.3 3.26.24 8.51-.93 10.56.38-.82 2.96-5.42 2.87-6.27.41.68-.27 6.01-.78 6.79l2.74-5.22c.19 1.49.51 4.94.26 6.4l.83-1.15c.12 2.36-.04 7.2-.7 10.69 0 0 .05-.08.13-.2-.55 5.04-1.27 9.64-1.27 9.64l1.17-1.83c.14.49-2.36 11.39-1.96 12.15l1.18-1.96c-.56 4.38-1.54 17.09-3.14 24.56-.91 5.1.52 7.05 1.05 8.75 1.01 3-1.03 6.55 1.48 9.04.23.63.96 1.99.87 2.71-.19 5.61 4.41 7.88 10.69 9.09 3.46.96 6.01 1.42 4.08-2.43-1.8-4.49 1.94-.77 4.18-1.18 2.82.08-3.63-9.03-4.58-10.16.78-3.82-1.68-7.14-3.39-12.71-1.52-12.62.93-29.58 2.35-40.63.13-1.96 1.44-5.62 1.7-7.71.13-2.22-.79-3.92.13-5.22.82-.92 1.87-7.83 2.3-10.8 1.27-1.79 3.35-6.98 3.68-7.66l-.52 3.14s1.82-3.42 2.92-5.45c3.42.09 4.78 4.03 4.17 7.19 0 0 .32-.41.75-1.05v.1l1.17-1.7c.48.21-.13 5.22-.21 6.6-.65 2.43-1.66 9.39-1.84 9.5l1.05-1.31c-.53 4.3.13 16.1-1.17 21.68-1.05 2.48-1.31 9.28-1.31 9.28l.78-2.48v9.01c-.02 2.51 2.28 8.32 1.96 10.45l.65-1.18c.59 2.9-.76 8.11 3.1 11.46 1.5 2.16 1.36 5.12 4.35 7.22 1.83 1.18 10.19 1.57 12.54 1.31 3.54-.66-2.14-4.48-.78-5.49 1.23.36 7.7 1.56 4.44-2.09-1.62-1.08-4.92-6.82-7.52-6.83.17-1.68-1.35-3.96-2.67-4.92-1.57-.91-2.48-4.31-3.66-6.01-2.56-10.06-2.6-29.44 1.44-39.19 1.46-2.36.1-9.02 1.96-10.97l.65 1.31s0-2.48 1.7-4.7 3.66-9.8 3.66-9.8c-.12-.14-.29-.22-.47-.28 2.26-1.6 2.79-3.54 2 .64 2.22-4.56 6.19-12.36 6.14-17.9l.39 2.48c3.51-1.69 2.62-4.99 2.74-8.62l1.7 2.09c-.11-2.71-1.73-10.83 1.96-13.46l-.26 3.4s1.18-3.13 1.96-3.66c.55-.37.46-1.19.39-1.7.01.05.5 3.79.52 3.92-1.41-6.16 4.5-6.17 7.84-11.1l-3.66 6.79c.41-.31 7.47-7.11 7.45-7.58l-1.44 4.18c.98-.5 7.19-6.63 7.31-8.1 0 0 .79 4.83-.26 6.79.27-.63 3.94-7.4 4.7-8.23 1.29 2.07.84 3.94-.26 5.88.53-.22 4.22-6.67 4.31-7.32v4.57s1.31-3.66 1.44-4.57c.26-1.04 3.01-2.48 3.4-3.4.52-1.05 1.31-1.96 1.31-1.96l-1.44 4.57s2.88-3.4 3.4-5.1c.36-1.57 1.51 2.13.84 4.23.49-1.24 1.77-4.61 1.77-6.19 0 0 2.48 2.48 2.48 4.18 0 0 .39-3.66.26-5.62 0 0 3.79 1.18 4.05 3.66 0 0 0-3.66-1.96-5.36l3.92 2.48-1.44-3.92 3.14 2.22c-2.15-1.7-1.05-6.18.26-7.84l.78 3.66s.13-3.92 1.18-4.83c.91-1.04.91-2.48.91-2.48l1.57 3.66s.65-4.05.13-5.75l3.4 2.35c-1.36-.75-3.35-5.25-1.83-7.05 0 1.24 4.48 3.09 5.36 2.87-2.66-1.28-3.57-2.75-2.48-5.75l2.22 3.14s-1.04-3.4-.52-4.31c.52-1.05-.26-5.23-.26-5.23l2.22 3c-.12-.99-1.51-7.69-1.7-8.62 0 0 2.22 2.48 3.66 3.01 1.43.52 2.35 1.18 2.35 1.18-2.99-2.26-3.03-4.59-3.13-7.84l2.87 2.88c-.08-.78-1.41-6.47-1.7-7.32l2.22 1.05c-.44-.72-2.55-6.98-2.22-7.84 0 0 2.22 2.74 3.66 3.4-1.25-.18-1.54-4.1-2.13-5.59 1.02.42 2.85.94 3.08.8-.52-.42-3.1-2.65-3.66-3.14 0 0 3.66-.26 5.1-.91 0 0-1.83 0-2.87-1.04-.91-.92 4.83-1.18 4.83-1.18s-3.14-1.04-3.79-1.96c-.78-1.04-1.96-1.96-1.96-1.96l3.4.52-2.74-3.13 2.74.92c-2.03-1.3-2.17-6.9-2.22-8.49l1.7 3.92c-.71-1.92-.4-12.08-.26-13.72l2.22 3.92c-.1-2.59-2.35-7.52-1.44-10.97.65-1.7-.78-6.79-.78-6.79l2.48 3.4s-.78-4.05-1.31-5.36c-.65-4.38.44-11.69.52-15.8l1.7 4.96c-.65-3.17.26-15.93-.26-18.81l2.22 2.22c-.27-3.98-5.2-14.42-4.84-19.46.52-3.14-.52-5.36-.52-5.36l1.96 2.22c-.63-2.42-1.74-9.01 2.13-10.36 1.57.89 2.81 1.98 2.96 2.12-.13-.29-.24-2.53 1.17-1.7 1.7.65 4.44 1.17 4.44 1.17l-1.17-1.17c.21-.37 9.29.78 9.66.39l-1.44-.91c4.25-2.16 11.37-3.33 16.46.53 1.96 1.44 3.39 3.66 5.36 4.05 3.78.7 8.51.67 7.45-3.79 2.25.18 4.34-2.21 3.78-4.2z"/></svg>
							</div>
							<!-- <img src="php echo get_template_directory_uri(); ?>/img/Alpaca-flat.png" class="round any-center hover-back animals-before-svg" alt="alpaca" loading="lazy" /> -->
						</a>
						<h3 class="text-center">
							<a href="<?php echo home_url(); ?>/alpaca-llama" class="animals-link">Alpaca / llama</a>
						</h3>
					</div>
				<?php } ?>
			</div>
		</section>
		
		<?php if ( is_user_logged_in() ) { ?>
			<section class="set-in">
				<h4>Welcome back <?php echo $current_user->user_login; ?></h4> <!-- $current_user comes from header.php -->
				
				<?php // then search for orders -->
				$table_name = "meatorders"; // there might be good reason to put this in the header if this doesnt exist then very little of the site should work, it should throw a full admin error
				if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name) {

					echo "<p>Your most recent order was:</p>";
					
					$orders = $wpdb->get_results( 
						"
						SELECT * 
						FROM meatorders
						WHERE email = '$current_user->user_email'
						ORDER by unid desc
						LIMIT 1;
						"
					);
					foreach ( $orders as $order ) { ?>
						<ul class="stripes">  <!-- its only ever one Im not 100% sure it should be a link even tho its an easy way to get visual consistency -->
							<li> <!-- keep thinking about if this should all be a php echo or keep going in and out -->
								<a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a>
								|
								<?php echo $order->amp; ?>
								|
								<?php echo $order->timenow; ?>
							</li>
						</ul> 

					<?php } // order
				} else { // no table
					if(current_user_can('administrator')) {
						echo "<p>The meatorders table doesn't exist, this is really bad</p>";
					} // admin
				} // table ?>

				<!--should these all be buttons? -->
				<p>Would you like to view <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>">your previous orders?</a></p>
				<p><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>">Check or modify your current info</a></p>
				<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('logout')->ID); ?>" class="button drop">logout</a> <!-- this actually is a button not a h ref -->
			</section>

		<?php } else { ?> <!-- user not logged in -->
			<div class="set-in">
				<h3>Login</h3>

				<p><em>Usernames have no spaces or special charachters.</em></p>

				<?php 
					$main_login = array (
						'form_id'	=> 'main_login'
					);
					wp_login_form( $main_login ); // why is everything wrapped in p tags?
				?>

				<a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a><!-- this is more of a button? it does something? -->

				<hr>

				<h3>New Users</h3>
				
				<p>Become a member to be able to search previous orders and have your sigin in information auto fill.</p>
				<!-- <button><a href=" php echo home_url(); ?>/?page_id= php echo (get_page_by_title('register')->ID); ?>" class="button drop left">Sign Up</a> this is a button -->
				<button>Sign Up</button> <!-- needs to be linked up -->
			</div>
					
		<?php } ?>

		<hr class="hide-for-medium"> <!-- I dont like starting with an hr I can design better around this -->
		
	</div> <!-- the second area -->

	<div class="home-contact"><!-- seconday set of grid to allow for margins on 1 or 2 columns // outside of row on purpose -->
		<?php 
			$contact_home = get_page_by_title('Contact Us'); // avoid stepping on $contact in header.php but it cant be used without new variable
			if ( $contact_home == '') { // $contact comes from header.php
				if(current_user_can('administrator')) { ?>
					<p class="set-in">No Contact Us page</p>
				<?php } // admin
			} else { // if contact ?>
				<div class="set-in"> <!-- being the next element up breaks the flex -->
					<h3><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
					
					<?php echo (get_page_by_title('Contact Us')->post_content); ?>
				</div>
			<?php }
		?>
	</div><!-- columns -->

	<picture class="home-image hide-for-print">
		 <!-- this is its own area and needs to be written into the theme in a better way including come from the wp customizer -->
		<source srcset="<?php echo get_template_directory_uri(); ?>/img/iStock_000021247297_recipe.jpg" alt="cooking"  type="image/webp">
		<img src="<?php echo get_template_directory_uri(); ?>/img/iStock_000021247297_recipe.jpg" alt="cooking" loading="lazy">
	</picture>

</div> <!-- .container -->
	
<?php get_footer(); ?> 