<?php

function createheader(){
    register_nav_menus(array(
        'header-menu'=>('Header Menu'),
        'footer-menu'=>('Footer Menu')
     ));
} 
add_action('init','createheader');



?>