<?php
//print_r($node);
$node_id=$node->field_group_field['und'][0]['value'];
$nodeObj=node_load($node_id);

echo '<ul class="related_link">';
foreach ($node->field_group_field['und'] as $item) {
 $fc = field_collection_field_get_entity($item);
 //print_r($fc);
 //echo "I am here";
$title = $fc->field_title['und'][0]['value'];
     if(!empty($fc->field_upload_attachement['und'])){
                $anchore = $fc->field_upload_attachement['und'][0]['uri'];
                $convert_size =format_size($fc->field_upload_attachement['und'][0]['filesize']);
                $path = file_create_url($anchore);
                echo '<li><h2 class="field-content">'.$title.'</h2>';
				echo get_file_icon($path,$convert_size,$title).'</li>';
      }
      if(!empty($fc->field_url['und'])){
                $anchore = $fc->field_url['und'][0]['url'];
				$urlArr=explode("/",$anchore);
				if($urlArr[0]=="node" && is_numeric($urlArr[1])){
				 $external_link_title = "";
				}else {
				 $external_link_title=t("External link that open in a new Window");
				}
                $url_title = $fc->field_url['und'][0]['title'];
                echo '<li><a href="'.$anchore.'" title="'.$external_link_title.'">'.$url_title.'</a>
                </li>';
      }else{
              // echo "<li>".$title."</li>";
     }

}
echo "</ul>";
?>