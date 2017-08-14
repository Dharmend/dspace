<?php
/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
global $base_url;
$theme_path = $base_url.'/'.drupal_get_path('theme', 'cmf');

foreach($rows as $row){
  $nodeObj=node_load($row['nid']);
  foreach ($nodeObj->field_links_information['und'] as $item) {
  $fc = field_collection_field_get_entity($item);
  $link_name 	 =  $fc->field_link_name['und'][0]['value'];
  if(isset($fc->field_link_path['und'])){
	$link_target = $fc->field_link_path['und'][0]['attributes']['target'];
	$link_url 	 =  $fc->field_link_path['und'][0]['url'];
	$link_title  =	$fc->field_link_path['und'][0]['title'];
	
  } else {
	$link_url = "";
	$link_title = "";
	$link_target = "_self";
  }
  if($link_target=="0"){
	  $link_target = "_self";
  }
  
  $image_uri	 =  $fc->field_link_image['und'][0]['uri'];
  $image_title	 =  $fc->field_link_image['und'][0]['title'];
  $image_alt	 =  $fc->field_link_image['und'][0]['alt'];
  $image_path	 =  file_create_url($image_uri);
  if($link_target=="_blank"){$title= $image_title.", External link that open in a new window";} else {$title=$image_title;}
  
  ?>
	<div class="link-icon" style="background:url(<?php echo $image_path;?>) no-repeat">
        	<a href="<?php echo url($link_url); ?>" target="<?php echo $link_target; ?>" title="<?php echo t($title);?>">
                <span class="ico-text"><?php echo t($link_name); ?></span>
            </a>
        </div>
        
<?php } } ?>