<?php
/*
Template Name: Услуги
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

          <?php if ($services = get_field('services')): ?>
            <div class="services-list">
              <?php foreach ($services as $item): ?>
                <div class="services-list__cell">
                  <div class="services-item">
                    <?php if ($item['image']): ?>
                      <div class="services-item__image">
                        <img src="<?php echo $item['image']['url'] ?>" />
                      </div>
                    <?php endif; ?>
                    <div class="services-item__body">
                      <?php if ($item['name']): ?>
                        <div class="services-item__name">
                          <?php echo $item['name'] ?>
                        </div>
                      <?php endif; ?>
                      <?php if ($item['desc']): ?>
                        <div class="services-item__desc">
                          <?php echo $item['desc'] ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
