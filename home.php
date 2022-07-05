<?php get_header(); ?>
<section class="p-sub-topics">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title">お知らせ</h2>
    </div>
  </div>
  <div class="p-sub-topics__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <div class="p-sub-topics__list">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
          <a href="<?php the_permalink(); ?>" class="p-topics__item p-topic fadeUpTrigger">
            <time datetime="<?php the_time('c') ?>" class="p-topic__date"><?php the_time('Y.m.d') ?>
            </time>
            <p class="p-topic__text"><?php the_title(); ?></p>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="l-pager c-pager fadeUpTrigger">
    <?php 
      $paginationhtml = get_the_posts_pagination(
        array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text'     => __( 'PREV'), // 「前へ」リンクのテキスト
            'next_text'     => __( 'NEXT'), // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
        )
      );
      echo preg_replace('/\<h3 class=\"screen-reader-text\"\>(.*?)\<\/h3\>/ui', '', $paginationhtml); 
    ?>
  </div>

</section>
<?php get_footer(); ?>