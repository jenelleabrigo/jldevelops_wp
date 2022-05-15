<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/data/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/data/js/splide/splide.min.css">
    <title>jldevelops</title>
    <?php wp_head(); ?>
  </head>
  <body>

<header>
  <div class="l-header">
    <div class="l-header__inner">
        <?php if(is_front_page()): ?>
        <h1 class="l-header__logo"><a href="<?php echo home_url('/') ?>" class="l-header__logo__anchor"> <img src="<?php echo get_template_directory_uri(); ?>/data/img/common/logo.svg" alt="jldevelops-logo"> </a></h1>
        <?php else: ?>
        <p class="l-header__logo"><a href="<?php echo home_url('/') ?>" class="l-header__logo__anchor"> <img src="<?php echo get_template_directory_uri(); ?>/data/img/common/logo.svg" alt="jldevelops-logo"> </a></p>
        <?php endif; ?>

        <nav class="l-nav">
          <a href="tel:09302983017" class="l-nav__content__contact u-sp-only"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/tel.svg" alt="phone"></a>
          <a href="<?php echo home_url('/contact/')?>" class="l-nav__content__contact u-sp-only"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/mail.svg" alt="mail"></a>

            <p class="u-sp-only l-nav__trigger">
                <button class="l-nav__trigger__button">
                    <span class="l-nav__trigger__line"></span>
                    <span class="l-nav__trigger__line"></span>
                    <span class="l-nav__trigger__line"></span>
                </button>
            </p>

            <div class="">
                <ul class="l-nav__content u-pc-only">
                    <li class="l-nav__content__menu"><a href="<?php echo home_url('/#home')?>" class="l-nav__content__menu__anchor u-font-serif">Home</a></li>
                    <li class="l-nav__content__menu"><a href="<?php echo home_url('/#works')?>" class="l-nav__content__menu__anchor u-font-serif">Works</a></li>
                    <li class="l-nav__content__menu"><a href="<?php echo home_url('/#journey')?>" class="l-nav__content__menu__anchor u-font-serif">Journey</a></li>
                    <li class="l-nav__content__menu"><a href="<?php echo home_url('/about/')?>" class="l-nav__content__menu__anchor u-font-serif">About Me</a></li>
                </ul>
            </div>
            <a href="tel:09302983017" class="l-nav__content__contact u-pc-only"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/tel.svg" alt="phone"></a>
            <a href="<?php echo home_url('/contact/')?>" class="l-nav__content__contact u-pc-only"><img src="<?php echo get_template_directory_uri(); ?>/data/img/common/mail.svg" alt="mail"></a>
        </nav>
    </div>
  </div>
  <div class="">
      <ul class="l-nav__content u-sp-only">
          <li class="l-nav__content__menu"><a href="<?php echo home_url('/#home')?>" class="l-nav__content__menu__anchor u-font-serif">Home</a></li>
          <li class="l-nav__content__menu"><a href="<?php echo home_url('/#works')?>" class="l-nav__content__menu__anchor u-font-serif">Works</a></li>
          <li class="l-nav__content__menu"><a href="<?php echo home_url('/#journey')?>" class="l-nav__content__menu__anchor u-font-serif">Journey</a></li>
          <li class="l-nav__content__menu"><a href="<?php echo home_url('/about/') ?>" class="l-nav__content__menu__anchor u-font-serif">About Me</a></li>
      </ul>
  </div>
</header>
