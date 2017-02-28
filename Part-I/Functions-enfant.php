<?php
    function retrait_fonction_parent() {
	    remove_action( 'wp_footer','fait_ceci', 10);
	}
	add_action( 'wp_loaded', 'retrait_fonction_parent' );

	
    function fait_cela() {
	   echo 'contenu de la fonction enfant';
	}
	add_action( 'wp_footer','fait_cela', 20);
?>