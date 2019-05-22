<?php

/**
 * WP CLI Comopser Tools
 *
 * Tools to help make plugins and themes ready for use with composer and private repositories
 *
 * @author Jamie Madden (https://github.com/digitalchild)
 *
 *
 */


if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

$autoload = __DIR__ . '/vendor/autoload.php';

if ( file_exists( $autoload ) ) {
	require_once $autoload;
}

WP_CLI::add_command( 'composer', 'WP_CLI\Composer\Composer' );
