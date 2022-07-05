<?php get_header(); ?>
<section class="p-sub-treatment">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-treatment__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-treatment__list">
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger" id="p-treatment__content1">
        <div class="p-treatment__inner" id="treatment1">
          <h3 class="p-treatment__title" >一般歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment1.jpg" alt="一般治療の画像"  loading="lazy">
            </figure>
            <div class="p-treatment__body">
              <h4 class="p-treatment__title">できる限り削らない・抜かない治療</h4>
              <p class="p-treatment__text">できる限り削らない・抜かない治療に取り組み、ご自分の歯を残すことを重要視しています。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger"  id="p-treatment__content2">
        <div class="p-treatment__inner" id="treatment2">
          <h3 class="p-treatment__title">小児歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment2.jpg" alt="小児歯科の画像"  loading="lazy">
            </figure>
            <div class="p-treatment__body">
              <h4 class="p-treatment__title">行きたいと思える歯医者を目指します</h4>
              <p class="p-treatment__text">歯医者さん＝「怖いから行きたくない」というイメージをつけず、歯医者さん＝「楽しいから行きたい」を感じてもうことが、大人になっても自然とお口の健康について意識することに繋がりきます。<br>
                                          そのため、お子様の気持ちを大切にし、お子様に寄り添った治療を心がけております。<br>
                                        そして、また来たくなるようなイベント、施策を行っています。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger"  id="p-treatment__content3">
        <div class="p-treatment__inner" id="treatment3">
          <span class="p-treatment__positon"></span>
          <h3 class="p-treatment__title">予防歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment3.jpg" alt="予防歯科の画像"  loading="lazy">
            </figure>
            <div class="p-treatment__body">
              <h4 class="p-treatment__title">虫歯や歯周病から大切な歯を守る</h4>
              <p class="p-treatment__text">予防歯科は虫歯や歯周病から大切な歯を守るために行います。<br>
                                          いつまでも自分の歯で健康に過ごせるように予防を大切にしています。<br>
                                          痛くなってからの治療ではなく、歯を守るために正しい歯の磨き方やケアの仕方、メインテナンスをさせていただきます。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger"  id="p-treatment__content4">
        <div class="p-treatment__inner">
          <h3 class="p-treatment__title">矯正歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment4.jpg" alt="矯正歯科の画像"  loading="lazy">
            </figure>
            <div id="works4" class="p-treatment__body">
              <h4 class="p-treatment__title">きれいな歯並びでお口から健康を目指します</h4>
              <p class="p-treatment__text">よい食事によりよい体が作られます。よい食事をするにはよい歯並びが必要であると考えます。<br>
                                            きれいな歯並びで心も体も健康になっていただくために全力でサポートいたします。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer(); ?>