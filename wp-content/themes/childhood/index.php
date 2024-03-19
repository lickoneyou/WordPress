<?php get_header(); ?>
<div class="mainslider glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">

<?php
$posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'slider',
    'orderby' => 'date',
    'order' => 'ASC',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);

foreach ($posts as $post) {
    setup_postdata($post); ?>
                            <li style="background-image: url('<?php the_field(
                                'slider_img'
                            ); ?>')" class="glide__slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 offset-1">
                                            <h2 
                                             style="
                                             <?php
                                             $field = get_field(
                                                 'slider_color_title'
                                             );

                                             if ($field == 'white') { ?>
                                                        color: #fff
                                                    <?php }
                                             ?>
                                             "class="slider__title"><?php the_title(); ?></h2>

                                            <?php
                                            $field = get_field('slider_btn');

                                            if ($field == 'on') { ?>
                                                        <a href="<?php the_field(
                                                            'slider_link'
                                                        ); ?>" class="button">Узнать больше</a>
                                                    <?php }
                                            ?>

                                        </div>
                                    </div>
                                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                        <svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.982942 13.3923L12.2253 24.631C12.7186 25.123 13.5179 25.123 14.0124 24.631C14.5057 24.1389 14.5057 23.3397 14.0124 22.8476L3.66178 12.5007L14.0112 2.15378C14.5045 1.66172 14.5045 0.862477 14.0112 0.369169C13.5179 -0.122894 12.7174 -0.122894 12.2241 0.369169L0.981696 11.6077C0.495966 12.0947 0.495966 12.9065 0.982942 13.3923Z" fill="white"/>
                                        </svg>
                                    </button>
                                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                        <svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0171 11.6077L2.77467 0.369029C2.28137 -0.123032 1.48213 -0.123032 0.987571 0.369029C0.494263 0.861093 0.494264 1.66033 0.987572 2.15239L11.3382 12.4993L0.98882 22.8462C0.495512 23.3383 0.495512 24.1375 0.98882 24.6308C1.48213 25.1229 2.28261 25.1229 2.77592 24.6308L14.0183 13.3923C14.504 12.9053 14.504 12.0935 14.0171 11.6077Z" fill="white"/>
                                        </svg>
                                    </button>
                                </div>
                            </li>
                            <?php
}

wp_reset_postdata();

// сброс
?>

    </ul>
  </div>
</div>

<div class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
        <div class="about__img">
          <img src="<?php the_field('about_img'); ?>" alt="про компанию">
        </div>
      </div>
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
        <h1 class="title underlined"><?php the_field('about_title'); ?></h1>
        <div class="about__text">
          <?php the_field('about_description'); ?>
        </div>
        <a href="#" class="button">Узнать больше</a>
      </div>
    </div>
  </div>
</div>
<div class="specialists" id="specialists">
  <div class="container">
    <div class="title"><?php the_field('our_team_title'); ?></div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <img class="specialists__img" src="<?php the_field(
            'our_team_img'
        ); ?>" alt="наша команда">
      </div>
    </div>
  </div>
</div>

<div class="toys" id="toys">
  <div class="container">
    <h2 class="subtitle">Мягкие игрушки</h2>
    <div class="toys__wrapper">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'soft_toys',
    'orderby' => 'date',
    'order' => 'ASC',
    'include' => [],
    'exclude' => [],
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);

global $post;

foreach ($my_posts as $post) {
    setup_postdata($post); ?>
<div class="toys__item" style="background-image: url(<?php if (
    has_post_thumbnail()
) {
    the_post_thumbnail_url();
} else {
    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
} ?>)">
        <div class="toys__item-info">
          <div class="toys__item-title"><?php the_title(); ?></div>
          <div class="toys__item-descr">
            <?php the_field('toy_description'); ?>
          </div>
          <div class="minibutton toys__trigger">Подробнее</div>
        </div>
      </div>

<?php
}

