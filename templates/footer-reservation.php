<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Sunshine
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$sunshine_reservation_title     = !empty( sunshine_opt( 'sunshine_reservation_title' ) ) ? sunshine_opt( 'sunshine_reservation_title' ) : '';
	$sunshine_reservation_sub_title = !empty( sunshine_opt( 'sunshine_reservation_sub_title' ) ) ? sunshine_opt( 'sunshine_reservation_sub_title' ) : '';
	$sunshine_reservation_btn_text  = !empty( sunshine_opt( 'sunshine_reservation_btn_text' ) ) ? sunshine_opt( 'sunshine_reservation_btn_text' ) : '';
	$sunshine_reservation_btn_url	  = !empty( sunshine_opt( 'sunshine_reservation_btn_url' ) ) ? sunshine_opt( 'sunshine_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $sunshine_reservation_title )?></h3>
			<p><?php echo esc_html( $sunshine_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $sunshine_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $sunshine_reservation_btn_text )?></a>
		</div>
	</div>