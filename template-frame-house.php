<?php
/*
Template Name: Каркасные дома
 */
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

          <div class="frame-house">
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
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