wp_reset_postdata();
?>

    </div>


    <h2 class="subtitle">Развивающие игрушки</h2>
    <div class="toys__wrapper">

      <?php
      // параметры по умолчанию
      $my_posts = get_posts([
          'numberposts' => -1,
          'category_name' => 'edu_toys',
          'orderby' => 'date',
          'order' => 'ASC',
          'include' => [],
          'exclude' => [],
          'meta_key' => '',
          'meta_value' => '',
          'post_type' => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ]);

      global $post;

      foreach ($my_posts as $post) {
          setup_postdata($post); ?>
<div class="toys__item" style="background-image: url(<?php if (
    has_post_thumbnail()
) {
    the_post_thumbnail_url();
} else {
    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
} ?>)">
        <div class="toys__item-info">
          <div class="toys__item-title"><?php the_title(); ?></div>
          <div class="toys__item-descr">
            <?php the_field('toy_description'); ?>
          </div>
          <div class="minibutton toys__trigger">Подробнее</div>
        </div>
      </div>

<?php
      }

      wp_reset_postdata();
      ?>

    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="toys__alert">
          <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему
          желанию. Вы можете выбрать все: размер, материал, формы...!
        </div>
      </div>
    </div>
  </div>
</div>

<div class="aboutus" id="aboutus">
  <div class="container">
    <h1 class="title">Наша история</h1>
    
<?php
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'history',
    'orderby' => 'date',
    'order' => 'ASC',
    'include' => [],
    'exclude' => [],
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);

global $post;
$qwer = 0;

foreach ($my_posts as $post) {
    setup_postdata($post);
    if (!($qwer & 1)) { ?>
     <div class="row">
      <div class="col-lg-6">
        <div class="subtitle">
          <?php the_title(); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_description'); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="aboutus__img" src="<?php the_field(
            'history_img'
        ); ?>" alt="мир детства">
      </div>
    </div>
    <?php } else { ?>
<div class="row">
      <div class="col-lg-6">
        <img class="aboutus__img" src="<?php the_field(
            'history_img'
        ); ?>" alt="мир детства">
      </div>
      <div class="col-lg-6">
        <div class="subtitle">
         <?php the_title(); ?>
        </div>
        <div class="aboutus__text">
          <?php the_field('history_description'); ?>
        </div>
      </div>
    </div>
<?php }

    $qwer++;
}

wp_reset_postdata();

// сброс
?>
  

    
  </div>
</div>

