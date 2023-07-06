<?php


function register_wse_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/carousel-for-team.php' );

	$widgets_manager->register( new \Team_Member_Carousel() );

}
add_action( 'elementor/widgets/register', 'register_wse_widget' );
