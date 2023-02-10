<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/*
Template Name: Раздел
 */
$frameHouses = new WP_Query([
  'post_type' => 'page',
  'post_parent' => get_the_ID(),
  'posts_per_page' => -1,
  'orderby' => ['menu_order' => 'ASC'],
  'meta_query' => [
    [
      'key' => '_wp_page_template',
      'value' => 'template-frame-house.php'
    ]
  ]
]);
$sections = new WP_Query([
 'post_type' => 'page',
 'post_parent' => get_the_ID(),
 'posts_per_page' => -1,
 'orderby' => ['menu_order' => 'ASC'],
 'meta_query' => [
   [
     'key' => '_wp_page_template',
     'value' => 'template-section.php'
   ]
 ]
]);
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="page">
      <?php get_template_part('partials/header') ?>

      <div class="page-body">
        <div class="ui-container">
          <h1 class="page-body__title">
            <?php the_title() ?>
          </h1>

          <div class="frame-house-content">
            <?php the_content() ?>
          </div>

          <?php if ($frameHouses->have_posts()): ?>
          <div class="frame-house">
            <?php while ($frameHouses->have_posts()): $frameHouses->the_post(); ?>
              <div class="frame-house-row">
                <div class="frame-house-layout">
                  <?php if (has_post_thumbnail()): ?>
                    <div class="frame-house-layout__left">
                      <div class="frame-house-image">
                        <a href="<?php the_permalink() ?>">
                          <?php the_post_thumbnail('theme-medium'); ?>
                        </a>
                      </div>
                    </div>
                  <?php endif; ?>

                  <div class="frame-house-layout__right">
                    <div class="frame-house-details">
                      <a href="<?php the_permalink() ?>" class="frame-house-details__title">
                        <?php the_title() ?>
                      </a>
                      <div class="frame-house-details__desc">
                        Высота потолка <?php the_field('ceiling_height'); ?> м<br />
                        Площадь застройки <?php the_field('building_area'); ?> м²<br />
                        Площадь помещений <?php the_field('premises_area'); ?> м²<br />
                        Код продукта <?php the_field('product_code'); ?>
                      </div>
                    </div>

                    <div class="frame-house-files">
                      <div class="frame-house-file">
                        <div class="frame-house-file__icon">
                          <img src="/wp-content/uploads/2023/01/icon-pdf.png" />
                        </div>
                        <a href="<?php the_field('specification'); ?>" class="frame-house-file__name" target="_blank">
                          загрузить спецификацию
                        </a>
                      </div>
                      <div class="frame-house-file">
                        <div class="frame-house-file__icon">
                          <img src="/wp-content/uploads/2023/01/icon-pdf.png" />
                        </div>
                        <a href="<?php the_field('estimate'); ?>" class="frame-house-file__name" target="_blank">
                          загрузить смету
                        </a>
                      </div>
                      <div class="frame-house-file">
                        <div class="frame-house-file__icon">
                          <img src="/wp-content/uploads/2023/01/icon-model.png" />
                        </div>
                        <a href="<?php the_field('model'); ?>" class="frame-house-file__name" target="_blank">
                          загрузить 3D модель sketchup
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <?php endif; wp_reset_query(); ?>

          <?php if ($sections->have_posts()): ?>
          <div class="catalog-list">
            <?php while ($sections->have_posts()): $sections->the_post(); ?>
              <div class="catalog-list__cell">
                <div class="catalog-item">
                  <?php if (has_post_thumbnail()): ?>
                    <div class="catalog-item__image">
                      <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail($post->ID, 'theme-medium'); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <div class="catalog-item__body">
                    <a href="<?php the_permalink() ?>" class="catalog-item__name">
                      <?php the_title() ?>
                    </a>
                    <div class="catalog-item__desc">
                      <?php the_excerpt() ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <?php endif; wp_reset_query(); ?>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
