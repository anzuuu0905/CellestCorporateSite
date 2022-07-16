<?php
    $home = esc_url(home_url('/'));
    $about = esc_url(home_url('/about/'));
    $service = esc_url(home_url('/service/'));
    $company = esc_url(home_url('/company/'));
    $topics = esc_url(home_url('/topics/'));
    $career = esc_url(home_url('/career/'));
    $contact = esc_url(home_url('/contact/'));    
    $policy = esc_url(home_url('/policy/'));    
  ?>


<!-- Contact -->
<section class="l-contact p-contact">
<a href="<?php echo $contact ?>" >
  <div class="p-contact__wrapper">
    <div class="p-contact__textwrapper">
      <h2 class="p-contact__title">
        Contact
      </h2>
      <div class="p-contact__subtitle">
        <h3 class="">
          お問い合わせやご相談など、<br class="u-hidden-pc">
          是非お気軽にご連絡ください。
        </h3>
      </div>
      <div class="p-contact__text">
        <p class="">
          弊社のサービス内容に関してなど、お気軽にご連絡<br class="u-hidden-pc">
          ください。まずはお話だけという方もお待ちしています。
        </p>
      </div>
    </div>
    <!-- ボタン -->
    <div class="p-contact__btn c-btn-circle">
      <!-- <a href="<?php //echo $contact ?>" class="c-btn-circle__item"></a> -->
    <div class="c-btn-circle__item"></div>
    </div>
  </div>
  </a>
</section>
</div>
<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__box ">
        <div class="p-footer__logo">
          <div class="p-footer__logobox">
            <a href="<?php echo $home ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo-white.png" alt="" loading="lazy">
            </a>
            <small>&copy; Cellest,Inc.All rights reserved.</small>
          </div>
        </div>

        <?php 
          global $home;
          global $policy;
        ?>
        <div class="p-footer__linkbox">
          <div class="p-footer__nav p-fnav">
            <nav class="p-fnav__menu">
              <ul class="p-fnav__items">
                <li class="p-fnav__item"><a href="<?php echo $home ?>">Top</a></li>
                <li class="p-fnav__item"><a href="<?php echo $about ?>">About Us</a></li>
                <li class="p-fnav__item"><a href="<?php echo $service ?>">Service</a></li>
                <li class="p-fnav__item"><a href="<?php echo $company ?>">Company</a></li>
                <li class="p-fnav__item"><a href="<?php echo $topics ?>">Topics</a></li>
                <li class="p-fnav__item"><a href="<?php echo $career ?>">Career</a></li>
                <li class="p-fnav__item"><a href="<?php echo $contact ?>">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="p-footer__policy">
            <a href="<?php echo $policy ?>">Privacy Policy</a>
            
          </div>
        </div>
      </div>
    </div>
</footer>
<!-- <div class="cursor"></div> -->
<div class="follower"></div>
<?php wp_footer(); ?>
</body>
</html>