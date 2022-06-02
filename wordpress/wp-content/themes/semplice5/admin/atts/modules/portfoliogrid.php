<?php

// -----------------------------------------
// semplice
// admin/atts/modules/portfoliogrid.php
// -----------------------------------------

$portfoliogrid = array(
	'options' => array(
		'title'  	 => 'Options',
		'hide-title' => true,
		'break'		 => '1',
		'masonry' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Preview',
			'button-title'		=> 'Refresh Grid',
			'hide-title'		=> true,
			//'help'				=> 'If you are happy with your settings, just press the regenerate button to generate a new preview with your updated settings.<br /><br />Please note that only published projects are visible in the portfolio grid.',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button regenerate-masonry',
			'responsive'		=> true,
		),
	),
	'category-options' => array(
		'title'  	 => 'Categories',
		'break'		 => '1',
		'data-hide-mobile' => true,
		'categories' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Categories',
			'hide-title' 		=> true,
			'help'				=> 'Select the categories you want to display in your portfolio grid. Leave empty to show all works.',
			'button-title'		=> 'Select Categories',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button white-button expand-options admin-click-handler',
			'data-target'		=> 'pg-categories',
			'data-expand-options' => 'categories',
		),
	),
	'gutter_options' => array(
		'title'  	 => 'Gutter Options',
		'break'		 => '2',
		'data-hide-mobile' => true,
		'hor_gutter' => array(
			'title'			=> 'Horizontal Gutter',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
		),
		'ver_gutter' => array(
			'title'			=> 'Vertical Gutter',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			//'responsive'	=> true,
		),
	),
	'responsive_gutter_lg' => get_responsive_gutter('lg', false),
	'responsive_gutter_md' => get_responsive_gutter('md', false),
	'responsive_gutter_sm' => get_responsive_gutter('sm', false),
	'responsive_gutter_xs' => get_responsive_gutter('xs', false),
	'title_options' => array(
		'title'  	 => 'Title & Type Visibility',
		'style-class' => 'ep-collapsed',
		'break'		 => '1,2',
		'data-hide-mobile' => true,
		'title_visibility' => array(
			'data-input-type' 	=> 'select-box',
			'title'		 		=> 'Visibility',
			'size'		 		=> 'span4',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default' 	 		=> 'both',
			'select-box-values' => array(
				'both' 			=> 'Show both title and project type',
				'title'			=> 'Show only title',
				'category'		=> 'Show only project type',
				'hidden'		=> 'Hide Both',
			),
		),
		'title_position' => array(
			'data-input-type' 	=> 'select-box',
			'title'		 		=> 'Position',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default' 	 		=> 'below',
			'select-box-values' => array(
				'below' 		=> 'Below Image Center',
				'below-left'	=> 'Below Image Left',
				'below-right'	=> 'Below Image Right',
				'top-left'      => 'Overlay Top Left',
				'top-center'	=> 'Overlay Top Center',
				'top-right'		=> 'Overlay Top Right',
				'middle-left'   => 'Overlay Middle Left',
				'middle-center'	=> 'Overlay Middle Center',
				'middle-right'	=> 'Overlay Middle Right',
				'bottom-left'   => 'Overlay Bottom Left',
				'bottom-center'	=> 'Overlay Bottom Center',
				'bottom-right'	=> 'Overlay Bottom Right',
			),
		),
		'title_padding' => array(
			'title'			=> 'Padding',
			'help'			=> 'Padding has no effect if title position is set to \'Overlay Middle Center.\'',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 18,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
	),
	'title_formatting' => array(
		'title'  	 => 'Title Formatting',
		'break'		 => '2,2',
		'data-hide-mobile' => true,
		'style-class' => 'ep-collapsed',
		'title_color' => array(
			'title'				=> 'Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',	
		),
		'title_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default' 	 		=> 'none',
			'select-box-values' => $fonts,
		),
		'title_fontsize' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
		'title_text_transform' => array(
			'title'				=> 'Text Transform',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default'			=> 'none',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
	),
	'type_formatting' => array(
		'title'  	 => 'Type Formatting',
		'break'		 => '2,2,1',
		'data-hide-mobile' => true,
		'style-class' => 'ep-collapsed',
		'category_color' => array(
			'title'				=> 'Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',	
		),
		'category_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default' 	 		=> 'none',
			'select-box-values' => $fonts,
		),
		'category_fontsize' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 14,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
		'category_text_transform' => array(
			'title'				=> 'Text Transform',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default'			=> 'none',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
		'category_padding_top' => array(
			'title'			=> 'Padding Top',
			'size'			=> 'span4',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 8,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
		),
	),
	'responsive_title_formatting_lg' => get_responsive_pg_title_options('lg'),
	'responsive_title_formatting_md' => get_responsive_pg_title_options('md'),
	'responsive_title_formatting_sm' => get_responsive_pg_title_options('sm'),
	'responsive_title_formatting_xs' => get_responsive_pg_title_options('xs'),
	'filter_projects_options' => array(
		'title'  	 => 'Project Display',
		'help'		 => '',
		'break'		 => '1',
		'style-class'=> 'ep-collapsed',
		'data-hide-mobile' => true,
		'project_display' => array(
			'title'				=> 'Project Display',
			'hide-title'		=> true,
			'size'				=> 'span4',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen project-display',
			'data-handler'		=> 'save',
			'default'			=> 'default',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'default,category,limit,lazy_load',
			'data-visibility-prefix'	=> 'ov-pg-project-display',
			'select-box-values' => array(
				'default'		=> 'Standard',
				'category'		=> 'Category Live Filter',
				'limit'			=> 'Limited Number of Projects',
				'lazy_load'		=> 'Lazy Load',
			),
		),
	),
	'filter_options' => array(
		'title'  	 => 'Category Filter',
		'break'		 => '2,2,2,2,2,2,2',
		'style-class'=> 'ov-pg-project-display-category ep-collapsed',
		'data-hide-mobile' => true,
		'filter_alignment' => array(
			'title'				=> 'Alignment',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default'			=> 'flex-end',
			'select-box-values' => array(
				'flex-start'	=> 'Left',
				'center'		=> 'Center',
				'flex-end'		=> 'Right',
			),
		),
		'filter_mobile_visibility' => array(
			'title'				=> 'Mobile Visibility',
			'size'				=> 'span2',
			'data-input-type'	=> 'switch',
			'switch-type'  		=> 'twoway',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default'			=> 'visible',
			'help'				=> 'If set to hidden the filter will be hidden on both the tablet portrait and mobile breakpoint.',
			'switch-values' => array(
				'visible'		=> 'Visible',
				'hidden'		=> 'Hidden',
			),
		),
		'filter_showall' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Show all label',
			'size'		 	=> 'span2',
			'placeholder'	=> 'Show All',
			'default'		=> 'Show All',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
		),
		'filter_padding' => array(
			'title'			=> 'Padding Bottom',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 28,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
		'filter_item_padding' => array(
			'title'			=> 'Item Padding',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 28,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
		'filter_color' => array(
			'title'				=> 'Link Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> '#bbbbbb',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',	
		),
		'filter_color_active' => array(
			'title'				=> 'Active &amp; Hover Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> '#000000',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
		),
		'filter_fontsize' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			'style-class'		=> 'ov-pg-filter-visibility-visible',
			'help'		 	=> 'To set the font size for individual breakpoints, select the breakpoint from the responsive editor dropdown. Then click the portfolio grid to open the mobile options for your selected breakpoint.',
			//'responsive'	=> true,
		),
		'filter_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default' 	 		=> 'none',
			'select-box-values' => $fonts,
		),
		'filter_letter_spacing' => array(
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 9999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'data-style-option' => true,
			'data-divider'  => 10,
			'data-has-unit'	=> true,
			'data-negative' => true,
			'help'			=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px.',		
		),
		'filter_text_transform' => array(
			'title'				=> 'Text Transform',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default'			=> 'none',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
		'filter_text_decoration' => array(
			'title'				=> 'Active Text Style',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'default'			=> 'none',
			'select-box-values' => array(
				'none'			=> 'None',
				'underline'		=> 'Underline',
				'line-through'  => 'Line Through',
				'overline'		=> 'Overline',
			),
		),
	),
	'responsive_filter_lg' => get_pg_filter_responsive('lg'),
	'responsive_filter_md' => get_pg_filter_responsive('md'),
	'responsive_filter_sm' => get_pg_filter_responsive('sm'),
	'responsive_filter_xs' => get_pg_filter_responsive('xs'),
	'limit_options' => array(
		'title'  	 => 'Limit Projects',
		'break'		 => '1',
		'data-hide-mobile' => true,
		'style-class'=> 'ov-pg-project-display-limit ep-collapsed',
		'limit' => array(
			'title'			=> 'Limit to',
			'size'			=> 'span4',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'help'			=> 'Define the number of projects you want to load. This can be used to create layers like "Latest 3 Artworks", "Similar projects" etc.',
		),
	),
	'lazy_load_options' => array(
		'title'  	 => 'Lazy Load',
		'break'		 => '2,2,2',
		'help'		 => 'Note: If you can\'t see a load more button that means that the number of projects that you initially load is already bigger than the amount of projects in total.',
		'data-hide-mobile' => true,
		'style-class'=> 'ov-pg-project-display-lazy_load ep-collapsed',
		'lazy_load_initial' => array(
			'title'			=> 'Initial',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'help'				=> 'Define the number of projects that should get load initially.',
		),
		'lazy_load_per_load' => array(
			'title'			=> 'Per Load',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'help'			=> 'Define the number of projects you want to add to the grid when clicking the \'Load More\' button.',
		),
		'lazy_load_button' => array(
			'title'			=> 'Button Image',
			'help'			=> 'Optimal is to upload an SVG. If that\'s not possible please try to upload a retina png and adjust the width on the right.',
			'size'			=> 'span2',
			'data-input-type'	=> 'admin-image-upload',
			'default'		=> '',
			'class'			=> 'editor-listen',
			'data-handler'  => 'save',
			'style-class'   => 'ce-upload-small hide-unsplash'
		),
		'lazy_load_button_width' => array(
			'title'			=> 'Width',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 60,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit' => true,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
			'help'			=> 'Define the number of projects you want to add to the grid when clicking the \'Load More\' button.',
		),
		'lazy_load_padding_top' => array(
			'title'			=> 'Padding Top',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 40,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit' => true,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
		),
		'lazy_load_padding_bottom' => array(
			'title'			=> 'Padding Bottom',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 100,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit' => true,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'save',
		),
	),
);

?>