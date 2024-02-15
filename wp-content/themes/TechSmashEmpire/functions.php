<?php
function techsmash_files() {
    wp_enqueue_style('techsmash_main_styles',get_stylesheet_uri());
} 
    add_action('wp_enqueue_scripts','techsmash_files');

    
