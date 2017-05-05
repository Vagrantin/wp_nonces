<?php
/* 
 * Plugin Name: WP Nonce object oriented
 * Plugin URI: http://github.com/vagrantin/wp_nonces
 * Description: Making Wp_nonce_* () accessible in a object oriented model
 * Version: 0.0.1
 * Author: Matthieu Ducorps
 * Author URI: ll.ducorporation.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */

class mdu_myveryfirstclass {

	function hello_world() {
		echo 'Hello my new World !';
	}
}
class mdu_class_create_nonce {
	
	function mdu_wp_create_nonce($action = -1) {
          $user = wp_get_current_user();
          $uid = (int) $user->ID;
          if ( ! $uid ) {
              /** This filter is documented in wp-includes/pluggable.php */
              $uid = apply_filters( 'nonce_user_logged_out', $uid, $action );
          }
 
          $token = wp_get_session_token();
          $i = wp_nonce_tick();
 
          return substr( wp_hash( $i . '|' . $action . '|' . $uid . '|' . $token, 'nonce' ), -12, 10 );
        }
}

?>
