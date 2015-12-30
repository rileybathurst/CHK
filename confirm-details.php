<!-- part of confirm-... -->
<?php echo
        
'<div class="row second-background">'.
    '<div class="small-12 columns">'.
        '<em>'.
            'Name: '.
        '</em>'.
        '<strong>'.
          $row['name'] .
        '</strong>'.
    '</div>'.
'</div>'.

'<div class="row off-stripe">'.
    '<div class="small-12 columns">'.
        '<em>'.
            'Address: '.
        '</em>'.
        '<strong>'.
          $row['add1'] .
        '</strong>'.
    '</div>'.
'</div>'.

    
'<div class="row second-background">'.
    '<div class="small-12 columns">'.
        '<em>'.
            'email: '.
        '</em>'.
        '<strong>'.
            $row['email'] .
        '</strong>'.
    '</div>'.
'</div>'.

'<div class="row off-stripe">'.
    '<div class="small-12 columns">'.
        '<em>'.
            'Phone: '.
        '</em>'.
        '<strong>'.
            $row['phone'] .
        '</strong>'.
    '</div>'.
'</div>'.
    
'<div class="row second-background">'.
    '<div class="small-12 columns">'.
        '<em>'.
            'Mobile: '.
        '</em>'.
        '<strong>'.
            $row['phone2'] .
        '</strong>'.
    '</div>'.
'</div>'.

'<div class="row off-stripe">'.
    '<div class="small-12 columns">'.
        '<em>'.
            'Animal to be processed: '.
        '</em>'.
        '<strong>'.
            $row['amp'] .
        '</strong>'.
    '</div>'.
'</div>'.

 '<div class="row second-background">'.
    '<div class="small-12 columns below-20">'.
        '<em>'.
            'Number of people packed for: '.
        '</em>'.
        '<strong>'.
          $row['people'] .
        '</strong>'.
    '</div>'.
'</div>'; 

?>