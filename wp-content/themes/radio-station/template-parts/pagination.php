<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'radio-station' ),
		'next_text' => esc_html__( 'Next page', 'radio-station' ),
	) );