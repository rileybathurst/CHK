<h3>DEER</h3>

<!-- v_shoulder -->
<div>
	<?php if ($order->v_shoulder == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Shoulder</span></strong>
	
	<?php if ($order->v_shoulder == 1) { 
		echo $order->shoulder_v;
	} else { echo ' '; } ?>
</div>

<!-- v_loin -->
<div>
	<?php if ($order->v_loin == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Loin</strong>
	
	<?php if ($order->v_loin == 1) { 
		echo $order->loin_v;
	} else { echo ' '; } ?>
</div>

<!-- v_leg -->
<div>
	<?php if ($order->v_leg == 1) { ?>
		<span class="unicode check spacer">✓</span>
	<?php } else { echo '&nbsp;'; } ?>
	<strong>Leg</strong>

	<?php if ($order->v_leg == 1) { 
		echo $order->leg_v;
	} else { echo ' '; } ?>

	<?php if ($order->v_leg == 1) { 
		echo $order->v_leg_whole_half;
	} else { echo ' '; } ?>
</div>