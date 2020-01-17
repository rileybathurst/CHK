<h3 class="single-stripe">SMALL GOODS</h3>

<!-- t_porkherb t_porkherb -->
<div>
	<?php if ( $order->t_porkherb == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Pork &amp; Herb</strong>

	<?php if ($order->t_porkherb == 1) { 
		echo $order->t_porkherb . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>
			
<!-- t_lambmint t_lambmint -->
<div>
	<?php if ($order->t_lambmint == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Lamb &amp; Mint</strong>

	<?php if ($order->t_lambmint == 1) { 
		echo $order->t_lambmint . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>
			
<!-- t_bratwurst t_bratwurst -->
<div>
	<?php if ($order->t_bratwurst == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bratwurst</strong>

	<?php if ($order->t_bratwurst == 1) { 
		echo $order->t_bratwurst . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_bratwurst_fennel t_bratwurst_fennel -->
<div>
	<?php if ($order->t_bratwurst_fennel == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bratwurst w/ Fennel</strong>

	<?php if ($order->t_bratwurst_fennel == 1) { 
		echo $order->t_bratwurst_fennel . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_texan_chile t_texan_chile -->
<div>
	<?php if ($order->t_texan_chile == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Texan Chile</strong>

	<?php if ($order->t_texan_chile == 1) { 
		echo $order->t_texan_chile . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_chorizo t_chorizo -->
<div>
	<?php if ($order->t_chorizo == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Chorizo</strong>

	<?php if ($order->t_chorizo == 1) { 
		echo $order->t_chorizo . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_tomatobasil t_tomatobasil -->
<div>
	<?php if ($order->t_tomatobasil == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Tomato &amp; Basil</strong>

	<?php if ($order->t_tomatobasil == 1) { 
		echo $order->t_tomatobasil . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_herbgarlic t_herbgarlic -->
<div>
	<?php if ($order->t_herbgarlic == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Herb &amp; Garlic</strong>

	<?php if ($order->t_herbgarlic == 1) { 
		echo $order->t_herbgarlic . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_peppersonion t_peppersonion -->
<div>
	<?php if ($order->t_peppersonion == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Green Capsicum &amp; Onion</strong>

	<?php if ($order->t_peppersonion == 1) { 
		echo $order->t_peppersonion . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_capsicum t_gf_capsicum -->
<div>
	<?php if ($order->t_gf_capsicum == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Green Capsicum Onion <em>- GF</em></strong>

	<?php if ($order->t_gf_capsicum == 1) { 
		echo $order->t_gf_capsicum . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_plain t_plain -->
<div>
	<?php if ($order->t_plain == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Plain</strong>

	<?php if ($order->t_plain == 1) { 
		echo $order->t_plain . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_plain t_gf_plain -->
<div>
	<?php if ($order->t_gf_plain == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Plain <em>- GF</em></strong>

	<?php if ($order->t_gf_plain == 1) { 
		echo $order->t_gf_plain . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_saveloys t_saveloys -->
<div>
	<?php if ($order->t_saveloys == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Saveloys</strong>

	<?php if ($order->t_saveloys == 1) { 
		echo $order->t_saveloys . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_saveloys t_gf_saveloys -->
<div>
	<?php if ($order->t_gf_saveloys == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Saveloys <em>- GF</em></strong>

	<?php if ($order->t_gf_saveloys == 1) { 
		echo $order->t_gf_saveloys . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_create t_create -->
<div>
	<?php if ($order->t_create == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Create</strong>

	<?php if ($order->t_create == 1) { 
		echo $order->t_create . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>
			
<!-- t_patties t_patties -->
<div>
	<?php if ($order->t_patties == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Patties</strong>

	<?php if ($order->t_patties == 1) { 
		echo $order->t_patties . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_patties t_gf_patties -->
<div>
	<?php if ($order->t_gf_patties == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Patties <em>- GF</em></strong>
	
	<?php if ($order->t_gf_patties == 1) { 
		echo $order->t_gf_patties . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_salami t_salami salami_t salami_s -->
<div>
	<?php if ($order->t_salami == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Salami</strong>

	<?php if ($order->t_salami == 1) { 
		echo $order->t_salami . ' #';
	} else { echo '&nbsp;'; }
	
	if ($order->t_salami == 1) { 
		echo $order->salami_s .'&nbsp;';
	} else { echo '&nbsp;'; }

	if ($order->t_salami == 1) { 
		echo $order->salami_t;
	} else { echo '&nbsp;'; } ?>
</div>