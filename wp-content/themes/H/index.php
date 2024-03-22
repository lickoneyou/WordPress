    <?php get_header(); ?> 
    <main>
      <section class="years">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'dates',
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
        <div>
          <h2><?php the_title(); ?></h2>
          <p><?php the_field('data_description'); ?></p>
        </div>
<?php
}

wp_reset_postdata();

// сброс
?>

      </section>
      <div class="layerContainer">
        <img
          class="layer"
          src="<?= bloginfo(
              'template_url'
          ) ?>/assets/img/buildings__black_3164.png"
          alt="layer"
        />
      </div>
      <section class="teamSection">
        <h2 class="title"><?php the_field('team_title'); ?></h2>
        <h3 class="subtitle"><?php the_field('team_subtitle'); ?></h3>
        <div class="teamContainer">

<?php
$my_posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'teammates',
    'orderby' => 'date',
    'order' => 'ACS',
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

          <div class="teammateWrapper">
            <img src="<?php the_field('teammate_foto'); ?>" alt="teammate" />
            <h4><?php the_field('teammate_name'); ?></h4>
            <h5><?php the_field('teammate_position'); ?></h5>
            <div class="socialMediaWrapper">
              <?php if (get_field('teammate_twitter')) { ?>
              <a href='<?php the_field(
                  'teammate_twitter'
              ); ?>'><img src="<?= bloginfo(
    'template_url'
) ?>/assets/img/icons/twitter.png" alt="twitter" target='_blank'/></a>
              <?php } ?>

              <?php if (get_field('teammate_instagram')) { ?>
              <a href='<?php the_field(
                  'teammate_instagram'
              ); ?>'><img src="<?= bloginfo(
    'template_url'
) ?>/assets/img/icons/instagram.png" alt="instagram" target='_blank'/></a>
              <?php } ?>

            </div>
          </div>

<?php
}
wp_reset_postdata();

// сброс
?>

        </div>
      </section>
      <section class="provideSection">
        <h4 class="title white"><?php the_field('about_title'); ?></h4>
        <h5 class="subtitle">
          <?php the_field('about_subtitle'); ?>
        </h5>
        <div class="provideContainer">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => 3,
    'category_name' => 'about_us',
    'orderby' => 'date',
    'order' => 'ACS',
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

          <div class="provideWrapper">
            <div>
              <img src="<?php the_field('about_us_img'); ?>" alt="line" />
            </div>
            <h4><?php the_field('about_us_title'); ?></h4>
            <p><?php the_field('about_us_description'); ?></p>
          </div>

<?php
}

wp_reset_postdata();

// сброс
?>

        </div>
      </section>
      <section class="contactsSection">
        <h2 class="title"><?php the_field('contacts_title'); ?></h2>
        <h3 class="subtitle"><?php the_field('contacts_subtitle'); ?></h3>
        <address class="contactsContainer">
          <figure class="contactsWrapper">
            <img src="<?= bloginfo(
                'template_url'
            ) ?>/assets/img/icons/phone.png" alt="phone" />
            <figcaption><?php the_field('contacts_phone'); ?></figcaption>
          </figure>

          <figure class="contactsWrapper">
            <img src="<?= bloginfo(
                'template_url'
            ) ?>/assets/img/icons/pin.png" alt="pin" />
            <figcaption><?php the_field('contacts_address'); ?></figcaption>
          </figure>

          <figure class="contactsWrapper">
            <img src="<?= bloginfo(
                'template_url'
            ) ?>/assets/img/icons/mail.png" alt="" />
            <figcaption><?php the_field('contacts_email'); ?></figcaption>
          </figure>
        </address>

        <form>
          <?php echo do_shortcode(
              '[contact-form-7 id="4d9e624" title="Форма"]'
          ); ?>
        </form>
      </section>
    </main>
<?php get_footer(); ?>
