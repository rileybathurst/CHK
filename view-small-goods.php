<h3 class="single-stripe">SMALL GOODS</h3>

<!-- t_porkherb -->
<div>
	<?php if ( $order->t_porkherb >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Pork and Herb</strong>

	<?php if ($order->t_porkherb >= 1) { 
		echo $order->t_porkherb . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>
			
<!-- t_lambmint -->
<div>
	<?php if ($order->t_lambmint >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Lamb and Mint</strong>

	<?php if ($order->t_lambmint >= 1) { 
		echo $order->t_lambmint . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_bratwurst -->
<div>
	<?php if ($order->t_bratwurst >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bratwurst</strong>

	<?php if ($order->t_bratwurst >= 1) { 
		echo $order->t_bratwurst . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_bratwurst_fennel -->
<div>
	<?php if ($order->t_bratwurst_fennel >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bratwurst w/ Fennel</strong>

	<?php if ($order->t_bratwurst_fennel >= 1) { 
		echo $order->t_bratwurst_fennel . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_texan_chile -->
<div>
	<?php if ($order->t_texan_chile >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Texan Chile</strong>

	<?php if ($order->t_texan_chile >= 1) { 
		echo $order->t_texan_chile . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_texan_chilli_cheese -->
<div>
	<?php if ($order->t_texan_chilli_cheese >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Texan Chilli – smoked with cheese</strong>

	<?php if ($order->t_texan_chilli_cheese >= 1) { 
		echo $order->t_texan_chilli_cheese . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_chorizo -->
<div>
	<?php if ($order->t_chorizo >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Chorizo</strong>

	<?php if ($order->t_chorizo >= 1) { 
		echo $order->t_chorizo . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_tomatobasil -->
<div>
	<?php if ($order->t_tomatobasil >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Tomato and Basil</strong>

	<?php if ($order->t_tomatobasil >= 1) { 
		echo $order->t_tomatobasil . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_herbgarlic -->
<div>
	<?php if ($order->t_herbgarlic >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Herb and Garlic</strong>

	<?php if ($order->t_herbgarlic >= 1) { 
		echo $order->t_herbgarlic . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_peppersonion -->
<div>
	<?php if ($order->t_peppersonion >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Green Capsicum and Onion</strong>

	<?php if ($order->t_peppersonion >= 1) { 
		echo $order->t_peppersonion . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_capsicum -->
<div>
	<?php if ($order->t_gf_capsicum >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Green Capsicum Onion <em>- GF</em></strong>

	<?php if ($order->t_gf_capsicum >= 1) { 
		echo $order->t_gf_capsicum . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_steak_onion -->
<div>
	<?php if ($order->t_steak_onion >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Steak and Onion</strong>

	<?php if ($order->t_steak_onion >= 1) { 
		echo $order->t_steak_onion . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_manuka_honey_hickory -->
<div>
	<?php if ($order->t_manuka_honey_hickory >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Manuka Honey and Hickory</strong>

	<?php if ($order->t_manuka_honey_hickory >= 1) { 
		echo $order->t_manuka_honey_hickory . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_old_english -->
<div>
	<?php if ($order->t_old_english >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Old English</strong>

	<?php if ($order->t_old_english >= 1) { 
		echo $order->t_old_english . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_boerewors -->
<div>
	<?php if ($order->t_boerewors >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Boerewors</strong>

	<?php if ($order->t_boerewors >= 1) { 
		echo $order->t_boerewors . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_cheese_krnasky -->
<div>
	<?php if ($order->t_cheese_krnasky >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Cheese Kransky - smoked</strong>

	<?php if ($order->t_cheese_krnasky >= 1) { 
		echo $order->t_cheese_krnasky . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_plain -->
<div>
	<?php if ($order->t_plain >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Plain</strong>

	<?php if ($order->t_plain >= 1) { 
		echo $order->t_plain . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_plain -->
<div>
	<?php if ($order->t_gf_plain >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Plain <em>- GF</em></strong>

	<?php if ($order->t_gf_plain >= 1) { 
		echo $order->t_gf_plain . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_saveloys -->
<div>
	<?php if ($order->t_saveloys >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Saveloys</strong>

	<?php if ($order->t_saveloys >= 1) { 
		echo $order->t_saveloys . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- sg_hogg_casing -->
<div>
	<?php if ($order->sg_hogg_casing >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Hogg Casings</strong>
</div>

<!-- sg_gormet_cheese -->
<div>
	<?php if ($order->sg_gormet_cheese >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Add cheese to gourmet sausages</strong>
</div>

<!-- t_create -->
<div>
	<?php if ($order->t_create >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Create</strong>

	<?php if ($order->t_create >= 1) { 
		echo $order->t_create . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_patties -->
<div>
	<?php if ($order->t_patties >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Patties</strong>

	<?php if ($order->t_patties >= 1) { 
		echo $order->t_patties . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_gf_patties -->
<div>
	<?php if ($order->t_gf_patties >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Patties <em>- GF</em></strong>
	
	<?php if ($order->t_gf_patties >= 1) { 
		echo $order->t_gf_patties . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_salami salami_t salami_s -->
<div>
	<?php if ($order->t_salami >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Salami</strong>

	<?php if ($order->t_salami >= 1) { 
		echo $order->t_salami . ' #';
	} else { echo '&nbsp;'; }

	if ($order->t_salami >= 1) { 
		echo $order->salami_s .'&nbsp;';
	} else { echo '&nbsp;'; }

	if ($order->t_salami >= 1) { 
		echo $order->salami_t;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_cheerio -->
<div>
	<?php if ($order->t_cheerio >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Cheerio</strong>

	<?php if ($order->t_cheerio >= 1) { 
		echo $order->t_cheerio . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_frankfurter -->
<div>
	<?php if ($order->t_frankfurter >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Frankfurter</strong>

	<?php if ($order->t_frankfurter >= 1) { 
		echo $order->t_frankfurter . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_biersticks -->
<div>
	<?php if ($order->t_biersticks >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Biersticks</strong>

	<?php if ($order->t_biersticks >= 1) { 
		echo $order->t_biersticks . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_rissoles rissoles_t -->
<div>
	<?php if ($order->t_rissoles >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Rissoles</strong>

	<?php if ($order->t_rissoles >= 1) { 
		echo $order->t_rissoles . 'KG ';
	} else { echo '&nbsp;'; }

	if ($order->t_rissoles >= 1) { 
		echo $order->rissoles_t;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- t_koftas -->
<div>
	<?php if ($order->t_koftas >= 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Koftas</strong>

	<?php if ($order->t_koftas >= 1) { 
		echo $order->t_koftas . 'KG';
	} else { echo '&nbsp;'; } ?>
</div>
