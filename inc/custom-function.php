<?php
//require get_template_directory(). '/inc/custom-post-function.php';
// Register Sidebars
if ( function_exists('register_sidebar') )
register_sidebar(array(
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h4 class="section">',
  'after_title' => '</h4>',
));
function table_cgv() {

	$args = array(
		'id'            => 'table_cgv',
		'class'         => '.tablecgv',
		'name'          => __( 'cgv', 'text_domain' ),
		'description'   => __( 'table des matières des cgv', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'table_cgv' );
/**
Génèse des ancres
*/
function replace_ca($matches){
  return '<h'.$matches[1].$matches[2].' id="'.sanitize_title($matches[3]).'">'.$matches[3].'</h'.$matches[4].'>';
}

//Ajout d'un filtre sur le contenu  
add_filter('the_content', 'add_anchor_to_title', 12);
function add_anchor_to_title($content){   
  if(is_singular('post')){ // s'il s'agit d'un article
    global $post;
    $pattern = "/<h([2-4])(.*?)>(.*?)<\/h([2-4])>/i";
    
    $content = preg_replace_callback($pattern, 'replace_ca', $content);
    return $content;
  }else{
    return $content;
  }
}

/**
Function automenu( $echo = false )
*/
function automenu(){
  global $post;
  $obj = '<nav id="sommaire-article">';
  $original_content = $post->post_content;

  $patt = "/<h([2-4])(.*?)>(.*?)<\/h([2-4])>/i";
  preg_match_all($patt, $original_content, $results);

  $lvl1 = 0;
  $lvl2 = 0;
  $lvl3 = 0;

  foreach ($results[3] as $k=> $r) {
    switch($results[1][$k]){
      case 2:
        $lvl1++;
        $niveau = '<span class="title_lvl">'.$lvl1.'/</span>';
        $lvl2 = 0;
        $lvl3 = 0;
        break;

      case 3:
        $lvl2++;
        $niveau = '<span class="title_lvl">'.base_convert(($lvl2+9),10,36).'.</span>';
        $lvl3 = 0;
        break;

      case 4:
        $lvl3++;
        $niveau = '<span class="title_lvl">'.$lvl3.')</span>';
        break;
    }

    $obj .= '<a href="#'.sanitize_title($r).'" class="title_lvl'.$results[1][$k].'">'.$niveau.$r.'</a>';
  }

  $obj .= '</nav>';
  if ( $echo )
    echo $obj;
  else
    return $obj;
}

add_action('init', 'my_custom_init');
function my_custom_init()
{
register_post_type(
  'estimation',
  array(
    'label' => 'estimations',
    'labels' => array(
    'name'    => 'Estimation',
    'singular_name' => 'Estimation',
    'all_items' => 'Toutes les estimations',
    'add_new_item' => 'Ajouter une estimation',
    'edit_item' => 'Éditer une estimation',
    'new_item' => 'Nouvelle estimation',
    'view_item' => 'Voir l\'estimation',
    'search_items' => 'Rechercher parmi les estimations',
    'not_found' => 'Pas d\'estimation trouvé',
    'not_found_in_trash'=> 'Pas d\'estimation dans la corbeille'
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

register_taxonomy(
  'type',
  'estimation',
  array(
    'label' => 'Types',
    'labels' => array(
    'name' => 'Types',
    'singular_name' => 'Type',
    'all_items' => 'Tous les types',
    'edit_item' => 'Éditer le type',
    'view_item' => 'Voir le type',
    'update_item' => 'Mettre à jour le type',
    'add_new_item' => 'Ajouter un type',
    'new_item_name' => 'Nouveau type',
    'search_items' => 'Rechercher parmi les types',
    'popular_items' => 'Types les plus utilisés'
  ),
  'hierarchical' => true
  )
);

register_taxonomy_for_object_type( 'type', 'estimation' );

add_action('widget_init', 'lanterne_pourpre_widgets_init');

function lanterne_pourpre_sommaire() {
  register_widget('sommaire');
  register_sidebar( array(
    'name'          => __( 'lanterne_sommaire', 'lanterne_pourpre' ),
    'id'            => 'sommaire',
    'description' => __( 'Main sidebar that appears on the left.', 'lanterne_pourpre' ),
    'before_widget' => '<aside id= »%1$s » class= »widget %2$s »>',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class= »widget-title »>',
    'after_title'   => '</h1>',
    ) );
}

?>