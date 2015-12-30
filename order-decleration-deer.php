<?php echo file_get_contents("header.php"); ?> 
            
<div class="row over-background border drop-20" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch>
        
        <div class="row">
            <div class="small-12 columns">
                <div class="flagbanner drop-20">
                    <h3 class="flagbuttonbanner">Order Form - Decleration</h3>
                </div>
            </div>
        </div>
        
        <div class="row drop-20">
            <p class="small-12 columns drop-20">For Canterbury Homekill to be able to process your animal you must declare the following</p>

            <p class="small-12 columns">I declare that I am the owner of the animal material described above and:<br />
                I have been activeley involved in the day to day maintenance of the animal, <br />
                including providing for the physical, health and behavaioral needs of the <br />
                animal for at least 28 days; OR<br />
                I am a farmer of animals of this kind.<br />
                Or this animal is wild game - which you do not need to be actively involved with.</p>
        </div>    
        
<!-- form inside of php to have url created with unid -->
        <form method="post" action="decleration-deer.php" data-abide>
                <div class="row">
                    <div class="small-12 columns">
                        <input id="confirm" name="confirm" type="checkbox" required><label for="confirm">Tick to confirm the above statement. *</label>
                    </div>
                </div>

                <div class="row">
                <div class="small-12 columns">
                    <div class="banner drop-20">
                        <button type="submit" class="button-banner" id="submit" name="submit">Next Step</button>
                    </div>
                </div>
            </div>
            </form>
            
        <div class="row">   
            <p class="small-12 columns">If you have any questions please don't hesitate to contact us on  (03) 313 4771</p>
        </div>

    </div>

    <?php echo file_get_contents("recipe-deer.php"); ?> 
</div>

<?php echo file_get_contents("footer.php"); ?> 