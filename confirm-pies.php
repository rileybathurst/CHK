<!-- Pies -->
<h4>Pies</h4>

<hr>

<!-- pie_steak pie_steak_size -->
<div>
	<p>
		Steak Pies
		<?php if ($order->pie_steak == 1) { ?>
			<span class="unicode check spacer">✓</span>
			&nbsp;<?php echo $order->pie_steak_size; ?>
		<?php } else { ?>
			<span class="unicode cross spacer">✗</span>
		<?php } ?>
		<input type="hidden" name="pie_steak" value="<?php echo $order->pie_steak; ?>">
		<input type="hidden" name="pie_steak_size" value="<?php echo $order->pie_steak_size; ?>">
		</p>
</div>

<!-- pie_steak_cheese pie_steak_cheese_size -->
<div>
	<p>
		Steak and Cheese Pies
		<?php if ($order->pie_steak_cheese == 1) { ?>
			<span class="unicode check spacer">✓</span>
			&nbsp;<?php echo $order->pie_steak_cheese_size; ?>
		<?php } else { ?>
			<span class="unicode cross spacer">✗</span>
		<?php } ?>
		<input type="hidden" name="pie_steak_cheese" value="<?php echo $order->pie_steak_cheese; ?>">
		<input type="hidden" name="pie_steak_cheese_size" value="<?php echo $order->pie_steak_cheese_size; ?>">
		</p>
</div>

<!-- pie_mince pie_mince_size -->
<div>
	<p>
		Mince Pies
		<?php if ($order->pie_mince == 1) { ?>
			<span class="unicode check spacer">✓</span>
			&nbsp;<?php echo $order->pie_mince_size; ?>
		<?php } else { ?>
			<span class="unicode cross spacer">✗</span>
		<?php } ?>
		<input type="hidden" name="pie_mince" value="<?php echo $order->pie_mince; ?>">
		<input type="hidden" name="pie_mince_size" value="<?php echo $order->pie_mince_size; ?>">
		</p>
</div>

<!-- pie_mince_cheese pie_mince_cheese_size -->
<div>
	<p>
		Mince and Cheese Pies
		<?php if ($order->pie_mince_cheese == 1) { ?>
			<span class="unicode check spacer">✓</span>
			&nbsp;<?php echo $order->pie_mince_cheese_size; ?>
		<?php } else { ?>
			<span class="unicode cross spacer">✗</span>
		<?php } ?>
		<input type="hidden" name="pie_mince_cheese" value="<?php echo $order->pie_mince_cheese; ?>">
		<input type="hidden" name="pie_mince_cheese_size" value="<?php echo $order->pie_mince_cheese_size; ?>">
		</p>
</div>

<!-- pie_big_sausage_rolls -->
<div>
	<p>
		Big Sausage Rolls
		<?php if ($order->pie_big_sausage_rolls == 1) { ?>
			<span class="unicode check spacer">✓</span>
		<?php } else { ?>
			<span class="unicode cross spacer">✗</span>
		<?php } ?>
		<input type="hidden" name="pie_big_sausage_rolls" value="<?php echo $order->pie_big_sausage_rolls; ?>">
		</p>
</div>

<?php include get_parent_theme_file_path( '/inc/submitted.php' ); ?>