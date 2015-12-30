
<?php echo
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
        '</div>' ;
                            
                            ?>