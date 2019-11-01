<!-- Alpaca Llama -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong>LAMB</strong>
    </div>
</div>

<!-- l_shoulder shoulder_lb -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->l_shoulder == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Shoulder</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->l_shoulder == 1) { 
            echo $order->shoulder_lb;
        } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- l_loin loin_lb -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->l_loin == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Loin</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->l_loin == 1) { 
            echo $order->loin_lb;
        } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- l_flaps flaps_lb -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->l_flaps == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Flaps</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->l_flaps == 1) { 
        echo $order->flaps_lb;
        } else { echo '&nbsp;'; } ?>
    </div>
</div>


<!-- l_leg leg_lb -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->l_leg == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Leg</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->l_leg == 1) { 
            echo $order->leg_lb;
        } else { echo '&nbsp;'; } ?>
    </div>
</div>