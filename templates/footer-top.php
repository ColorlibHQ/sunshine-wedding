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
	?>	
	<div class="footer_top">
		<div class="container">
			<div class="row">
                <div class="col-xl-12">
                    <div class="quick_links">
						<?php
							if(has_nav_menu('primary-menu')) {
								wp_nav_menu(array(
									'menu'            => 'footer-menu',
									'theme_location'  => 'footer-menu',
									'container_class' => false,
									'container_id'    => false,
									'menu_class'      => false,
									'depth'           => 1,
								));
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>