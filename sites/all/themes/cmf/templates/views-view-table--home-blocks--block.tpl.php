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
<div class="container body-container">
<?php foreach($rows as $row){
  if($i==1){ $class="social_third_one";
  }elseif($i==2)
  {$class="social_third_two";
  }else {
    $class="social_third_three";
  }
   $more_link=url($row['field_url']);
  //print_r($row);
?>
	<div class="big-img-tab">
    	<div class="big-img-tab-image"> <a href="<?php echo $row['field_url'];?>">
        <?php echo $row['field_image']?></a>
        <a href="<?php echo $row['field_url']; ?>" class="readmore" title="Read more about <?php echo strip_tags($row['body']); ?>"><?php echo t('Read More'); ?><span></span></a>
        </div>
        <div class="big-img-tab-contents">
        	<h4><?php echo $row['field_start_date'];?></h4>
            <?php echo $row['body']; ?>
        </div>
        
        <div class="clear"></div>
    </div>
  
<?php $i++; } ?>
</div>