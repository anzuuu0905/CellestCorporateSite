<?php get_header(); ?>


<div class="p-mv__titlebox">
  <h1 class="p-mv__sub-title">
  CONTACT
  </h1> 
  <p class="p-mv__jp-title">
  お問い合わせ
  </p>
</div>
</section>

<!-- policy -->
<section class="l-sub-contact p-sub-contact">
  <div class="p-sub-contact__wrapper">
    <h2 class="p-sub-contact__title c-common-title">
    CONTACT
    </h2>
    <div class="p-sub-contact__inner l-inner">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>