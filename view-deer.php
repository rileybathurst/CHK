<?php echo

//Venison
    '<div class="row">'.
        '<div class="small-10 columns border-slim light-back">' .
            '<strong>DEER</strong>' . 
        '</div>' .
    '</div>'.

// v_shoulder
    '<div class="row collapse">'.
        '<div class="small-10 columns border-slim">';
            if ($row['v_shoulder'] == 1) { 
            echo '<img src="img/tick.png" alt="tick" class=spacer" />';
            } else { echo '&nbsp;'; }

            echo 'SHOULDER' .
        '</div>' .
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
        '</div>' ;
                            
?>