<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- 自動リンクを無効にする -->
  <meta name="format-detection" content="telephone=no">
  <!-- fontawesomを使用する -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://use.typekit.net/bgn4fum.css"> -->
  <link rel="stylesheet" href="https://use.typekit.net/pql8zrv.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php
    $home = esc_url(home_url('/'));
    $about = esc_url(home_url('/about/'));
    $service = esc_url(home_url('/service/'));
    $company = esc_url(home_url('/company/'));
    $topics = esc_url(home_url('/topics/'));
    $career = esc_url(home_url('/career/'));
    $contact = esc_url(home_url('/contact/'));    
    $policy = esc_url(home_url('/policy/'));    
  ?>
  <header class="p-header">
    <div class="p-header__inner">
      <!-- PCの場合使用 -->
      <div class="p-header__box l-inner u-hidden-sp">
        <div class="p-header__logo">
          <a href="<?php echo $home ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png" alt="" loading="lazy">
          </a>
        </div>
        <!-- PCのみ表示 -->
        <div class="p-header__nav p-gnav ">
          <nav class="p-gnav__menu">
            <ul class="p-gnav__items">
              <li class="p-gnav__item"><a href="<?php echo $home ?>">Top</a></li>
              <li class="p-gnav__item"><a href="<?php echo $about ?>">About Us</a></li>
              <li class="p-gnav__item"><a href="<?php echo $service ?>">Service</a></li>
              <li class="p-gnav__item"><a href="<?php echo $company ?>">Company</a></li>
              <li class="p-gnav__item"><a href="<?php echo $topics ?>">Topics</a></li>
              <li class="p-gnav__item"><a href="<?php echo $career ?>">Career</a></li>
              <li class="p-gnav__item"><a href="<?php echo $contact ?>">Contact</a></li>
            </ul>
          </nav>
        </div>

      </div>
        <!-- スマホの場合使用 -->
      <div class="p-header__sp  l-inner u-hidden-pc">
        <div class="p-header__logo">
          <a href="<?php echo $home ?>">
            <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
              alt="" loading="lazy">
          </a>
        </div>
        <div class="p-header__spbox">
          <!-- スマホのみ表示 -->
          <div class="p-header__menubox">
            <div class="p-header__drawer c-hamburger js-hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-header__menu p-drawer-menu js-drawer-menu  l-inner">
        <div class="p-drawer-menu__box">
          <div class="p-header__logo">
            <a href="<?php echo $home ?>">
              <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo-white.png"
                alt="" loading="lazy">
            </a>
          </div>
          <nav class="p-drawer-menu__menu">
            <ul class="p-drawer-menu__items">
            <li class="p-drawer-menu__item"><a href="<?php echo $home ?>">Top</a></li>
              <li class="p-drawer-menu__item"><a href="<?php echo $about ?>">About Us</a></li>
              <li class="p-drawer-menu__item"><a href="<?php echo $service ?>">Service</a></li>
              <li class="p-drawer-menu__item"><a href="<?php echo $company ?>">Company</a></li>
              <li class="p-drawer-menu__item"><a href="<?php echo $topics ?>">Topics</a></li>
              <li class="p-drawer-menu__item"><a href="<?php echo $career ?>">Career</a></li>
              <li class="p-drawer-menu__item"><a href="<?php echo $contact ?>">Contact</a></li>
            </ul>
          </nav>
          <div class="p-drawer-menu__policy">
            <a href="<?php echo $policy ?>">Pryvacy Policy</a>
          </div>
          <small class="p-drawer-menu__copylight">&copy; Cellest,Inc.All rights reserved.</small>

        </div>
      </div>
      <!-- <div class="p-header__overlay js-overlay"></div> -->
      <div class="p-header__overlay js-overlay"></div>
      
    </div>
  </header>
  <div class="p-background">
    <section class="p-mv">
      <div class="ball__box">
        <div class="ball__wrapper">
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
        </div>
        <div class="ball__wrapper">
          <div class="ball2"></div>
          <div class="ball2"></div>
          <div class="ball2"></div>
          <div class="ball2"></div>
        </div>
        <svg>
          <defs>
            <filter id="filter">
              <feGaussianBlur in="SourceGraphic" stdDeviation="18" result="blur" />
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 28 -10" result="filter" />
              <feComposite in="SourceGraphic" in2="filter" operator="atop" />
            </filter>
          </defs>
        </svg>
      </div>

      <div class="p-mv__img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/mv-logo-pc.png"
                  media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv-logo-sp.png" alt="" />
        </picture>
      </div>

      <div class="c-scroll u-hidden-sp"><span>scroll</span></div>
