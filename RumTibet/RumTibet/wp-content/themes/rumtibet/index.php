<?php get_header(); ?>
    <main>
      <section class="explore">
        <div class="exploreContainer">
          <div class="exloreImgContainer">
            <img
              class="positionAbsolute"
              src="<?php the_field('about_travel_img1'); ?>"
              alt="explore"
            />
            <img src="<?php the_field('about_travel_img2'); ?>" alt="explore" />
          </div>
          <div class="exploreDescription">
            <div class="exploreDescriptionWrapper">
              <p class="exploreSubtitle"><?php the_field(
                  'about_travel_title'
              ); ?></p>
              <h2><?php the_field('about_travel_subTitle'); ?></h2>
              <p>
               <?php the_field('about_travel_description'); ?>
              </p>
              <button>Программа тура</button>
            </div>
          </div>
        </div>
      </section>
      <section class="offer">
        <div class="offerContainer">
          <div class="offerDescriptionWrapper">
            <p class="offerSubtitle"><?php the_field('our_offer_title'); ?></p>
            <h2 class="offerTitle"><?php the_field(
                'our_offer_subtitle'
            ); ?></h2>
            <p class="offerDescription">
              <?php the_field('our_offer_description'); ?>
            </p>
            <div class="descriptionProgramms">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'programs',
    'orderby' => 'date',
    'order' => 'DESC',
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
<div class="programmsItem">
                <img src="<?php the_field(
                    'program_icon'
                ); ?>" alt="programms" />
                <div class="descriptionWrapper">
                  <h3><?php the_field('program_title'); ?></h3>
                  <p>
                    <?php the_field('program_descr'); ?>
                  </p>
                </div>
              </div>
 <?php
}

wp_reset_postdata();

// сброс
?>

             
            </div>
          </div>
          <div class="offerImg">
            <img src="<?php the_field('our_offer_img1'); ?>" alt="offerImg" />
            <img src="<?php the_field('our_offer_img2'); ?>" alt="offerImg" />
            <img src="<?php the_field('our_offer_img3'); ?>" alt="offerImg" />
            <img src="<?php the_field('our_offer_img4'); ?>" alt="offerImg" />
          </div>
          <button>Стоимость программы</button>
        </div>
      </section>
      <section class="popular">
        <div class="popularContainer">
          <p class="popularSubtitle"><?php the_field(
              'popularDestinations_title'
          ); ?></p>
          <h2 class="popularTitle"><?php the_field(
              'popularDestinations_subTitle'
          ); ?></h2>
          <div class="popularCardWrapper">

          <?php
          // параметры по умолчанию
          $my_posts = get_posts([
              'numberposts' => 3,
              'category_name' => 'rest',
              'orderby' => 'date',
              'order' => 'DESC',
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
<div
              class="card"
              style="background-image: url(<?php the_field('rest_img'); ?>);"
            >
              <div class="rate"><span><?php the_field(
                  'rest_rate'
              ); ?></span></div>
              <div class="costWrapper">
                <div class="cardTitle">
                  <h3><?php the_field('rest_title'); ?></h3>
                  <h4><?php the_field('rest_subtitle'); ?></h4>
                </div>
                <p class="cost"><?php the_field('rest_cost'); ?></p>
              </div>
            </div>

<?php
          }

          wp_reset_postdata();

// сброс
?>

            
          </div>
          <button>Рейтинг направлений</button>
        </div>
      </section>
      <section class="blog">
        <div class="blogContainer">
          <p class="blogSubtitle"><?php the_field('blog_title'); ?></p>
          <h2 class="blogTitle"><?php the_field('blog_subTitle'); ?></h2>
          <div class="blogCardWrapper">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'travel',
    'orderby' => 'date',
    'order' => 'DESC',
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
          <div class="blogCard">
              <img src="<?php the_field('travel_foto'); ?>" alt="blogPhoto" />
              <div class="blogCardDescription">
                <div class="blogTitleAndDecsriptionWrapper">
                  <h3><?php the_field('travel_title'); ?></h3>
                  <p>
                    <?php the_field('travel_descr'); ?>
                  </p>
                </div>
                <div class="blogFooter">
                  <p class="blogDate"><?php the_field('travel_date'); ?></p>
                  <a class="blogLink" href="#">читать статью</a>
                </div>
              </div>
            </div>
<?php
}

wp_reset_postdata();

// сброс
?>


