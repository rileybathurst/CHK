<?php
$deer = ' 
	<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

	<h3>Deer Options</h3>

	<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

	<p>
		Shoulder
		<strong>'.
			$_POST['v_shoulder'].
		'</strong>
		<em> '.
			$_POST['shoulder_v'].
		'</em>
	</p>

	<p>
		Loin
		<strong>'.
			$_POST['v_loin'].
		'</strong>
		<em> '.
			$_POST['loin_v'].
		'</em>
	</p>

	<p>
		Leg
		<strong>'.
			$_POST['v_leg'].
		'</strong>
		<em> '.
			$_POST['leg_v'].
		'</em> '.
		$_POST['v_leg_whole_half'].
	'</p>

	<p>
		Excess Trim
		<strong>'.
			$_POST['v_excess_trim'].
		'</strong>
		<em> '.
			$_POST['excess_trim_v'].
		'</em>
	</p>
';