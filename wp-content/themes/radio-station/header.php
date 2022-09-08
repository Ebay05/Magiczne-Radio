<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'radio-station' ); ?></a>

<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-3 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('radio_station_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('radio_station_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-5 col-md-6 col-sm-6 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'radio-station' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-3 align-self-center">
				<div class="header-search">
	            	<?php if ( get_theme_mod('radio_station_search_box_enable', true) == true ) : ?>
	            		<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
				            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'radio-station'); ?></label>
				            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Here','radio-station'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
				            <button type="submit" value="" class="search-button"><i class="fas fa-microphone"></i></button>
				            <input type="hidden" name="post_type" value="product"/>
			          	</form>
	            	<?php endif; ?>
	            </div>
	       	</div>
	       	<div class="col-lg-1 col-md-2 col-sm-2 align-self-center">
				<?php if ( get_theme_mod('radio_station_header_google_translator') ) : ?>
					<?php echo do_shortcode('[google-translator]'); ?>
				<?php endif; ?>
			</div>
	   	</div>
	</div>
</header>