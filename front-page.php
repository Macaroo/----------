<?php get_header(); ?>

<div class="top">
  <!-- Slider main container -->
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="top-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/top-01@2x.jpg" alt="top-img01" class="top-mv is-pc">
          <img src="<?php echo get_template_directory_uri() ?>/img/sp/top-01-sp@2x.jpg" alt="top-img01" class="top-mv is-ph">
          <div class="top-title is-pc"><img src="<?php echo get_template_directory_uri() ?>/img/png/top-text@2x.png" alt="top-title"></div>
          <div class="top-title is-ph"><img src="<?php echo get_template_directory_uri() ?>/img/sp/top-text-sp@2x.png" alt="top-title"></div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="top-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/top-02@2x.jpg" alt="top-img02" class="top-mv is-pc">
          <img src="<?php echo get_template_directory_uri() ?>/img/sp/top-02-sp@2x.jpg" alt="top-img02" class="top-mv is-ph">
          <div class="top-title is-pc"><img src="<?php echo get_template_directory_uri() ?>/img/png/top-text@2x.png" alt="top-title"></div>
          <div class="top-title is-ph"><img src="<?php echo get_template_directory_uri() ?>/img/sp/top-text-sp@2x.png" alt="top-title"></div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="top-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/top-03@2x.jpg" alt="top-img03" class="top-mv is-pc">
          <img src="<?php echo get_template_directory_uri() ?>/img/sp/top-03-sp@2x.jpg" alt="top-img03" class="top-mv is-ph">
          <div class="top-title is-pc"><img src="<?php echo get_template_directory_uri() ?>/img/png/top-text@2x.png" alt="top-title"></div>
          <div class="top-title is-ph"><img src="<?php echo get_template_directory_uri() ?>/img/sp/top-text-sp@2x.png" alt="top-title"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

<div class="top-footer">
  <div class="top-timesheet timesheet">
    <img src="<?php echo get_template_directory_uri() ?>/img/png/medicalTimeSheet@2x.png" alt="timesheet">
  </div>
  <div class="top-news">
    <top class="top-news-head">
      <?php
      //メニューIDを取得
      $menu_name = 'global-menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <div class="top-news-title">お知らせ</div>
      <a href="<?php echo esc_url($menu_items[6]->url); ?>" class="top-news-more">過去のお知らせはこちら</a>
    </top>
    <?php if (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="news-item">
        <span class="top-news-date"><?php the_time(get_option('date_format')); ?></span>
        <span class="top-news-content"><?php the_title(); ?></span>
      </a>
    <?php endif; ?>
  </div>
</div>

<!-- /.top -->
<div class="about">
  <div class="about-top">
    <div class="about-bg"></div>
    <div class="about-concept">
      <div class="about-concept-body">
        <div class="about-concept-headline">CONCEPT</div>
        <div class="about-concept-title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</div>
        <div class="about-concept-text">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
        <?php
        //メニューIDを取得
        $menu_name = 'global-menu';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);

        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>
        <a href="<?php echo esc_url($menu_items[1]->url); ?>" class="util-link about-more">当院について</a>
      </div>
      <div class="about-concept-img"><img src="<?php echo get_template_directory_uri() ?>/img/concept-img1@2x.jpg" alt="concept"></div>
    </div>
  </div>
</div>
<div class="about-feature">
  <div class="about-feature-title util-title">当院の3つのおすすめ</div>
  <div class="about-feature-items">
    <div class="about-feature-item">
      <div class="feature-item-title"><img src="<?php echo get_template_directory_uri() ?>/img/png/recommend-1@2x.png" alt="feature01"></div>
      <div class="feature-item-concent"><img src="<?php echo get_template_directory_uri() ?>/img/png/recommend-img-01@2x.png" alt="feature01"></div>
      <p class="feature-item-text">歯の治療において、小さな違和感は大きなストレスにつながります。 私たちは常に快適な歯科医療技術の研究を行っております。</p>
    </div>
    <div class="about-feature-item">
      <div class="feature-item-title"><img src="<?php echo get_template_directory_uri() ?>/img/png/recommend-2@2x.png" alt="feature02"></div>
      <div class="feature-item-concent"><img src="<?php echo get_template_directory_uri() ?>/img/png/recommend-img-02@2x.png" alt="feature02"></div>
      <p class="feature-item-text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
    </div>
    <div class="about-feature-item">
      <div class="feature-item-title"><img src="<?php echo get_template_directory_uri() ?>/img/png/recommend-3@2x.png" alt="feature03"></div>
      <div class="feature-item-concent"><img src="<?php echo get_template_directory_uri() ?>/img/png/recommend-img-03@2x.png" alt="feature03"></div>
      <div class="feature-item-text">朝から夜までお仕事をされている方のために、診療時間を見直しました。
        <p>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</p>
      </div>
    </div>
  </div>
</div>
<!-- /.about -->
<div class="medical">
  <?php
  //メニューIDを取得
  $menu_name = 'global-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);

  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <div class="medical-top"><img src="<?php echo get_template_directory_uri() ?>/img/png/bg-top@2x.png" alt="background"></div>
  <div class="medical-body">
    <div class="medical-title util-title">診療案内</div>
    <div class="medical-items">
      <a href="<?php echo esc_url($menu_items[2]->url); ?>" class="medical-item">
        <div class="medical-item-text">
          <div class="medical-item-title">一般診療</div>
          <div class="medical-item-subtitle">虫歯・入れ歯・小児歯科</div>
        </div>
        <div class="medical-img-wrapper">
          <img src="<?php echo get_template_directory_uri() ?>/img/medical_-2@2x.jpg" alt="general">
        </div>
      </a>
      <a href="<?php echo esc_url($menu_items[2]->url); ?>" class="medical-item">
        <div class="medical-item-text">
          <div class="medical-item-title">特殊診療</div>
          <div class="medical-item-subtitle">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</div>
        </div>
        <div class="medical-img-wrapper">
          <img src="<?php echo get_template_directory_uri() ?>/img/medical_-1@2x.jpg" alt="general">
        </div>
      </a>
    </div>
    <div class="contact-footer-wrapper">
      <div class="medical-footer">
        当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。
        <p>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</p>
      </div>
    </div>
    <div class="medical-bottom-bg1"><img src="<?php echo get_template_directory_uri() ?>/img/png/medical-bg1.png" alt="star"></div>
    <div class="medical-bottom-bg2"><img src="<?php echo get_template_directory_uri() ?>/img/png/medical-bg2.png" alt="star"></div>
  </div>
  <div class="medical-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/png/bg-bottom@2x.png" alt="background"></div>
</div>
<!-- /.medical -->
<div class="blog">
  <div class="util-title blog-title">スタッフブログ</div>
  <div class="blog-items">
    <?php
    $args = array(
      'post_type'      => 'blog',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $new_posts = get_posts($args);
    foreach ($new_posts as $post) : setup_postdata($post);
    ?>
      <a href="<?php the_permalink(); ?>" class="blog-item">
      <?php keika_awase(); ?>
        <div class="blog-item-img">
          <div class="blog-img"><?php the_post_thumbnail(); ?></div>
        </div>
        <div class="top-blog-body">
          <p class="blog-category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_genre')[0]->name); ?></p>
          <div class="blog-title"><?php the_title(); ?></div>
          <div class="blog-date"><?php the_time(get_option('date_format')); ?></div>
        </div>
      </a>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
  <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="util-link blog-more">スタッフブログ一覧はこちら</a>
</div>
<!-- /.blog -->

<?php get_footer(); ?>
