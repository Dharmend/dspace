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
$i=1;
?>
<div id="gallery" class="flexslider">
<ul class="slides">
<?php foreach($rows as $row){
  if($i==1){ $class="social_third_one";
  }elseif($i==2)
  {$class="social_third_two";
  }else {
    $class="social_third_three";
  }
   //$more_link=url($row['field_url']);
  //print_r($row);
  $nodeObj=node_load($row['nid']);
  $image_uri=$nodeObj->field_image['und'][0]['uri'];
  $alt_title = $nodeObj->field_image['und'][0]['alt'];
  $pic_title = $nodeObj->field_image['und'][0]['title'];
   $image_path=file_create_url($image_uri);
  //echo $image_path;
?>
	 <li>
	  <a href="<?php echo $image_path; ?>" rel="lightbox[roadtrip][<?php echo $row['title']; ?>]" alt ="<?php echo $alt_title;?>" title="<?php echo $pic_title;?>"  style="background:url(<?php echo $image_path;?>) no-repeat" class="bg-slide">
		  <div class="gallery-caption"><?php echo t($row['title']); ?></div></a>			  
	  </li>
<?php $i++; } ?>
</ul>
</div>
<div class="view-all-pic"><a href=<?php echo $base_url;?>/photo-galery>View All</a></div>
