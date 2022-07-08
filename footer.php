<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__wrapper">
      <div class="p-footer__logo">

      </div>
      <div class="p-footer__nav">

      </div>
    </div>

    <div class="p-footer__box ">
        <div class="p-footer__logo">
          <div class="p-footer__logobox">
            <a href="<?php echo $home ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo-white.png" alt="" loading="lazy">
            </a>
            <small>&copy; Cellest,Inc.All rights reserved.</small>
          </div>
        </div>
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
            <a href="<?php echo $policy ?>">Pryvacy Policy</a>
          </div>
        </div>
      </div>
    </div>
</footer>
<?php wp_footer(); ?>

<div id="stalker"></div>
<div id="cursor"></div>
</body>
</html>