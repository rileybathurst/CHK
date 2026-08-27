<h3 class="single-stripe">PIES</h3>

<!-- pie_steak -->
<div>
	<?php if ( $order->pie_steak == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Steak Pie</strong>

	<?php if ($order->pie_steak == 1) { 
		echo $order->pie_steak_size;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pie_steak_cheese -->
<div>
	<?php if ( $order->pie_steak_cheese == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Steak & Cheese Pie</strong>

	<?php if ($order->pie_steak_cheese == 1) { 
		echo $order->pie_steak_cheese_size;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pie_mince -->
<div>
	<?php if ( $order->pie_mince == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Mince Pie</strong>

	<?php if ($order->pie_mince == 1) { 
		echo $order->pie_mince_size;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pie_mince_cheese -->
<div>
	<?php if ( $order->pie_mince_cheese == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Mince & Cheese Pie</strong>

	<?php if ($order->pie_mince_cheese == 1) { 
		echo $order->pie_mince_cheese_size;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pie_big_sausage_rolls -->
<div>
	<?php if ( $order->pie_big_sausage_rolls == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Big Sausage Rolls</strong>
</div>

