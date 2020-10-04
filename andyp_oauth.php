<?php
/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - OAUTH - YouTube
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🔌PLUGIN</strong> | <em>ANDYP > Universal Exporter</em> | oAuth for YouTube
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

define( 'ANDYP_OAUTH_YT_URL', plugins_url( '/', __FILE__ ) );
define( 'ANDYP_OAUTH_YT_PATH', __DIR__ );
define( 'YOUTUBE_GOOGLE_APPLICATION_CREDENTIALS', __DIR__.'/client_secret.json');

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                Initialise                               │
// └─────────────────────────────────────────────────────────────────────────┘
new AndyP\oauth\youtube;