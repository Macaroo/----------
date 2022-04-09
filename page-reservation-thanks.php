<?php get_header(); ?>

<div class="section-top section-top-contact">
  <div class="section-top-text">
    <div class="section-top-title">WEB予約</div>
    <div class="section-top-en">RESERVE</div>
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
    <div class="contact-text">WEBよりご予約いただき誠にありがとうございます。<br>送信いただいた内容を確認して1営業日以内に返信いたします。</div>
    <div class="contact-text-important"> ※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</div>
  </div>

</div>

<?php get_footer(); ?>