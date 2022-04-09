<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>みなみ歯科クリニック</title>
  <meta name="description" content="街の皆さまの笑顔を守るアットホームな歯医者さん">

  <?php wp_head(); ?>
</head>

<body>
  <?php
  //メニューIDを取得
  $menu_name = 'global-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);

  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <header class="header">
    <div class="header-inner">
      <div class="header-body">
        <h1 class="header-left"><a href="<?php echo esc_url($menu_items[0]->url); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/svg/logo.svg" class="logo-normal" alt="logo"><img src="<?php echo get_template_directory_uri() ?>/img/svg/logo-drawer.svg" class="logo-drawer" alt=""></a></h1>
        <div class="header-right">
          <nav>
            <ul class="header-nav">
              <li class="header-nav-item"><a <?php if (is_front_page() && is_home()) echo ' class="-active'; ?> href="<?php echo esc_url($menu_items[0]->url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                      <style>
                        .a,
                        .b {
                          fill: #393939;
                        }

                        .a {
                          opacity: 0;
                        }
                      </style>
                    </defs>
                    <rect class="a" width="24" height="24" />
                    <path class="b" d="M20.42,10.18,12.71,2.3a1,1,0,0,0-1.42,0L3.58,10.19A2,2,0,0,0,3,11.62V20a2,2,0,0,0,1.89,2H19.11A2,2,0,0,0,21,20V11.62a2.07,2.07,0,0,0-.58-1.44ZM10,20V14h4v6Zm9,0H16V13a1,1,0,0,0-1-1H9a1,1,0,0,0-1,1v7H5V11.58l7-7.15,7,7.19Z" />
                  </svg><span>ホーム</span></a></li>
              <li class="header-nav-item"><a <?php if (is_page('about')) echo ' class="-active"'; ?> href="<?php echo esc_url($menu_items[1]->url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                      <style>
                        .a,
                        .b {
                          fill: #393939;
                        }

                        .a {
                          opacity: 0;
                        }
                      </style>
                    </defs>
                    <rect class="a" width="24" height="24" />
                    <path class="b" d="M5.368,10.232V8.555a.5.5,0,0,1,.5-.5H7.548a.5.5,0,0,1,.5.5v1.677a.5.5,0,0,1-.5.5H5.871A.5.5,0,0,1,5.368,10.232Zm5.871.5h1.677a.5.5,0,0,0,.5-.5V8.555a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,10.735ZM8.051,14.258V12.58a.5.5,0,0,0-.5-.5H5.871a.5.5,0,0,0-.5.5v1.677a.5.5,0,0,0,.5.5H7.548A.5.5,0,0,0,8.051,14.258Zm3.187.5h1.677a.5.5,0,0,0,.5-.5V12.58a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,14.761Zm7.548,5.2v1.51H0v-1.51a.5.5,0,0,1,.5-.5h.818V3.566a.95.95,0,0,1,1.006-.882H6.039V1.006A1.006,1.006,0,0,1,7.045,0h4.7a1.006,1.006,0,0,1,1.006,1.006V2.684h3.711a.95.95,0,0,1,1.006.882V19.458h.818A.5.5,0,0,1,18.787,19.961ZM3.334,19.416H8.051v-2.81a.5.5,0,0,1,.5-.5h1.677a.5.5,0,0,1,.5.5v2.81h4.718V4.7h-2.7V5.7A1.006,1.006,0,0,1,11.742,6.71h-4.7A1.006,1.006,0,0,1,6.039,5.7V4.7h-2.7ZM11.155,2.684h-1.09V1.594a.252.252,0,0,0-.252-.252H8.974a.252.252,0,0,0-.252.252v1.09H7.632a.252.252,0,0,0-.252.252v.839a.252.252,0,0,0,.252.252h1.09v1.09a.252.252,0,0,0,.252.252h.839a.252.252,0,0,0,.252-.252V4.026h1.09a.252.252,0,0,0,.252-.252V2.935A.252.252,0,0,0,11.155,2.684Z" transform="translate(3 1)" />
                  </svg>
                  <span>当院について</span></a>
              </li>
              <li class="header-nav-item">
                <a <?php if (!is_front_page() && get_post_type() === 'medical') echo ' class="-active"'; ?> href="<?php echo esc_url($menu_items[2]->url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                      <style>
                        .a,
                        .b {
                          fill: #393939;
                        }

                        .a {
                          opacity: 0;
                        }
                      </style>
                    </defs>
                    <rect class="a" width="24" height="24" />
                    <path class="b" d="M15,16H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                    <path class="b" d="M9,14h3a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Z" />
                    <path class="b" d="M19.74,8.33l-5.44-6A1,1,0,0,0,13.56,2h-7A2.53,2.53,0,0,0,4,4.5v15A2.53,2.53,0,0,0,6.56,22H17.44A2.53,2.53,0,0,0,20,19.5V9a1,1,0,0,0-.26-.67ZM14,5l2.74,3h-2A.79.79,0,0,1,14,7.15Zm3.44,15H6.56A.53.53,0,0,1,6,19.5V4.5A.53.53,0,0,1,6.56,4H12V7.15A2.79,2.79,0,0,0,14.71,10H18v9.5a.53.53,0,0,1-.56.5Z" />
                  </svg>
                  <span>診療案内</span></a>
              </li>
              <li class="header-nav-item">
                <a <?php if (!is_front_page() && get_post_type() === 'staff') echo ' class="-active"'; ?> href="<?php echo esc_url($menu_items[3]->url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                      <style>
                        .a,
                        .b {
                          fill: #393939;
                        }

                        .a {
                          opacity: 0;
                        }
                      </style>
                    </defs>
                    <rect class="a" width="24" height="24" />
                    <path class="b" d="M9,11A4,4,0,1,0,5,7a4,4,0,0,0,4,4ZM9,5A2,2,0,1,1,7,7,2,2,0,0,1,9,5Z" />
                    <path class="b" d="M17,13a3,3,0,1,0-3-3A3,3,0,0,0,17,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,17,9Z" />
                    <path class="b" d="M17,14a5,5,0,0,0-3.06,1.05A7,7,0,0,0,2,20a1,1,0,1,0,2,0,5,5,0,0,1,10,0,1,1,0,0,0,2,0,6.9,6.9,0,0,0-.86-3.35A3,3,0,0,1,20,19a1,1,0,1,0,2,0A5,5,0,0,0,17,14Z" />
                  </svg>
                  <span>スタッフ紹介</span></a>
              </li>
              <li class="header-nav-item">
                <a <?php if (!is_front_page() && get_post_type() === 'blog') echo ' class="-active"'; ?> href="<?php echo esc_url($menu_items[4]->url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                      <style>
                        .a,
                        .b {
                          fill: #393939;
                        }

                        .a {
                          opacity: 0;
                        }
                      </style>
                    </defs>
                    <rect class="a" width="24" height="24" />
                    <path class="b" d="M19.4,7.34,16.66,4.6A2,2,0,0,0,14,4.53l-9,9a2,2,0,0,0-.57,1.21L4,18.91A1,1,0,0,0,5,20h.09l4.17-.38a2,2,0,0,0,1.21-.57l9-9a1.92,1.92,0,0,0-.07-2.71ZM9.08,17.62l-3,.28.27-3L12,9.32l2.7,2.7ZM16,10.68,13.32,8l1.95-2L18,8.73Z" />
                  </svg>
                  <span>スタッフブログ</span></a>
              </li>
              <li class="header-nav-item">
                <a <?php if (is_page('contact')) echo ' class="-active"'; ?> href="<?php echo esc_url($menu_items[5]->url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                      <style>
                        .a,
                        .b {
                          fill: #393939;
                        }

                        .a {
                          opacity: 0;
                        }
                      </style>
                    </defs>
                    <rect class="a" width="24" height="24" />
                    <path class="b" d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,1.2,0L20,7.25V17A1,1,0,0,1,19,18Z" />
                  </svg>
                  <span>お問い合わせ</span></a>
              </li>
            </ul>
          </nav>
          <div class="header-info">
            <p class="header-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
            <p class="header-tel tel-num">03-1234-5678</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /.header -->

  <div class="drawer-icon">
    <div class="drawer-icon-body">
      <div class="drawer-icon-bars">
        <div class="drawer-icon-bar1"></div>
        <div class="drawer-icon-bar2"></div>
        <div class="drawer-icon-bar3"></div>
      </div>
    </div>
  </div>
  <div class="drawer-content">
    <nav class="drawer-nav-wrapper">
      <ul class="drawer-nav">
        <li class="drawer-nav-item"><a href="<?php echo esc_url($menu_items[0]->url); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <defs>
                <style>
                  .a,
                  .b {
                    fill: #393939;
                  }

                  .a {
                    opacity: 0;
                  }
                </style>
              </defs>
              <rect class="a" width="24" height="24" />
              <path class="b" d="M20.42,10.18,12.71,2.3a1,1,0,0,0-1.42,0L3.58,10.19A2,2,0,0,0,3,11.62V20a2,2,0,0,0,1.89,2H19.11A2,2,0,0,0,21,20V11.62a2.07,2.07,0,0,0-.58-1.44ZM10,20V14h4v6Zm9,0H16V13a1,1,0,0,0-1-1H9a1,1,0,0,0-1,1v7H5V11.58l7-7.15,7,7.19Z" />
            </svg><span>ホーム</span></a></li>
        <li class="drawer-nav-item"><a href="<?php echo esc_url($menu_items[1]->url); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <defs>
                <style>
                  .a,
                  .b {
                    fill: #393939;
                  }

                  .a {
                    opacity: 0;
                  }
                </style>
              </defs>
              <rect class="a" width="24" height="24" />
              <path class="b" d="M5.368,10.232V8.555a.5.5,0,0,1,.5-.5H7.548a.5.5,0,0,1,.5.5v1.677a.5.5,0,0,1-.5.5H5.871A.5.5,0,0,1,5.368,10.232Zm5.871.5h1.677a.5.5,0,0,0,.5-.5V8.555a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,10.735ZM8.051,14.258V12.58a.5.5,0,0,0-.5-.5H5.871a.5.5,0,0,0-.5.5v1.677a.5.5,0,0,0,.5.5H7.548A.5.5,0,0,0,8.051,14.258Zm3.187.5h1.677a.5.5,0,0,0,.5-.5V12.58a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,14.761Zm7.548,5.2v1.51H0v-1.51a.5.5,0,0,1,.5-.5h.818V3.566a.95.95,0,0,1,1.006-.882H6.039V1.006A1.006,1.006,0,0,1,7.045,0h4.7a1.006,1.006,0,0,1,1.006,1.006V2.684h3.711a.95.95,0,0,1,1.006.882V19.458h.818A.5.5,0,0,1,18.787,19.961ZM3.334,19.416H8.051v-2.81a.5.5,0,0,1,.5-.5h1.677a.5.5,0,0,1,.5.5v2.81h4.718V4.7h-2.7V5.7A1.006,1.006,0,0,1,11.742,6.71h-4.7A1.006,1.006,0,0,1,6.039,5.7V4.7h-2.7ZM11.155,2.684h-1.09V1.594a.252.252,0,0,0-.252-.252H8.974a.252.252,0,0,0-.252.252v1.09H7.632a.252.252,0,0,0-.252.252v.839a.252.252,0,0,0,.252.252h1.09v1.09a.252.252,0,0,0,.252.252h.839a.252.252,0,0,0,.252-.252V4.026h1.09a.252.252,0,0,0,.252-.252V2.935A.252.252,0,0,0,11.155,2.684Z" transform="translate(3 1)" />
            </svg>
            <span>当院について</span></a>
        </li>
        <li class="drawer-nav-item">
          <a href="<?php echo esc_url($menu_items[2]->url); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <defs>
                <style>
                  .a,
                  .b {
                    fill: #393939;
                  }

                  .a {
                    opacity: 0;
                  }
                </style>
              </defs>
              <rect class="a" width="24" height="24" />
              <path class="b" d="M15,16H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
              <path class="b" d="M9,14h3a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Z" />
              <path class="b" d="M19.74,8.33l-5.44-6A1,1,0,0,0,13.56,2h-7A2.53,2.53,0,0,0,4,4.5v15A2.53,2.53,0,0,0,6.56,22H17.44A2.53,2.53,0,0,0,20,19.5V9a1,1,0,0,0-.26-.67ZM14,5l2.74,3h-2A.79.79,0,0,1,14,7.15Zm3.44,15H6.56A.53.53,0,0,1,6,19.5V4.5A.53.53,0,0,1,6.56,4H12V7.15A2.79,2.79,0,0,0,14.71,10H18v9.5a.53.53,0,0,1-.56.5Z" />
            </svg>
            <span>診療案内</span></a>
        </li>
        <li class="drawer-nav-item">
          <a href="<?php echo esc_url($menu_items[3]->url); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <defs>
                <style>
                  .a,
                  .b {
                    fill: #393939;
                  }

                  .a {
                    opacity: 0;
                  }
                </style>
              </defs>
              <rect class="a" width="24" height="24" />
              <path class="b" d="M9,11A4,4,0,1,0,5,7a4,4,0,0,0,4,4ZM9,5A2,2,0,1,1,7,7,2,2,0,0,1,9,5Z" />
              <path class="b" d="M17,13a3,3,0,1,0-3-3A3,3,0,0,0,17,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,17,9Z" />
              <path class="b" d="M17,14a5,5,0,0,0-3.06,1.05A7,7,0,0,0,2,20a1,1,0,1,0,2,0,5,5,0,0,1,10,0,1,1,0,0,0,2,0,6.9,6.9,0,0,0-.86-3.35A3,3,0,0,1,20,19a1,1,0,1,0,2,0A5,5,0,0,0,17,14Z" />
            </svg>
            <span>スタッフ紹介</span></a>
        </li>
        <li class="drawer-nav-item">
          <a href="<?php echo esc_url($menu_items[4]->url); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <defs>
                <style>
                  .a,
                  .b {
                    fill: #393939;
                  }

                  .a {
                    opacity: 0;
                  }
                </style>
              </defs>
              <rect class="a" width="24" height="24" />
              <path class="b" d="M19.4,7.34,16.66,4.6A2,2,0,0,0,14,4.53l-9,9a2,2,0,0,0-.57,1.21L4,18.91A1,1,0,0,0,5,20h.09l4.17-.38a2,2,0,0,0,1.21-.57l9-9a1.92,1.92,0,0,0-.07-2.71ZM9.08,17.62l-3,.28.27-3L12,9.32l2.7,2.7ZM16,10.68,13.32,8l1.95-2L18,8.73Z" />
            </svg>
            <span>スタッフブログ</span></a>
        </li>
        <li class="drawer-nav-item">
          <a href="<?php echo esc_url($menu_items[5]->url); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <defs>
                <style>
                  .a,
                  .b {
                    fill: #393939;
                  }

                  .a {
                    opacity: 0;
                  }
                </style>
              </defs>
              <rect class="a" width="24" height="24" />
              <path class="b" d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,1.2,0L20,7.25V17A1,1,0,0,1,19,18Z" />
            </svg>
            <span>お問い合わせ</span></a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="drawer-background"></div>
  <!-- drawer -->
