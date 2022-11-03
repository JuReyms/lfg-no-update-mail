<?php
/*
Plugin Name: LFG - No Update Mail
Plugin URI: https://www.lafermegraphique.fr/
Description: Extension qui désactive les notifications des mises à jours des plugins et des thèmes
Author: La Ferme Graphique
Version: 1.0
Author URI: https://www.lafermegraphique.fr/
*/


// Désactiver les notifications des mises à jour des plugins 
add_filter('auto_plugin_update_send_email', '__return_false'); 
	 
// Désactiver les notifications de mises à jour des thèmes 
add_filter('auto_theme_update_send_email', '__return_false');