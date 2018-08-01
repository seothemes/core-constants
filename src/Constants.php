<?php
/**
 * Define child theme constants.
 *
 * @package   SEOThemes\Core
 * @since     1.0.0
 * @link      https://github.com/seothemes/core-constants
 * @author    SEO Themes
 * @copyright Copyright © 2018 SEO Themes
 * @license   GPL-2.0+
 */

namespace SEOThemes\Core;

use D2\Core\Core;

/**
 * Add constants to child theme.
 *
 * Example config (usually located at config/defaults.php):
 *
 * ```
 * use SEOThemes\Core\Constants;
 *
 * $constants = [
 *     Constants::DEFINE => [
 *         'CHILD_THEME_NAME'    => wp_get_theme()->get( 'Name' ),
 *         'CHILD_THEME_URL'     => wp_get_theme()->get( 'ThemeURI' ),
 *         'CHILD_THEME_VERSION' => wp_get_theme()->get( 'Version' ),
 *         'CHILD_THEME_HANDLE'  => wp_get_theme()->get( 'TextDomain' ),
 *         'CHILD_THEME_AUTHOR'  => wp_get_theme()->get( 'Author' ),
 *         'CHILD_THEME_DIR'     => get_stylesheet_directory(),
 *         'CHILD_THEME_URI'     => get_stylesheet_directory_uri(),
 *     ],
 * ];
 *
 * return [
 *     Constants::class => $constants,
 * ];
 * ```
 */
class Constants extends Core {

	const DEFINE = 'define';

	public function init() {

		if ( array_key_exists( self::DEFINE, $this->config ) ) {

			$this->define_constants( $this->config[ self::ADD ] );

		}


	}

	/**
	 * Define child theme constants.
	 *
	 * @param array $constants Array of constants to define.
	 *
	 * @return void
	 */
	protected function define_constants( array $constants ) {

		foreach ( $constants as $name => $value ) {

			if ( ! defined( $name ) ) {

				define( $name, $value );

			}

		}

	}

}
