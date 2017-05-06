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

class mdu_class_nonce_url {

        function mdu_wp_nonce_url( $actionurl, $action = -1, $name = '_wpnonce' ) {
            $actionurl = str_replace( '&amp;', '&', $actionurl );
            return esc_html( add_query_arg( $name, wp_create_nonce( $action ), $actionurl ) );
        }
}

class mdu_class_nonce_tick {
        
        function mdu_wp_nonce_tick() {
            /**
             * Filters the lifespan of nonces in seconds.
             *
             * @since 2.5.0
             *
             * @param int $lifespan Lifespan of nonces in seconds. Default 86,400 seconds, or one day.
             */
            $nonce_life = apply_filters( 'nonce_life', DAY_IN_SECONDS );
         
            return ceil(time() / ( $nonce_life / 2 ));
        }
}

class mdu_class_nonce_field {

        function mdu_wp_nonce_field( $action = -1, $name = "_wpnonce", $referer = true , $echo = true ) {
            $name = esc_attr( $name );
            $nonce_field = '<input type="hidden" id="' . $name . '" name="' . $name . '" value="' . wp_create_nonce( $action ) . '" />';
         
            if ( $referer )
                $nonce_field .= wp_referer_field( false );
         
            if ( $echo )
                echo $nonce_field;
         
            return $nonce_field;
        }
}

class mdu_class_nonce_ays {

        function mdu_wp_nonce_ays( $action ) {
            if ( 'log-out' == $action ) {
                $html = sprintf(
                    /* translators: %s: site name */
                    __( 'You are attempting to log out of %s' ),
                    get_bloginfo( 'name' )
                );
                $html .= '</p><p>';
                $redirect_to = isset( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : '';
                $html .= sprintf(
                    /* translators: %s: logout URL */
                    __( 'Do you really want to <a href="%s">log out</a>?' ),
                    wp_logout_url( $redirect_to )
                );
            } else {
                $html = __( 'Are you sure you want to do this?' );
                if ( wp_get_referer() ) {
                    $html .= '</p><p>';
                    $html .= sprintf( '<a href="%s">%s</a>',
                        esc_url( remove_query_arg( 'updated', wp_get_referer() ) ),
                        __( 'Please try again.' )
                    );
                }
            }
         
            wp_die( $html, __( 'WordPress Failure Notice' ), 403 );
        }
}

?>
