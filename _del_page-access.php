<?php get_header(); ?>
<div class="p-sub-access">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-access__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-access__map p-map fadeUpTrigger">
      <h3 class="p-map__title">アクセスマップ</h3>
      <div class="p-map__iframe">
      <?php the_content(); ?>  
      </div>
    </div>
    <div class="p-sub-access__box fadeUpTrigger">

      <?php
        $accesslist = SCF::get('access'); 
        foreach ($accesslist as $access ) {
      ?>
        <dl class="p-sub-access__item">
          <dt class="p-sub-access__title"><?php echo $access['access-icon']; ?> <?php echo $access['access-title']; ?></dt>
          <dd class="p-sub-access__text"><?php echo $access['access-text']; ?></dd>
        </dl>
      <? } ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>