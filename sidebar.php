<aside class="blog-sidebar">
  <div class="blog-sidebar-top">
    <div class="sidebar-title">クリニックの紹介</div>
    <div class="sidebar-top-img">
      <img src="<?php echo get_template_directory_uri() ?>/img/sidebar-img@2x.jpg" alt="clinic-img">
    </div>
    <div class="blog-sidebar-name">みなみ歯科クリニック</div>
    <div class="sidebar-top-text">
      お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
    </div>
    <?php
    //メニューIDを取得
    $menu_name = 'global-menu';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <a href="<?php echo esc_url($menu_items[1]->url); ?>" class="sidebar-top-more">当院について</a>
  </div>
  <div class="blog-sidebar-new">
    <div class="sidebar-title -new">新着記事</div>
    <?php
    $args = array(
      'post_type'      => 'blog',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $new_posts = get_posts($args);
    foreach ($new_posts as $post) : setup_postdata($post);
    ?>
      <a href="<?php the_permalink(); ?>" class="sidebar-blog-item">
        <div class="individual-blog-img -sidebar">
          <div class="img-box">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
        <div class="sidebar-blog-body">
          <p class="sidebar-blog-category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_genre')[0]->name); ?></p>
          <div class="sidebar-blog-title">
            <?php
            if (mb_strlen($post->post_title) > 18) {
              $title = mb_substr($post->post_title, 0, 18);
              echo $title . '...';
            } else {
              echo $post->post_title;
            }
            ?>
          </div>
          <div class="sidebar-blog-date"><?php the_time(get_option('date_format')); ?></div>
        </div>
      </a>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
  <div class="blog-sidebar-category-wrapper">
    <div class="sidebar-title -category">カテゴリー</div>
    <?php
    $genre_terms = get_terms('blog_genre', array('hide_empty' => false)); //blog_genreはタクソノミー名
    foreach ($genre_terms as $genre_term) :
    ?>
      <a href="<?php echo esc_url(get_term_link($genre_term, 'blog_genre')); ?>" class="blog-sidebar-category"><?php echo esc_html($genre_term->name); ?></a>
    <?php
    endforeach;
    ?>
  </div>
</aside>
