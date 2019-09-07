<!-- Small Goods -->
<div class="row">
    <div class="small-12 columns border-slim light-back">
        <strong class="print-highlights">SMALL GOODS</strong>
    </div>
</div>

<!-- t_porkherb t_porkherb -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ( $order->t_porkherb != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Pork &amp; Herb</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_porkherb != '') { 
            echo $order->t_porkherb . 'KG';
            } else { echo '&nbsp;'; } ?>
     </div>
</div>
            
<!-- t_lambmint t_lambmint -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_lambmint != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Lamb &amp; Mint</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_lambmint != '') { 
            echo $order->t_lambmint . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_bratwurst t_bratwurst -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_bratwurst != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Bratwurst</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
    <?php if ($order->t_bratwurst != '') { 
        echo $order->t_bratwurst . 'KG';
        } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- t_bratwurst_fennel t_bratwurst_fennel -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_bratwurst_fennel != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Bratwurst w/ Fennel</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
    <?php if ($order->t_bratwurst_fennel != '') { 
        echo $order->t_bratwurst_fennel . 'KG';
        } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_texan_chile t_texan_chile -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_texan_chile != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Texan Chile</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_texan_chile != '') { 
            echo $order->t_texan_chile . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_chorizo t_chorizo -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_chorizo != '') { ?>
                    <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Chorizo</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_chorizo != '') { 
            echo $order->t_chorizo . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- t_tomatobasil t_tomatobasil -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_tomatobasil != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Tomato &amp; Basil</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_tomatobasil != '') { 
        echo $order->t_tomatobasil . 'KG';
        } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_herbgarlic t_herbgarlic -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_herbgarlic != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Herb &amp; Garlic</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_herbgarlic != '') { 
        echo $order->t_herbgarlic . 'KG';
        } else { echo '&nbsp;'; } ?>
    </div>
</div>
                                
<!-- t_peppersonion t_peppersonion -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_peppersonion != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php  } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Green Capsicum &amp; Onion</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_peppersonion != '') { 
            echo $order->t_peppersonion . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
                                
<!-- t_gf_capsicum t_gf_capsicum -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_gf_capsicum != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Green Capsicum Onion <em>- GF</em></span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_gf_capsicum != '') { 
            echo $order->t_gf_capsicum . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_plain t_plain -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_plain != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Plain</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_plain != '') { 
            echo $order->t_plain . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
                                
<!-- t_gf_plain t_gf_plain -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_gf_plain != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php  } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Plain <em>- GF</em></span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_gf_plain != '') { 
            echo $order->t_gf_plain . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_saveloys t_saveloys -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_saveloys != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Saveloys</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_saveloys != '') { 
            echo $order->t_saveloys . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>

<!-- t_gf_saveloys t_gf_saveloys -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_gf_saveloys != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Saveloys <em>- GF</em></span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_gf_saveloys != '') { 
            echo $order->t_gf_saveloys . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
                                
<!-- t_create t_create -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_create != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Create</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_create != '') { 
            echo $order->t_create . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_patties t_patties -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_patties != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Patties</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim">
        <?php if ($order->t_patties != '') { 
            echo $order->t_patties . 'KG';
            } else { echo '&nbsp;'; } ?>
    </div>
</div>
                                
<!-- t_gf_patties t_gf_patties -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_gf_patties != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Patties <em>- GF</em></span></strong>
        </p>
        </div>
        <div class="small-6 columns border-slim">
            <?php if ($order->t_gf_patties != '') { 
                echo $order->t_gf_patties . 'KG';
                } else { echo '&nbsp;'; } ?>
    </div>
</div>
            
<!-- t_salami t_salami salami_t salami_s -->
<div class="row collapse">
    <div class="small-6 columns border-slim">
        <p class="no-bottom">
            <?php if ($order->t_salami != '') { ?>
                <span class="unicode check spacer">✓</span>
            <?php } else { echo '&nbsp;'; } ?>
            <strong><span class="uppercase">Salami</span></strong>
        </p>
    </div>
    <div class="small-6 columns border-slim capitalize">
        <?php if ($order->t_salami != '') { 
            echo $order->t_salami . ' #';
            } else { echo '&nbsp;'; } ?>
    </div>
    <div class="small-12 columns border-slim capitalize">
        <?php if ($order->t_salami != '') { 
            echo $order->salami_s .'&nbsp;';
            } else { echo '&nbsp;'; }

        if ($order->t_salami != '') { 
            echo $order->salami_t;
            } else { echo '&nbsp;'; } ?>
    </div>
</div>