</div>
          <button>Другие материалы</button>
        </div>
      </section>
    </main>
    <section class="impression">
      <div class="impressionContainer">
        <p class="impressionSubtitle"><?php the_field('foto_title'); ?></p>
        <h2 class="impressionTitle"><?php the_field('foto_subTitle'); ?></h2>
        <div class="impressionPhotoWrapper">
          <img src="<?= bloginfo(
              'template_url'
          ) ?>/assets/images/1.f627046fa25119e2f364.png" alt="photo" />
          <img src="<?= bloginfo(
              'template_url'
          ) ?>/assets/images/2.5bfc1967141bf577dbf0.png" alt="photo" />
          <img src="<?= bloginfo(
              'template_url'
          ) ?>/assets/images/3.4c767999dc42d8257c1e.png" alt="photo" />
          <img src="<?= bloginfo(
              'template_url'
          ) ?>/assets/images/4.ff61dd12683690e61f99.png" alt="photo" />
          <img src="<?= bloginfo(
              'template_url'
          ) ?>/assets/images/5.4e862a49d45e8beb3215.png" alt="photo" />
          <img src="<?= bloginfo(
              'template_url'
          ) ?>/assets/images/6.4221067e9d8c1567445f.png" alt="photo" />
        </div>
        <button>Наш pinterest</button>
      </div>
    </section>
    <section class="contacts">
      <div class="contactsContainer">
        <div class="contactsTitleWrapper">
          <p class="contactsSubtitle">актуально</p>
          <h2 class="contactsTitle">
            Получайте полезные рассылки о путешествиях
          </h2>
        </div>
        <div class="contactsEmailWrapper">
          <form>
            <label for="">Введите e-mail адрес</label>
            <div class="inputWrapper">
              <input placeholder="name@domain.com" />
              <button>Подписаться на новости</button>
            </div>
          </form>
          <p>
            подписываясь на новости, вы автоматически соглашаетесь
            <span>с условиями обработки персональных данных</span>
            и
            <span>правилами рекламных рассылок</span>
          </p>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="aboutContainer">
        <div class="aboutCompany">
          <div class="aboutCompanyDescriptionWrapper">
            <h2 class="aboutCompanyDescriptionTitle">Компания «РумТибет»</h2>
            <p class="aboutCompanyDescription">
              Его корни уходят в один фрагмент классической латыни 45 года н.э.,
              то есть более двух тысячелетий назад. Ричард МакКлинток, профессор
              латыни из колледжа Hampden-Sydney.
            </p>
          </div>
          <div class="aboutCompanyContactsWrapper">
            <div class="aboutCompanyContactsPhoneEmail">
              <p class="aboutCompanyContactsEmail">info@domain.com</p>
              <p class="aboutCompanyContactsPhone">+7 (123) 456-78-90</p>
            </div>
            <div class="aboutCompanyContactsSocial">
              <a href="#">
                <img src="<?= bloginfo(
                    'template_url'
                ) ?>/assets/images/tg.fee4b4b1447c54e1e477.png" alt="tg icon" />
              </a>
              <a href="#">
                <img src="<?= bloginfo(
                    'template_url'
                ) ?>/assets/images/vk.a132ae1796b37fe9d60e.svg" alt="vk icon" />
              </a>
              <a href="#">
                <img
                  src="<?= bloginfo(
                      'template_url'
                  ) ?>/assets/images/pinterest.0d547333f153fade122a.png"
                  alt="pinterest icon"
                />
              </a>
              <a href="#">
                <img
                  src="<?= bloginfo(
                      'template_url'
                  ) ?>/assets/images/skype.a8826c6ca3dff94bd91b.png"
                  alt="skype icon"
                />
              </a>
            </div>
          </div>
        </div>
        <div class="aboutOurServices">
          <h2 class="aboutOurServicesTitle">Наши услуги</h2>
          <ul>
            <li>Прогулки в горы летом</li>
            <li>Зимние походы в горы</li>
            <li>Посещение храмов в горах</li>
            <li>Экстремальные виды туризма</li>
            <li>Походы в джунглях Амазонии</li>
            <li>Поездка в Африку</li>
          </ul>
        </div>
        <div class="aboutTravel">
          <h2 class="aboutTravelTitle">Важно для путешествий</h2>
          <ul>
            <li>Как собрать в долгий поход?</li>
            <li>Жизненно важные предметы для похода</li>
            <li>Медицинская страховка, гарантии безопасности</li>
            <li>Если вы врач - загляните сюда</li>
          </ul>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
