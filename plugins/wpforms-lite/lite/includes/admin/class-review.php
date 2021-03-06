<?php
/**
 * License key fun.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.3.2
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
*/
class WPForms_Review {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.3.2
	 */
	public function __construct() {

		// Admin notice requesting review
		add_action( 'admin_notices',                  array( $this, 'review_request' ) );
		add_action( 'wp_ajax_wpforms_review_dismiss', array( $this, 'review_dismiss' ) );

		// Admin footer text
		add_filter( 'admin_footer_text', array( $this, 'admin_footer' ), 1, 2 );
	}

	/**
	 * Add admin notices as needed for reviews.
	 *
	 * @since 1.3.2
	 */
	public function review_request() {

		// Only consider showing the review request to admin users
		if ( ! is_super_admin() ) {
			return;
		}

		// Verify that we can do a check for reviews.
		$review = get_option( 'wpforms_review' );
		$time	= time();
		$load	= false;

		if ( ! $review ) {
			$review = array(
				'time'      => $time,
				'dismissed' => false
			);
			$load = true;
		} else {
			// Check if it has been dismissed or not.
			if ( ( isset( $review['dismissed'] ) && ! $review['dismissed'] ) && ( isset( $review['time'] ) && ( ( $review['time'] + DAY_IN_SECONDS ) <= $time ) ) ) {
				$load = true;
			}
		}

		// If we cannot load, return early.
		if ( ! $load ) {
			return;
		}

		// Update the review option now.
		update_option( 'wpforms_review', $review );

		// Fetch when plugin was initially installed
		$activated = get_option( 'wpforms_activated', array() );

		if ( !empty( $activated['lite'] ) ) {
			// Only continue if plugin has been installed for at least 7 days
			if ( ( $activated['lite'] + ( DAY_IN_SECONDS * 7 ) ) > time() ) {
				return;
			}
		}

		// We have a candidate! Output a review message.
		?>
		<div class="notice notice-info is-dismissible wpforms-review-notice">
			<p><?php _e( 'Hey, I noticed you a contact form WPForms - that’s awesome! Could you please do me a BIG favor and give it a 5-star rating on WordPress to help us spread the word and boost our motivation?', 'wpforms' ); ?></p>
			<p><strong><?php _e( '~ Syed Balkhi<br>Co-Founder of WPForms', 'wpforms' ); ?></strong></p>
			<p>
				<a href="https://wordpress.org/support/plugin/wpforms-lite/reviews/?filter=5#new-post" class="wpforms-dismiss-review-notice wpforms-review-out" target="_blank" rel="noopener"><?php _e( 'Ok, you deserve it', 'wpforms' ); ?></a> &#8226;
				<a href="#" class="wpforms-dismiss-review-notice" target="_blank" rel="noopener"><?php _e( 'Nope, maybe later', 'wpforms' ); ?></a> &#8226;
				<a href="#" class="wpforms-dismiss-review-notice" target="_blank" rel="noopener"><?php _e( 'I already did', 'wpforms' ); ?></a>
			</p>
		</div>
		<script type="text/javascript">
			jQuery(document).ready( function($) {
				$(document).on('click', '.wpforms-dismiss-review-notice, .wpforms-review-notice button', function( event ) {
					if ( ! $(this).hasClass('wpforms-review-out') ) {
						event.preventDefault();
					}
					$.post( ajaxurl, {
						action: 'wpforms_review_dismiss'
					});
					$('.wpforms-review-notice').remove();
				});
			});
		</script>
		<?php
	}

	/**
	 * Dismiss the review admin notice
	 *
	 * @since 1.3.2
	 */
	public function review_dismiss() {

		$review              = get_option( 'wpforms_review', array() );
		$review['time'] 	 = time();
		$review['dismissed'] = true;

		update_option( 'wpforms_review', $review );
		die;
	}

	/**
	 * When user is on a WPForms related admin page, display footer text
	 * that graciously asks them to rate us.
	 *
	 * @since 1.3.2
	 * @param string $text
	 * @return string
	 */
	public function admin_footer( $text ) {

		global $current_screen;

		if ( !empty( $current_screen->id ) && strpos( $current_screen->id, 'wpforms' ) !== false ) {
			$url  = 'https://wordpress.org/support/plugin/wpforms-lite/reviews/?filter=5#new-post';
			$text = sprintf( __( 'Please rate <strong>WPForms</strong> <a href="%s" target="_blank" rel="noopener">&#9733;&#9733;&#9733;&#9733;&#9733;</a> on <a href="%s" target="_blank">WordPress.org</a> to help us spread the word. Thank you from the WPForms team!', 'wpforms' ), $url, $url );
		}
		return $text;
	}

}
new WPForms_Review;