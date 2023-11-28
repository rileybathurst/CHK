<?php
$deer = ' 
	<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

	<h3>Deer Options</h3>

	<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

	<p>
		Fillet
		<strong>'.
			$_POST['v_filllet'].
		'</strong>
		<em> '.
			$_POST['fillet_v'].
		'</em>
	</p>

	<p>
		Backstrap
		<strong>'.
			$_POST['v_backstrap'].
		'</strong>
		<em> '.
			$_POST['backstrap_v'].
		'</em>
	</p>

	<p>
		Rump
		<strong>'.
			$_POST['v_rump'].
		'</strong>
		<em> '.
			$_POST['rump_v'].
		'</em> '.
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