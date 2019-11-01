<!-- Beef -->
<div class="row">
    <div class="small-12 columns border-slim light-back"><strong>BEEF</strong></div>
</div>

<!-- Start of Option with tich and choice -->
<!-- b_fillet fillet_bf -->
        <div class="row collapse">
            <div class="small-6 columns border-slim">
                <p class="no-bottom">
                    <?php if ($order->b_fillet == 1) { ?>
                        <span class="unicode check spacer">✓</span>
                    <?php } else { echo ' '; } ?>
                 <strong><span class="uppercase">Fillet</span></strong>
                </p>
            </div>
            <div class="small-6 columns border-slim capitalize">
                <?php if ($order->b_fillet == 1) { 
                echo $order->fillet_bf;
                } else { echo ' '; } ?>

            </div>
        </div>
<!-- End of Option -->

<!-- b_porterhouse porterhouse_bf -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_porterhouse == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo ' '; } ?>
            <strong><span class="uppercase">Porterhouse</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_porterhouse == 1) { 
            echo $order->porterhouse_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_tbone tbone_bf -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_tbone == 1) { ?>
                    <span class="unicode check spacer">✓</span>
            <?php } else { echo ' '; } ?>
            <strong><span class="uppercase">T-Bone</span></strong>
        </p>
     </div>
</div>

<!-- b_ribeye ribeye_bf -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_ribeye == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo ' '; } ?>
            <strong><span class="uppercase">Ribeye</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_ribeye == 1) { 
            echo $order->ribeye_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_rump rump_bf -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_rump == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
            <strong><span class="uppercase">Rump</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_rump == 1) { 
            echo $order->rump_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_topside topside_bf -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_topside == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
            <strong><span class="uppercase">Topside</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_topside == 1) { 
            echo $order->topside_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_rolledroast rolledroast_bf -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_rolledroast == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
            <strong><span class="uppercase">Rolled Roast</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_rolledroast == 1) { 
            echo $order->rolledroast_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_wienerschnitzel weinerschnitzel_bf -->
<div class="row collapse">
     <div class="small-6 columns border-slim">
         <p class="no-bottom">
            <?php if ($order->b_weinerschnitzel == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo " "; } ?>
             <strong><span class="uppercase">Weiner Schitzel</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_weinerschnitzel == 1) { 
            echo $order->weinerschnitzel_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_silverside silverside_bf -->
<div class="row collapse">
     <div class="small-6 columns border-slim">
         <p class="no-bottom">
            <?php if ($order->b_silverside == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
             <strong><span class="uppercase">Silverside</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_silverside == 1) { 
            echo $order->silverside_bf;
            } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- b_blade blade_bf -->
 <div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_blade == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Blade</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_blade == 1) { 
            echo $order->blade_bf;
            } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- b_shinfillet shinfillet_bf -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->b_shinfillet == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
            <strong><span class="uppercase">Shin Fillet</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_shinfillet == 1) { 
            echo $order->shinfillet_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_chucksteak chucksteak_bf -->
<div class="row collapse">
     <div class="small-6 columns border-slim">
         <p class="no-bottom">
             <?php if ($order->b_chucksteak == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
             <strong><span class="uppercase">Chuck Steak</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_chucksteak == 1) { 
            echo $order->chucksteak_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_skirtsteak skirtsteak_bf -->
<div class="row collapse">
     <div class="small-6 columns border-slim">
         <p class="no-bottom">
             <?php if ($order->b_skirtsteak == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
             <strong><span class="uppercase">Skirt Steak</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->b_skirtsteak == 1) { 
            echo $order->skirtsteak_bf;
            } else { echo ' '; } ?>
    </div>
</div>

<!-- b_mince mince_bf -->
<div class="row collapse">
     <div class="small-12 columns border-slim">
         <p class="no-bottom">
            <?php if ($order->b_mince == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php }  else { echo ' '; } ?>
             <strong><span class="uppercase">Mince</span></strong>
        </p>
    </div>
</div>