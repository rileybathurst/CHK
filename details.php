<!-- part of order-details-....php -->
<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="name" class="inline">Full Name:</label>
    </div>
    
    <div class="medium-3 columns show-for-medium-up">
        <label for="name" class="right inline">Full Name:</label>
    </div>
    
    <div class="small-12 medium-9 columns">
        <input name="name" type="text" required placeholder="Joe Smith" id="name" /><small class="error">A full name is required.</small>
    </div>
</div>

<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="add1" class="inline">Address:</label>
    </div>
    
    <div class="medium-3 columns show-for-medium-up">
        <label for="right-label" class="right inline">Address:</label>
    </div>
    
    <div class="small-12 medium-9 columns">
        <input name="add1" type="text" required placeholder="26 Merton Road, RD 1, Rangiora 7471" id="add1" /><small class="error">An address is required.</small>
    </div>
</div>

<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="email" class="inline">email:</label>
    </div>
    
    <div class="small-3 columns show-for-medium-up">
        <label for="email" class="right inline">email:</label>
    </div>
    
    <div class="small-12 medium-9 columns">
        <input name="email" type="email" required placeholder="info@canterburyhomekill.co.nz" id="email"  /><small class="error">An email address is required.</small>
    </div>
</div>

<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="phone" class="inline">Phone:</label>
    </div>
    
    <div class="medium-3 columns show-for-medium-up">
        <label for="phone" class="right inline">Phone:</label>
    </div>
    
    <div class="small-12 medium-9 columns">
        <input name="phone" type="tel" required placeholder="03 313 4771" id="phone"><small class="error">A phone number is required.</small>
    </div>
</div>

<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="phone2" class="inline">Mobile:</label>
    </div>
    
    <div class="medium-3 columns show-for-medium-up">
        <label for="phone2" class="right inline">Mobile:</label>
    </div>
    
    <div class="small-12 medium-9 columns">
        <input name="phone2" type="tel" required placeholder="0274 312 804" id="phone2"><small class="error">A mobile phone number is required.</small>
    </div>
</div>

<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="amp" class="inline">Animal to be processed:</label>
    </div>
    
    <div class="medium-3 columns show-for-medium-up">
        <label for="amp" class="right inline">Animal to be processed:</label>
    </div>
    <div class="small-12 medium-9 columns">
        <textarea name="amp" type="text" required placeholder="Old heifer" id="amp"></textarea><small class="error">An animal has to be specified.</small>
    </div>
</div>

<div class="row">
    
    <div class="small-12 columns show-for-small">
        <label for="people" class="inline">Number of people to be packed for:</label>
    </div>
    
    <div class="medium-3 columns show-for-medium-up">
        <label for="people" class="right inline">Number of people to be packed for:</label>
    </div>
    
    <div class="small-12 medium-9 columns">
        <input type="number" placeholder="2 or more" required pattern="\d*" min="2" name="people" id="people"></textarea><small class="error">A number is required.</small>
    </div>
</div>

<div class="row">
    <div class="small-12 columns">
       <div class="banner drop-20">
           <button type="submit" class="button-banner">Next Step</button>
        </div>
    </div>
</div>