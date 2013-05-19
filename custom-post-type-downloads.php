add_action( 'init','mes_telechargements');
function mes_telechargements(){
//custom post type pour les téléchargements
register_post_type('telechargement', array(
  'label'         => __('Téléchargements'),
  'labels'        => array(
    'add_new_item'  => 'Ajouter un fichier à télécharger',
    'edit_item'     => 'Modifier le fichier à télécharger',
    'new_item'      => 'Ajouter un fichier à télécharger',
    'view_item'     => 'Voir le fichier à télécharger',
    'singular_name' => 'Fichier à télécharger'
  ),
  'public' => true,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'has_archive' => true,
  'rewrite' => array('slug' => 'doc'),
  'supports' => array('title'),
  'show_in_nav_menus' => true
));
}