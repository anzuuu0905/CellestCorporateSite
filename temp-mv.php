
      <?php if(is_page('contact')) : ?>
    <div id="loader-bg" class="p-background--contact">
      <?php elseif(is_page('company')) : ?>
    <div id="loader-bg" class="p-background--company">
    <?php elseif(is_single('')) : ?>
    <div>
      <?php else: ?>
    <div id="loader-bg" class="p-background">
      <?php endif; ?>
        <?php elseif(!is_single('')) : ?>
      <section class="p-mv">
        <div class="p-mv__inner l-inner">
          <div class="ball__box">
            <div class="ball__wrapper">
              <div class="ball"></div>
              <div class="ball"></div>
              <div class="ball"></div>
            </div>
            <div class="ball__wrapper">
              <div class="ball2 ball__circle"></div>
              <div class="ball2"></div>
              <div class="ball2 ball__circle"></div>
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
      
        <div class="p-mv__titlebox">
          <h1 class="p-mv__sub-title">
            TOPICS
          </h1> 
          <p class="p-mv__jp-title">
          トピックス
          </p>
        </div>
      </div>
    </section>