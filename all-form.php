<?php 

echo 
'<div class="row">' .
    '<div class="small-5 columns">' .

// unid
        '<div class="row">'.
            '<div class="small-10 columns border-slim">ORDER NUMBER | ' .
                '<strong>'.
                    $row['unid'] .
                '</strong>'.
            '</div>' .
        '</div>'.

// confirm
        '<div class="row">' .
            '<div class="small-4 columns border-slim">';
                if ($row['confirm'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo ' '; }

                echo 'DEC</div>' .

// timenow
            '<div class="small-6 columns border-slim">DATE | ' .
                '<strong>'.
                    $row['timenow'] .
                '</strong>'.
            '</div>' .
        '</div>' .

// name
        '<div class="row">' .
            '<div class="small-10 columns border-slim">NAME | ' .
                '<strong>'.
                    $row['name'] .
                '</strong>'.
            '</div>' .
        '</div>' .

// add1
        '<div class="row">' .
            '<div class="small-10 columns border-slim">ADDRESS | ' .
                '<strong>'.
                    $row['add1'] .
                '</strong>'.
            '</div>' .
        '</div>' .

// phone
        '<div class="row">' .
            '<div class="small-5 columns border-slim">PHONE | ' .
                '<strong>'.
                    $row['phone'] .
                '</strong>'.
            '</div>' .

// phone2
            '<div class="small-5 columns border-slim">MOBILE | ' .
                '<strong>'.
                    $row['phone2'] .
                '</strong>'.
            '</div>' .
        '</div>' .

// email
        '<div class="row">' .
            '<div class="small-10 columns border-slim">EMAIL | ' .
                '<strong>'.
                    $row['email'] .
                '</strong>'.
            '</div>' .
        '</div>' .

// amp
        '<div class="row">' .
            '<div class="small-10 columns border-slim">ANIMAL TO BE PROCESSED | ' .
                '<strong>'.
                    $row['amp'] .
                '</strong>'.
            '</div>' .
        '</div>' .

// people
        '<div class="row">' .
            '<div class="small-10 columns border-slim">NO. OF PEOPLE | ' .
                '<strong>'.
                    $row['people'] .
                '</strong>'.
            '</div>' .
        '</div>' .
// Beef
        '<div class="row">'.
            '<div class="small-10 columns border-slim light-back"><strong>BEEF</strong></div>' .
        '</div>'.

// Start of Option with tich and choice
// b_fillet fillet_bf
        '<div class="row collapse">' .
            '<div class="small-5 columns border-slim">';
                if ($row['b_fillet'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'FILLET</div>' .
                    '<div class="small-5 columns border-slim capitalize">';

                if ($row['b_fillet'] == 1) { 
                    echo $row['fillet_bf'];
                    } else { echo ' '; }

            echo '</div>' .
        '</div>' .
//End of Option  

//b_porterhouse porterhouse_bf
        '<div class="row collapse">' .
            '<div class="small-5 columns border-slim">';
                if ($row['b_porterhouse'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }

            echo 'PORTERHOUSE</div>' .
                '<div class="small-5 columns border-slim capitalize">';

            if ($row['b_porterhouse'] == 1) { 
                echo $row['porterhouse_bf'];
                } else { echo ' '; }

            echo '</div>' .
        '</div>' .

// b_tbone tbone_bf
        '<div class="row collapse">' .
            '<div class="small-10 columns border-slim">';
                if ($row['b_tbone'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }

            echo 'T-BONE' .
             '</div>' .
        '</div>' .

// b_ribeye ribeye_bf
        '<div class="row collapse">' .
            '<div class="small-5 columns border-slim">';
                if ($row['b_ribeye'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }

            echo 'RIBEYE</div>' .
                '<div class="small-5 columns border-slim capitalize">';

            if ($row['b_ribeye'] == 1) { 
                echo $row['ribeye_bf'];
                } else { echo ' '; }

            echo '</div>' .
        '</div>' .

// b_rump rump_bf
        '<div class="row collapse">' .
            '<div class="small-5 columns border-slim">';
                if ($row['b_rump'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }
            echo 'RUMP</div>' .
                '<div class="small-5 columns border-slim capitalize">';
            if ($row['b_rump'] == 1) { 
                echo $row['rump_bf'];
                } else { echo ' '; }
            echo '</div>' .
        '</div>' .

// b_topside topside_bf
        '<div class="row collapse">' .
            '<div class="small-5 columns border-slim">';
                if ($row['b_topside'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }
            echo 'TOPSIDE</div>' .
                '<div class="small-5 columns border-slim capitalize">';
            if ($row['b_topside'] == 1) { 
                echo $row['topside_bf'];
                } else { echo ' '; }
            echo '</div>' .
        '</div>' .

// b_rolledroast rolledroast_bf
        '<div class="row collapse">' .
             '<div class="small-5 columns border-slim">';
                if ($row['b_rolledroast'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }
            echo 'ROLLED ROAST</div>' .
                '<div class="small-5 columns border-slim capitalize">';
            if ($row['b_rolledroast'] == 1) { 
                echo $row['rolledroast_bf'];
                } else { echo ' '; }
            echo "</div>" .
        '</div>' .

// b_wienerschnitzel weinerschnitzel_bf
        '<div class="row collapse">' .
             '<div class="small-5 columns border-slim">';
                if ($row['b_weinerschnitzel'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo " "; }

            echo 'WEINER SCHNITZEL</div>' .
                '<div class="small-5 columns border-slim capitalize">';

            if ($row['b_weinerschnitzel'] == 1) { 
                echo $row['weinerschnitzel_bf'];
                } else { echo ' '; }

            echo '</div>' .
        '</div>' .

// b_silverside silverside_bf
        '<div class="row collapse">' .
             '<div class="small-5 columns border-slim">';
                if ($row['b_silverside'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }

                echo 'SILVERSIDE</div>' .
                '<div class="small-5 columns border-slim capitalize">';

                if ($row['b_silverside'] == 1) { 
                    echo $row['silverside_bf'];
                    } else { echo '&nbsp;'; }

            echo '</div>' .
        '</div>' .

// b_blade blade_bf
         '<div class="row collapse">' .
                '<div class="small-5 columns border-slim">';
                if ($row['b_blade'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo '&nbsp;'; }

                echo 'BLADE</div>' .
                '<div class="small-5 columns border-slim capitalize">';

                if ($row['b_blade'] == 1) { 
                    echo $row['blade_bf'];
                    } else { echo '&nbsp;'; }

            echo '</div>' .
        '</div>' .

// b_shinfillet shinfillet_bf
            '<div class="row collapse">' .
                '<div class="small-5 columns border-slim">';
                    if ($row['b_shinfillet'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                    echo 'SHIN FILLET</div>' .
                        '<div class="small-5 columns border-slim capitalize">';

                    if ($row['b_shinfillet'] == 1) { 
                        echo $row['shinfillet_bf'];
                        } else { echo ' '; }

                echo '</div>' .
            '</div>' .

// b_chucksteak chucksteak_bf
            '<div class="row collapse">' .
                 '<div class="small-5 columns border-slim">';
                    if ($row['b_chucksteak'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'CHUCK STEAK</div>' .
                    '<div class="small-5 columns border-slim capitalize">';

                if ($row['b_chucksteak'] == 1) { 
                    echo $row['chucksteak_bf'];
                    } else { echo ' '; }

                echo '</div>' .
            '</div>' .

// b_skirtsteak skirtsteak_bf
            '<div class="row collapse">' .
                 '<div class="small-5 columns border-slim">';
                    if ($row['b_skirtsteak'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'SKIRT STEAK</div>' .
                    '<div class="small-5 columns border-slim capitalize">';

                if ($row['b_skirtsteak'] == 1) { 
                    echo $row['skirtsteak_bf'];
                    } else { echo ' '; }

                echo '</div>' .
            '</div>' .

// b_mince
            '<div class="row collapse">' .
                 '<div class="small-10 columns border-slim">';
                    if ($row['b_mince'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                    echo 'MINCE' .
                    '</div>' .
            '</div>' .

//Small Goods
            '<div class="row">'.
                '<div class="small-10 columns border-slim light-back"><strong>SMALL GOODS</strong></div>' .
            '</div>'.

// sg_porkherb t_porkherb
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_porkherb'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo '&nbsp;'; }

                echo 'PORK &amp; HERB</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_porkherb'] == 1) { 
                    echo $row['t_porkherb'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_lambmint t_lambmint
                                            '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
                 if ($row['sg_lambmint'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo '&nbsp;'; }

                echo 'LAMB &amp; MINT</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_lambmint'] == 1) { 
                    echo $row['t_lambmint'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_bratwurst t_bratwurst
                                            '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
             if ($row['sg_bratwurst'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo '&nbsp;'; }

            echo 'BRATWURST</div>' .
                '<div class="small-5 columns border-slim">';

            if ($row['sg_bratwurst'] == 1) { 
                echo $row['t_bratwurst'] . 'KG';
                } else { echo '&nbsp;'; }

            echo '</div>' .
                '</div>'.

// sg_spicyitalian t_spicyitalian
                                        '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
                 if ($row['sg_spicyitalian'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo '&nbsp;'; }

                echo 'SPICY ITALIAN</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_spicyitalian'] == 1) { 
                    echo $row['t_spicyitalian'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' . 
                    '</div>'.

// sg_chorizo t_chorizo
                                            '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
                 if ($row['sg_chorizo'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'CHORIZO</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_chorizo'] == 1) { 
                    echo $row['t_chorizo'] . 'KG';
                    } else { echo '&nbsp;'; }

            echo '</div>' .
                '</div>'.

// sg_tomatobasil t_tomatobasil
                                        '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
                 if ($row['sg_tomatobasil'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'TOMATO &amp; BASIL</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_tomatobasil'] == 1) { 
                    echo $row['t_tomatobasil'] . 'KG';
                    } else { echo '&nbsp;'; }

            echo '</div>' .
                '</div>'.

// sg_herbgarlic t_herbgarlic
                                        '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
             if ($row['sg_herbgarlic'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }

            echo 'HERB &amp; GARLIC</div>' .
                '<div class="small-5 columns border-slim">';

            if ($row['sg_herbgarlic'] == 1) { 
                echo $row['t_herbgarlic'] . 'KG';
                } else { echo '&nbsp;'; }

            echo '</div>' .
                '</div>'.

// sg_peppersonion t_peppersonion
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_peppersonion'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'GREEN CAPSICUM &amp; ONION</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_peppersonion'] == 1) { 
                    echo $row['t_peppersonion'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .  
            '</div>'.

// sg_gf_capsicum t_gf_capsicum
            '<div class="row collapse">'.
                '<div class="small-6 columns border-slim">';
                 if ($row['sg_gf_capsicum'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'GREEN CAPSICUM ONION - GF</div>' .
                    '<div class="small-4 columns border-slim">';

                if ($row['sg_gf_capsicum'] == 1) { 
                    echo $row['t_gf_capsicum'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .  
            '</div>'.

// sg_plain t_plain
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_plain'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                    echo 'PLAIN</div>' .
                        '<div class="small-5 columns border-slim">';

                    if ($row['sg_plain'] == 1) { 
                        echo $row['t_plain'] . 'KG';
                        } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_gf_plain t_gf_plain
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_gf_plain'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                    echo 'PLAIN - GF</div>' .
                        '<div class="small-5 columns border-slim">';

                    if ($row['sg_gf_plain'] == 1) { 
                        echo $row['t_gf_plain'] . 'KG';
                        } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_saveloys t_saveloys
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_saveloys'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'SAVELOYS</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_saveloys'] == 1) { 
                    echo $row['t_saveloys'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_create t_create
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_create'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'CREATE</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_create'] == 1) { 
                    echo $row['t_create'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_patties t_patties
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_patties'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'PATTIES</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_patties'] == 1) { 
                    echo $row['t_patties'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_gf_patties t_gf_patties
            '<div class="row collapse">'.
                '<div class="small-5 columns border-slim">';
                 if ($row['sg_gf_patties'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                echo 'PATTIES - GF</div>' .
                    '<div class="small-5 columns border-slim">';

                if ($row['sg_gf_patties'] == 1) { 
                    echo $row['t_gf_patties'] . 'KG';
                    } else { echo '&nbsp;'; }

                echo '</div>' .
            '</div>'.

// sg_salami t_salami salami_t salami_s
            '<div class="row collapse">'.
            '<div class="small-5 columns border-slim">';
             if ($row['sg_salami'] == 1) { 
                echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                } else { echo ' '; }

            echo 'SALAMI</div>' .
                '<div class="small-5 columns border-slim">';

            if ($row['sg_salami'] == 1) { 
                echo $row['t_salami'] . ' #';
                } else { echo '&nbsp;'; }

            echo '</div>' .    
            '<div class="small-10 columns border-slim">';

            if ($row['sg_salami'] == 1) { 
                echo $row['salami_s'].'&nbsp;';
                } else { echo '&nbsp;'; }

            if ($row['sg_salami'] == 1) { 
                echo $row['salami_t'];
                } else { echo '&nbsp;'; }

            echo '</div>' .
                '</div>'.
                
'</div>' . // small-5 columns
        

// Column 2
                '<div class="small-5 columns">' .
                            
// PORK - Shoulder
                        '<div class="row">'.
                            '<div class="small-10 columns border-slim light-back">' .
                            '<strong>PORK - SHOULDER</strong></div>' .
                        '</div>' .

// ps_rolledshoulder rolledshoulder_ps
                        '<div class="row collapse">' .
                        '<div class="small-5 columns border-slim">';
                            if ($row['ps_rolledshoulder'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "ROLLED SHOULDER</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['ps_rolledshoulder'] == 1) { 
                            echo $row['rolledshoulder_ps'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.
            
// ps_bacon
                                                    '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['ps_bacon'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "BACON</div>" .
                            '</div>'.
            
// ps_pickledpork
                                                    '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['ps_pickledpork'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        echo "PICKLED PORK</div>" .
                            '</div>'.
            
// ps_chops
                                                    '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['ps_chops'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo 'CHOPS</div>' .
                            '</div>'.
            
// ps_pressedham pressedham_ps
                                                    '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['ps_pressedham'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "PRESSED HAM</div>" .
                           '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['ps_pressedham'] == 1) { 
                            echo $row['pressedham_ps'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.
            
// ps_mince
                                                    '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['ps_mince'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "MINCE</div>" .
                            '</div>'.

// ps_dicedpork
                                                    '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['ps_dicedpork'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "DICED</div>" .
                            '</div>'.
            
// ps_roastjointed roastjointed_ps
                                                    '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['ps_roastjointed'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "ROAST JOINTED</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['ps_roastjointed'] == 1) { 
                            echo $row['roastjointed_ps'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.

//PORK - Loin
                        '<div class="row">'.
                            '<div class="small-10 columns border-slim light-back">' .
                            '<strong>PORK - LOIN</strong></div>' .
                            '</div>'.

// pl_chops
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['pl_chops'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "CHOPS</div>" .
                            '</div>'.
            
// pl_loinsteaks
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['pl_loinsteaks'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "STEAKS</div>" .
                            '</div>'.
            
// pl_roastjointed roastjointed_pl
                        '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['pl_roastjointed'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "ROAST JOINTED</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['pl_roastjointed'] == 1) { 
                            echo $row['roastjointed_pl'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.

// pl_bacon
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['pl_bacon'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo " "; }
                        
                        echo "BACON</div>" .
                            '</div>'.
            
// pl_baconchops
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['pl_baconchops'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "BACON CHOPS</div>" .
                            '</div>'.
//PORK - Belly
                        '<div class="row">'.
                            '<div class="small-10 columns border-slim light-back">' .
                            '<strong>PORK - BELLY</strong></div>' .
                            '</div>'.
            
// pb_bacon
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['pb_bacon'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';;
                            } else { echo " "; }
                        
                        echo "STREAKY BACON</div>" .
                            '</div>'.
            
// pb_baconstrips
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['pb_baconstrips'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo " "; }
                        
                        echo "BACON STRIPS</div>" .
                            '</div>'.
            
// pb_rolled
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['pb_rolled'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo " "; }
                        
                        echo "BELLY BACON WITH LOIN BACON</div>" .
                            '</div>'.
            
// pb_whole whole_pb
                        '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['pb_whole'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "ROAST </div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['pb_whole'] == 1) { 
                            echo $row['whole_pb'];
                            } else { echo " "; }
                        
                        echo "</div>" .
                            '</div>'.
            
// pb_strips
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['pb_strips'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo " "; }
                        
                        echo "BELLY STRIPS</div>" .
                            '</div>'.
        
//PORK - Leg
                    '<div class="row">'.
                        '<div class="small-10 columns border-slim light-back"><strong>PORK - LEG</strong></div>' .
                    '</div>'.
            
//Ham on the Bone
                                                    '<div class="row collapse">'.
                    '<div class="small-5 columns border-slim">';
                        if ($row['pg_hamonthebone'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo 'HAM ON THE BONE</div>' .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['pg_hamonthebone'] == 1) { 
                            echo $row['hamonthebone_cook']. '&nbsp;';
                            } else { echo '&nbsp;'; }
    
                         if ($row['pg_hamonthebone'] == 1) { 
                            echo $row['hamonthebone_size'];
                            } else { echo '&nbsp;'; }
            
                        echo '</div>' .
                            '</div>'.

//Pressed Ham
                                                    '<div class="row collapse">'.
                    '<div class="small-5 columns border-slim">';
                        if ($row['pg_pressedham'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo 'PRESSED HAM</div>' .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['pg_pressedham'] == 1) { 
                            echo $row['pressedham_cook']. '&nbsp;';
                            } else { echo '&nbsp;'; }
    
                         if ($row['pg_pressedham'] == 1) { 
                            echo $row['pressedham_size'];
                            } else { echo '&nbsp;'; }
            
                        echo '</div>' .
                            '</div>'.
            
//Roast
                        '<div class="row collapse">'.
                            '<div class="small-5 columns border-slim">';
                            if ($row['pg_roast'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "ROAST</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['pg_roast'] == 1) { 
                            echo $row['roast_pg'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.
                            
//Mince
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['pg_mince'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "MINCE</div>" .
                            '</div>'.
            
//Diced
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['pg_diced'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "DICED</div>" .
                            '</div>'.

//Leg Steaks
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['pg_legsteaks'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "LEG STEAKS</div>" .
                            '</div>'.
                            
//Bacon
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['pg_bacon'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "BACON</div>" .
                            '</div>'.


    //Space
                        '<div class="row">'.
                        '<div class="small-10 columns border-slim">' .
                            "&nbsp;</div>" .
                            '</div>'.
    
//Lamb
                        '<div class="row">'.
                        '<div class="small-10 columns border-slim light-back">' .
                            "<strong>LAMB</strong></div>" .
                            '</div>'.
                            
// l_shoulder shoulder_lb
                        '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['l_shoulder'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "SHOULDER</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['l_shoulder'] == 1) { 
                            echo $row['shoulder_lb'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.
                            
// l_loin loin_lb
                                                    '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['l_loin'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "LOIN</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['l_loin'] == 1) { 
                            echo $row['loin_lb'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.

// l_flaps flaps_lb
                        '<div class="row collapse">'.
                            '<div class="small-5 columns border-slim">';
                            if ($row['l_flaps'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "FLAPS</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['l_flaps'] == 1) { 
                            echo $row['flaps_lb'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.
        
            
// l_leg leg_lb
                                                    '<div class="row collapse">'.
                        '<div class="small-5 columns border-slim">';
                            if ($row['l_leg'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "LEG</div>" .
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['l_leg'] == 1) { 
                            echo $row['leg_lb'];
                            } else { echo '&nbsp;'; }
                        
                        echo "</div>" .
                            '</div>'.
    
//Space
                        '<div class="row">'.
                            '<div class="small-10 columns border-slim">' .
                            "&nbsp;</div>" .
                            '</div>'.
   
//Venison
                        '<div class="row">'.
                            '<div class="small-10 columns border-slim light-back">' .
                            "<strong>DEER</strong></div>" .
                            '</div>'.
            
// v_shoulder
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['v_shoulder'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "SHOULDER</div>" .
                            '</div>'.
            
// v_loin
                        '<div class="row collapse">'.
                        '<div class="small-10 columns border-slim">';
                            if ($row['v_loin'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "LOIN</div>" .
                            '</div>'.
            
// v_leg
                        '<div class="row collapse">'.
                            '<div class="small-10 columns border-slim">';
                            if ($row['v_leg'] == 1) { 
                            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
                            } else { echo '&nbsp;'; }
                        
                        echo "LEG</div>" .
                            '</div>'.
                    
                    "</div>" . // small-5 columns
                            
            '<div class="small-10 columns border-slim">'.
                'SPECIAL INSTRUCTIONS | ' .
                '<strong>'.
                    $row['spins'] .
                '</strong>'.
            '</div>' . 
        '</div>' // row
                            
?>