<?php
/*
Template Name: Каталог
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

          <?php if ($catalog = get_field('catalog')): ?>
            <div class="catalog-list">
              <?php foreach ($catalog as $item): ?>
                <div class="catalog-list__cell">
                  <div class="catalog-item">
                    <?php if ($item['image']): ?>
                      <div class="catalog-item__image">
                        <img src="<?php echo $item['image']['sizes']['theme-medium'] ?>" />
                      </div>
                    <?php endif; ?>
                    <div class="catalog-item__body">
                      <?php if ($item['name']): ?>
                        <div class="catalog-item__name">
                          <?php echo $item['name'] ?>
                        </div>
                      <?php endif; ?>
                      <?php if ($item['desc']): ?>
                        <div class="catalog-item__desc">
                          <?php echo $item['desc'] ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if ($filelist = get_field('filelist')): ?>
            <div class="catallog-file-list">
              <div class="file-list">
                <?php foreach ($filelist as $item): ?>
                  <div class="file-item">
                    <?php if ($item['icon']): ?>
                      <div class="file-item__icon">
                        <img src="<?php echo $item['icon']['url'] ?>" />
                      </div>
                    <?php endif; ?>
                    <a href="<?php echo $item['file']['url'] ?>" class="file-item__name" target="_blank">
                      <?php echo $item['name'] ?>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
