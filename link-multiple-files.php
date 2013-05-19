add_action('add_meta_boxes','init_metabox');
function init_metabox(){
  add_meta_box('pdf_affectes', 'Les PDFs liés à cet article', 'pdfs_lies', 'post', 'side');
}
// cette fonction me sert à inscrire checked, si jamais la valeur est coché
function check($cible,$test){
  if(in_array($test,$cible)){return 'checked';}
}
function pdfs_lies($post){
  $doc = get_post_meta($post->ID,'_docs_affectes',false);
  echo 'Indiquez les PDFs affectés à l\'article :';
  $docs = get_posts('post_type=telechargements&posts_per_page=-1');
  foreach($docs as $k=>$d){
    echo '<label><input type="checkbox" name="docs[]" '.check($d->ID,$doc).' value="'.$d->ID.'" /> '.$d->post_title.'</label>';
  }
}

add_action('save_post','save_metabox');
function save_metabox($post_id){
  if(isset($_POST['doc'])){
    // je supprime toutes les entrées pour cette meta
    delete_post_meta($post_id, '_docs_affectes');
    // et pour chaque PDF coché, j'ajoute une metadonnée
    foreach($_POST['doc'] as $c){
      add_post_meta($post_id, '_docs_affectes', intval($c) )
    }
  }
}