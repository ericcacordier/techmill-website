<?php
/**
 * @file
 * techmill_coworkers.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function techmill_coworkers_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function techmill_coworkers_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function techmill_coworkers_node_info() {
  $items = array(
    'coworking_member' => array(
      'name' => t('Coworking Member'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
