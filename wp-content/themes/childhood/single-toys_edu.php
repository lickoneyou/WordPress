<?php
/*
Template Name: Мой шаблон для развивающих игрушек
Template Post Type: post, edu_ toys
*/
?>


<?php get_header(); ?>

	<main id="primary" class="site-main">

		<?php while (have_posts()):
      the_post();

      get_template_part('template-parts/content', get_post_type());
  endwhile;
// End of the loop.
?>

	</main><!-- #main -->

	 <div class="container toys">
    <h2 class="subtitle">Новые товары</h2>
    <div class="toys__wrapper">

<?php
// параметры по умолчанию
$my_posts = get_posts([
    'numberposts' => 3,
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
          <a href='<?= get_permalink() ?>' class="minibutton toys__trigger">Подробнее</a>
        </div>
      </div>

<?php
}

wp_reset_postdata();
?>

    </div>


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

<?php get_footer(); ?>
