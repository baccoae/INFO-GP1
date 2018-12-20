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
	register_post_type(
  'Annonce',
  array(
    'label' => 'Annonce',
    'labels' => array(
      'name' => 'Annonces',
      'singular_name' => 'Annonce',
      'all_items' => 'Toutes les annonces',
      'add_new_item' => 'Ajouter une annonce',
      'edit_item' => "Éditer l'annonce",
      'new_item' => 'Nouvelle annonce',
      'view_item' => "Voir l'annonce",
      'search_items' => 'Rechercher parmi les annonce',
      'not_found' => "Pas d'annonce trouvé",
      'not_found_in_trash'=> "Pas d'annonce dans la corbeille"
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
);
}
add_action( 'widgets_init', 'lanterne_pourpre_custom_widgets_init' );


?>
