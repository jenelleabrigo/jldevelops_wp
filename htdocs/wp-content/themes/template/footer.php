<footer>
  <div class="l-footer">
    <div class="l-footer__scroll">
      <a href="#top" class="l-footer__scroll__anchor">TOP</a>
    </div>
    <div class="u-layout">
      <p class="l-footer__logo"><a href="<?php echo home_url('/') ?>" class="l-footer__logo__anchor"> <img src="<?php echo get_template_directory_uri(); ?>/data/img/common/logo.svg" alt="jldevelops-logo"> </a></p>
      <div class="l-footer__icon-container">
        <a href="tel:09302983017" class="l-footer__icon-container__icon"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/tel.png" alt="phone"></a>
        <a href="<?php echo home_url('/contact/')?>" class="l-footer__icon-container__icon"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/mail.svg" alt="mail"></a>
        <a href="https://web.facebook.com/jenelleloise/" target="_blank" class="l-footer__icon-container__icon"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/fb.svg" alt="fb"></a>
        <a href="https://github.com/jenelleabrigo" target="_blank" class="l-footer__icon-container__icon"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/github.svg" alt="github"></a>
        <a href="https://www.linkedin.com/in/jenelleloiseabrigo/" target="_blank" class="l-footer__icon-container__icon"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/linkedin.svg" alt="linkedin"></a>
      </div>
    </div>
    <p class="l-footer__copyright">© 2022 JLdevelops</p>
  </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')
</script>
<script src="<?php echo get_template_directory_uri(); ?>/data/js/index.js"></script>
<?php wp_footer(); ?>

</body>
</html>
