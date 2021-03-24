<?php
/*
Plugin Name: shortcode
Plugin URI: https://antoinechatry.fr
Description: c'est mon plugin en gros
Author: Moi
Version: 1.0
Author URI: https://antoinechatry.fr
*/
if(!defined('ABSPATH')){
    die;
}
function mon_callback($args){
    $atts = array(
        'text' => 'Placeholder ici'
    );
    $a = shortcode_atts($atts, $args);
    $out = $a['text'];
    return $out;
}
function init_short(){
    add_shortcode ('test', 'mon_callback');
}

add_action('init','init_short');



?>