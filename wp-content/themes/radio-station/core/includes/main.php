<?php

add_action( 'admin_menu', 'radio_station_getting_started' );
function radio_station_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'radio-station'), esc_html__('Get Started', 'radio-station'), 'edit_theme_options', 'radio-station-guide-page', 'radio_station_test_guide');   
}

function radio_station_admin_enqueue_scripts() {
	wp_enqueue_style( 'radio-station-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'radio_station_admin_enqueue_scripts' );

if ( ! defined( 'RADIO_STATION_DOCS_FREE' ) ) {
define('RADIO_STATION_DOCS_FREE',__('https://www.misbahwp.com/docs/radio-station-free-docs/','radio-station'));
}
if ( ! defined( 'RADIO_STATION_DOCS_PRO' ) ) {
define('RADIO_STATION_DOCS_PRO',__('https://www.misbahwp.com/docs/radio-station-pro-docs','radio-station'));
}
if ( ! defined( 'RADIO_STATION_BUY_NOW' ) ) {
define('RADIO_STATION_BUY_NOW',__('https://www.misbahwp.com/themes/radio-wordpress-theme/','radio-station'));
}
if ( ! defined( 'RADIO_STATION_SUPPORT_FREE' ) ) {
define('RADIO_STATION_SUPPORT_FREE',__('https://wordpress.org/support/theme/radio-station','radio-station'));
}
if ( ! defined( 'RADIO_STATION_REVIEW_FREE' ) ) {
define('RADIO_STATION_REVIEW_FREE',__('https://wordpress.org/support/theme/radio-station/reviews/#new-post','radio-station'));
}
if ( ! defined( 'RADIO_STATION_DEMO_PRO' ) ) {
define('RADIO_STATION_DEMO_PRO',__('https://www.misbahwp.com/demo/radio-station/','radio-station'));
}

function radio_station_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( RADIO_STATION_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'radio-station' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'radio-station' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( RADIO_STATION_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'radio-station' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( RADIO_STATION_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'radio-station' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','radio-station'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'radio-station'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','radio-station'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','radio-station'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','radio-station'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','radio-station'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'radio-station' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','radio-station'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( RADIO_STATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'radio-station' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( RADIO_STATION_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'radio-station' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( RADIO_STATION_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'radio-station' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>