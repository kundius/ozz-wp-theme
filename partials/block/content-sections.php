<?php
$sections = new WP_Query([
 'post_type' => 'page',
 'post_parent' => get_field('parent') ?: get_the_ID(),
 'posts_per_page' => -1,
 'orderby' => ['menu_order' => 'ASC']
]);
?>
<?php if ($sections->have_posts()): ?>
<div class="catalog-list">
  <?php while ($sections->have_posts()): $sections->the_post(); ?>
    <div class="catalog-list__cell">
      <div class="catalog-item">
        <?php if (has_post_thumbnail()): ?>
          <div class="catalog-item__image">
            <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail('theme-medium'); ?>
            </a>
          </div>
        <?php endif; ?>
        <div class="catalog-item__body">
          <a href="<?php the_permalink() ?>" class="catalog-item__name">
            <?php the_title() ?>
          </a>
          <div class="catalog-item__desc">
            <?php the_excerpt() ?>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php endif; wp_reset_query(); ?>
