<?php
      //メニューIDを取得
      $menu_name = 'footer-menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <div class="info">
        <div class="info-top"></div>
        <div class="info-body">
          <div class="info-box">
            <div class="info-left">
              <div class="info-name"><img src="<?php echo get_template_directory_uri() ?>/img/svg/logo.svg" alt="logo"></div>
              <div class="info-address">〒166-0001<span>東京都杉並区阿佐谷北7-3-1</span></div>
              <span class="info-tel tel-num">03-1234-5678</span>
              <div class="tel-time">(年中無休 AM9:00〜PM22:00)</div>
              <div class="info-btn-wrapper">
                <a href="<?php echo esc_url($menu_items[6]->url); ?>" class="info-btn-reserve">WEB予約</a>
                <a href="<?php echo esc_url($menu_items[5]
                            ->url); ?>" class="info-btn-contact">お問い合わせ</a>
              </div>
              <div class="info-timesheet timesheet">
                <img src="<?php echo get_template_directory_uri() ?>/img/png/medicalTimeSheet@2x.png" alt="timesheet">
              </div>
            </div>
            <div class="footer-right">
              <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.8654290572053!2d139.63392904988905!3d35.70492903618394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1630565074330!5m2!1sja!2sjp" width="385" height="385" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.info -->
      <footer class="footer">
        <nav>
          <ul class="footer-nav">
            <li class="footer-nav-item">
              <a href="<?php echo esc_url($menu_items[0]->url); ?>" class="footer-nav-top">TOP</a>
            </li>
            <li class="footer-nav-item">
              <p class="footer-nav--top">当院について</p>
              <a href="<?php echo esc_url($menu_items[1]->url); ?>#about-1" class="footer-nav-link">ポリシーと特徴</a>
              <a href="<?php echo esc_url($menu_items[1]->url); ?>#about-2" class="footer-nav-link">当院の様子</a>
            </li>
            <li class="footer-nav-item">
              <p class="footer-nav-top">スタッフ紹介</p>
              <a href="<?php echo esc_url($menu_items[2]->url); ?>#staff-1" class="footer-nav-link">院長のあいさつ</a>
              <a href="<?php echo esc_url($menu_items[2]->url); ?>#staff-2" class="footer-nav-link">スタッフ</a>
              <a href="<?php echo esc_url($menu_items[3]->url); ?>" class="footer-nav-link">スタッフブログ</a>
            </li>
            <li class="footer-nav-item">
              <p class="footer-nav-top">診療内容</p>
              <p class="footer-nav-link-wrapper">
                <?php
                $args = array(
                  'post_type' => 'plan',// カスタム投稿タイプ plan
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php echo esc_url($menu_items[4]->url); ?>#<?php the_ID(); ?>" class="footer-nav-link"><?php the_title(); ?></a>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </p>
            </li>
            <li class="footer-nav-item">
              <p class="footer-nav-top">お問い合わせ</p>
              <a href="<?php echo esc_url($menu_items[5]->url); ?>" class="footer-nav-link">お問い合わせフォーム</a>
              <a href="<?php echo esc_url($menu_items[6]->url); ?>" class="footer-nav-link">WEB予約</a>
            </li>
          </ul>
        </nav>
        <div class="footer-bottom">
          <p class="footer-copyright">&copy;2020-2021 みなみ歯科クリニック</p>
        </div>

        <div class="footer-fixed">
          <div class="footer-tel">
            <div class="footer-tel-num">03-1234-5678</div>
            <div class="footer-tel-time">(年中無休 AM9:00〜PM22:00)</div>
          </div>
          <a href="<?php echo esc_url($menu_items[6]->url); ?>" class="footer-reserve">
            <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon-pc-footer.svg" alt="">
            <p>WEB予約<br><span>はこちら</span></p>
          </a>
        </div>
      </footer>
      <!-- /.footer -->
      <div class="to-top"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/svg/totop.svg" alt="to-top"></a></div>

      <div class="btn-fixed"><a href="<?php echo esc_url($menu_items[6]->url); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon-pc-bg.svg" alt="">
          <p>WEB予約<br>はこちら</p>
        </a></div>

      <?php wp_footer(); ?>
      </body>

      </html>
