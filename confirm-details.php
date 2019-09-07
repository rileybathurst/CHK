<hr>

<ul class="no-bullet stripes">
    <li>
        <!-- confirm details -->
        <div class="row second-background">
            <div class="small-2 columns">
                <em>
                    Name:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-9 columns">
                <strong>
                    <?php echo $order->name; ?>
                    <input type="hidden" name="name" value="<?php echo $order->name; ?>">
                </strong>
            </div>
        </div>
    </li>

    <li>
        <div class="row off-stripe">
            <div class="small-2 columns">
                <em>
                    Address:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-9 columns">
                <strong>
                    <?php echo $order->add1; ?>
                    <input type="hidden" name="add1" value="<?php echo $order->add1; ?>">
                </strong>
            </div>
        </div>
    </li>

    <li>
        <div class="row second-background">
            <div class="small-2 columns">
                <em>
                    email:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-9 columns">
                <strong>
                    <?php echo $order->email; ?>
                    <input type="hidden" name="email" value="<?php echo $order->email; ?>">
                </strong>
            </div>
        </div>
    </li>

    <li>
        <div class="row off-stripe">
            <div class="small-2 columns">
                <em>
                    Phone:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-9 columns">
                <strong>
                    <?php echo $order->phone; ?>
                    <input type="hidden" name="phone" value="<?php echo $order->phone; ?>">
                </strong>
            </div>
        </div>
    </li>

    <li>
        <div class="row second-background">
            <div class="small-2 columns">
                <em>
                    Mobile:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-9 columns">
                <strong>
                    <?php echo $order->phone2; ?>
                    <input type="hidden" name="phone2" value="<?php echo $order->phone2; ?>">
                </strong>
            </div>
        </div>
    </li>

    <li>
        <div class="row off-stripe">
            <div class="small-5 columns">
                <em>
                    Animal to be processed:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-6 columns">
                <strong>
                    <?php echo $order->amp; ?>
                    <input type="hidden" name="amp" value="<?php echo $order->amp; ?>">
                </strong>
            </div>
        </div>
    </li>
    
    <li>
         <div class="row second-background">
            <div class="small-5 columns below-20">
                <em>
                    Number of people packed for:
                </em>
            </div>
            <div class="small-1 columns">|</div>
            <div class="small-6 columns">
                <strong>
                  <?php echo $order->people; ?>
                    <input type="hidden" name="people" value="<?php echo $order->people; ?>">
                </strong>
            </div>
        </div>
    </li>
</ul>

<hr>