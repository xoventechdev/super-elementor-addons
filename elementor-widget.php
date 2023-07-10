<?php


function register_wse_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/carousel-for-team.php' );
	require_once( __DIR__ . '/widgets/price-table.php' );
	// require_once( __DIR__ . '/widgets/faq-accordion.php' );

	$widgets_manager->register( new \Team_Member_Carousel() );
	$widgets_manager->register( new \SAE_Price_Table() );
	// $widgets_manager->register( new \FAQ_Accordion() );

}
add_action( 'elementor/widgets/register', 'register_wse_widget' );
