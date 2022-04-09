<?php get_header(); ?>

<div class="section-top section-top-staff">
  <div class="section-top-text">
    <div class="section-top-title">スタッフ紹介</div>
    <div class="section-top-en">STAFF</div>
  </div>
</div>
<div class="section-bread -staff">
  <?php
  if (function_exists('bcn_display')) {
    bcn_display();
  }
  ?>
</div>

<div class="doctor-speech" id="staff-1">
  <div class="doctor-speech-top">
    <div class="medical-title util-title">院長のあいさつ</div>
  </div>
  <div class="doctor-speech-body">
    <div class="doctor-speech-left">
      <div class="doctor-speech-headline">
        気軽に相談できる<br>街の歯医者さんでありたい。
      </div>
      <div class="doctor-speech-text">
        当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br><br>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
      </div>
      <div class="doctor-speech-bottom">みなみ歯科クリニック<br>院長　南 俊雄</div>
      <div class="doctor-img-ph is-ph">
        <img src="<?php echo get_template_directory_uri() ?>/img/staff1@2x.jpg" alt="doctor">
      </div>
      <div class="doctor-about">
        <div class="doctor-career">
          <div class="doctor-career-top">経歴</div>
          <p class="doctor-career-item">
            <span class="doctor-career-date">2004年</span>
            <span class="doctor-career-content">東京医科歯科大学歯学部 卒業</span>
          </p>
          <p class="doctor-career-item">
            <span class="doctor-career-date">2008年</span>
            <span class="doctor-career-content">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</span>
          </p>
          <p class="doctor-career-item">
            <span class="doctor-career-date">2012年</span>
            <span class="doctor-career-content">みなみ歯科クリニック 開院</span>
          </p>
        </div>
        <div class="doctor-licence">
          <div class="doctor-licence-top">資格</div>
          <p class="doctor-licence-item">歯科医師臨床研修指導歯科医</p>
          <p class="doctor-licence-item">博士(歯学)</p>
          <p class="doctor-licence-item">衛生検査技師</p>
        </div>
      </div>
    </div>
    <div class="doctor-speech-right is-pc">
      <img src="<?php echo get_template_directory_uri() ?>/img/staff1@2x.jpg" alt="doctor">
    </div>
  </div>
</div>

<div class="staff-swiper">
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper" id="swiperWrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="staff-swiper-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/staff-slider1.jpg" alt="staff-slider">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="staff-swiper-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/staff-slider2.jpg" alt="staff-slider">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="staff-swiper-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/staff-slider3.jpg" alt="staff-slider">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="staff-swiper-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/staff-slider4.jpg" alt="staff-slider">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="staff-swiper-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/staff-slider5.jpg" alt="staff-slider">
        </div>
      </div>

    </div>
  </div>
</div>

<div class="staff-list-wrappper" id="staff-2">
  <div class="staff-list-headline">
    <div class="util-title">スタッフ紹介</div>
  </div>
  <div class="staff-list">
    <div class="staff-list-title">歯科衛生士</div>
    <div class="staff-list-items">

<?php
// 条件の設定
$args = array(
    'post_type' => 'staffs',                       // 投稿を指定
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'staff_genre',               // タクソノミーを指定
            'field' => 'slug',                   // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array( 'dental-hygienist' ),   // ターム(文字列かIDを指定)
            'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
            'operator' => 'IN'                   //  ‘NOT IN’ で指定したタームを除外
        ),
    ),
);

// クエリの定義
$wp_query = new WP_Query( $args );

// ループ
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <div class="staff-list-item">
              <?php the_post_thumbnail(); ?>
              <div class="staff-top">
                <div class="staff-job"><?php echo esc_html($genre_term->name); ?></div>
                <div class="staff-name"><?php the_title(); ?></div>
              </div>
              <dl class="staff-info">
                <dt>出身地</dt>
                <dd><?php the_field('from'); ?></dd>
                <dt>趣味</dt>
                <dd><?php the_field('hobby'); ?></dd>
                <dt>好きな食べ物</dt>
                <dd><?php the_field('food'); ?></dd>
              </dl>
            </div>
        <?php endwhile;
      endif; ?>
    </div>
  </div>

<?php

// 投稿データのリセット
wp_reset_postdata();

?>

<div class="staff-list">
    <div class="staff-list-title">歯科助手</div>
    <div class="staff-list-items">

<?php
// 条件の設定
$args = array(
    'post_type' => 'staffs',                       // 投稿を指定
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'staff_genre',               // タクソノミーを指定
            'field' => 'slug',                   // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array( 'dental-assistant' ),   // ターム(文字列かIDを指定)
            'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
            'operator' => 'IN'                   //  ‘NOT IN’ で指定したタームを除外
        ),
    ),
);

// クエリの定義
$wp_query = new WP_Query( $args );

// ループ
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <div class="staff-list-item">
              <?php the_post_thumbnail(); ?>
              <div class="staff-top">
                <div class="staff-job"><?php echo esc_html($genre_term->name); ?></div>
                <div class="staff-name"><?php the_title(); ?></div>
              </div>
              <dl class="staff-info">
                <dt>出身地</dt>
                <dd><?php the_field('from'); ?></dd>
                <dt>趣味</dt>
                <dd><?php the_field('hobby'); ?></dd>
                <dt>好きな食べ物</dt>
                <dd><?php the_field('food'); ?></dd>
              </dl>
            </div>
        <?php endwhile;
      endif; ?>
    </div>
  </div>

<?php

// 投稿データのリセット
wp_reset_postdata();

?>

</div>

  <?php get_footer(); ?>