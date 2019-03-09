<?php

$param = array(
	'name'			=> __( 'Hotspot', 'sobari_sc' ),
	'base'			=> 'dahz_hotspot',
	'description'	=> __( 'Add hotspot on your image', 'sobari_sc' ),
	'icon'			=> DAHZEXTENDER_SHORTCODE_URI . 'assets/images/icon/df_element-icon-image-hotspot.svg',
	'params'		=> array(),
);

$param['params'][] = array(
	'type'			=> 'de_tagging',
	'param_name'	=> 'tagging_image',
	'heading'		=> '',
	'settings'		=> array(
		'control'	=> 'general',
	),
);

$param['params'][] = array(
	'type'			=> 'dropdown',
	'param_name'	=> 'action_type',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Tagging Text Mode', 'sobari_sc' ),
	'description'	=> __( 'Display tagging text when hover or click', 'sobari_sc' ),
	'value'			=> array(
		__( 'Click', 'sobari_sc' )	=> 'click',
		__( 'Hover', 'sobari_sc' )	=> 'hover',
	),
);
$param['params'][] = array(
	'type'			=> 'dropdown',
	'param_name'	=> 'tagging_type',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Tagging Type', 'sobari_sc' ),
	'description'	=> __( 'Select product tagging type', 'sobari_sc' ),
	'value'			=> array(
		__( 'Number', 'sobari_sc' )		 => 'number',
		__( 'Icon +', 'sobari_sc' )		 => 'icon',
		__( 'Custom Icon', 'sobari_sc' ) => 'custom',
	),
);
$param['params'][] = array(
	'type'			=> 'dropdown',
	'param_name'	=> 'icon_type',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Icon Library', 'sobari_sc' ),
	'description'	=> __( 'Select icon library', 'sobari_sc' ),
	'value'			=> array(
		__( 'Font Awesome', 'sobari_sc' )	=> 'fontawesome',
		__( 'Open Iconic', 'sobari_sc' )	=> 'openiconic',
		__( 'Typicons', 'sobari_sc' )		=> 'typicons',
		__( 'Entypo', 'sobari_sc' )			=> 'entypo',
		__( 'Linecons', 'sobari_sc' )		=> 'linecons',
		__( 'Mono Social', 'sobari_sc' )	=> 'monosocial',
		__( 'Material', 'sobari_sc' )		=> 'material',
		__( 'Business and office', 'sobari_sc' )	=> 'businessandoffice',
		__( 'Discussion', 'sobari_sc' )				=> 'discussion',
		__( 'Friendship', 'sobari_sc' )				=> 'friendship',
		__( 'Political', 'sobari_sc' )				=> 'political',
		__( 'Politics', 'sobari_sc' )				=> 'politics',
		__( 'Vote Reward Badges', 'sobari_sc' )		=> 'voterewardbadges',
	),
	'dependency'	=> array(
		'element'	=> 'tagging_type',
		'value'		=> 'custom',
	),
);
$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_businessandoffice',
	'settings' 			=> array(
		'emptyIcon' 	=> true,
		'iconsPerPage' 	=> 4000,
		'type'			=> 'businessandoffice',
		'source'		=> dahz_shortcodes_helper()->get_font( 'business-and-office' )
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'businessandoffice',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_discussion',
	'settings' 			=> array(
		'emptyIcon' 	=> true,
		'iconsPerPage' 	=> 4000,
		'type'			=> 'discussion',
		'source'		=> dahz_shortcodes_helper()->get_font( 'discussion' )
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'discussion',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_friendship',
	'settings' 			=> array(
		'emptyIcon' 	=> true,
		'iconsPerPage' 	=> 4000,
		'type'			=> 'friendship',
		'source'		=> dahz_shortcodes_helper()->get_font( 'friendship' )
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'friendship',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_political',
	'settings' 			=> array(
		'emptyIcon' 	=> true,
		'iconsPerPage' 	=> 4000,
		'type'			=> 'political',
		'source'		=> dahz_shortcodes_helper()->get_font( 'political' )
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'political',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_politics',
	'settings' 			=> array(
		'emptyIcon' 	=> true,
		'iconsPerPage' 	=> 4000,
		'type'			=> 'politics',
		'source'		=> dahz_shortcodes_helper()->get_font( 'politics' )
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'politics',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_voterewardbadges',
	'settings' 			=> array(
		'emptyIcon' 	=> true,
		'iconsPerPage' 	=> 4000,
		'type'			=> 'voterewardbadges',
		'source'		=> dahz_shortcodes_helper()->get_font( 'vote-reward-badges' )
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'voterewardbadges',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);

$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'param_name'	=> 'icon_fontawesome',
	'value' => 'fa fa-adjust',
	'settings' => array(
		'emptyIcon' => false,
		'iconsPerPage' => 4000,
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'fontawesome',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);

$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'param_name'	=> 'icon_linecons',
	'value' => 'vc_li vc_li-heart',
	// default value to backend editor admin_label
	'settings' => array(
		'emptyIcon' => false,
		// default true, display an "EMPTY" icon?
		'type' => 'linecons',
		'iconsPerPage' => 4000,
		// default 100, how many icons per/page to display
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'linecons',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);

$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'param_name'	=> 'icon_openiconic',
	'value' => 'vc-oi vc-oi-dial',
	// default value to backend editor admin_label
	'settings' => array(
		'emptyIcon' => false,
		// default true, display an "EMPTY" icon?
		'type' => 'openiconic',
		'iconsPerPage' => 4000,
		// default 100, how many icons per/page to display
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'openiconic',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);

$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'param_name'	=> 'icon_typicons',
	'value' => 'typcn typcn-adjust-brightness',
	// default value to backend editor admin_label
	'settings' => array(
		'emptyIcon' => false,
		// default true, display an "EMPTY" icon?
		'type' => 'typicons',
		'iconsPerPage' => 4000,
		// default 100, how many icons per/page to display
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'typicons',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);

$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_monosocial',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'value' => 'vc-mono vc-mono-fivehundredpx',
	// default value to backend editor admin_label
	'settings' => array(
		'emptyIcon' => false,
		// default true, display an "EMPTY" icon?
		'type' => 'monosocial',
		'iconsPerPage' => 4000,
		// default 100, how many icons per/page to display
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'monosocial',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);

$param['params'][] = array(
	'type'			=> 'iconpicker',
	'heading'		=> esc_attr__( 'Icon', 'sobari_sc' ),
	'param_name'	=> 'icon_entypo',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'value' => 'entypo-icon entypo-icon-note',
	// default value to backend editor admin_label
	'settings' => array(
		'emptyIcon' => false,
		// default true, display an "EMPTY" icon?
		'type' => 'entypo',
		'iconsPerPage' => 4000,
		// default 100, how many icons per/page to display
	),
	'dependency'	=> array(
		'element'	=> 'icon_type',
		'value'		=> 'entypo',
	),
	'description'	=> __( 'Select icon from library.', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'textfield',
	'param_name'	=> 'icon_size',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Icon Size', 'sobari_sc' ),
	'description'	=> __( 'Please enter the size for your icon. Enter number in pixel (default is 16)', 'sobari_sc' ),
	'dependency'	=> array(
		'element'	=> 'tagging_type',
		'value'		=> 'custom',
	),
);
$param['params'][] = array(
	'type'			=> 'colorpicker',
	'param_name'	=> 'icon_color',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Icon Color', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'colorpicker',
	'param_name'	=> 'icon_bg_color',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Background Color', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'checkbox',
	'param_name'	=> 'is_pulse',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Disable Pulse Animation', 'sobari_sc' ),
);
$param['params'][] = array(
	'type'			=> 'checkbox',
	'param_name'	=> 'is_animate',
	'group'			=> __( 'Settings', 'sobari_sc' ),
	'heading'		=> __( 'Animate Tagging when Appear', 'sobari_sc' ),
);

return $param;
