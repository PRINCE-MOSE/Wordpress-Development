<?php
/**
 * @package sikukup
 */
/*
Plugin Name: sikukup
plugin URI: https://techsmashempire.co.ke/
Description: This is my first Plugin for TechSmash Empire
Version: 1.0.0
Author: Moses Prince Psalmist
Author URI: https://mose.techsmashempire.co.ke/
Licence: GPLv2 or later
Text Domain: sikukup
 */

/*
This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

*/

// preventing direct access

// Option 1
// if (! defined('ABSPATH')) {
//     echo'Hey you cannot access this File directly';
//     die;
// }

// // Option 2
// if (! function_exists('add_action')) {
//     echo'Hey you cannot access this File directly';
//     die;
// }

// Option 3
defined('ABSPATH') or die('Hey you cannot access this File directly');

class TechSmashPlugin
{
    //Methods go here
    // wordpress triggers
    function activate(){
        // Generate a CPT
    }
    function deactivate(){
        
    }

    function uninstall(){
        
    }
    
    function custom_post_type(){
        
    }
}

if (class_exists('TechSmashPlugin')) {
    $techSmashEmpire = new TechSmashPlugin();
}

// activation
register_activation_hook(__FILE__, array($techSmashEmpire, 'activate'));

// deactivation
register_activation_hook(__FILE__, array($techSmashEmpire, 'deactivate'));

//Uninstall

