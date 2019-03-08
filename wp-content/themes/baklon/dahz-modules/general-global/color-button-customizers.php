<?php

if ( !class_exists( 'Dahz_Framework_Modules_Color_Button_Customizer' ) ) {
		
	class Dahz_Framework_Modules_Color_Button_Customizer extends Dahz_Framework_Customizer_Extend {
		
		private function dahz_framework_get_button_option( $args = array() ){
			
			
			
		}
		
		public function dahz_framework_set_customizer() {
			
			$dv_field = dahz_framework_elements()->dahz_framework_get_customizer( 'button' );
			
			return $dv_field;
		}
	}
}