<?php get_header(); ?>

    <div class="p-mv__titlebox">
      <h1 class="p-mv__top-title">
        CREATING<br>
        THE ENTERTAINMENT<br>
        OF NEXT GENERATION 
      </h1>
    </div>
  </div>
</section>

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
    <div class="p-top-about__wrapper">
      <div class="p-top-about__textwrapper">
        <h2 class="p-top-about__title c-common-title">
        ABOUT US
        </h2>
        <p class="p-top-about__subtitle c-common-subtitle">
        ライブコマースの先駆者が<br>
        圧倒的な経験と実績で<br>
        次世代のエンタメを創る<br>
        </p>
        <div class="p-top-about__text u-hidden-sp">
          <p class="c-common-text">
          ライブコマースは世界的に普及していますが、日本では最近ようやく注目され始めてきた程度で、まだまだ日常に溶け込んでいません。私たちは日本でライブコマースが始まった2017年にいち早くこの可能性に気づき、これまで継続してきました。
          </p>
        </div>
        <!-- ボタン -->
        <div class="p-top-about__btn c-btn u-hidden-sp">
          <a href="<?php echo $about ?>">VIEW MORE</a>
        </div>
      </div>

      <div class="p-top-about__img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/about-pc.png"
                  media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/about-sp.png" alt="" />
        </picture>
      </div>
      <div class="p-top-about__text u-hidden-pc">
        <p class="c-common-text">
        ライブコマースは世界的に普及していますが、日本では最近ようやく注目され始めてきた程度で、まだまだ日常に溶け込んでいません。私たちは日本でライブコマースが始まった2017年にいち早くこの可能性に気づき、これまで継続してきました。
        </p>
      </div>
      <!-- ボタン -->
      <div class="p-top-about__btn c-btn u-hidden-pc">
        <a href="<?php echo $about ?>">VIEW MORE</a>
      </div>
    </div>
  </div>
</section>

<!-- Service -->
<section class="l-top-service p-top-service">
  <div class="l-inner">
    <h2 class="p-top-service__title c-common-title">
    Service
    </h2>
    <div class="p-top-service__items">
      <div class="p-top-service__item">
        <a href="" class="p-top-service__img">
        <!-- <div class="p-top-service__img"> -->
          <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/service1-pc.png"
                    media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/service1-sp.png" alt="" />
          </picture>
          <div class="p-top-service__mask">
          <div class="p-top-service__caption">View Details</div>
        </div>
        </a>
        <!-- </div> -->
        <h3 class="p-top-service__subtitle">
        ライブコマース販売事業
        </h3>
      </div>
      <div class="p-top-service__item">
        <a href="" class="p-top-service__img">
        <!-- <div class="p-top-service__img"> -->
          <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/service2-pc.png"
                    media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/service2-sp.png" alt="" />
          </picture>
        <!-- </div> -->
        <div class="p-top-service__mask">
          <div class="p-top-service__caption">View Details</div>
        </div>
        </a>
        <h3 class="p-top-service__subtitle">
        ライブコマースエージェント事務所
        </h3>
      </div>
    </div>
    <!-- ボタン -->
    <div class="p-top-service__btn c-btn">
      <a href="<?php echo $about ?>">VIEW MORE</a>
    </div>
  </div>
</section>


<!-- TOPICS -->
<section class="l-top-topics p-top-topics">
  <div class="l-inner">
    <h2 class="p-top-topics__title c-common-title">
    Topics
    </h2>
    <div class="p-top-topics__items">
      <?php
        $topics_query = new WP_Query(
          array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
          )
        );
      ?>
    <?php if ( $topics_query->have_posts() ) : ?>
        <?php while ( $topics_query->have_posts() ) : ?>
          <?php $topics_query->the_post(); ?>
          <div>
            <a href="<?php the_permalink(); ?>" class= "p-top-topics__item p-top-topic">
              <div class="p-top-topic__img">
                <?php the_post_thumbnail('full'); ?>
              </div>
              <div class="p-top-topic__wrapper">
                <div class="p-top-topic__textbox">
                  <time datetime="<?php the_time('c'); ?>" class="p-top-topic__date"><?php the_time('Y.m.d'); ?>
                  </time>
                  <h3 class="p-top-topic__title"><?php the_title(); ?></h3>
                  <div class="p-top-topic__text"><?php the_content(); ?></div>
                </div>
                <!-- ボタン -->
                <div class="p-top-topic__btn c-btn-circle u-hidden-sp">
                  <div class="c-btn-circle__item"></div>
                <!-- <a href="<?php //the_permalink(); ?>"></a> -->
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <!-- ボタン -->
    <div class="p-top-topics__btn c-btn">
      <a href="<?php echo $topics ?>">VIEW MORE</a>
    </div>



  </div>
</section>

<?php get_footer(); ?>