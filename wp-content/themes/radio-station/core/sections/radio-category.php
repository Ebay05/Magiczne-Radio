<?php if ( get_theme_mod('radio_station_radio_category_section_enable') ) : ?>

<?php $args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' =>  get_theme_mod('radio_station_radio_category'),
	'posts_per_page' => get_theme_mod('radio_station_radio_category_number'),
); ?>

<div class="radio_category py-5 text-center">
	<div class="container">
		<?php if ( get_theme_mod('radio_station_radio_category_first_heading') ) : ?>
			<h6><?php echo esc_html(get_theme_mod('radio_station_radio_category_first_heading')); ?></h6>
		<?php endif; ?>
		<?php if ( get_theme_mod('radio_station_radio_category_second_heading') ) : ?>
			<h3 class="pb-4"><?php echo esc_html(get_theme_mod('radio_station_radio_category_second_heading')); ?></h3>
		<?php endif; ?>
		<div class="row">
		    <?php $arr_posts = new WP_Query( $args );
		    if ( $arr_posts->have_posts() ) :
		      while ( $arr_posts->have_posts() ) :
		        $arr_posts->the_post();
		        ?>
		        <div class="col-lg-2 col-md-3 col-sm-3 mb-3">
		        	<div class="box">
		                <?php if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif; ?>
		                <ul class="icon">
		                    <li><a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i></a></li>
		                </ul>
		            </div>
		            <h4><?php the_title(); ?></h4>
			    </div>
		      <?php
		    endwhile;
		    wp_reset_postdata();
		    endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>