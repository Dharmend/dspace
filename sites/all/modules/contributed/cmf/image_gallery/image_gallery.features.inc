<?php
/**
 * @file
 * image_gallery.features.inc
 */

/**
 * Implements hook_node_info().
 */
function image_gallery_node_info() {
  $items = array(
    'image' => array(
      'name' => t('image'),
      'base' => 'node_content',
      'description' => t('test image'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
