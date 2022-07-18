<?php get_header(); ?>
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

<section class="l-sub-topics p-com-topics p-sub-topics">
  <div class="l-inner">
    <div class="p-sub-topics__category">
      <!-- 後日カテゴリ追加する -->
    </div>
    <div class="p-sub-topics__items">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
          <div>
            <a href="<?php the_permalink(); ?>" class= "p-com-topics__item p-com-topic">
              <div class="p-com-topic__img">
                <?php the_post_thumbnail('full'); ?>
              </div>
              <div class="p-com-topic__wrapper">
                <div class="p-com-topic__textbox">
                  <time datetime="<?php the_time('c'); ?>" class="p-com-topic__date"><?php the_time('Y.m.d'); ?>
                  </time>
                  <h3 class="p-com-topic__title"><?php the_title(); ?></h3>
                  <ul class="p-com-topic__categories">
                    <?php 
                        $categories = get_the_category();
                        foreach( $categories as $category ){
                          echo '<li class="p-com-topic__category">' .$category->name . '</li>';
                        }
                    ?>
                  </ul>
                </div>
                <!-- ボタン -->
                <div class="p-com-topic__btn c-btn-circle u-hidden-sp">
                  <div class="c-btn-circle__item"></div>
                <!-- <a href="<?php //the_permalink(); ?>"></a> -->
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="l-pager">
      <?php 
        $paginationhtml = get_the_posts_pagination(
          array(
              // 'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
              'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
              'prev_text'     => __( ''), // 「前へ」リンクのテキスト
              'next_text'     => __( ''), // 「次へ」リンクのテキスト
              'type'          => 'list', // 戻り値の指定 (plain/list)
          )
        );
        echo preg_replace('/\<h3 class=\"screen-reader-text\"\>(.*?)\<\/h3\>/ui', '', $paginationhtml); 
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>