<?php get_header(); ?>
<section class="p-sub-product-archive">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title">商品</h2>
    </div>
  </div>
  <div class="p-info__inner l-inner">

  <!-- <div class="p-sub-product-archive__inner l-inner"> -->
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="tool-products set-color">
      <div class="sort-product">
        <form method="get">
          <label class="wrap-select">
            <select name="sort" class="select-field" onchange="submit(this.form)">
              <?php echo get_sort_options(7); ?>
            </select>
          </label>
        </form>
      </div>
    </div>

    <div class="p-info__cards p-cardlist">  
      <!-- カード -->
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>

          <a href="<?php the_permalink(); ?>" class="c-card p-cardlist__item fadeUpTrigger">
            <figure class="c-card__img">
              <?php if( get_field('product_image') ): ?>
                <img src="<?php the_field('product_image'); ?>" />
              <?php endif; ?>
            </figure>
            <div class="c-card__body">
              <h3 class="c-card__title"><?php the_title(); ?></h3>
              <p class="c-card__price">
                <?php if( get_field('product_price') ): ?>
                  <?php echo number_format(get_field('product_price')); ?> 円
                <?php endif; ?>
              </p>
            </div>
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