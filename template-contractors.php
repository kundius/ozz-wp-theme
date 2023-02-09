<?php
/*
Template Name: Подрядчики
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

          <div class="contractors">
            <?php if ($title = get_field('title')): ?>
            <div class="contractors__title">
              <?php echo $title ?>
            </div>
            <?php endif; ?>

            <?php if ($contractors = get_field('contractors')): ?>
              <div class="contractors-table">
                <table>
                  <tr>
                    <th>№</th>
                    <th>наименование</th>
                    <th>регион</th>
                    <th>контакты</th>
                  </tr>
                  <?php foreach ($contractors as $key => $item): ?>
                    <tr>
                      <td><?php echo $key + 1 ?></td>
                      <td><?php echo $item['name'] ?></td>
                      <td><?php echo $item['region'] ?></td>
                      <td><?php echo $item['contacts'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
