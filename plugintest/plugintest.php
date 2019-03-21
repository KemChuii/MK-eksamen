<?php
/*
*Plugin Name: Simple WordPress submit Form Plugin
*Plugin URI: http://localhost
*Description: This is a simple plugin based on HTML5, CSS and PHP with a submit form where you can submit to be redirected to another site.
*Version: 0.1.1
*Author: Thanh Nhan, Didde Munck, Christina Damkjaer & Nicolai Appelby Brag
*Author URI: http://localhosts
*License: GPL2
*/

function my_form()
{
    $content = '';
   
    
      $content .='<form class="submit" method="post" action="https://phamily.one/mk/book-et-moede/">';
    
    
    $content .= '<div class="submit-form">';
    
   
    
    $content .= '<div class="popupCloseButton">+</div>';
  
    $content .= '<div id="promotion-header">';
    
    $content .= '<p id="promotion-header-title">Vil du vide mere? Book et møde nu, så vi kan få realiseret dine drømme.</p>';
    
   $content .='</div>';
  
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Book nu!">';
    $content .= '</div>';
  
  
    $content .= '</div>'; 
    $content .='</form>';
   
    return $content;
}

    add_shortcode('plugintest', 'my_form');

    // Register stylesheet with the name - "register_plugin_styles
    add_action('wp_enqueue_scripts', 'register_plugin_styles');


    function register_plugin_styles() {

        /* 
        Syntaks for hvordan man linker/enqueue et stylesheet - eksternt
        wp_enqueue_style('et-unikt-navn','stien til ressourcen');
        For more info - check - https://developer.wordpress.org/themes/basics/including-css-javascript/
        */        
        wp_enqueue_style('fontAwesomeCdn','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800');
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500');
        
        wp_register_style('form_plugin_style', plugins_url('plugintest/css/style.css'));
        
        wp_enqueue_style('form_plugin_style');
        
        /* 
        Syntaks for hvordan man linker/enqueue et stylesheet - eksternt
        wp_enqueue_script('et-unikt-navn','stien til ressourcen','array()','1.7.1','true');
        */        
        wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        //wp_enqueue_script('Customjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1', true);
        wp_enqueue_script('Customscript', plugins_url('plugintest/js/scripts.js'), array('jquery'), 'null', true);
        
    }


?>
