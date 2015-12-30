<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Canterbury Homekill</title>
    
      <link rel="stylesheet" href="css/normalize.css" />
      <link rel="stylesheet" href="css/print.css" /><!-- 10 column grid -->
      <link rel="stylesheet" href="css/riley.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

<?
    include("db.php");

    $sql="SELECT * FROM meatorders WHERE unid=$unid";
    $result=mysqli_query($conn,$sql);

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
}

//print name from database where the unid matches n= in the url
while($row = $result->fetch_assoc()){    
    
    
//Old Form before adding animals
        if ($row['animal'] == NULL ) {
            
            include("all-form.php") ; }
    
    else {
    
    echo '<div class="row">' .
                '<div class="small-10 columns">' .
        
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
                                
// 10 columns
                                
                    '<div class="small-5 columns">' ;
    
    
//Breaks down the forms into each option        
                    if ($row['animal'] == beef) {

                        include("view-beef.php"); 

                    }

                    elseif ($row['animal'] == pig) {

                        include("view-pig.php"); 

                    }

                    elseif ($row['animal'] == deer) {

                        include("view-deer.php"); 

                    }

                    elseif ($row['animal'] == sheep) {

                        include("view-sheep.php"); 

                    }        
        
// then goes back to all the things
// small-5 columns
                 echo '</div>' . 
         
//Column 2
                '<div class="small-5 columns">' .

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
                            '<div class="small-5 columns border-slim capitalize">';
                        
                        if ($row['sg_salami'] == 1) { 
                            echo $row['t_salami'] . ' #';
                            } else { echo '&nbsp;'; }
            
                        echo '</div>' .    
                        '<div class="small-10 columns border-slim capitalize">';
                        
                        if ($row['sg_salami'] == 1) { 
                            echo $row['salami_s'].'&nbsp;';
                            } else { echo '&nbsp;'; }
    
                        if ($row['sg_salami'] == 1) { 
                            echo $row['salami_t'];
                            } else { echo '&nbsp;'; }
            
                        echo '</div>' .
                            '</div>'.
   

                    
                    "</div>" . // small-5 columns
                            
            '<div class="small-10 columns border-slim">'.
                'SPECIAL INSTRUCTIONS | ' .
                '<strong>'.
                    $row['spins'] .
                '</strong>'.
            '</div>' . 
        "</div>" // row

// close off else animal !NULL
; }
    
// close off while($row = $result->fetch_assoc()){  
    ; }
?>
           
    </body>
</html>