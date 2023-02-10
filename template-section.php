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

          <?php if ($frameHouse->have_posts()): ?>
          <div class="frame-house">
            <?php while ($frameHouse->have_posts()): $frameHouse->the_post(); ?>
              <div class="frame-house-row">
                <div class="frame-house-layout">
                  <?php if (has_post_thumbnail()): ?>
                    <div class="frame-house-layout__left">
                      <div class="frame-house-image">
                        <?php the_post_thumbnail($post->ID, 'theme-medium'); ?>
                      </div>
                    </div>
                  <?php endif; ?>

                  <div class="frame-house-layout__right">
                    <div class="frame-house-details">
                      <a href="<?php the_permalink() ?>" class="frame-house-details__title">
                        <?php the_title() ?>
                      </a>
                      <div class="frame-house-details__desc">
                        <?php echo $item['desc'] ?>
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
                      <?php the_post_thumbnail($post->ID, 'theme-medium'); ?>
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
