<hr>

<!-- small goods -->
<div class="row">   
    <div class="small-12 columns">
        <div class="banner drop">
            <h4 class="button-banner">Small Goods</h4>
        </div>
    </div>
</div>  

<hr>

<div class="row">
    <div class="small-12 columns">
        <h3>Sausages</h3>
    </div>
</div>

<ul class="no-bullet stripes drop">
    <!-- t_porkherb -->  
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Pork &amp; Herb</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_porkherb != '') { 
                    echo $order->t_porkherb . ' KG';
                }; ?>
                <input type="hidden" name="t_porkherb" value="<?php echo $order->t_porkherb; ?>">
            </div>
        </div>
    </li>

    <!-- t_lambmint -->  
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Lamb &amp; Mint</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_lambmint != '') { 
                    echo $order->t_lambmint . ' KG'; 
                }; ?>
                <input type="hidden" name="t_lambmint" value="<?php echo $order->t_lambmint; ?>">
            </div>
        </div>
    </li>

    <!-- t_bratwurst -->  
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Bratwurst</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_bratwurst != '') { 
                    echo $order->t_bratwurst . ' KG';
                    }; ?>
                <input type="hidden" name="t_bratwurst" value="<?php echo $order->t_bratwurst; ?>">
            </div>
        </div>
    </li>

    <!-- t_bratwurst_fennel -->  
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Bratwurst w/ Fennel</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_bratwurst_fennel != '') { 
                    echo $order->t_bratwurst_fennel . ' KG';
                    }; ?>
                <input type="hidden" name="t_bratwurst_fennel" value="<?php echo $order->t_bratwurst_fennel; ?>">
            </div>
        </div>
    </li>
    
    <!-- t_texan_chile -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Texan Chile</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_texan_chile != '') { 
                    echo $order->t_texan_chile . ' KG';
                    }; ?>
                <input type="hidden" name="t_texan_chile" value="<?php echo $order->t_texan_chile; ?>">
            </div>
        </div>
    </li>

    <!-- sg_chorizo   t_chorizo -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Chorizo</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_chorizo != '') { 
                    echo $order->t_chorizo . ' KG';
                    }; ?>
                <input type="hidden" name="t_chorizo" value="<?php echo $order->t_chorizo; ?>">
             </div>
        </div>
    </li>

    <!-- t_tomatobasil -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Tomato &amp; Basil</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_tomatobasil != '') { 
                    echo $order->t_tomatobasil . ' KG';
                    }; ?>
                <input type="hidden" name="t_tomatobasil" value="<?php echo $order->t_tomatobasil; ?>">
            </div>
        </div>
    </li>

    <!-- t_herbgarlic -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Herb &amp; Garlic</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_herbgarlic != '') { 
                    echo $order->t_herbgarlic . ' KG';
                    }; ?>
                <input type="hidden" name="t_herbgarlic" value="<?php echo $order->t_herbgarlic; ?>">
            </div>
        </div>
    </li>

    <!-- t_peppersonion -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Green Capsicum &amp; Onion</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_peppersonion != '') { 
                    echo $order->t_peppersonion . ' KG';
                    }; ?>
                <input type="hidden" name="t_peppersonion" value="<?php echo $order->t_peppersonion; ?>">
            </div>
        </div>
    </li>

    <!-- t_gf_capsicum -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Green Capsicum &amp; Onion <em>- Gluten Free</em></p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_gf_capsicum != '') { 
                    echo $order->t_gf_capsicum . ' KG';
                    }; ?>
                <input type="hidden" name="t_gf_capsicum" value="<?php echo $order->t_gf_capsicum; ?>">
            </div>
        </div>
    </li>

    <!-- t_plain -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Plain</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_plain != '') { 
                    echo $order->t_plain . ' KG';
                    }; ?>
                <input type="hidden" name="t_plain" value="<?php echo $order->t_plain; ?>">
            </div>
        </div>
    </li>

    <!-- t_gf_plain -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Plain <em>- Gluten Free</em></p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_gf_plain != '') { 
                    echo $order->t_gf_plain . ' KG';
                    }; ?>
                <input type="hidden" name="t_gf_plain" value="<?php echo $order->t_gf_plain; ?>">
            </div>
        </div>
    </li>
    
    <!-- t_saveloys -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Saveloys</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_saveloys != '') { 
                    echo $order->t_saveloys . ' KG';
                    }; ?>
                <input type="hidden" name="t_saveloys" value="<?php echo $order->t_saveloys; ?>">
            </div>
        </div>
    </li>

    <!-- t_gf_saveloys -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Saveloys - <em>Gluten Free</em></p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_gf_saveloys != '') { 
                    echo $order->t_gf_saveloys . ' KG';
                    }; ?>
                <input type="hidden" name="t_gf_saveloys" value="<?php echo $order->t_gf_saveloys; ?>">
            </div>
        </div>
    </li>
    
     <hr>
    
    <div class="row">
        <div class="small-12 columns">
            <h3>Build Your Own</h3>
        </div>
    </div>

    <!-- t_create -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Build Your Own</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_create != '') { 
                    echo $order->t_create . ' KG';
                    }; ?>
                <input type="hidden" name="t_create" value="<?php echo $order->t_create; ?>">
            </div>
        </div>
    </li>
    
    <hr>
    
    <div class="row">
        <div class="small-12 columns">
            <h3>Patties</h3>
        </div>
    </div>

    <!-- t_patties -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Patties</p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_patties != '') { 
                    echo $order->t_patties . ' KG';
                    }; ?>
                <input type="hidden" name="t_patties" value="<?php echo $order->t_patties; ?>">
            </div>
        </div>
    </li>

    <!-- t_gf_patties -->
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Patties <em>- Gluten Free</em></p>
            </div>
            <div class="small-6 columns">
                <?php if ($order->t_gf_patties != '') { 
                    echo $order->t_gf_patties . ' KG';
                    }; ?>
                <input type="hidden" name="t_gf_patties" value="<?php echo $order->t_gf_patties; ?>">
            </div>
        </div>
    </li>
    
    <hr>
    
    <div class="row">
        <div class="small-12 columns">
            <h3>Salami</h3>
        </div>
    </div>

    <!-- t_salami salami_t salam_s -->
    
    
    
    <li>
        <div class="row">
            <div class="small-6 columns">
                <p>Salami</p>
            </div>

            <div class="small-6 columns">
                <?php if ($order->t_salami != '') { 
                    echo $order->t_salami . ' KG';
                    }; ?>
                <input type="hidden" name="t_salami" value="<?php echo $order->t_salami; ?>">
            </div>

            <div class="small-6 columns capitalize">
                <?php if ($order->t_salami != '') { 
                    echo $order->salami_t;
                    }; ?>
                <input type="hidden" name="salami_t" value="<?php echo $order->salami_t; ?>">
            </div> 

            <div class="small-6 columns capitalize">
                <?php if ($order->t_salami != '') { 
                    echo $order->salami_s;
                    }; ?>
                <input type="hidden" name="salami_s" value="<?php echo $order->salami_s; ?>">
            </div>    

        </div>
    </li>
</ul>