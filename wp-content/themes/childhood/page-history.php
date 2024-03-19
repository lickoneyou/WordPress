<?php
/*
Template Name: История
*/
?>

<?php get_header(); ?>
<div class="aboutus">
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
<?php get_footer(); ?>
