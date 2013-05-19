add_action( 'add_meta_boxes', 'ajout_pdf_metabox' );
function ajout_pdf_metabox() {
  add_meta_box( "url_du_pdf", "Fichier à télécharger", "pdf_metabox", "telechargement", "normal", "high" );
}