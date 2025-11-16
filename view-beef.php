<h3 class="single-stripe">BEEF</h3>

<!-- Start of Option with tich and choice -->
<!-- b_fillet fillet_bf -->
<div>
	<?php if ($order->b_fillet == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
		<strong>Fillet</strong>

	<?php if ($order->b_fillet == 1) { 
		echo $order->fillet_bf;
	} else { echo ' '; } ?>

</div>
<!-- End of Option -->

<!-- b_porterhouse porterhouse_bf -->
<div>
	<?php if ($order->b_porterhouse == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Porterhouse</strong>

	<?php if ($order->b_porterhouse == 1) { 
		echo $order->porterhouse_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_tbone -->
<div>
	<?php if ($order->b_tbone == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>T-Bone</strong>
</div>

<!-- b_ribeye ribeye_bf -->
<div>
	<?php if ($order->b_ribeye == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Ribeye</strong>

	<?php if ($order->b_ribeye == 1) { 
		echo $order->ribeye_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_rump rump_bf -->
<div>
	<?php if ($order->b_rump == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo ' '; } ?>
	<strong>Rump</strong>

	<?php if ($order->b_rump == 1) { 
		echo $order->rump_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_topside topside_bf -->
<div>
	<?php if ($order->b_topside == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo ' '; } ?>
	<strong>Topside</strong>

	<?php if ($order->b_topside == 1) { 
		echo $order->topside_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_rolledroast rolledroast_bf -->
<div>
	<?php if ($order->b_rolledroast == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo ' '; } ?>
	<strong>Rolled Roast</strong>

	<?php if ($order->b_rolledroast == 1) { 
		echo $order->rolledroast_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_wienerschnitzel weinerschnitzel_bf -->
<div>
	<?php if ($order->b_weinerschnitzel == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo " "; } ?>
		<strong>Weiner Schitzel</strong>

	<?php if ($order->b_weinerschnitzel == 1) { 
		echo $order->weinerschnitzel_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_silverside silverside_bf -->
<div>
	<?php if ($order->b_silverside == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo ' '; } ?>
	<strong>Silverside</strong>
	
	<?php if ($order->b_silverside == 1) { 
		echo $order->silverside_bf;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- b_blade blade_bf -->
<div>
		<?php if ($order->b_blade == 1) { ?>
			<span class="unicode highlights spacer">✓</span>
		<?php } else { echo '&nbsp;'; } ?>
		<strong>Blade</strong>
		
	<?php if ($order->b_blade == 1) { 
		echo $order->blade_bf;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- b_shinfillet shinfillet_bf -->
<div>
	<?php if ($order->b_shinfillet == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo ' '; } ?>
	<strong>Shin Fillet</strong>
		
	<?php if ($order->b_shinfillet == 1) { 
		echo $order->shinfillet_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_chucksteak chucksteak_bf -->
<div>
	<?php if ($order->b_chucksteak == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { echo ' '; } ?>
	<strong>Chuck Steak</strong>
		
	<?php if ($order->b_chucksteak == 1) { 
		echo $order->chucksteak_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_skirtsteak skirtsteak_bf -->
<div>
	<?php if ($order->b_skirtsteak == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Skirt Steak</strong>
		
	<?php if ($order->b_skirtsteak == 1) { 
		echo $order->skirtsteak_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_crosscut crosscut_bf -->
<div>
	<?php if ($order->b_crosscut == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Cross Cut</strong>
		
	<?php if ($order->b_crosscut == 1) { 
		echo $order->crosscut_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_brisket brisket_bf -->
<div>
	<?php if ($order->b_brisket == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Brisket</strong>
		
	<?php if ($order->b_brisket == 1) { 
		echo $order->brisket_bf;
	} else { echo ' '; } ?>
	<?php if ($order->b_brisket == 1) { 
		echo $order->brisket_bf;
	} else { echo ' '; } 

	if ($order->b_brisket == 1) { 
		echo $order->brisket_bag;
	} else { echo ' '; } ?>
</div>

<!-- b_shortribs shortribs_bf -->
<div>
	<?php if ($order->b_shortribs == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Short Ribs</strong>

	<?php if ($order->b_shortribs == 1) { 
		echo $order->shortribs_bf;
	} else { echo ' '; } ?>
</div>

<!-- b_smoker -->
<div>
	<?php if ($order->b_smoker == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Alter cut to low and slow smoker style</strong>
</div>

<div>
	<?php if ( $order->assistance >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Assistance</strong>
</div>