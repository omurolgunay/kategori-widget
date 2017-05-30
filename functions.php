<?php
/*Temanın fonksiyon dosyasına ekleyin*/
/*************************************************
## Category Widget
*************************************************/ 
function cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="cat-count">', $links);
  $links = str_replace(')', '</span>', $links);
  return $links;
}
add_filter('wp_list_categories', 'cat_count_span');

/*************************************************
## Archive Widget
*************************************************/ 

function archive_count_span($links) {
  $links = str_replace('</a>&nbsp;(', '</a> <span class="cat-count">', $links);
  $links = str_replace(')', '</span>', $links);
  return $links;
}
add_filter('get_archives_link', 'archive_count_span');
