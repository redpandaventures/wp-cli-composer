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

// namespace WP_CLI_Composer;

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

// use WP_CLI;

// class ComposerTools extends WP_CLI_Command {

// 	/**
// 	 * Holds the command assoc arguments.
// 	 *
// 	 * @var array
// 	 */
// 	protected $assoc_args;


// 	/**
// 	 * Processes the provided arguments.
// 	 *
// 	 * @since 0.2.0
// 	 *
// 	 * @param array $default_args
// 	 * @param array $args
// 	 * @param array $default_assoc_args
// 	 * @param array $assoc_args
// 	 */
// 	protected function process_args( $default_args = array(), $args = array(), $default_assoc_args = array(), $assoc_args = array() ) {
// 		$this->args       = $args + $default_args;
// 		$this->assoc_args = wp_parse_args( $assoc_args, $default_assoc_args );
// 	}

// 	*
//      * Create a composer.json for the specified plugin
//      *
//      * ## OPTIONS
//      *
//      * <plugin>
//      * : The plugin to create the composer.json file for
//      *
//      * [--vendor=<composer-vendor>]
//      * : The vendor to use in the json file.
//      *
//      * [--repo]
//      * : The url to the source repository used.
//      *
//      * [--require-php]
//      * : Define the required php version
//      * ---
//      * default: 7.0
//      * ---
//      *
//      *
//      * @param array $_
//      * @param array $assoc
//      *
//      * @alias as

// 	public function json( $_, $assoc ){

// 		WP_CLI::success( 'json output' );

// 	}

// 	/**
// 	 * Outputs a log message.
// 	 *
// 	 * @param string $msg
// 	 * @param bool   $verbose
// 	 */
// 	protected function log( $msg, $verbose ) {
// 		if ( $verbose ) {
// 			WP_CLI::log( $msg );
// 		}
// 	}

// 	/**
// 	 * Outputs a line.
// 	 *
// 	 * @param string $msg
// 	 * @param bool   $verbose
// 	 */
// 	protected function line( $msg, $verbose ) {
// 		if ( $verbose ) {
// 			WP_CLI::line( $msg );
// 		}
// 	}
// }

// WP_CLI::add_command( 'composer', ComposerTools::class );
