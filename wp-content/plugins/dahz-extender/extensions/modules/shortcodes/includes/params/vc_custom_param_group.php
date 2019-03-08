<?php
if ( ! class_exists('Vc_Manager') ) {
	return;
}

if ( class_exists('Vc_Edit_Form_Fields') ) {
	require_once vc_path_dir( 'EDITORS_DIR', 'class-vc-edit-form-fields.php' );
}

/**
* 
*/
class Dahz_Params_Group extends Vc_Edit_Form_Fields {
	
	function __construct() 	{
		# code...
	}
}