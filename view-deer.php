<!-- Venison -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong>DEER</strong>
    </div>
</div>

<!-- v_shoulder -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->v_shoulder == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Shoulder</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->v_shoulder == 1) { 
        echo $order->shoulder_v;
        } else { echo ' '; } ?>

    </div>
</div>

<!-- v_loin -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->v_loin == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Loin</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->v_loin == 1) { 
        echo $order->loin_v;
        } else { echo ' '; } ?>

    </div>
</div>

<!-- v_leg -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->v_leg == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Leg</span></strong>
        </p>
    </div>
    <div class="small-3 columns border-slim capitalize">
        <?php if ($order->v_leg == 1) { 
        echo $order->leg_v;
        } else { echo ' '; } ?>

    </div>
    <div class="small-3 columns border-slim capitalize">
        <?php if ($order->v_leg == 1) { 
        echo $order->v_leg_whole_half;
        } else { echo ' '; } ?>

    </div>
</div>