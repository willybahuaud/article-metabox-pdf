add_shortcode( 'pdf', 'lien_pdf' );
function lien_pdf( $content = NULL ) {
  global $post;
  $pdf = get_post_meta( $post->ID, '_url_pdf', true );
  $content = ( $content != NULL ) ? $content : 'Télécharger le PDF';
  return '<a class="call_pdf" href="'.esc_url($pdf).'" target="_blank">'.$content.'</a>';
}