<?php
/**
 * Adds a custom loading icon when the previewer refreshes.
 *
 * @package     Kirki
 * @subpackage  Modules
 * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       3.0.0
 */

/**
 * Modifies the loading overlay.
 */
class Kirki_Modules_Loading {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;

	/**
	 * Constructor.
	 *
	 * @access protected
	 */
	protected function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Runs on init.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function init() {

		global $wp_customize;
		if ( ! $wp_customize ) {
			return;
		}
		// Allow disabling the custom loader using the kirki_config filter.
		$config = apply_filters( 'kirki_config', array() );
		if ( isset( $config['disable_loader'] ) && true === $config['disable_loader'] ) {
			return;
		}
		// Add the "loading" icon.
		add_action( 'wp_footer', array( $this, 'add_loader_to_footer' ) );
		add_action( 'wp_head', array( $this, 'add_loader_styles_to_header' ), 99 );
		$this->remove_default_loading_styles();

	}

	/**
	 * Adds a custom "loading" div $ its styles when changes are made to the customizer.
	 *
	 * @access public
	 */
	public function add_loader_to_footer() {
		?>
		<div class="kirki-customizer-loading-wrapper">
			<span class="kirki-customizer-loading"></span>
		</div>
		<?php
	}

	/**
	 * Adds the loader CSS to our `<head>`.
	 *
	 * @access public
	 */
	public function add_loader_styles_to_header() {
		
	}

	/**
	 * Removes the default loader styles from WP Core.
	 *
	 * @access public
	 */
	public function remove_default_loading_styles() {
		global $wp_customize;
		remove_action( 'wp_head', array( $wp_customize, 'customize_preview_loading_style' ) );
	}
}
