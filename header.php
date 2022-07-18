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
<!-- TEST START -->
<script>
  (function(d) {
    var config = {
      kitId: 'rqn8hln',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!-- TEST END -->

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
    <!-- ローディング画面 -->
    <div id="loader">
  </div>

  <header class="p-header" id="loader-header">
  <!-- ローディング画面 -->
  <!-- <div id="loader">
  </div> -->
    <div class="p-header__inner">
      <!-- PCの場合使用 -->
      <div class="p-header__box l-inner u-hidden-sp">
        <div class="p-header__logo">
          <a href="<?php echo $home ?>">
            <picture>
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/logo-pc.png"
                      media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo-sp.png" alt="Cellest企業ロゴ" />
            </picture>
          </a>



        </div>
        <!-- PCのみ表示 -->
        <div class="p-header__nav p-gnav ">
          <nav class="p-gnav__menu">
            <ul class="p-gnav__items">
              <li class="p-gnav__item"><a <?php if( is_front_page() ): ?>class="current-page"<?php endif; ?> href="<?php echo $home ?>">Top</a></li>
              <li class="p-gnav__item"><a <?php if( is_page('about')): ?>class="current-page"<?php endif; ?> href="<?php echo $about ?>">About Us</a></li>
              <li class="p-gnav__item"><a <?php if( is_page('service')): ?>class="current-page"<?php endif; ?> href="<?php echo $service ?>">Service</a></li>
              <li class="p-gnav__item"><a <?php if( is_page('company')): ?>class="current-page"<?php endif; ?> href="<?php echo $company ?>">Company</a></li>
              <li class="p-gnav__item"><a <?php if( is_home() ) : ?>class="current-page"<?php endif; ?> href="<?php echo $topics ?>">Topics</a></li>
              <li class="p-gnav__item"><a href="<?php echo $career ?>">Career</a></li>
              <li class="p-gnav__item"><a <?php if( is_page('contact')): ?>class="current-page"<?php endif; ?> href="<?php echo $contact ?>">Contact</a></li>
            </ul>
          </nav>
        </div>

      </div>
        <!-- スマホの場合使用 -->
      <div class="p-header__sp  l-inner u-hidden-pc">
        <div class="p-header__logo">
          <a href="<?php echo $home ?>">
            <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
              alt="Cellest企業ロゴ">
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
                alt="Cellest企業ロゴ">
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
  <?php if(is_page('contact')): ?>
    <div id="loader-bg" class="p-background--contact">
    <!-- <div id="loader-bg" class="p-background"> -->
  <?php else: ?>
    <div id="loader-bg" class="p-background">
  <?php endif; ?>
    <section class="p-mv">
      <div class="p-mv__inner l-inner">
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
                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 28 -10" result="filter" />
                <feComposite in="SourceGraphic" in2="filter" operator="atop" />
              </filter>
            </defs>
          </svg>
        </div>

        <div class="p-mv__img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/mv-logo-pc.png"
                    media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv-logo-sp.png" alt="Cellest企業ロゴ" />
          </picture>
        </div>
        <div class="c-scroll u-hidden-sp"><span>scroll</span></div>
      
