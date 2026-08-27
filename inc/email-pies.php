<?php
$pies = ' 
	<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

	<h3>Pie Options</h3>

	<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

	<p>
		Steak Pies
		<strong>'.
			$_POST['pie_steak'].
		'</strong>
		<em> '.
			$_POST['pie_steak_size'].
		'</em>
	</p>

	<p>
		Steak N Cheese Pies
		<strong>'.
			$_POST['pie_steak_cheese'].
		'</strong>
		<em> '.
			$_POST['pie_steak_cheese_size'].
		'</em>
	</p>

	<p>
		Mince Pies
		<strong>'.
			$_POST['pie_mince'].
		'</strong>
		<em> '.
			$_POST['pie_mince_size'].
		'</em> '.
	'</p>

	<p>
		Big Sausage Rolls
		<strong>'.
			$_POST['pie_big_sausage_rolls'].
		'</strong>
	</p>
';