# Banner
Drupal test

1. I built a custom module 'custom_menu_item_add_image' in order to have the possibility to add an image to a root menu item.
   It works only for the main menu but it can easily be modified to work with all the menus.
   (Maybe we could have used the module 'Menu Item Field' but this project is not covered by Drupal’s security advisory policy and the latest alpha version contains some errors.)

2. I build a custom theme 'banner' to display the banner as required. 
   It's a very basic theme with only the necessary elements to build the desired functionality (cf. banner.png), I let the Bartik theme enabled.
   Requirement : All menu items have to be different pages and not the front page (otherwise, more functional rules and more complex algorithms are needed)
