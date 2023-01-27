<?php
/*
Template Name: Контакты
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

          <div class="contacts">
            <div class="contacts-address">
              <div class="contacts-address__icon"></div>
              <div class="contacts-address__body">
                <div class="contacts-address__label">Производство и склад</div>
                <div class="contacts-address__value"><?php the_field('address') ?></div>
              </div>
            </div>

            <div class="contacts-map">
              <?php the_field('map') ?>
            </div>

            <div class="contacts-columns">
              <div class="contacts-column">
                <div class="contacts-phone">
                  <div class="contacts-phone__icon"></div>
                  <div class="contacts-phone__body">
                    <div class="contacts-phone__label">Телефон многоканальный </div>
                    <div class="contacts-phone__value"><?php the_field('phone') ?></div>
                  </div>
                </div>

                <div class="contacts-email">
                  <div class="contacts-email__icon"></div>
                  <div class="contacts-email__body">
                    <div class="contacts-email__label">электронная почта</div>
                    <div class="contacts-email__value"><?php the_field('email') ?></div>
                  </div>
                </div>
              </div>

              <div class="contacts-column">
                <?php if ($schedule = get_field('schedule')): ?>
                <div class="contacts-schedule">
                  <div class="contacts-schedule__icon"></div>
                  <div class="contacts-schedule__body">
                    <div class="contacts-schedule__label">время работы:</div>
                    <?php foreach ($schedule as $item): ?>
                      <div class="contacts-schedule__value">
                        <div class="contacts-schedule__value-date">
                          <?php echo $item['date'] ?>
                        </div>
                        <div class="contacts-schedule__value-time">
                          <?php echo $item['time'] ?>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>

            <div class="contacts-note">
              <?php the_field('note') ?>
            </div>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
