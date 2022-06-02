<?php

// -----------------------------------------
// semplice
// admin/atts/customize/transitions.php
// -----------------------------------------

$transitions = array(
	'tabs' => array(
		'options' => array(
			'preview-transition' => array(
				'title' => 'Preview',
				'hide-title'	=> true,
				'break'	=> '1',
				'preview' => array(
					'title'				=> 'Preview',
					'hide-title'		=> true,
					'size'				=> 'span4',
					'data-input-type'	=> 'button',
					'button-title'		=> 'Preview Transition',
					'class'				=> 'admin-listen-handler semplice-button semplice-button-disabled preview-transition-button',
					'data-handler'  	=> 'transitions',
				),
			),
			'background' => array(
				'title' => 'Browser Background',
				'break'	=> '1',
				'style-class' => 'bg-options',
				'help'	=> 'The default browser background color is white (browser default). To avoid white appearing between certain page transitions, change the default browser background color here.',
				'background-color' => array(
					'title'			=> 'Color',
					'hide-title' 	=> true,
					'size'			=> 'span4',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-picker'	=> 'transitions',
				),
			),
			'status-switch' => array(
				'title' => 'Transitions',
				'break' => '1,1',
				'help'						=> 'Select \'Disabled\' to show no transitions at all (except your content editor motions).',
				'status' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Status',
					'hide-title' 				=> true,
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'  			=> 'transitions',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'enabled,disabled',
					'data-visibility-prefix'	=> 'ov-status',
					'default' 	 				=> 'disabled',
					'switch-values' => array(
						'enabled'	 		=> 'Enabled',
						'disabled'  		=> 'Disabled',
					),
				),
				'preset' => array(
					'title'				=> 'Preset',
					'size'				=> 'span4',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'style-class'		=> 'ov-status-enabled',
					'select-box-values' => array(
						'fade'			=> 'Fade',
						'rightToLeft'	=> 'Right to Left',
						'leftToRight'	=> 'Left to Right',
						'topToBottom'	=> 'Top to Bottom',
						'bottomToTop'	=> 'Bottom to Top',
						'reveal'		=> 'Reveal',
					),
				),
			),
			'reveal_transition' => array(
				'title' 		=> 'Reveal Transition',
				'break' 		=> '2,2,2,2,1',
				'style-class'	=> 'ov-status-enabled ep-collapsed reveal-transition-options',
				'rt_direction' => array(
					'title'				=> 'Direction',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'style-class'		=> 'ov-status-enabled',
					'help'				=> 'Only works if \'Animation\' is set to \'Slide\'.',
					'select-box-values' => array(
						'topToBottom'	=> 'Top to Bottom',
						'bottomToTop'	=> 'Bottom to Top',
						'leftToRight'	=> 'Left to Right',
						'rightToLeft'	=> 'Right to Left',
					),
				),
				'rt_duration' => array(
					'title'				=> 'Duration (ms)',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 950,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 1000,
					'data-range-slider' => 'transitions',
				),
				'rt_easing' => array(
					'title'				=> 'Easing',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'default'			=> 'Expo.easeInOut',
					'select-box-values' => $easings,
				),
				'rt_offset' => array(
					'title'				=> 'Content Offset',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 450,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'transitions',
					'help'				=> 'In pixels, define the distance the content will slide in or out.',
				),
				'rt_image' => array(
					'title'				=> 'Image',
					'size'				=> 'span2',
					'data-input-type'	=> 'admin-image-upload',
					'data-target'		=> '.content-block',
					'default'			=> '',
					'class'				=> 'admin-listen-handler',
					'style-class'   	=> 'ov-status-enabled ce-upload-small hide-unsplash reveal-transitions-image',
					'data-handler'		=> 'transitions',
					'data-upload'		=> 'revealImg',
					'help'				=> '<b>Important Note:</b><br />This feature does not pre-load images. For best results, please upload an SVG file or small image.',
				),
				'rt_color' => array(
					'title'			=> 'BG Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#ffd300',
					'class'			=> 'color-picker admin-listen-handler',
					'data-picker'	=> 'transitions',
					'data-handler'  => 'colorPicker',
					'style-class'	=> 'ov-status-enabled',
					'help'			=> 'Define the background color for the reveal layer.',
				),
				'rt_image_size' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Image Scaling',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'  			=> 'transitions',
					'default' 	 				=> 'original',
					'style-class'				=> 'ov-status-enabled',
					'switch-values' => array(
						'original'	 	=> 'Original',
						'cover'  		=> 'Cover',
					),
				),
				'rt_image_align' => array(
					'title'				=> 'Alignment',
					'size'				=> 'span2',
					'data-input-type'   => 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 'default',
					'style-class'		=> 'ov-status-enabled',
					'select-box-values' => array(
						'0% 0%' 	=> 'Top Left',
						'50% 0%' 	=> 'Top Center',
						'100% 0%' 	=> 'Top Right',
						'0% 50%' 	=> 'Middle Left',
						'50% 50%' 	=> 'Middle Center',
						'100% 50%' 	=> 'Middle Right',
						'0% 100%' 	=> 'Bottom Left',
						'50% 100%' 	=> 'Bottom Center',
						'100% 100%' => 'Bottom Right'
					),
				),
				'rt_image_offset' => array(
					'title'				=> 'Image Offset',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 600,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'transitions',
					'help'				=> 'Define the distance in pixel the image will slide in or out during the reveal transition.',
				),
			),
			'out_transition' => array(
				'title' 		=> 'Content Out Transition',
				'break' 		=> '2',
				'style-class'	=> 'ov-status-enabled ep-collapsed out-transition-options',
				'duration_out' => array(
					'title'				=> 'Duration (ms)',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 1000,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 1000,
					'data-range-slider' => 'transitions',
				),
				'easing_out' => array(
					'title'				=> 'Easing',
					'size'				=> 'span3',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'default'			=> 'Expo.easeInOut',
					'select-box-values' => $easings,
				),
			),
			'in_transition' => array(
				'title' 		=> 'Content in Transition',
				'break'		 	=> '2',
				'style-class'	=> 'ov-status-enabled ep-collapsed in-transition-options',
				'duration_in' => array(
					'title'				=> 'Duration (ms)',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 1000,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 1000,
					'data-range-slider' => 'transitions',
				),
				'easing_in' => array(
					'title'				=> 'Easing',
					'size'				=> 'span3',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'default'			=> 'Expo.easeInOut',
					'select-box-values' => $easings,
				),
			),
			'optimize-options' => array(
				'title' 		=> 'Optimize Transitions',
				'break'		 	=> '1,2,2',
				'style-class'	=> 'ov-status-enabled',
				'hide-title'	=> true,
				'help'			=> 'This image will appear as your page loads to smooth the transition. Upload an SVG / PNG (such as your logo) or try an animated GIF loader. Image will be centered horizontally and vertically.',
				'optimize' => array(
					'data-input-type' 			=> 'onoff-switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Optimize Transitions',
					'hide-title'				=> true,
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'  			=> 'transitions',
					'default' 	 	  			=> 'disabled',
					'data-on'		  			=> 'enabled',
					'data-off'		 		 	=> 'disabled',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'enabled,disabled',
					'data-visibility-prefix'	=> 'ov-optimize-transitions',
				),
				'loader_bg_color' => array(
					'title'			=> 'Background Color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-picker'	=> 'transitions',
					'data-handler'  => 'colorPicker',
					'style-class'	=> 'ov-optimize-transitions-enabled',
				),
				'loader_image' => array(
					'title'				=> 'Loader Image',
					'help'				=> 'Upload an image that will be function as your \'Preloader Image\'. (examples: your logo as an svg / png, an animated gif loader etc.) <br /><br />Note: The loader image will get displayed horizontally and vertically centered.',
					'size'				=> 'span2',
					'data-input-type'	=> 'admin-image-upload',
					'default'			=> '',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'data-upload'		=> 'loaderImage',
					'style-class'		=> 'ov-optimize-transitions-enabled hide-unsplash ce-upload-small',
				),
				'loader_width' => array(
					'title'				=> 'Image Width',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 120,
					'min'				=> 0,
					'max'				=> 9999,
					'data-has-unit'		=> true,
					'data-range-slider' => 'transitions',
					'style-class'		=> 'ov-optimize-transitions-enabled',
				),
				'loader_animation' => array(
					'data-input-type' 	=> 'switch',
					'switch-type'		=> 'twoway',
					'title'		 		=> 'Loader Animation',
					'size'		 		=> 'span2',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default' 	 		=> 'pulsating',
					'style-class'		=> 'ov-optimize-transitions-enabled',
					'switch-values' => array(
						'pulsating'  	=> 'Pulsating',
						'none'	 		=> 'None',
					),
				),
			),
		),
		'scroll_reveal' => array(
			'options' => array(
				'title' => 'Options',
				'break' => '2,2,2,1',
				'hide-title' => true,
				'sr_viewFactor' => array(
					'title'				=> 'View factor (%)',
					'help'				=> 'Change when an element is considered in the viewport. Once an element is in the viewport of your browser it gets faded in. Default is 20%<br /><br />Please be aware that a section only gets displayed once its n% (the value you defined) visible in the browser viewport so to be safe a lower value is better here. Maximum is 50%.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 20,
					'min'				=> 1,
					'max'				=> 50,
					'data-divider'		=> 100,
					'data-range-slider' => 'transitions',
				),
				'sr_distance' => array(
					'title'				=> 'Distance',
					'help'				=> 'Define the distance the content should slide up while the \'reveal\' transitions runs.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'transitions',
				),
				'sr_easing' => array(
					'title'				=> 'Easing',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'default'			=> 'ease-out',
					'select-box-values' => array(
						'ease-out'		=> 'ease-out',
						'ease'			=> 'ease',
						'linear'		=> 'linear',
						'ease-in'		=> 'ease-in',
						'ease-in-out'   => 'ease-in-out',
					),
				),
				'sr_duration' => array(
					'title'				=> 'Duration (ms)',
					'help'				=> 'Define the duration of your \'reveal\' transition',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 700,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'transitions',
				),
				'sr_opacity' => array(
					'title'				=> 'Opactiy',
					'help'				=> 'Define starting opacity of your content before the \'reveal\' transition starts. Example: 80% means that the opacity of your content will fade from 80% to 100% while the duration of the transition.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 100,
					'data-divider'		=> 100,
					'data-range-slider' => 'transitions',
				),
				'sr_scale' => array(
					'title'				=> 'Scale',
					'help'				=> 'Define starting scale of your content before the \'reveal\' transition starts. Example: 80% means that your content will get scaled from 80% to 100% while the duration of the transition.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 100,
					'min'				=> 0,
					'max'				=> 100,
					'data-divider'		=> 100,
					'data-range-slider' => 'transitions',
				),
				'sr_mobile' => array(
					'data-input-type' 			=> 'switch',
					'help'						=> 'Select \'Enabled\' to enable scroll reveal on mobile devices.<br /><br />Please note that big sections can cause problems on mobile if your \'View Factor\' is to high.<br /><br />If you experience problems please set this to \'Disabled\' again.',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Scroll reveal on mobile',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'  			=> 'transitions',
					'default' 	 				=> 'false',
					'switch-values' => array(
						'true'	 		=> 'Enabled',
						'false'  		=> 'Disabled',
					),
				),
			),
		),
	),
);