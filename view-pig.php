<?php echo

//PORK - Shoulder
                        '<div class="row">'.
                            '<div class="small-10 columns border-slim light-back">' .
                            '<strong>PORK - SHOULDER</strong></div>' .
                            '</div>'.

// ps_rolledshoulder rolledshoulder_ps
                                                    '<div class="row collapse">'.
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
                            '</div>' ;
?>