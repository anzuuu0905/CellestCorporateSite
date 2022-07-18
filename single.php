<?php get_header(); ?>
<div class="p-mv__titlebox">
  <h1 class="p-mv__sub-title">
    TOPICS
  </h1> 
  <p class="p-mv__jp-title">
  トピックス
  </p>
</div>

</section>

<section class="l-signle-topics p-single-topics">
  <div class="l-inner">
    <div class="p-single-topics__inner">
      <div class="p-single-topics__wrapper">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post();?>
            <div>
              <h2 class="p-single-topics__title">
                <?php the_title(); ?>
              </h2>
              <div class="p-single-topic__textbox">
                <time datetime="<?php the_time('c'); ?>" class="p-single-topic__date"><?php the_time('Y.m.d'); ?>
                </time>
                <ul class="p-single-topic__categories">
                  <?php 
                      $categories = get_the_category();
                      foreach( $categories as $category ){
                        echo '<li class="p-single-topic__category">' .$category->name . '</li>';
                      }
                  ?>
                </ul>
              </div>
              <div class="p-single-topic__content-wrapper">
                <div class="p-single-topic__img">
                  <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="p-single-topic__content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="p-single-topic__pager">
        <div class="p-single-topic__wrapper">
          <div class="prev-single">
            <?php previous_post_link('%link', '&emsp;'); ?>
          </div>
          <div class="next-single">
            <?php next_post_link('%link', '&emsp;'); ?>
          </div>
        </div>
        <div class="p-single-topic__btn c-btn">
          <a href="<?php echo $topics ?>">ブログ一覧へ戻る</a>
        </div>
      </div>
      <div class="p-single-topics__sns">
        <div class="p-single-topics__inner">
          <div class="p-sns">
            <div class="p-sns__container">
              <p class="p-sns__text">Share</p>
              <div class="p-sns__iconwrapper">
                <a class="p-sns__facebook p-sns__icon" href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/awesome-facebook.png" alt="facebook icon">
                </a>
                <a class="p-sns__twitter p-sns__icon" href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>" target="_blank" rel="nofollow noopener">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/awesome-twitter-square.png" alt="twitter icon">
                </a>
                <a class="p-sns__line p-sns__icon" href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/awesome-line.png" alt="line icon">
                </a>
                <a class="p-sns__mail p-sns__icon" href="mailto:sample@co.jp?subject=<?php the_title(); ?>&amp;body=<?php the_title();  echo get_the_permalink(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/material-email.png" alt="line icon">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 関連記事 -->
  <?php if(has_category() ) {
      $catlist =get_the_category();
      $category = array();
      foreach($catlist as $cat){
          $category[] = $cat->term_id;
      }}
  ?>
  <?php $args = array(
      'post_type' => 'post',
      'posts_per_page' => '3', //表示させたい記事数
      'post__not_in' =>array( $post->ID ), //現在の記事は含めない
      'category__in' => $category, //先ほど取得したカテゴリー内の記事
      'orderby' => 'rand' //ランダムで取得
  );
  $related_query = new WP_Query( $args );?>
  <aside class="p-single-topics__related p-related">
    <div class="l-inner">
      <div class="p-single-topics__inner">
        <h3 class="p-related__title">Other Topics</h3>
        <ul class="p-related__post">
            <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
            <li class="p_related__card">
                <a href="<?php the_permalink(); ?>" class="c-card">
                    <!-- アイキャッチ表示 -->
                    <!-- <div class="p-related__thumb"> -->
                    <div class="c-card__img">
                      <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <!-- タイトル表示 -->
                    <div class="c-card__body">
                      <h4 class="c-card__title"><?php the_title(); ?></h4>
                    </div>
                    <div class="c-card__textbox">
                      <div class="c-card__categorybox">
                        <time datetime="<?php the_time('c'); ?>" class="c-card__date"><?php the_time('Y.m.d'); ?>
                        </time>
                        <ul class="c-card__categories">
                          <?php 
                              $categories = get_the_category();
                              foreach( $categories as $category ){
                                echo '<li class="c-card__category">' .$category->name . '</li>';
                              }
                          ?>
                        </ul>
                      </div>
                      <!-- ボタン -->
                      <div class="p-related__btn c-btn-circle">
                        <div class="c-btn-circle__item"></div>
                      </div>

                    </div>
                </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); //最後に記事のリセット?>
        </ul>
      </div>
    </div>
  </aside>
</section>

<?php get_footer(); ?>