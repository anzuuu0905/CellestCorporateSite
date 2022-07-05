<?php get_header(); ?>
<!-- 
  <div class="p-top-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/mv.png"
              media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv.png" alt="" />
    </picture>
  </div> -->

<div class="p-mv">
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
  <h1 class="p-mv__title">
  CREATING<br>
  THE ENTERTAINMENT<br>
  OF NEXT GENERATION 
  </h1>
</div>

<!-- ライブコマース -->
<section class="l-top-live p-top-live">
  <div class="l-inner">
    <h2 class="p-top-live__title">
    日本のライブコマース<br>
    インフラ化を目指して
    </h2>
    <div class="p-top-live__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/live-commerce-pc.png"
                media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/live-commerce-sp.png" alt="" />
      </picture>
    </div>
    <div class="p-top-live__text">
      <p class="c-common-text">
      ライブコマースはショッピングを通じたエンターテイメントで、日常から解放されるほどの没入感を味わいながら、お得な買い物ができるという楽しさがあります。お客様から「ライブ配信を見るようになって毎日が楽しくなった、日々の活力になっている」というお声を多数頂き、こういった体験をもっと量産すべく、ライブコマースのインフラ化を実現したいと考えました。
      </p>
    </div>
  </div>
</section>

<!-- About us -->
<section class="l-top-about p-top-about">
  <div class="l-inner">
    <h2 class="p-top-about__title c-common-title">
    ABOUT US
    </h2>
    <p class="p-top-about__subtitle c-common-subtitle">
    ライブコマースの先駆者が<br>
    圧倒的な経験と実績で<br>
    次世代のエンタメを創る<br>
    </p>

    <div class="p-top-about__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/about-pc.png"
                media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/about-sp.png" alt="" />
      </picture>
    </div>
    <div class="p-top-about__text">
      <p class="c-common-text">
      ライブコマースは世界的に普及していますが、日本では最近ようやく注目され始めてきた程度で、まだまだ日常に溶け込んでいません。私たちは日本でライブコマースが始まった2017年にいち早くこの可能性に気づき、これまで継続してきました。
      </p>
    </div>
    <!-- ボタン -->
    <div class="p-top-about__btn c-btn">
      <a href="<?php echo $about ?>">VIEW MORE</a>
    </div>
  </div>
</section>

<!-- About us -->
<section class="l-top-about p-top-about">
  <div class="l-inner">
    <h2 class="p-top-about__title c-common-title">
    ABOUT US
    </h2>
    <p class="p-top-about__subtitle c-common-subtitle">
    ライブコマースの先駆者が<br>
    圧倒的な経験と実績で<br>
    次世代のエンタメを創る<br>
    </p>

    <div class="p-top-about__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/about-pc.png"
                media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/about-sp.png" alt="" />
      </picture>
    </div>
    <div class="p-top-about__text">
      <p class="c-common-text">
      ライブコマースは世界的に普及していますが、日本では最近ようやく注目され始めてきた程度で、まだまだ日常に溶け込んでいません。私たちは日本でライブコマースが始まった2017年にいち早くこの可能性に気づき、これまで継続してきました。
      </p>
    </div>
    <!-- ボタン -->
    <div class="p-top-about__btn c-btn">
      <a href="<?php echo $about ?>">VIEW MORE</a>
    </div>
  </div>
</section>


<!-- Service -->
<section class="l-top-service p-top-service">
  <div class="l-inner">
    <h2 class="p-top-service__title c-common-title">
    Service
    </h2>
    <div class="p-top-service__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/service1-pc.png"
                media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/service1-sp.png" alt="" />
      </picture>
    </div>
    <div class="p-top-service__text">
      <p class="c-common-text">
      ライブコマースは世界的に普及していますが、日本では最近ようやく注目され始めてきた程度で、まだまだ日常に溶け込んでいません。私たちは日本でライブコマースが始まった2017年にいち早くこの可能性に気づき、これまで継続してきました。
      </p>
    </div>
    <!-- ボタン -->
    <div class="p-top-service__btn c-btn">
      <a href="<?php echo $service ?>">VIEW MORE</a>
    </div>
  </div>
</section>
<div class="">
  <h2 class="c-common-title common-title white">About us</h2>
  <p class="c-common-subtitle">
  ライブコマースの先駆者が<br>
  圧倒的な経験と実績で<br>
  次世代のエンタメを創る<br>
  </p>
</div>


<?php get_footer(); ?>