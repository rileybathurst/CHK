<h3 class="single-stripe">DEER</h3>

<!-- v_shoulder -->
<div>
	<?php if ($order->v_shoulder == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Shoulder</span></strong>

	<?php if ($order->v_shoulder == 1) {
		echo $order->shoulder_v;
	} else {
		echo ' ';
	} ?>
</div>

<!-- v_loin -->
<div>
	<?php if ($order->v_loin == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Loin</strong>

	<?php if ($order->v_loin == 1) {
		echo $order->loin_v;
	} else {
		echo ' ';
	} ?>
</div>

<!-- v_leg -->
<div>
	<?php if ($order->v_leg == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Leg</strong>

	<?php if ($order->v_leg == 1) {
		echo $order->leg_v;
	} else {
		echo ' ';
	} ?>

	<?php if ($order->v_leg == 1) {
		echo $order->v_leg_whole_half;
	} else {
		echo ' ';
	} ?>
</div>