<?php get_header(); ?>

<div class="section-top section-top-about">
  <div class="section-top-text">
    <div class="section-top-title">当院について</div>
    <div class="section-top-en">ABOUT OUR CLINIC</div>
  </div>
</div>
<div class="section-bread -about">
  <?php
  if (function_exists('bcn_display')) {
    bcn_display();
  }
  ?>
</div>

<div class="about-content1" id="about-1">
  <div class="about-content1-title">
    <div class="util-title">ポリシーと特徴</div>
  </div>
  <div class="about-top">
    <div class="about-bg"></div>
    <div class="about-concept">
      <div class="about-concept-body">
        <div class="about-concept-headline">POLICY</div>
        <div class="about-concept-title">コミュニケーションから始まる最適な医療提供</div>
        <div class="about-concept-text">当院ではまず患者様から詳しくお話を伺います。<br>難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。<br><br>「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。。</div>
      </div>
      <div class="about-concept-img"><img src="<?php echo get_template_directory_uri() ?>/img/feature_1@2x.jpg" alt="concept"></div>
    </div>
  </div>
  <div class="about-content2">
    <div class="about-concept-body">
      <div class="about-concept-headline">FEATURE</div>
      <div class="about-concept-title">「医療技術の追求」と<br>「通いやすさ」</div>
      <div class="about-concept-text">歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。 また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br><br>朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</div>
    </div>
    <div class="about-concept-img about-concept2-img"><img src="<?php echo get_template_directory_uri() ?>/img/feature_2@2x.jpg" alt="concept"></div>
  </div>

  <div class="about-content3" id="about-2">
    <div class="util-title">院内の様子</div>
    <div class="outlook-items">
      <div class="outlook-item">
        <img src="<?php echo get_template_directory_uri() ?>/img/about_0@2x.jpg" alt="">
      </div>
      <div class="outlook-item">
        <img src="<?php echo get_template_directory_uri() ?>/img/about_-1@2x.jpg" alt="">
      </div>
      <div class="outlook-item">
        <img src="<?php echo get_template_directory_uri() ?>/img/about_-2@2x.jpg" alt="">
      </div>
      <div class="outlook-item">
        <img src="<?php echo get_template_directory_uri() ?>/img/about_-3@2x.jpg" alt="">
      </div>
      <div class="outlook-item">
        <img src="<?php echo get_template_directory_uri() ?>/img/about_-4@2x.jpg" alt="">
      </div>
      <div class="outlook-item">
        <img src="<?php echo get_template_directory_uri() ?>/img/about_-5@2x.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<!-- /.about -->


<?php get_footer(); ?>
