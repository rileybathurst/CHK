<!-- small goods -->
<h4>Small Goods</h4>

<hr>

<h3>Sausages</h3>

<!-- t_porkherb -->
<div>
	<p>
		Pork &amp; Herb
		<?php if ($order->t_porkherb != '') { 
			echo $order->t_porkherb . ' KG';
		}; ?>
		<input type="hidden" name="t_porkherb" value="<?php echo $order->t_porkherb; ?>">
	</p>
</div>

<!-- t_lambmint -->
<div>
	<p>
		Lamb &amp; Mint
		<?php if ($order->t_lambmint != '') { 
			echo $order->t_lambmint . ' KG'; 
		}; ?>
		<input type="hidden" name="t_lambmint" value="<?php echo $order->t_lambmint; ?>">
	</p>
</div>

<!-- t_bratwurst -->
<div>
	<p>
		Bratwurst
		<?php if ($order->t_bratwurst != '') { 
			echo $order->t_bratwurst . ' KG';
		}; ?>
		<input type="hidden" name="t_bratwurst" value="<?php echo $order->t_bratwurst; ?>">
	</p>
</div>

<!-- t_bratwurst_fennel -->
<div>
	<p>
		Bratwurst w/ Fennel
		<?php if ($order->t_bratwurst_fennel != '') { 
			echo $order->t_bratwurst_fennel . ' KG';
		}; ?>
		<input type="hidden" name="t_bratwurst_fennel" value="<?php echo $order->t_bratwurst_fennel; ?>">
	</p>
</div>

<!-- t_texan_chile -->
<div>
	<p>
		Texan Chile
		<?php if ($order->t_texan_chile != '') { 
			echo $order->t_texan_chile . ' KG';
		}; ?>
		<input type="hidden" name="t_texan_chile" value="<?php echo $order->t_texan_chile; ?>">
	</p>
</div>

<!-- sg_chorizo t_chorizo -->
<div>
	<p>
		Chorizo
		<?php if ($order->t_chorizo != '') { 
			echo $order->t_chorizo . ' KG';
		}; ?>
		<input type="hidden" name="t_chorizo" value="<?php echo $order->t_chorizo; ?>">
	</p>
</div>

<!-- t_tomatobasil -->
<div>
	<p>
		Tomato &amp; Basil
		<?php if ($order->t_tomatobasil != '') { 
			echo $order->t_tomatobasil . ' KG';
		}; ?>
		<input type="hidden" name="t_tomatobasil" value="<?php echo $order->t_tomatobasil; ?>">
	</p>
</div>

<!-- t_herbgarlic -->
<div>
	<p>Herb &amp; Garlic
		<?php if ($order->t_herbgarlic != '') { 
			echo $order->t_herbgarlic . ' KG';
		}; ?>
		<input type="hidden" name="t_herbgarlic" value="<?php echo $order->t_herbgarlic; ?>">
	</p>
</div>

<!-- t_peppersonion -->
<div>
	<p>
		Green Capsicum &amp; Onion
		<?php if ($order->t_peppersonion != '') { 
			echo $order->t_peppersonion . ' KG';
		}; ?>
		<input type="hidden" name="t_peppersonion" value="<?php echo $order->t_peppersonion; ?>">
	</p>
</div>

<!-- t_gf_capsicum -->
<div>
	<p>Green Capsicum &amp; Onion <em>- Gluten Free</em>
		<?php if ($order->t_gf_capsicum != '') { 
			echo $order->t_gf_capsicum . ' KG';
		}; ?>
		<input type="hidden" name="t_gf_capsicum" value="<?php echo $order->t_gf_capsicum; ?>">
	</p>
</div>

<!-- t_plain -->
<div>
	<p>
		Plain
		<?php if ($order->t_plain != '') { 
			echo $order->t_plain . ' KG';
		}; ?>
		<input type="hidden" name="t_plain" value="<?php echo $order->t_plain; ?>">
	</p>
</div>

<!-- t_gf_plain -->
<div>
	<p>
		Plain <em>- Gluten Free</em>
		<?php if ($order->t_gf_plain != '') { 
			echo $order->t_gf_plain . ' KG';
		}; ?>
		<input type="hidden" name="t_gf_plain" value="<?php echo $order->t_gf_plain; ?>">
	</p>
</div>

<!-- t_saveloys -->
<div>
	<p>
		Saveloys
		<?php if ($order->t_saveloys != '') { 
			echo $order->t_saveloys . ' KG';
		}; ?>
		<input type="hidden" name="t_saveloys" value="<?php echo $order->t_saveloys; ?>">
	</p>
</div>

<!-- t_gf_saveloys -->
<div>
	<p>
		Saveloys - <em>Gluten Free</em>
		<?php if ($order->t_gf_saveloys != '') { 
			echo $order->t_gf_saveloys . ' KG';
		}; ?>
		<input type="hidden" name="t_gf_saveloys" value="<?php echo $order->t_gf_saveloys; ?>">
	</p>
</div>

<hr>

<h3>Build Your Own</h3>

<!-- t_create -->
<div>
	<p>
		Build Your Own
		<?php if ($order->t_create != '') { 
			echo $order->t_create . ' KG';
		}; ?>
		<input type="hidden" name="t_create" value="<?php echo $order->t_create; ?>">
	</p>
</div>

<hr>

<h3>Patties</h3>

<!-- t_patties -->
<div>
	<p>
		Patties
		<?php if ($order->t_patties != '') { 
			echo $order->t_patties . ' KG';
		}; ?>
		<input type="hidden" name="t_patties" value="<?php echo $order->t_patties; ?>">
	</p>
</div>

<!-- t_gf_patties -->
<div>
	<p>
		Patties <em>- Gluten Free</em>
		<?php if ($order->t_gf_patties != '') { 
			echo $order->t_gf_patties . ' KG';
		}; ?>
		<input type="hidden" name="t_gf_patties" value="<?php echo $order->t_gf_patties; ?>">
	</p>
</div>

<hr>

<h3>Salami</h3>

<!-- t_salami salami_t salam_s -->
<div>
	<p>
		Salami
		<?php if ($order->t_salami != '') { 
			echo $order->t_salami . ' KG';
			}; ?>
		<input type="hidden" name="t_salami" value="<?php echo $order->t_salami; ?>">
		
		<?php if ($order->t_salami != '') { 
			echo $order->salami_t;
		}; ?>
		<input type="hidden" name="salami_t" value="<?php echo $order->salami_t; ?>">

		<?php if ($order->t_salami != '') { 
			echo $order->salami_s;
		}; ?>
		<input type="hidden" name="salami_s" value="<?php echo $order->salami_s; ?>">
	</p>
</div>
