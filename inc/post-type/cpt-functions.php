<?php
if ( !function_exists( 'wpbootscore_register_post_type' ) ) : 

	function wpbootscore_register_post_type(){


		include('cpt-service.php');
		include('cpt-team.php');
		
	
	} // wpbootscore_register_post_type ends
	
endif;
// end of wpbootscore_register_post_type function_exists


add_action('init', 'wpbootscore_register_post_type');


