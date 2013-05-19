// les dépendances
wp_enqueue_script( 'media-upload' );
wp_enqueue_script( 'thickbox' );
wp_enqueue_script( 'quicktags' );
wp_enqueue_script( 'jquery-ui-resizable' );
wp_enqueue_script( 'jquery-ui-draggable' );
wp_enqueue_script( 'jquery-ui-button' );
wp_enqueue_script( 'jquery-ui-position' );
wp_enqueue_script( 'jquery-ui-dialog' );
wp_enqueue_script( 'wpdialogs' );
wp_enqueue_script( 'wplink' );
wp_enqueue_script( 'wpdialogs-popup' );
wp_enqueue_script( 'wp-fullscreen' );
wp_enqueue_script( 'editor' );
wp_enqueue_script( 'word-count' );
wp_enqueue_style( 'thickbox' );

// mon script
wp_enqueue_script( 'willy-meta-box-sup', get_bloginfo('template_url').'/js/willy-pdf.js', array( 'jquery','media-upload','thickbox' ) );