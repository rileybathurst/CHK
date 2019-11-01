<!-- PORK - Shoulder -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong class="print-highlights">PORK - SHOULDER</strong>
    </div>
</div>

<!-- ps_rolledshoulder rolledshoulder_ps -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_rolledshoulder == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Rolled Shoulder</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->ps_rolledshoulder == 1) { 
                echo $order->rolledshoulder_ps;
                } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- ps_bacon -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_bacon == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Bacon</span></strong>
        </p>
    </div>
</div>
            
<!-- ps_pickledpork -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_pickledpork == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Pickled Pork</span></strong>
        </p>
    </div>
</div>
            
<!-- ps_chops -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_chops == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Chops</span></strong>
        </p>
    </div>
</div>
            
<!-- ps_pressedham pressedham_ps -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_pressedham == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Pressed Ham</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->ps_pressedham == 1) { 
            echo $order->pressedham_ps;
            } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- ps_mince -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_mince == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Mince</span></strong>
        </p>
    </div>
</div>

<!-- ps_dicedpork -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_dicedpork == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Diced</span></strong>
        </p>
    </div>
</div>
            
<!-- ps_roastjointed roastjointed_ps -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->ps_roastjointed == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Roast Jointed</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->ps_roastjointed == 1) { 
            echo $order->roastjointed_ps;
        } else { echo '&nbsp;'; } ?>

    </div>
</div>

<!--PORK - Loin -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong class="print-highlights">PORK - LOIN</strong>
    </div>
</div>

<!-- pl_chops -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pl_chops == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Chops</span></strong>
        </p>
    </div>
</div>
            
<!-- pl_loinsteaks -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pl_loinsteaks == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Steaks</span></strong>
        </p>
    </div>
</div>
            
<!-- pl_roastjointed roastjointed_pl -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pl_roastjointed == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Roast Jointed</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->pl_roastjointed == 1) { 
            echo $order->roastjointed_pl;
            } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- pl_bacon -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pl_bacon == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo " "; } ?>
            <strong><span class="uppercase">Bacon</span></strong>
        </p>
    </div>
</div>
            
<!-- pl_baconchops -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pl_baconchops == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Bacon Chops</span></strong>
        </p>
    </div>
</div>

<!--PORK - Belly -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong class="print-highlights">PORK - BELLY</strong>
    </div>
</div>
            
<!-- pb_bacon -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pb_bacon == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo " "; } ?>
            <strong><span class="uppercase">Streaky Bacon</span></strong>
        </p>
    </div>
</div>
            
<!-- pb_baconstrips -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pb_baconstrips == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo " "; } ?>
            <strong><span class="uppercase">Bacon Strips</span></strong>
        </p>
    </div>
</div>
            
<!-- pb_rolled -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pb_rolled == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo " "; } ?>
            <strong><span class="uppercase">Belly Bacon With Loin Bacon</span></strong>
        </p>
    </div>
</div>
            
<!-- pb_whole whole_pb -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pb_whole == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Roast</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->pb_whole == 1) { 
            echo $order->whole_pb;
            } else { echo " "; } ?>
    </div>
</div>
            
<!-- pb_strips -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pb_strips == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo " "; } ?>
            <strong><span class="uppercase">Belly Strips</span></strong>
        </p>
    </div>
</div>
        
<!--PORK - Leg -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong class="print-highlights">PORK - LEG</strong>
    </div>
</div>
            
<!--Ham on the Bone -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_hamonthebone == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Ham On The Bone</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">

        <?php if ($order->pg_hamonthebone == 1) { 
            echo $order->hamonthebone_cook . '&nbsp;';
            } else { echo '&nbsp;'; } 

         if ($order->pg_hamonthebone == 1) { 
            echo $order->hamonthebone_size;
            } else { echo '&nbsp;'; } ?>

    </div>
</div>

<!--Pressed Ham -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_pressedham == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Pressed Ham</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">

        <?php if ($order->pg_pressedham == 1) { 
            echo $order->pressedham_cook . '&nbsp;';
            } else { echo '&nbsp;'; }

         if ($order->pg_pressedham == 1) { 
            echo $order->pressedham_size;
            } else { echo '&nbsp;'; } ?>

    </div>
</div>

<!--Roast -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_roast == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Roast</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">

        <?php if ($order->pg_roast == 1) { 
            echo $order->roast_pg;
        } else { echo '&nbsp;'; } ?>

    </div>
</div>
                            
<!--Mince -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_mince == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Mince</span></strong>
        </p>
    </div>
</div>
            
<!--Diced -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_diced == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Diced</span></strong>
        </p>
    </div>
</div>

<!--Leg Steaks -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_legsteaks == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Leg Steaks</span></strong>
        </p>
    </div>
</div>

<!--Bacon -->
<div class="row collapse">
    <div class="small-12 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->pg_bacon == 1) { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Bacon</span></strong>
        </p>
    </div>
</div>