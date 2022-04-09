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



  <div class="reservation">
    <div class="reservation-top">
      <div class="reservation-top-title">お電話でのご予約/ご相談</div>
      <div class="reserve-tel">
        <div class="reserve-num tel-num">03-1234-5678</div>
        <div class="reserve-time">(年中無休 AM9:00〜PM22:00)</div>
      </div>
      <p class="reservation-top-text">
        お急ぎの方は電話での連絡がスムーズです。<br>混雑状況によっては当日受診をご利用いただけない場合がございます。<br>あらかじめご了承ください。
      </p>
      <div class="reservation-top-title">メールでのご予約/ご相談</div>
      <p class="reservation-top-text">【ご予約に関しての注意点】<br>メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
    </div>

    <div class="reservation-form">
      <div class="reservation-form-top">
        <div class="reservation-title util-title">予約フォーム</div>
      </div>
      <?php the_content(); ?>
    </div>
  </div>


<?php get_footer(); ?>
