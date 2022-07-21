<?php
/**
 * LiteSpeed component.
 *
 * @package HivePress\Components
 */

namespace HivePress\Components;

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Implements integration with LiteSpeed Cache.
 */
final class LiteSpeed extends Component {

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {

		// Check LiteSpeed status.
		if ( ! defined( 'LSCWP_DIR' ) ) {
			return;
		}

		// Disable login cache.
		add_action( 'hivepress/v1/models/user/login', [ $this, 'disable_login_cache' ] );

		parent::__construct( $args );
	}

	/**
	 * Disables user login cache.
	 */
	public function disable_login_cache() {
		add_filter( 'litespeed_can_change_vary', '__return_true' );
	}
}
