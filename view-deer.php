<h3 class="single-stripe">DEER</h3>

<!-- v_shoulder shoulder_v -->
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

<!-- v_loin loin_v -->
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

<!-- v_leg v_leg_whole_half -->
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

<!-- v_excess_trim excess_trim_v -->
<div>
	<?php if ($order->v_excess_trim == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Excess Trim</strong>

	<?php if ($order->v_excess_trim == 1) {
		echo $order->excess_trim_v;
	} else {
		echo ' ';
	} ?>
</div>
