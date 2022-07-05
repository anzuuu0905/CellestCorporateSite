<?php get_header(); ?>
<section class="p-sub-staff">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-staff__inner l-inner">
   <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-staff__list">
      <!-- Smart Custom Fieldで情報取得する -->
      <?php
        $members = SCF::get('member');  //member:SCFでの繰り返しグループ名として設定した名前、members:配列名
        foreach ($members as $member ) {  //$members配列を1件ずつ$memberに格納
      ?>
      <div class="p-sub-staff__item p-staff">
        <div class="p-staff__inner">
          <div class="p-staff__wrapper">
            <div class="p-staff__box fadeUpTrigger">
              <figure class="p-staff__img">
                <!-- 画像ファイルは特殊 -->
                <!-- [0] 画像のurl
                     [1] 画像の幅(width)
                     [2] 画像の高さ(height) -->
                <img src="<?php echo wp_get_attachment_image_src($member['picture'] , 'full')[0]; ?>"  alt="<?php echo $member['name']; ?>"  loading="lazy">
              </figure>
              <!-- 配列に格納された1件の「name」を出力する -->
              <p class="p-staff__name"><?php echo $member['name']; ?></p> 
            </div>
            <div class="p-staff__messagebox fadeUpTrigger">
              <h3 class="p-staff__subtitle"><?php echo SCF::get('message-title'); ?></h3>
              <p class="p-staff__message"><?php echo $member['message']; ?></p>
            </div>
          </div>
          <div class="p-staff__infowrapper">
            <div class="p-staff__infobox fadeUpTrigger">
              <h3 class="p-staff__subtitle"><?php echo SCF::get('career-title'); ?></h3>
              <ul class="p-staff_infolist">
              <!-- 配列に格納されたcareer1～career6を出力する -->
              <!-- 1～6を変数$iでループさせ取得 -->
              <!-- strlenで文字列の長さが0以外の場合は、出力するよう対応 -->
              <?php 
              for ($i=1; $i<=6; $i++) {
                    if (strlen($member['career'.$i])>0) {
                ?>
                      <li class="p-staff__infoitem"><?php echo $member['career'.$i]; ?></li>
                <?php 
                    }
                  }
                ?>
              </ul>
            </div>
            <div class="p-staff__belongbox fadeUpTrigger">
              <h3 class="p-staff__subtitle"><?php echo SCF::get('belong-title'); ?></h3>
              <ul class="p-staff_infolist">
                <?php 
                  for ($i=1; $i<=6; $i++) {
                    if (strlen($member['belong'.$i])>0) {
                ?>
                      <li class="p-staff__infoitem"><?php echo $member['belong'.$i]; ?></li>
                <?php 
                    }
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <? } ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>