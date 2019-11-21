# Canterbury Homekill

Start of weekly work with a clean github

## Sass

sass scss/app.scss css/app.css --watch

### Print Styles

sass scss/print.scss css/print.css --watch

## Removing Foundation

Things to do

- small menu
- how much of home can be made in Gutenberg
- what is the site map? it doesnt have an extension
- max width 100% on small screens

- how good are the animals if they become svg and whats the saving on that?

contact us has some strange stuff going on with inline styles which could be kinda confusing in  a gutenberg style maybe I just remove them at this stage

I don't know if the top level of the primary menu is very useful?

good reminder I should have built the index.php pages first and then to the home which is more complicated rather than building backwards

meatorders from live for checking

there might need to be some work done on the order pages to deal with secondary numbers when something is checked, order small goods is an example at the moment

## Setup

/inc/contact.php has been added to gitignore to remove the captcha secret key so a straight build wont work.

## WP Plugins

- buddypress - we might be able to get away with removing it? would remove user profiles?
- [wp email login plugin](https://en-nz.wordpress.org/plugins/wp-email-login/) - this is really old can we deal with default worpdress now?

- wp cache or jetpack, currently not setup
- yoast until I do all the work for seo
- gutenberg? am I needing any advanced features?
- there might be something funky going on with forms now being in the inc folders means I dont have the $variables from higher above
- page-order-deer.php has additional script that needs fixing