<div class="contacts" id="contacts">
  <h1 class="title">Где нас найти</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="contacts__descr underlined">
          Мы находимся в Москве, метро "Парк победы", в деловом центре "Парк победы", второй этаж
          <br> <br>
          по адресу ул. Василисы Кожиной, 1
        </div>
      </div>
      <div class="col-lg-6">
        <div id="map" class="contacts__map">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="title contacts__minititle">Свяжитесь с нами</div>
        <div class="contacts__info">
          <div class="contacts__phones">
            <div class="contacts__phoneblock">
              Телефон №1
              <div class="contacts__phonewrap">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M13.4887 0.000305176H5.51165C4.74276 0.000305176 4.1167 0.626369 4.1167 1.39525V17.6055C4.1167 18.3747 4.74276 19.0007 5.51165 19.0007H13.4883C14.2575 19.0007 14.8836 18.3747 14.8836 17.6058V1.39525C14.8836 0.626369 14.2575 0.000305176 13.4887 0.000305176ZM4.75005 2.5337H14.2503V14.5673H4.75005V2.5337ZM5.51165 0.633653H13.4883C13.9086 0.633653 14.2503 0.975344 14.2503 1.39525V1.90035H4.75005V1.39525C4.75005 0.975344 5.09174 0.633653 5.51165 0.633653ZM13.4887 18.3674H5.51165C5.09174 18.3674 4.75005 18.0257 4.75005 17.6058V15.2006H14.2503V17.6058C14.2503 18.0257 13.9086 18.3674 13.4887 18.3674Z"
                    fill="url(#paint0_linear)" />
                  <path
                    d="M9.49961 15.5173C8.80102 15.5173 8.23291 16.0854 8.23291 16.784C8.23291 17.4826 8.80102 18.0507 9.49961 18.0507C10.1982 18.0507 10.7663 17.4826 10.7663 16.784C10.7663 16.0854 10.1982 15.5173 9.49961 15.5173ZM9.49961 17.4174C9.15031 17.4174 8.86626 17.1333 8.86626 16.784C8.86626 16.4347 9.15031 16.1507 9.49961 16.1507C9.8489 16.1507 10.133 16.4347 10.133 16.784C10.133 17.1333 9.8489 17.4174 9.49961 17.4174Z"
                    fill="url(#paint1_linear)" />
                  <path
                    d="M8.23318 1.58367H9.49987C9.67499 1.58367 9.81655 1.44211 9.81655 1.26699C9.81655 1.09187 9.67499 0.950317 9.49987 0.950317H8.23318C8.05806 0.950317 7.9165 1.09187 7.9165 1.26699C7.9165 1.44211 8.05806 1.58367 8.23318 1.58367Z"
                    fill="url(#paint2_linear)" />
                  <path
                    d="M10.45 1.58367H10.7666C10.9418 1.58367 11.0833 1.44211 11.0833 1.26699C11.0833 1.09187 10.9418 0.950317 10.7666 0.950317H10.45C10.2749 0.950317 10.1333 1.09187 10.1333 1.26699C10.1333 1.44211 10.2749 1.58367 10.45 1.58367Z"
                    fill="url(#paint3_linear)" />
                  <path
                    d="M17.9274 1.44717C17.8035 1.32335 17.6034 1.32335 17.4796 1.44717C17.3558 1.57099 17.3558 1.77113 17.4796 1.89495C18.6627 3.07804 18.6627 5.0031 17.4796 6.18652C17.3558 6.31033 17.3558 6.51047 17.4796 6.63429C17.5413 6.69604 17.6224 6.72708 17.7035 6.72708C17.7845 6.72708 17.8656 6.69604 17.9274 6.63429C19.3575 5.20451 19.3575 2.87727 17.9274 1.44717Z"
                    fill="url(#paint4_linear)" />
                  <path
                    d="M16.5939 2.168C16.47 2.04418 16.2699 2.04418 16.1461 2.168C16.0223 2.29182 16.0223 2.49196 16.1461 2.61578C16.5378 3.0075 16.7535 3.52938 16.7535 4.08483C16.7535 4.64027 16.5378 5.16183 16.1461 5.55356C16.0223 5.67738 16.0223 5.87752 16.1461 6.00134C16.2078 6.06309 16.2889 6.09412 16.37 6.09412C16.451 6.09412 16.5321 6.06309 16.5939 6.00134C17.1053 5.49023 17.3868 4.80938 17.3868 4.08483C17.3868 3.36028 17.1056 2.67911 16.5939 2.168Z"
                    fill="url(#paint5_linear)" />
                  <path
                    d="M1.52035 1.89495C1.64417 1.77113 1.64417 1.57099 1.52035 1.44717C1.39653 1.32335 1.19639 1.32335 1.07257 1.44717C-0.357525 2.87727 -0.357525 5.20419 1.07257 6.63429C1.13433 6.69604 1.21539 6.72708 1.29646 6.72708C1.37753 6.72708 1.4586 6.69604 1.52035 6.63429C1.64417 6.51047 1.64417 6.31033 1.52035 6.18652C0.336941 5.00342 0.336941 3.07836 1.52035 1.89495Z"
                    fill="url(#paint6_linear)" />
                  <path
                    d="M2.85352 2.08057C2.7297 1.95675 2.52956 1.95675 2.40574 2.08057C1.89432 2.59168 1.61279 3.27253 1.61279 3.99708C1.61279 4.72163 1.89432 5.40247 2.40574 5.9139C2.4675 5.97565 2.54856 6.00669 2.62963 6.00669C2.7107 6.00669 2.79177 5.97565 2.85352 5.9139C2.97734 5.79008 2.97734 5.58995 2.85352 5.46613C2.4618 5.0744 2.24614 4.55252 2.24614 3.99708C2.24614 3.44163 2.46148 2.92007 2.85352 2.52834C2.97702 2.40484 2.97702 2.20439 2.85352 2.08057Z"
                    fill="url(#paint7_linear)" />
                  <defs>
                    <linearGradient id="paint0_linear" x1="9.50016" y1="0.000305176" x2="9.50016" y2="19.0007"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="9.49961" y1="15.5173" x2="9.49961" y2="18.0507"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="8.86652" y1="0.950317" x2="8.86652" y2="1.58367"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="10.6083" y1="0.950317" x2="10.6083" y2="1.58367"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint4_linear" x1="18.1933" y1="1.35431" x2="18.1933" y2="6.72708"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint5_linear" x1="16.72" y1="2.07513" x2="16.72" y2="6.09412"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint6_linear" x1="0.806608" y1="1.35431" x2="0.806608" y2="6.72708"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint7_linear" x1="2.27959" y1="1.9877" x2="2.27959" y2="6.00669"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                  </defs>
                </svg>
                <a href="tel:<?php the_field(
                    'contacts_phone_1'
                ); ?>"><?php the_field('contacts_phone_1'); ?></a>
              </div>
            </div>
            <div class="contacts__phoneblock">
              Телефон №2
              <div class="contacts__phonewrap">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M13.4887 0.000305176H5.51165C4.74276 0.000305176 4.1167 0.626369 4.1167 1.39525V17.6055C4.1167 18.3747 4.74276 19.0007 5.51165 19.0007H13.4883C14.2575 19.0007 14.8836 18.3747 14.8836 17.6058V1.39525C14.8836 0.626369 14.2575 0.000305176 13.4887 0.000305176ZM4.75005 2.5337H14.2503V14.5673H4.75005V2.5337ZM5.51165 0.633653H13.4883C13.9086 0.633653 14.2503 0.975344 14.2503 1.39525V1.90035H4.75005V1.39525C4.75005 0.975344 5.09174 0.633653 5.51165 0.633653ZM13.4887 18.3674H5.51165C5.09174 18.3674 4.75005 18.0257 4.75005 17.6058V15.2006H14.2503V17.6058C14.2503 18.0257 13.9086 18.3674 13.4887 18.3674Z"
                    fill="url(#paint0_linear)" />
                  <path
                    d="M9.49961 15.5173C8.80102 15.5173 8.23291 16.0854 8.23291 16.784C8.23291 17.4826 8.80102 18.0507 9.49961 18.0507C10.1982 18.0507 10.7663 17.4826 10.7663 16.784C10.7663 16.0854 10.1982 15.5173 9.49961 15.5173ZM9.49961 17.4174C9.15031 17.4174 8.86626 17.1333 8.86626 16.784C8.86626 16.4347 9.15031 16.1507 9.49961 16.1507C9.8489 16.1507 10.133 16.4347 10.133 16.784C10.133 17.1333 9.8489 17.4174 9.49961 17.4174Z"
                    fill="url(#paint1_linear)" />
                  <path
                    d="M8.23318 1.58367H9.49987C9.67499 1.58367 9.81655 1.44211 9.81655 1.26699C9.81655 1.09187 9.67499 0.950317 9.49987 0.950317H8.23318C8.05806 0.950317 7.9165 1.09187 7.9165 1.26699C7.9165 1.44211 8.05806 1.58367 8.23318 1.58367Z"
                    fill="url(#paint2_linear)" />
                  <path
                    d="M10.45 1.58367H10.7666C10.9418 1.58367 11.0833 1.44211 11.0833 1.26699C11.0833 1.09187 10.9418 0.950317 10.7666 0.950317H10.45C10.2749 0.950317 10.1333 1.09187 10.1333 1.26699C10.1333 1.44211 10.2749 1.58367 10.45 1.58367Z"
                    fill="url(#paint3_linear)" />
                  <path
                    d="M17.9274 1.44717C17.8035 1.32335 17.6034 1.32335 17.4796 1.44717C17.3558 1.57099 17.3558 1.77113 17.4796 1.89495C18.6627 3.07804 18.6627 5.0031 17.4796 6.18652C17.3558 6.31033 17.3558 6.51047 17.4796 6.63429C17.5413 6.69604 17.6224 6.72708 17.7035 6.72708C17.7845 6.72708 17.8656 6.69604 17.9274 6.63429C19.3575 5.20451 19.3575 2.87727 17.9274 1.44717Z"
                    fill="url(#paint4_linear)" />
                  <path
                    d="M16.5939 2.168C16.47 2.04418 16.2699 2.04418 16.1461 2.168C16.0223 2.29182 16.0223 2.49196 16.1461 2.61578C16.5378 3.0075 16.7535 3.52938 16.7535 4.08483C16.7535 4.64027 16.5378 5.16183 16.1461 5.55356C16.0223 5.67738 16.0223 5.87752 16.1461 6.00134C16.2078 6.06309 16.2889 6.09412 16.37 6.09412C16.451 6.09412 16.5321 6.06309 16.5939 6.00134C17.1053 5.49023 17.3868 4.80938 17.3868 4.08483C17.3868 3.36028 17.1056 2.67911 16.5939 2.168Z"
                    fill="url(#paint5_linear)" />
                  <path
                    d="M1.52035 1.89495C1.64417 1.77113 1.64417 1.57099 1.52035 1.44717C1.39653 1.32335 1.19639 1.32335 1.07257 1.44717C-0.357525 2.87727 -0.357525 5.20419 1.07257 6.63429C1.13433 6.69604 1.21539 6.72708 1.29646 6.72708C1.37753 6.72708 1.4586 6.69604 1.52035 6.63429C1.64417 6.51047 1.64417 6.31033 1.52035 6.18652C0.336941 5.00342 0.336941 3.07836 1.52035 1.89495Z"
                    fill="url(#paint6_linear)" />
                  <path
                    d="M2.85352 2.08057C2.7297 1.95675 2.52956 1.95675 2.40574 2.08057C1.89432 2.59168 1.61279 3.27253 1.61279 3.99708C1.61279 4.72163 1.89432 5.40247 2.40574 5.9139C2.4675 5.97565 2.54856 6.00669 2.62963 6.00669C2.7107 6.00669 2.79177 5.97565 2.85352 5.9139C2.97734 5.79008 2.97734 5.58995 2.85352 5.46613C2.4618 5.0744 2.24614 4.55252 2.24614 3.99708C2.24614 3.44163 2.46148 2.92007 2.85352 2.52834C2.97702 2.40484 2.97702 2.20439 2.85352 2.08057Z"
                    fill="url(#paint7_linear)" />
                  <defs>
                    <linearGradient id="paint0_linear" x1="9.50016" y1="0.000305176" x2="9.50016" y2="19.0007"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="9.49961" y1="15.5173" x2="9.49961" y2="18.0507"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="8.86652" y1="0.950317" x2="8.86652" y2="1.58367"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="10.6083" y1="0.950317" x2="10.6083" y2="1.58367"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint4_linear" x1="18.1933" y1="1.35431" x2="18.1933" y2="6.72708"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint5_linear" x1="16.72" y1="2.07513" x2="16.72" y2="6.09412"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint6_linear" x1="0.806608" y1="1.35431" x2="0.806608" y2="6.72708"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                    <linearGradient id="paint7_linear" x1="2.27959" y1="1.9877" x2="2.27959" y2="6.00669"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#1C609E" />
                      <stop offset="1" stop-color="#1C609E" />
                    </linearGradient>
                  </defs>
                </svg>
                <a href="tel:<?php the_field(
                    'contacts_phone_2'
                ); ?>"><?php the_field('contacts_phone_2'); ?></a>
              </div>
            </div>
          </div>
          <div class="contacts__mail">
            Или напишите нам на почту
            <a href="mailto:<?php the_field(
                'contacts_mail'
            ); ?>"><?php the_field('contacts_mail'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="title contacts__minititle">Оставьте ваш отзыв</div>
        <div class='contacts__feed'>
        <?= do_shortcode(
            '[contact-form-7 id="2d32706" title="Форма отзывов"]'
        ) ?>
        </div>
      </div>
    </div>
    <div class="row mt70">
      <div class="col-lg-8 offset-lg-2">
        <div class="title">отзывы</div>
        <div class="feedslider glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'reviews',
    'orderby' => 'date',
    'order' => 'ASC',
    'include' => [],
    'exclude' => [],
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);

global $post;

foreach ($my_posts as $post) {
    setup_postdata($post); ?>
              <li class="glide__slide">
                <div class="feedslider__title">
                  <?php the_field('reviews_title'); ?>
                </div>
                <div class="feedslider__text">
                  <?php the_field('reviews_description'); ?>
                </div>
              </li>

<?php
}

wp_reset_postdata();

// сброс
?>

            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
