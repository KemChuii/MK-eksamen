<?php
 /**
* Plugin name: Contact form
* Plugin URI: www.phamily.one/mk
* Description: A plugin with a simple contact form
* Version: 0.0.1
* Author: Thanh Nhan, Didde Munck, Christina Damkjaer & Nicolai Appelby
*/


function contactform()
{
    
  
    /* content variable */
    $content = '';
    $content .='<form class="contact-form">';
    
   

    $content .='<input type="text" name="full_name" placeholder="Dit fulde navn"/>';
   $content .='<br>';
    
       
    $content .='<input type="text" name="email" placeholder="E-mail"/>';
   $content .='<br>';
    
    
    $content .='<input type="text" name="telefon" placeholder="Telefon nummer"/>';
   $content .='<br>';
    
 
    
    $content .='<input id="booknow" type="submit" value="Book nu">';
    
    
    $content .='</form>';
    
    
    return $content;
    
}


/* bruges til at linke til plugin's style */

    wp_register_style('contactplugin_style', plugins_url('contactformplugin/css/style.css'));
        
        wp_enqueue_style('contactplugin_style');


/* giver en mulighed for at tilføje shortcode på siderne og post hvis der er behov for det */
add_shortcode('contactform_plugin','contactform');



?>
