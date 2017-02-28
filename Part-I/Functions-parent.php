<?php
    function fait_ceci() {
        echo 'contenu de la fonction parent';
    }
	
	add_action('wp-footer','fait_ceci');
?>	