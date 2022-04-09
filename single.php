<?php
if ( in_category('news') ) { //特定のカテゴリの場合
  get_template_part('includes/single-news' , false );
}else { //それ以外の場合
  get_template_part('includes/single-column' , 'normal');
}
?>