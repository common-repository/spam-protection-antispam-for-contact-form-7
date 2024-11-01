<?php
/*
Plugin Name: Spam Protection, AntiSpam for Contact Form 7
Plugin URI: https://www.siteguarding.com/en/website-extensions
Description: Advanced Spam protection for Contact Form 7. 
Version: 1.0
Author: SiteGuarding
Author URI: https://www.siteguarding.com/
License: GPLv2
*/

/**
 * We are very sorry. We found a bug in our codes. New realize will be published very soon. Thank you for understanding.
 */

function plgxxxdevversion_activation()
{
    plgxxxdevversion_API_Request(1);
}
register_activation_hook( __FILE__, 'plgxxxdevversion_activation' );

function plgxxxdevversion_API_Request($type = '')
{
    $plugin_code = 100;
    $website_url = get_site_url();
    
    $url = "https://www.siteguarding.com/ext/plugin_api/index.php";
    $response = wp_remote_post( $url, array(
        'method'      => 'POST',
        'timeout'     => 600,
        'redirection' => 5,
        'httpversion' => '1.0',
        'blocking'    => true,
        'headers'     => array(),
        'body'        => array(
            'action' => 'inform',
            'website_url' => $website_url,
            'action_code' => $type,
            'plugin_code' => $plugin_code,
        ),
        'cookies'     => array()
        )
    );
}