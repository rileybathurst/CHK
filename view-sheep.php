<h3>LAMB</h3>

<!-- l_shoulder shoulder_lb -->
<div>
	<?php if ($order->l_shoulder == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Shoulder</strong>

	<?php if ($order->l_shoulder == 1) { 
		echo $order->shoulder_lb;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- l_loin loin_lb -->
<div>
	<?php if ($order->l_loin == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Loin</strong>

	<?php if ($order->l_loin == 1) { 
		echo $order->loin_lb;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- l_flaps flaps_lb -->
<div>
	<?php if ($order->l_flaps == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Flaps</strong>

	<?php if ($order->l_flaps == 1) { 
		echo $order->flaps_lb;
	} else { echo '&nbsp;'; } ?>
</div>


<!-- l_leg leg_lb -->
<div>
	<?php if ($order->l_leg == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Leg</strong>

	<?php if ($order->l_leg == 1) { 
		echo $order->leg_lb;
	} else { echo '&nbsp;'; } ?>
</div>