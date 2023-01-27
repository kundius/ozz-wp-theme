<!DOCTYPE html>
<html class="no-js" <?php language_attributes()?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head')?>
  </head>
  <body <?php body_class()?>>
    <?php wp_body_open()?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header') ?>

      <div class="archive-section">
        <div class="ui-container">
          <h1 class="archive-section__title"><?php single_cat_title() ?></h1>
          <div class="archive-layout">
            <div class="archive-layout__content">
              <?php if (have_posts()): ?>
              <div class="archive-grid">
                <?php while (have_posts()): ?>
                <?php the_post()?>
                <div class="archive-grid__cell">
                  <article class="archive-card">
                    <figure class="archive-card__image">
                      <img src="<?php the_post_thumbnail_url('theme-medium')?>" alt="<?php the_title()?>" />
                    </figure>
                      <div class="archive-card__body">
                        <div class="archive-card__date">
                          <?php the_date('d.m.Y')?>
                        </div>
                        <h2 class="archive-card__title">
                          <a href="<?php the_permalink()?>"><?php the_title()?></a>
                        </h2>
                        <div class="archive-card__excerpt">
                          <?php the_excerpt()?>
                        </div>
                      </div>
                      <div class="archive-card__tags">
                        <?php the_tags('')?>
                      </div>
                  </article>
                </div>
                <?php endwhile?>
                <?php wp_reset_postdata()?>
              </div>

              <?php the_posts_pagination(['prev_text' => '', 'next_text' => ''])?>
              <?php else: ?>
                <p>Извините, ничего не найдено.</p>
              <?php endif?>
            </div>

            <div class="archive-layout__side">
              <div class="archive-layout__side-sicky">
                <?php get_template_part('partials/side-news')?>
                <?php get_template_part('partials/side-subscribe')?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
