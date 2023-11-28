<h3 class="single-stripe">DEER</h3>

<!-- v_filllet fillet_v -->
<div>
	<?php if ($order->fillet_v == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Fillet</span></strong>

	<?php if ($order->v_filllet == 1) {
		echo $order->fillet_v;
	} else {
		echo ' ';
	} ?>
</div>

<!-- v_backstrap backstrap_v -->
<div>
	<?php if ($order->backstrap_v == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Backstrap</span></strong>

	<?php if ($order->backstrap_v == 1) {
		echo $order->v_backstrap;
	} else {
		echo ' ';
	} ?>
</div>

<!-- v_rump rump_v -->
<div>
	<?php if ($order->rump_v == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Rump</span></strong>

	<?php if ($order->rump_v == 1) {
		echo $order->v_rump;
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
