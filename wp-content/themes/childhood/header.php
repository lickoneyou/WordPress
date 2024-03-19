<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php
  bloginfo('name');
  echo ' | ';
  bloginfo('description');
  ?></title>
  <meta name="theme-color" content="#c9e0e04d">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= bloginfo(
      'template_url'
  ) ?>/assets/img/favicons/apple-touch-icon-180x180.png">
  <?php wp_head(); ?>
</head>

<body class="no-svg">
  <header>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-11 col-sm-12 col-md-12 col-lg-3">
          <a href="<?= get_home_url() ?>" class="header__logo">
            <!-- <?php the_custom_logo(); ?> -->
            <img class='header__logo-img' src="<?php
            // получаем ссылку на логотип
            $custom_logo__url = wp_get_attachment_image_src(
                get_theme_mod('custom_logo'),
                'full'
            );
            // выводим
            echo $custom_logo__url[0];
            ?>" alt="мир детства">
            <!-- <img src="<?= bloginfo(
                'template_url'
            ) ?>/assets/img/icons/svg/logo.svg" alt="Мир детства" class="header__logo-img">
            <div class="header__logo-text">Мир детства</div> -->
          </a>
        </div>
        <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">
          <div class="header__contacts">
            <div class="header__contacts-item">
              <img src="<?php the_field(
                  'contacts_email_icon'
              ); ?>" alt="почта" class="header__contacts-logo">
              <a href="mailto:<?php the_field(
                  'contacts_mail'
              ); ?>" class="header__contacts-mail"><?php the_field(
    'contacts_mail'
); ?></a>
            </div>
            <div class="header__contacts-item">
              <img src="<?php the_field(
                  'contacts_phone_icon'
              ); ?>" alt="телефон" class="header__contacts-logo">
              <div class="header__contacts-tel">
                <a href="tel:<?php the_field(
                    'contacts_phone_1'
                ); ?>"><?php the_field('contacts_phone_1'); ?></a>
                <a href="<?php the_field(
                    'contacts_phone_2'
                ); ?>"><?php the_field('contacts_phone_2'); ?></a>
              </div>
            </div>
            <div class="header__contacts-item">
              <img src="<?php the_field(
                  'contacts_address_icon'
              ); ?>" alt="указатель" class="header__contacts-logo">
              <address><?php the_field('contacts_address'); ?></address>
            </div>
          </div>
        </div>
      </div>
      <nav class="row" data-slide="1">


<?php wp_nav_menu([
    'menu' => 'Main',
    'container' => false,
    'menu_class' => 'header__nav',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'items_wrap' => '<ul class="header__nav">%3$s</ul>',
    'depth' => 1,
]); ?>
      </nav>
    </div>
    <div class="header__hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>