<?php get_header(); ?>

<div class="section-top section-top-blog">
  <div class="section-top-text">
    <div class="section-top-title">お知らせ</div>
    <div class="section-top-en">NEWS</div>
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
    <div class="individual-blog-title">
      <?php the_title(); ?>
    </div>
    <div class="individual-blog-sub">
      <span class="individual-blog-date">
        <?php the_time(get_option('date_format')); ?>
      </span>
      <span class="individual-blog-category">
        <?php
        $category = get_the_category();
        echo $category[0]->cat_name;
        ?></span>
    </div>
    <div class="individual-blog-content">
      <?php the_content(); ?>
    </div>
    <div class="blog-pagenation">
      <?php if ($previous_post = get_previous_post()) : ?>
        <a class="blog-links-left" href="<?php echo esc_url(get_the_permalink($previous_post->ID)); ?>">前の記事</a>
      <?php endif; ?>
      <a href="<?php echo esc_url(get_category_link(7)); ?>" class="blog-links-top">記事一覧</a>
      <?php if ($next_post = get_next_post()) : ?>
        <a class="blog-links-right" href="<?php echo esc_url(get_the_permalink($next_post->ID)); ?>">次の記事</a>
      <?php endif; ?>
    </div>
  </article>

  <?php get_template_part('includes/sidebar'); ?>
</div>

<?php get_footer(); ?>
