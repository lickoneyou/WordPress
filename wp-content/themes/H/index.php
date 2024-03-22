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
        <h2 class="title">This is our team</h2>
        <h3 class="subtitle">We are small but effective and ...</h3>
        <div class="teamContainer">
          <div class="teammateWrapper">
            <img src="./assets/img/team/1.png" alt="teammate" />
            <h4>Mark Once</h4>
            <h5>Designer & Front-End Developer</h5>
            <div class="socialMediaWrapper">
              <img src="./assets/img/icons/twitter.png" alt="twitter" />
              <img src="./assets/img/icons/instagram.png" alt="instagram" />
            </div>
          </div>

          <div class="teammateWrapper">
            <img src="./assets/img/team/2.png" alt="teammate" />
            <h4>Justin Twice</h4>
            <h5>Founder & CEO</h5>
            <div class="socialMediaWrapper">
              <img src="./assets/img/icons/twitter.png" alt="twitter" />
              <img src="./assets/img/icons/instagram.png" alt="instagram" />
            </div>
          </div>

          <div class="teammateWrapper">
            <img src="./assets/img/team/3.png" alt="teammate" />
            <h4>Antonio Never</h4>
            <h5>Someone & Somewhere</h5>
            <div class="socialMediaWrapper">
              <img src="./assets/img/icons/twitter.png" alt="twitter" />
              <img src="./assets/img/icons/instagram.png" alt="instagram" />
            </div>
          </div>
        </div>
      </section>
      <section class="provideSection">
        <h4 class="title white">We provide you everything</h4>
        <h5 class="subtitle">
          Maybe not everything, but we provide you some stuff.
        </h5>
        <div class="provideContainer">
          <div class="provideWrapper">
            <div>
              <img src="./assets/img/icons/line.png" alt="line" />
            </div>
            <h4>Some Analytics</h4>
            <p>
              Aenean nisi lectus, convallis non lorem sit amet, rhoncus
              malesuada justo
            </p>
          </div>

          <div class="provideWrapper">
            <div>
              <img src="./assets/img/icons/heart.png" alt="heart" />
            </div>
            <h4>We provide you love</h4>
            <p>
              Aenean nisi lectus, convallis non lorem sit amet, rhoncus
              malesuada justo
            </p>
          </div>

          <div class="provideWrapper">
            <div>
              <img src="./assets/img/icons/cloud.png" alt="cloud" />
            </div>
            <h4>And Some Cloud</h4>
            <p>
              Aenean nisi lectus, convallis non lorem sit amet, rhoncus
              malesuada justo
            </p>
          </div>
        </div>
      </section>
      <section class="contactsSection">
        <h2 class="title">Contac Us</h2>
        <h3 class="subtitle">We know what we need to do</h3>
        <address class="contactsContainer">
          <figure class="contactsWrapper">
            <img src="./assets/img/icons/phone.png" alt="phone" />
            <figcaption>555-222-333</figcaption>
          </figure>

          <figure class="contactsWrapper">
            <img src="./assets/img/icons/pin.png" alt="pin" />
            <figcaption>Here is some address</figcaption>
          </figure>

          <figure class="contactsWrapper">
            <img src="./assets/img/icons/mail.png" alt="" />
            <figcaption>somemail@hotmail.com</figcaption>
          </figure>
        </address>

        <form>
          <input type="text" placeholder="Full Name" />
          <input type="email" placeholder="Email" />
          <input type="tel" placeholder="Number" />
          <textarea placeholder="Write your Message here..."></textarea>
          <input type="submit" value="Submit" />
        </form>
      </section>
    </main>
<?php get_footer(); ?>
