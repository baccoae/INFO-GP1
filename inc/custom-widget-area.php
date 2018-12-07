<?php
function lanterne_pourpre_custom_widgets_init() {
	//footer top
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'lanterne_pourpre' ),
		'id'            => 'footer-top',
		'description'   => esc_html__( 'Add widgets here.', 'lanterne_pourpre' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	//footer bot
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bot', 'lanterne_pourpre' ),
		'id'            => 'footer-bot',
		'description'   => esc_html__( 'Add widgets here.', 'lanterne_pourpre' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	//footer footer
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Footer', 'lanterne_pourpre' ),
		'id'            => 'footer-footer',
		'description'   => esc_html__( 'Add widgets here.', 'lanterne_pourpre' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lanterne_pourpre_custom_widgets_init' );


?>
