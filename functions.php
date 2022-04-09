<?php
/*テーマのセットアップ*/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み*/
function my_script_init()
{
  wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('js-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
  if(is_page('staff')) {
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-staff.js', array('jquery'), '1.0.0', true);
  }
  if (is_front_page()) {
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-top.js', array('jquery'), '1.0.0', true);
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

function my_menu_init()
{
  register_nav_menus(
    array(
      'global-menu' => 'グローバルメニュー',
      'footer-menu' => 'フッターメニュー'
    )
  );
}
add_action('init', 'my_menu_init');

add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
  if (get_the_ID() == '145') {
    echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = 'https://dentalclinic.manamimother.com/contact/contact-thanks'
}, false );
</script>
EOD;
  }
  if (get_the_ID() == '147') { /* ページID */
    echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = 'https://dentalclinic.manamimother.com/reservation/reservation-thanks'
}, false );
</script>
EOD;
  }
}

function my_static_breadcrumb_adder($breadcrumb_trail)
{
  if (get_post_type() === 'post') {
    $item = new bcn_breadcrumb('お知らせ一覧', NULL, array('post'));
    $stuck = array_pop($breadcrumb_trail->breadcrumbs); // HOME 一時退避
    $breadcrumb_trail->breadcrumbs[] = $item; //お知らせ一覧 追加
    $breadcrumb_trail->breadcrumbs[] = $stuck; //HOME 戻す
  }
}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');

//NEW表示
function keika_time($days){
  $today = date_i18n('U');
  $entry_day = get_the_time('U');
  $keika = date('U',($today - $entry_day)) / 86400;
  if ( $days > $keika ):
      echo '<span class="badge-new">NEW</span>';
  endif;
}

function keika_num($limit){
  global $wp_query;
  $num = $wp_query->current_post;
  echo $num;
  if ( $limit > $num ):
      echo '<span class="badge-new">NEW</span>';
  endif;
}

function keika_awase(){
  global $wp_query;
  $days = 3; // 今日から３日以内
  $today = date_i18n('U');
  $entry_day = get_the_time('U');
  $keika = date('U',($today - $entry_day)) / 86400;
  if ( $days > $keika ):
      $limit = 3; //3件まで
      $num = $wp_query->current_post;
      if ( $limit > $num ):
          echo '<span class="badge-new">NEW</span>';
      endif;
  endif;
}