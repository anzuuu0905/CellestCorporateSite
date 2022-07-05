<?php get_header(); ?>
<div class="p-sub-about">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-about__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-about__messagebox fadeUpTrigger">
      <p class="p-sub-about__message">一宮市の「Hiro歯科クリニック」は、一宮駅直結の歯医者です。</p>
      <p class="p-sub-about__message">当院では、患者さまと二人三脚で、その方に合った予防処置を行うことで、口から全身の健康を改善していただけるよう努めています。</p>
    </div>
    <section class="p-sub-about__features">
      <h3 class="p-sub-about__subtitle fadeUpTrigger">当院の５つの特徴</h3>
      <div class="p-sub-about__featurebox">
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature1.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">01</p>
              <h4 class="p-sub-feature__title">地域に根差した医療</h4>
            </div>
              <p class="p-sub-feature__text">地域の方が安心して生活できるよう、スタッフ一丸となり、手厚くサポートする、地域に密着した温かい歯科医院です。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature2.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">02</p>
              <h4 class="p-sub-feature__title">丁寧な説明による信頼関係の構築</h4>
            </div>
              <p class="p-sub-feature__text">治療を行う前に、お口の中の状態について、共有した上で、治療方針を決定します。また、丁寧にわかりやすく説明することで、疑問点を解消し、安心して治療を受けていただくことができます。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature3.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">03</p>
              <h4 class="p-sub-feature__title">二人三脚で進める予防診療</h4>
            </div>
              <p class="p-sub-feature__text">定期的に検診を行い、お口の中をよい状態で保つことが重要であると考えています。そのため、定期的に検診を行い、虫歯や歯周病の予防を行います。<br>また、毎日の歯磨きなどのお口の中の手入れが最も重要ですので、手入れの方法を改善し、長くよい状態を保てるようにします。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature4.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">04</p>
              <h4 class="p-sub-feature__title">安心・安全な診療環境</h4>
            </div>
              <p class="p-sub-feature__text">・口腔内で使用する歯科医療機器等について、患者様ごとの交換や専用の機器を用いた洗浄・滅菌処理を徹底します。<br>
                                            ・ドクター、スタッフの「グローブ」は、お一人ごとに使い捨て、徹底した清潔な環境で診療しています。<br>
                                            ・エプロン、コップはすべて患者さんごとに使い捨てにしています。
                                            ・歯磨き指導や小児のフッ素塗布などの際に使用する歯ブラシは、いつも新品を使用しており、使用後はお持ち帰り頂きます。<br>
                                            ・歯間ブラシやデンタルフロスなども同じく新品を使用します。
            </p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature5.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">05</p>
              <h4 class="p-sub-feature__title">常に成長するクリニック</h4>
            </div>
              <p class="p-sub-feature__text">学会や勉強会などで新しい治療法や医療器機情報を収集し、積極的に知識や技術を修得し、常に最良の治療を提供することを意識しています。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="p-sub-about__introduction fadeUpTrigger">
      <h3 class="p-sub-about__subtitle fadeUpTrigger">院内紹介</h3>
      <div class="p-sub-about__cards p-cardlist">  <!-- p-cardlistは、3つのカードの集合体を示す -->
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction1.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h4 class="c-card__title">駐車場</h4>
            <p class="c-card__text">10台まで停められる駐車場を完備していますので、お車でも安心してお越しいただけます。</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction2.jpg" alt="feature2" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h4 class="c-card__title">受付</h4>
            <p class="c-card__text">スタッフが笑顔でお迎えします。ご不明な点がありましたらお気軽にお声掛けください。</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction3.jpg" alt="feature3" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h4 class="c-card__title">待合室</h4>
            <p class="c-card__text">天井が高く開放感のある明るい待合室です。<br>
            各種雑誌をご用意しております。</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction4.jpg" alt="feature4" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h4 class="c-card__title">診察室</h4>
            <p class="c-card__text">リラックスいただくことを意識し、緑を感じることができます。診療室は半個室になっておりプライバシーに配慮しています。</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction5.jpg" alt="feature5" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h4 class="c-card__title">レントゲン</h4>
            <p class="c-card__text">当院では最新のデジタルレントゲンを使用しており、通常のフィルム型の1/5まで放射線量を軽減しております。<br>
                                    人が日常生活で浴びる自然放射線量1.5〜2.4ミリシーベルトに対し歯科のレントゲンは0.01〜0.03ミリシーベルトと大変微量です。<br>
                                    安心して受診してください。</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction6.jpg" alt="feature6" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h4 class="c-card__title">滅菌器</h4>
            <p class="c-card__text">高温・高圧の蒸気を行き渡らせ、あらゆる種類の細菌、ウイルスを死滅させます。</p>
          </div>
        </div>
      </div>
    </section>
  </div>

</div>
<?php get_footer(); ?>