<?php

/*
function awesome_menu_tree__menu_support($variables){

	//print_r($variables);
    return "
    
    <ul class=\"exploMenuUL2\">\n" . $variables['tree'] ."</ul>\n";
    
    
}

*/

function awesome_menu_tree($variables){

	//print_r($variables);
    return "
    
    <ul class=\"exploMenuUL\">\n" . $variables['tree'] ."</ul>\n";
    
    
}




// function awesome_menu_link__menu_support($variables) {
//   $element = $variables['element'];
//   $sub_menu = '';
// 
//   if ($element['#below']) {
//     $sub_menu = drupal_render($element['#below']);
//   }
//   $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//   return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
// }



function awesome_menu_tree__menu_footernav($variables){


    return "
    
    <div class=\"explo_footer\"><ul class=\"inline\"\n" . $variables['tree'] ."</ul></div>\n";
    
    
}





?>