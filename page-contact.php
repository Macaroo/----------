<?php get_header(); ?>

<div class="section-top section-top-contact">
  <div class="section-top-text">
    <div class="section-top-title">お問い合わせ</div>
    <div class="section-top-en">CONTACT</div>
  </div>
</div>

<div class="section-bread">
  <?php
  if (function_exists('bcn_display')) {
    bcn_display();
  }
  ?>
</div>

<div class="contact">
  <div class="contact-top">
    <div class="contact-text">お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。</div>
    <div class="contact-text-important"> ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</div>
  </div>

  <div class="contact-form">
    <div class="contact-form-top">
      <div class="util-title contact-title">お問い合わせ<br class="is-ph">フォーム</div>
    </div>

    <?php the_content(); ?>
  </div>
</div>


<?php get_footer(); ?>
