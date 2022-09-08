<?php if ( get_theme_mod('radio_station_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('radio_station_blog_slide_category'),
  'posts_per_page' => get_theme_mod('radio_station_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('radio_station_slider_first_heading') ) : ?>
              <h6><?php echo esc_html(get_theme_mod('radio_station_slider_first_heading')); ?></h6>
            <?php endif; ?>
            <?php if ( get_theme_mod('radio_station_title_unable_disable',true) ) : ?>
              <h3 class="my-3"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('radio_station_button_unable_disable',true) ) : ?>
              <p class="slider-button mt-0 mt-md-4"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Read More','radio-station'); ?></a></p>
            <?php endif; ?>
            <?php $radio_station_settings = get_theme_mod( 'radio_station_social_links_settings' ); ?>
            <div class="social-links text-center text-md-left my-0 my-md-5">
              <?php if ( is_array($radio_station_settings) || is_object($radio_station_settings) ){ ?>
                <span><?php esc_html_e('Follow Us -','radio-station'); ?></span>
                <?php foreach( $radio_station_settings as $radio_station_setting ) { ?>
                  <a href="<?php echo esc_url( $radio_station_setting['link_url'] ); ?>">
                    <i class="<?php echo esc_attr( $radio_station_setting['link_text'] ); ?>"></i>
                  </a>
                <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>