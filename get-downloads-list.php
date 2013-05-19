add_shortcode('tous_pdf','liste_pdf');
function liste_pdf(){
  global $post;
  $docs = get_post_meta($post->ID,'_docs_affectes',false);
  if(!empty($docs[0]){
    echo '<ul>';
    foreach($docs as $doc){
    $url_pdf = get_posts_meta($doc,'_url_pdf',true);</ul>
    $titre = get_the_title($doc);</ul>
      echo '<li><a href="'.$url_pdf.'">'.$titre.'</a></li>';
    }
    echo '</ul>';
  }
}