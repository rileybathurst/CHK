<h3 class="single-stripe">DEER</h3>

<!-- v_fillet fillet_v -->
<div>
	<?php if ($order->v_fillet == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Fillet</span></strong>

	<?php if ($order->v_fillet == 1) {
		echo $order->fillet_v;
	} else {
		echo ' ';
	} ?>
</div>

<!-- v_backstrap backstrap_v -->
<div>
	<?php if ($order->v_backstrap == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Backstrap</span></strong>

	<?php if ($order->backstrap_v == 1) {
		echo $order->backstrap_v;
	} else {
		echo ' ';
	} ?>
</div>

<!-- v_rump rump_v -->
<div>
	<?php if ($order->v_rump == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Rump</span></strong>

	<?php if ($order->v_rump == 1) {
		echo $order->rump_v;
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

<div>
	<?php if ( $order->assistance >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Assistance</strong>
</div>