<div class="row">   
    <div class="small-12 columns">
        <div class="banner drop-20">
            <h4 class="button-banner">Small Goods</h4>
        </div>
    </div>
</div>  

<?php echo
// sg_porkherb    t_porkherb    
    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_porkherb'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Pork &amp; Herb '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_porkherb'] == 1) { 
                    echo $row['t_porkherb'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.

// sg_lambmint    t_lambmint    
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_lambmint'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Lamb &amp; Mint '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_lambmint'] == 1) { 
                    echo $row['t_lambmint'];
                    };
            echo '</div>'.
        '</div>'.

// sg_bratwurst    t_bratwurst    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_bratwurst'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bratwurst '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_bratwurst'] == 1) { 
                    echo $row['t_bratwurst'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_spicyitalian    t_spicyitalian
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_spicyitalian'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Spicy Italian '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_spicyitalian'] == 1) { 
                    echo $row['t_spicyitalian'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_chorizo   t_chorizo
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_chorizo'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Chorizo '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_chorizo'] == 1) { 
                    echo $row['t_chorizo'];
                    };
            echo '</div>'.
        '</div>'.
            
// sg_tomatobasil   t_tomatobasil
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_tomatobasil'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Tomato &amp; Basil '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_tomatobasil'] == 1) { 
                    echo $row['t_tomatobasil'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_herbgarlic   t_herbgarlic
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_herbgarlic'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Herb &amp; Garlic '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_herbgarlic'] == 1) { 
                    echo $row['t_herbgarlic'];
                    };
            echo '</div>'.
        '</div>'.
               
// sg_peppersonion   t_peppersonion
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_peppersonion'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Green Capsicum &amp; Onion '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_peppersonion'] == 1) { 
                    echo $row['t_peppersonion'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_gf_capsicum   t_gf_capsicum
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_gf_capsicum'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Green Capsicum &amp; Onion <em>- Gluten Free</em> '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_gf_capsicum'] == 1) { 
                    echo $row['t_gf_capsicum'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_plain   t_plain
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_plain'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Plain '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_plain'] == 1) { 
                    echo $row['t_plain'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_gf_plain   t_gf_plain
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_gf_plain'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Plain <em>- Gluten Free</em> '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_gf_plain'] == 1) { 
                    echo $row['t_gf_plain'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_saveloys   t_saveloys
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_saveloys'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Saveloys '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_saveloys'] == 1) { 
                    echo $row['t_saveloys'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_create   t_create
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_create'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Build Your Own '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_create'] == 1) { 
                    echo $row['t_create'];
                    };
            echo '</div>'.
        '</div>'.
                
                
// sg_patties   t_patties
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_patties'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Patties '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_patties'] == 1) { 
                    echo $row['t_patties'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_gf_patties   t_gf_patties
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['sg_gf_patties'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Patties <em>- Gluten Free</em> '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_gf_patties'] == 1) { 
                    echo $row['t_gf_patties'];
                    };
            echo '</div>'.
        '</div>'.
                
// sg_salami   t_salami salami_t salam_s
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['sg_salami'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />'; 
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Salami '.
            '</div>'.
            '<div class="small-6 columns">';
                if ($row['sg_salami'] == 1) { 
                    echo $row['t_salami'];
                    };
            echo '</div>'.
                
            '<div class="small-6 columns capitalize">';
                if ($row['sg_salami'] == 1) { 
                    echo $row['salami_t'];
                    };
            echo '</div>'. 
                
            '<div class="small-6 columns capitalize">';
                if ($row['sg_salami'] == 1) { 
                    echo $row['salami_s'];
                    };
            echo '</div>'.    
        '</div>';
                
?>