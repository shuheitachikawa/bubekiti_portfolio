<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bubekiti | TOP</title>
  <meta name="author" content="ShuheiTachikawa">
  <meta name="keywords" content="ウェブ制作,ウェブデザイン,制作会社,コーダー,wordpress,design,jquery,bubekiti,shuheitachikawa,html,css,coding">
  <meta name="description" content="ウェブ制作業務承ります。ホームページを作りたい、リニューアルしたい、という方は是非ご相談ください。HTML5、CSS、jQueryによるコーディング、WordPressやShopifyのカスタマイズに対応しております。">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/nav_logo.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
  <link href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" rel="stylesheet">


  <!--OGP設定-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name" content="Web制作 Bubekiti Web creating">
  <meta property="og:title" content="Web制作 Bubekiti Web creating">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://あとで追加！">
  <meta property="og:description" content="ウェブ制作業務承ります。ホームページを作りたい、リニューアルしたい、という方は是非ご相談ください。HTML5、CSS、jQueryによるコーディング、WordPressやShopifyのカスタマイズに対応しております。">
  <meta property="og:image" content="あとで追加！">
  <meta property="fb:app_id" content="591933487923354">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="@bubekiti" name="twitter:site">


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.wavify.js"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <nav class="global-nav  animated fadeIn">
      <ul class="global-nav__list">
        <li class="global-nav__item">
          <a href="/#top-t" id="top-view">TOP</a>
        </li>
        <li class="global-nav__item">
          <a href="/#service-t" id="service">SERVICE</a>
        </li>
        <li class="global-nav__item">
          <a href="/#about-t" id="about">ABOUT</a>
        </li>
        <li class="global-nav__item">
          <a href="/#price-t" id="price">PRICE</a>
        </li>
        <li class="global-nav__item">
          <a href="/#work-t" id="work">WORKS</a>
        </li>
        <li class="global-nav__item">
          <a href="/#contact-t" id="contact">CONTACT</a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="menu-trigger">
    <span></span>
    <span></span>
    <span></span>
  </div>