<?php
  $orders = $wpdb->get_results( 
      "SELECT * FROM meatorders WHERE unid = '$unid';"
    );
  foreach ( $orders as $order ) {
    if ( $order->confirm == 1 ) { ?>
      <div class="submitted">
        <h2 class="font-sans">Order Submitted</h2>
        <p class="font-sans">Your order has been submitted. If you wish to make changes the order must be re-submitted</p>
      </div>
      <br />
    <?php }
  }
?>