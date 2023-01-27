<?php
/*
Template Name: Загрузки
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
