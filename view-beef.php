<?php echo

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

// b_mince mince_bf
            '<div class="row collapse">' .
                 '<div class="small-10 columns border-slim">';
                    if ($row['b_mince'] == 1) { 
                    echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                    } else { echo ' '; }

                    echo 'MINCE' .
                    '</div>' .
            '</div>' ;
?>