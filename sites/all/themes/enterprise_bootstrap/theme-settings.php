<?php

function enterprise_bootstrap_form_system_theme_settings_alter(&$form, &$form_state) {
	$form['general']['#weight'] = -8;

	$form['enterprise_bootstrap'] = array(
		'#type' => 'vertical_tabs',
		'#prefix' => '<h2><small>Enterprise Bootstrap</small></h2>',
		'#weight' => -9,
	);

	$form['enterprise_bootstrap_config'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap',
		'#title' => t('Display settings'),
		'#description' => t('Full width, block striping, etc.'),
	);
	$form['enterprise_bootstrap_config']['enterprise_bootstrap_front_container'] = array(
		'#type' => 'select',
		'#title' => t('Full Width Block Containers'),
		'#default_value' => theme_get_setting('enterprise_bootstrap_front_container'),
		'#description' => t('Choose to either turn the blocks on the front page into full-width containers or leave them boxed.'),
		'#options' => array(
			0 => t('Boxed'),
			1 => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_config']['enterprise_bootstrap_sidebar_column'] = array(
		'#type' => 'select',
		'#title' => t('Sidebar Column Width'),
		'#default_value' => theme_get_setting('enterprise_bootstrap_sidebar_column'),
		'#description' => t('Default column width is col-sm-3, wide is col-sm-4'),
		'#options' => array(
			0 => t('Default'),
			1 => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_config']['enterprise_bootstrap_sidebars_front'] = array(
		'#type' => 'select',
		'#title' => t('Sidebars on Front'),
		'#default_value' => theme_get_setting('enterprise_bootstrap_sidebars_front'),
		'#description' => t('If no, the sidebars will never be loaded on the front page. Alternatively, if sidebars are allowed and exist, the front page will never be rendered as wide.'),
		'#options' => array(
			0 => t('No'),
			1 => t('Yes'),
		),
	);
	$form['enterprise_bootstrap_config']['enterprise_bootstrap_block_striping'] = array(
		'#type' => 'select',
		'#title' => t('Block Striping'),
		'#default_value' => theme_get_setting('enterprise_bootstrap_block_striping'),
		'#description' => t('Adds block striping classes to the home page.'),
		'#options' => array(
			0 => t('No'),
			1 => t('Yes'),
		),
	);
	$form['enterprise_bootstrap_config']['enterprise_bootstrap_blokkfont'] = array(
		'#type' => 'select',
		'#title' => t('Blokk Font'),
		'#default_value' => theme_get_setting('enterprise_bootstrap_blokkfont'),
		'#description' => t('Enables Blokk Neue as the default font. Great for testing designs.'),
		'#options' => array(
			0 => t('No'),
			1 => t('Yes'),
		),
	);

	$form['enterprise_bootstrap_region_settings'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap',
		'#title' => t('Region settings'),
		'#description' => t('Settings regarding the container status of each region (excluding the front page).'),
	);

	/********************* Front Page Settings ***********************/
	$form['enterprise_bootstrap_region_settings']['front_page'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap_region_settings',
		'#title' => t('Front Page Settings Only'),
		'#collapsible' => TRUE,
    '#collapsed' => TRUE,
	);
	$form['enterprise_bootstrap_region_settings']['front_page']['header_container_front'] = array(
		'#type' => 'select',
		'#title' => t('Top Bar (Header) Container'),
		'#default_value' => theme_get_setting('header_container_front'),
		'#options' => array(
			0 => t('Boxed'),
			1 => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['front_page']['highlighted_container_front'] = array(
		'#type' => 'select',
		'#title' => t('Highlighted Container'),
		'#default_value' => theme_get_setting('highlighted_container_front'),
		'#options' => array(
			0 => t('Boxed'),
			1 => t('Wide'),
		),
	);

	/********************* Navigation Region Settings ***********************/
	$form['enterprise_bootstrap_region_settings']['navigation'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap_region_settings',
		'#title' => t('Navigation'),
		'#collapsible' => TRUE,
    '#collapsed' => TRUE,
	);
	$form['enterprise_bootstrap_region_settings']['navigation']['nav_logo_class'] = array(
		'#type' => 'textfield',
		'#title' => t('Navigation Logo Wrapper Class'),
		'#default_value' => theme_get_setting('nav_logo_class'),
		'#description' => t('Class that goes on the left side of the navbar, around the logo area.')
	);
	$form['enterprise_bootstrap_region_settings']['navigation']['nav_menu_class'] = array(
		'#type' => 'textfield',
		'#title' => t('Navigation Menu Wrapper Class'),
		'#default_value' => theme_get_setting('nav_menu_class'),
		'#description' => t('Class that goes on the right side of the navbar, around the main menu area.')
	);

	/********************* Title Region Settings ***********************/
	$form['enterprise_bootstrap_region_settings']['title'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap_region_settings',
		'#title' => t('Title'),
		'#collapsible' => TRUE,
    '#collapsed' => TRUE,
	);
	$form['enterprise_bootstrap_region_settings']['title']['title_placement'] = array(
		'#type' => 'select',
		'#title' => t('Title Placement'),
		'#default_value' => theme_get_setting('title_placement'),
		'#description' => t('Choose to either place this above the content/sidebars, or inside the content area.'),
		'#options' => array(
			0 => t('Above content area'),
			1 => t('Inside content area'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['title']['title_container'] = array(
		'#type' => 'select',
		'#title' => t('Title Container'),
		'#default_value' => theme_get_setting('title_container'),
		'#options' => array(
			'container' => t('Boxed'),
			'wide' => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['title']['title_class'] = array(
		'#type' => 'textfield',
		'#title' => t('Title Class'),
		'#default_value' => theme_get_setting('title_class'),
		'#description' => t('Add classes for the title region, separated by space.')
	);

	/********************* Top Bar (header) Region Settings ***********************/
	$form['enterprise_bootstrap_region_settings']['header'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap_region_settings',
		'#title' => t('Top Bar (Header)'),
		'#collapsible' => TRUE,
    '#collapsed' => TRUE,
	);
	$form['enterprise_bootstrap_region_settings']['header']['header_container'] = array(
		'#type' => 'select',
		'#title' => t('Top Bar (Header) Container'),
		'#default_value' => theme_get_setting('header_container'),
		'#options' => array(
			0 => t('Boxed'),
			1 => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['header']['header_class'] = array(
		'#type' => 'textfield',
		'#title' => t('Header Class'),
		'#default_value' => theme_get_setting('header_class'),
		'#description' => t('Add classes for the header region, separated by space.')
	);

	/********************* Highlighted Region Settings ***********************/
	$form['enterprise_bootstrap_region_settings']['highlighted'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap_region_settings',
		'#title' => t('Highlighted'),
		'#collapsible' => TRUE,
    '#collapsed' => TRUE,
	);
	$form['enterprise_bootstrap_region_settings']['highlighted']['highlighted_placement'] = array(
		'#type' => 'select',
		'#title' => t('Highlighted Placement'),
		'#default_value' => theme_get_setting('highlighted_placement'),
		'#description' => t('Choose to either place this above the content/sidebars, or inside the content area.'),
		'#options' => array(
			0 => t('Above content area'),
			1 => t('Inside content area'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['highlighted']['highlighted_container'] = array(
		'#type' => 'select',
		'#title' => t('Highlighted Container'),
		'#default_value' => theme_get_setting('highlighted_container'),
		'#options' => array(
			0 => t('Boxed'),
			1 => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['highlighted']['highlighted_class'] = array(
		'#type' => 'textfield',
		'#title' => t('Highlighted Class'),
		'#default_value' => theme_get_setting('highlighted_class'),
		'#description' => t('Add classes for the highlighted region, separated by space.')
	);

	/********************* Footer Region Settings ***********************/
	$form['enterprise_bootstrap_region_settings']['footer'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap_region_settings',
		'#title' => t('Footer'),
		'#collapsible' => TRUE,
    '#collapsed' => TRUE,
	);
	$form['enterprise_bootstrap_region_settings']['footer']['footer_container'] = array(
		'#type' => 'select',
		'#title' => t('Footer Container'),
		'#default_value' => theme_get_setting('footer_container'),
		'#options' => array(
			0 => t('Boxed'),
			1 => t('Wide'),
		),
	);
	$form['enterprise_bootstrap_region_settings']['footer']['footer_class'] = array(
		'#type' => 'textfield',
		'#title' => t('Footer Class'),
		'#default_value' => theme_get_setting('header_class'),
		'#description' => t('Add classes for the footer region, separated by space.')
	);

	/********************* Enterprise Bootstrap Javascript Settings ***********************/
	$form['enterprise_bootstrap_js'] = array(
		'#type' => 'fieldset',
		'#group' => 'enterprise_bootstrap',
		'#title' => t('Javascript Settings'),
		'#description' => t('Which Bootstrap JS files to include.'),
	);
	$form['enterprise_bootstrap_js']['enterprise_bootstrap_js_options'] = array(
		'#type' => 'checkboxes',
		'#title' => t('Bootstrap Javascript'),
		'#default_value' => (theme_get_setting('enterprise_bootstrap_js_options')) ? theme_get_setting('enterprise_bootstrap_js_options') : array(),
		'#options' => array(
			'affix' => t('Affix'),
			'alert' => t('Alert'),
			'button' => t('Button'),
			'carousel' => t('Carousel'),
			'collapse' => t('Collapse'),
			'dropdown' => t('Dropdown'),
			'modal' => t('Modal'),
			'tooltip' => t('Tooltip'),
			'popover' => t('Popover'),
			'scrollspy' => t('Scrollspy'),
			'tab' => t('Tab'),
			'transition' => t('Transition'),
		),
	);

  $js_desc = array(
		'affix' => t('The subnavigation on the right is a live demo of the affix plugin.'),
    'alert' => t('Add dismiss functionality to all alert messages with this plugin.'),
    'button' => t('Do more with buttons. Control button states or create groups of buttons for more components like toolbars.'),
    'carousel' => t('The slideshow below shows a generic plugin and component for cycling through elements like a carousel.'),
    'collapse' => t('Get base styles and flexible support for collapsible components like accordions and navigation.'),
    'dropdown' => t('Add dropdown menus to nearly anything with this simple plugin, including the navbar, tabs, and pills.'),
    'modal' => t('Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.'),
    'tooltip' => t('Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don\'t rely on images, use CSS3 for animations, and data-attributes for local title storage.'),
    'popover' => t('Add small overlays of content, like those on the iPad, to any element for housing secondary information.'),
    'scrollspy' => t('The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.'),
    'tab' => t('Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.'),
    'transition' => t('Transition.js is a basic helper for transitionEnd events as well as a CSS transition emulator. It\'s used by the other plugins to check for CSS transition support and to catch hanging transitions.'),
  );
	// Add descriptions
  foreach ($form['enterprise_bootstrap_js']['enterprise_bootstrap_js_options']['#options'] as $key => $value) {
		$form['enterprise_bootstrap_js']['enterprise_bootstrap_js_options'][$key]['#description'] = $js_desc[$key];
	}

 } // end settings_alter
