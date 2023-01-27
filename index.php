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
          <div class="page-body__content ui-content">
            <?php the_content() ?>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
