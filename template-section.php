<?php
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
print_r($frameHouses);
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

          <?php if ($frameHouse = get_field('frame-house')): ?>
            <div class="frame-house">
              <?php foreach ($frameHouse as $item): ?>
                <div class="frame-house-row">
                  <div class="frame-house-layout">
                    <?php if ($item['image']): ?>
                      <div class="frame-house-layout__left">
                        <div class="frame-house-image">
                          <img src="<?php echo $item['image']['url'] ?>" />
                        </div>
                      </div>
                    <?php endif; ?>

                    <div class="frame-house-layout__right">
                      <div class="frame-house-details">
                        <div class="frame-house-details__title">
                          <?php echo $item['title'] ?>
                        </div>
                        <div class="frame-house-details__desc">
                          <?php echo $item['desc'] ?>
                        </div>
                      </div>

                      <div class="frame-house-files">
                        <div class="frame-house-file">
                          <div class="frame-house-file__icon">
                            <img src="/wp-content/uploads/2023/01/icon-pdf.png" />
                          </div>
                          <a href="<?php echo $item['specification']['url'] ?>" class="frame-house-file__name" target="_blank">
                            загрузить спецификацию
                          </a>
                        </div>
                        <div class="frame-house-file">
                          <div class="frame-house-file__icon">
                            <img src="/wp-content/uploads/2023/01/icon-pdf.png" />
                          </div>
                          <a href="<?php echo $item['estimate']['url'] ?>" class="frame-house-file__name" target="_blank">
                            загрузить смету
                          </a>
                        </div>
                        <div class="frame-house-file">
                          <div class="frame-house-file__icon">
                            <img src="/wp-content/uploads/2023/01/icon-model.png" />
                          </div>
                          <a href="<?php echo $item['model']['url'] ?>" class="frame-house-file__name" target="_blank">
                            загрузить 3D модель sketchup
                          </a>
                        </div>
                      </div>
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
