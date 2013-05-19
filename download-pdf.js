jQuery(document).ready(function($) {
  // on initialise une variable qui nous permettra de détecter le champ à remplir
  var formfield = null;
  // on détecte un clic sur le bouton
  $('#upload_pdf_button').click(function() {
    $('html').addClass('pdf');
    // on cible notre champ
    formfield = $('#url_pdf').attr('name');
    // on charge la fenêtre
    tb_show('', 'media-upload.php?type=image&TB_iframe=true');
    // on empêche toute action supplémentaire
    return false;
  });
});