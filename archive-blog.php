<?php get_header(); ?>

<div class="section-top section-top-blog">
  <div class="section-top-text">
    <div class="section-top-title">スタッフブログ</div>
    <div class="section-top-en">STAFF BLOG</div>
  </div>
</div>
<div class="section-bread">
  <?php
  if (function_exists('bcn_display')) {
    bcn_display();
  }
  ?>
</div>

<div class="individual-blog-body">
  <article class="individual-blog-items">
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="individual-blog-item">
        <?php keika_awase(); ?>
          <div class="individual-blog-img">
            <div class="img-box">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="blog-body">
            <p class="blog-category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_genre')[0]->name); ?></p>
            <div class="blog-title"><?php the_title(); ?></div>
            <div class="blog-date"><?php the_time(get_option('date_format')); ?></div>
          </div>
        </a>
    <?php endwhile;
    endif; ?>
    <div class="blog-pagenation">
      <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示
      ?>
        <!-- pagenation -->
        <div class="pagenation">
          <?php
          echo
          paginate_links(
            array(
              'end_size' => 0,
              'mid_size' => 1,
              'prev_next' => true,
              'prev_text' => '前へ',
              'next_text' => '次へ',
            )
          );
          ?>
        </div><!-- /pagenation -->
      <?php endif; ?>
    </div>
  </article>
  <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
