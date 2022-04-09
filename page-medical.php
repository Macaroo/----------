<?php get_header(); ?>

<div class="section-top section-top-medical">
  <div class="section-top-text">
    <div class="section-top-title">診療案内</div>
    <div class="section-top-en">MEDICAL</div>
  </div>
</div>
<div class="section-bread">
  <?php
  if (function_exists('bcn_display')) {
    bcn_display();
  }
  ?>
</div>

<div class="medical-plan-wrapper">
  <div class="medical-plan">
    <div class="medical-plan-title">一般診療<span class="medical-type">保険対象</span></div>
    <div class="medical-plan-items">

<?php
// 条件の設定
$args = array(
    'post_type' => 'plan',                       // 投稿を指定
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'medical_genre',               // タクソノミーを指定
            'field' => 'slug',                   // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array( 'general-medical-care' ),   // ターム(文字列かIDを指定)
            'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
            'operator' => 'IN'                   //  ‘NOT IN’ で指定したタームを除外
        ),
    ),
);

// クエリの定義
$wp_query = new WP_Query( $args );

// ループ
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <a href="#<?php the_title(); ?>" class="medical-plan-item"><?php the_title(); ?></a>
      <?php endwhile;
      endif; ?>
    </div>
  </div>

<?php

// 投稿データのリセット
wp_reset_postdata();

?>

  <div class="medical-plan">
    <div class="medical-plan-title">特殊診療<span class="medical-type">実費</span></div>
    <div class="medical-plan-items">

    <?php
// 条件の設定
$args = array(
    'post_type' => 'plan',                       // 投稿を指定
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'medical_genre',               // タクソノミーを指定
            'field' => 'slug',                   // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array( 'special-medical-treatment' ),   // ターム(文字列かIDを指定)
            'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
            'operator' => 'IN'                   //  ‘NOT IN’ で指定したタームを除外
        ),
    ),
);

// クエリの定義
$wp_query = new WP_Query( $args );

// ループ
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <a href="#<?php the_title(); ?>" class="medical-plan-item"><?php the_title(); ?></a>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>

<?php

// 投稿データのリセット
wp_reset_postdata();

?>

<div class="plan-detail medical">
  <div class="medical-top"><img src="<?php echo get_template_directory_uri() ?>/img/png/bg-top@2x.png" alt="background"></div>
  <div class="medical-body">
    <div class="medical-title util-title">一般診療</div>
    <div class="medical-plan-cards">

    <?php
// 条件の設定
$args = array(
    'post_type' => 'plan',                       // 投稿を指定
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'medical_genre',               // タクソノミーを指定
            'field' => 'slug',                   // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array( 'general-medical-care' ),   // ターム(文字列かIDを指定)
            'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
            'operator' => 'IN'                   //  ‘NOT IN’ で指定したタームを除外
        ),
    ),
);

// クエリの定義
$wp_query = new WP_Query( $args );

// ループ
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <div class="medical-plan-card-wrapper" id="<?php the_ID(); ?>">
            <div class="medical-plan-card" id="<?php the_title(); ?>">
              <div class="medical-plan-card-top">
                <div class="medical-plan-headline"><?php the_title(); ?></div>
                <div class="medical-plan-subtitle"><?php the_field('concern'); ?></div>
                <div class="medical-plan-label"><img src="<?php echo get_template_directory_uri() ?>/img/png/tag-01@2x.png" alt=""></div>
              </div>
              <div class="medical-plan-contents">
                <div class="medical-plan-text"><?php echo nl2br(get_field('introduction')); ?></div>
                <div class="medical-plan-img"><?php the_post_thumbnail(); ?></div>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
    <div class="medical-bottom-bg1"><img src="<?php echo get_template_directory_uri() ?>/img/png/medical-bg1.png" alt="star"></div>
    <div class="medical-bottom-bg2"><img src="<?php echo get_template_directory_uri() ?>/img/png/medical-bg2.png" alt="star"></div>
  </div>
  <div class="medical-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/png/bg-bottom@2x.png" alt="background"></div>
</div>

<?php

// 投稿データのリセット
wp_reset_postdata();

?>

<div class="plan-detail medical">
  <div class="medical-top"><img src="<?php echo get_template_directory_uri() ?>/img/png/bg-top@2x.png" alt="background"></div>
  <div class="medical-body">
    <div class="medical-title util-title">特殊診療</div>
    <div class="medical-plan-cards">

    <?php
// 条件の設定
$args = array(
    'post_type' => 'plan',                       // 投稿を指定
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'medical_genre',               // タクソノミーを指定
            'field' => 'slug',                   // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array( 'special-medical-treatment' ),   // ターム(文字列かIDを指定)
            'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
            'operator' => 'IN'                   //  ‘NOT IN’ で指定したタームを除外
        ),
    ),
);

// クエリの定義
$wp_query = new WP_Query( $args );

// ループ
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <div class="medical-plan-card-wrapper" id="<?php the_ID(); ?>">
            <div class="medical-plan-card" id="<?php the_title(); ?>">
              <div class="medical-plan-card-top">
                <div class="medical-plan-headline"><?php the_title(); ?></div>
                <div class="medical-plan-subtitle"><?php the_field('concern'); ?></div>
                <div class="medical-plan-label"><img src="<?php echo get_template_directory_uri() ?>/img/png/tag-02@2x.png" alt=""></div>
              </div>
              <div class="medical-plan-contents">
                <div class="medical-plan-text"><?php echo nl2br(get_field('introduction')); ?></div>
                <div class="medical-plan-img"><?php the_post_thumbnail(); ?></div>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
    <div class="medical-bottom-bg1"><img src="<?php echo get_template_directory_uri() ?>/img/png/medical-bg1.png" alt="star"></div>
    <div class="medical-bottom-bg2"><img src="<?php echo get_template_directory_uri() ?>/img/png/medical-bg2.png" alt="star"></div>
  </div>
  <div class="medical-bottom"><img src="<?php echo get_template_directory_uri() ?>/img/png/bg-bottom@2x.png" alt="background"></div>
</div>

<?php

// 投稿データのリセット
wp_reset_postdata();

?>

<?php get_footer(); ?>
