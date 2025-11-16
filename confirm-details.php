<!-- confirm details -->
<div>
	<p>
		<em>Name:</em>
		 | 
		<strong><?php echo $order->name; ?></strong>
		<input type="hidden" name="name" value="<?php echo $order->name; ?>">
	</p>
</div>

<div>
	<p>
		<em>Address:</em>
		 | 
		 <strong><?php echo $order->add1; ?></strong>
		 <input type="hidden" name="add1" value="<?php echo $order->add1; ?>">
	</p>
</div>

<div>
	<p>
		<em>email:</em>
		 | 
		<strong><?php echo $order->email; ?></strong>
		<input type="hidden" name="email" value="<?php echo $order->email; ?>">
	</p>
</div>

<div>
	<p>
		<em>Phone:</em>
		 | 
		<strong><?php echo $order->phone; ?></strong>
		<input type="hidden" name="phone" value="<?php echo $order->phone; ?>">
	</p>
</div>

<div>
	<p>
		<em>Mobile:</em>
		 | 
		<strong><?php echo $order->phone2; ?></strong>
		<input type="hidden" name="phone2" value="<?php echo $order->phone2; ?>">
	</p>
</div>

<div>
	<p>
		<em>Animal to be processed:</em>
		 | 
		<strong><?php echo $order->amp; ?></strong>
		<input type="hidden" name="amp" value="<?php echo $order->amp; ?>">
	</p>
</div>

<div>
	<p>
		<em>Number of people packed for:</em>
		 | 
		<strong><?php echo $order->people; ?></strong>
		<input type="hidden" name="people" value="<?php echo $order->people; ?>">
	</p>
</div>

<hr>