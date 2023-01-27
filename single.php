<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header') ?>

      <div class="page-body">
        <div class="ui-container">
          <div class="page-body__content ui-content">
            <?php the_content() ?>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
