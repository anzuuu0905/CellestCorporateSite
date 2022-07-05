<?php get_header(); ?>
<section class="l-sub-contact p-sub-contact">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-contact__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-contact__textBox">
      <p class="p-sub-contact__text">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</p>
    </div>


      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>

  </div>
</section>    

<?php get_footer(); ?>