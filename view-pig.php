<h3 class="single-stripe">PORK - SHOULDER</h3>

<!-- ps_rolledshoulder rolledshoulder_ps -->
<div>
	<?php if ($order->ps_rolledshoulder == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Rolled Shoulder</strong>

	<?php if ($order->ps_rolledshoulder == 1) { 
		echo $order->rolledshoulder_ps;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- ps_bacon -->
<div>
	<?php if ($order->ps_bacon == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bacon</strong>
</div>
			
<!-- ps_pickledpork -->
<div>
	<?php if ($order->ps_pickledpork == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Pickled Pork</strong>
</div>
			
<!-- ps_chops -->
<div>
	<?php if ($order->ps_chops == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Chops</strong>
</div>
			
<!-- ps_pressedham pressedham_ps -->
<div>
	<?php if ($order->ps_pressedham == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Pressed Ham</strong>

	<?php if ($order->ps_pressedham == 1) { 
		echo $order->pressedham_ps;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- ps_mince -->
<div>
	<?php if ($order->ps_mince == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Mince</strong>
</div>

<!-- ps_dicedpork -->
<div>
	<?php if ($order->ps_dicedpork == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Diced</strong>
</div>

<!-- ps_roastjointed roastjointed_ps -->
<div>
	<?php if ($order->ps_roastjointed == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Roast Jointed</strong>

	<?php if ($order->ps_roastjointed == 1) { 
		echo $order->roastjointed_ps;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- ps_bostonbutt -->
<div>
	<?php if ($order->ps_bostonbutt == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Boston Butt - Pulled Pork</strong>
</div>


<!--PORK - Loin -->
<h3>PORK - LOIN</h3>

<!-- pl_chops -->
<div>
	<?php if ($order->pl_chops == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Chops</strong>
</div>

<!-- pl_loinsteaks -->
<div>
	<?php if ($order->pl_loinsteaks == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Steaks</strong>
</div>
			
<!-- pl_roastjointed roastjointed_pl -->
<div>
	<?php if ($order->pl_roastjointed == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Roast Jointed</strong>

	<?php if ($order->pl_roastjointed == 1) { 
		echo $order->roastjointed_pl;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pl_bacon -->
<div>
	<?php if ($order->pl_bacon == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bacon</strong>
</div>

<!-- pl_baconchops -->
<div>
	<?php if ($order->pl_baconchops == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bacon Chops</strong>
</div>

<!-- pl_bellybacon -->
<div>
	<?php if ($order->pl_bellybacon == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Loin Belly Bacon</strong>
</div>

<!-- pb_rolled -->
<div>
	<?php if ($order->pb_rolled == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Belly Bacon Rolled With Loin Bacon</strong>
</div>

<!--PORK - Belly -->
<h3>PORK - BELLY</h3>

<!-- pb_bacon -->
<div>
	<?php if ($order->pb_bacon == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Streaky Bacon</strong>
</div>

<!-- pb_baconstrips -->
<div>
	<?php if ($order->pb_baconstrips == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bacon Strips</strong>
</div>

<!-- pb_whole whole_pb -->
<div>
	<?php if ($order->pb_whole == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Roast</strong>

	<?php if ($order->pb_whole == 1) { 
		echo $order->whole_pb;
	} else { echo " "; } ?>
</div>

<!-- pb_marinate marinate_pb -->
<div>
	<?php if ($order->pb_marinate == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Marinate Cook in a Bag</strong>

	<?php if ($order->marinate_pb == 1) { 
		echo $order->marinate_pb;
	} else { echo " "; } ?>
</div>



<!--PORK - Leg -->
<h3>PORK - LEG</h3>

<!-- pg_hamonthebone hamonthebone_cook hamonthebone_size -->
<div>
	<?php if ($order->pg_hamonthebone == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Ham On The Bone</strong>

	<?php if ($order->pg_hamonthebone == 1) { 
		echo $order->hamonthebone_cook . '&nbsp;';
	} else { echo '&nbsp;'; } 

		if ($order->pg_hamonthebone == 1) { 
		echo $order->hamonthebone_size;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pg_pressedham pressedham_cook pressedham_size -->
<div>
	<?php if ($order->pg_pressedham == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Pressed Ham</strong>

	<?php if ($order->pg_pressedham == 1) { 
		echo $order->pressedham_cook . '&nbsp;';
	} else { echo '&nbsp;'; }

	if ($order->pg_pressedham == 1) { 
		echo $order->pressedham_size;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pg_roast roast_pg -->
<div>
	<?php if ($order->pg_roast == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Roast</strong>

	<?php if ($order->pg_roast == 1) { 
		echo $order->roast_pg;
	} else { echo '&nbsp;'; } ?>
</div>

<!-- pg_mince -->
<div>
	<?php if ($order->pg_mince == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Mince</strong>
</div>
			
<!-- pg_diced -->
<div>
	<?php if ($order->pg_diced == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Diced</strong>
</div>

<!-- pg_legsteaks -->
<div>
	<?php if ($order->pg_legsteaks == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Leg Steaks</strong>
</div>

<!-- pg_bacon -->
<div>
	<?php if ($order->pg_bacon == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Bacon</strong>
</div>

<!--pg_hocks hocks_pg -->
<div>
	<?php if ($order->pg_hocks == 1) { ?>
		<span class="unicode highlights spacer">✓</span>
	<?php } else { ?>
		<span class="unicode spacer hide-for-print">✗</span>
	<?php } ?>
	<strong>Hocks</strong>

	<?php if ($order->pg_hocks == 1) { 
		echo $order->hocks_pg;
	} else { echo '&nbsp;'; } ?>
</div>