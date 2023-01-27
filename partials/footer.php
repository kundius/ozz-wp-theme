<section class="footer">
  <div class="ui-container">
    <div class="footer-layout">
      <div class="footer-layout__main">
        <div class="footer-main">
          <div class="footer-main__logo">
            <a href="/">
              <img src="<?php bloginfo('template_url') ?>/dist/images/logo-dark.png" alt="<?php bloginfo('name') ?>" />
            </a>
          </div>

          <div class="footer-main__body">
            <div class="footer-main__name">
                <?php the_field('theme_sitename', 'options') ?>
            </div>
            <div class="footer-main__contacts">
              <div class="footer-contacts">
                <div class="footer-contacts__phone">
                  <div class="footer-contacts__phone-icon"></div>
                  <?php the_field('theme_phone', 'options') ?>
                </div>
                <div class="footer-contacts__email">
                  <div class="footer-contacts__email-icon"></div>
                  <?php the_field('theme_email', 'options') ?>
                </div>
              </div>
            </div>
            <div class="footer-main__copyright">
              <?php the_field('theme_copyright', 'options') ?>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-layout__menu">
        <?php wp_nav_menu([
          'container' => false,
          'theme_location' => 'menu-main',
          'menu_class' => 'footer__menu'
        ]); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('partials/modals') ?>

<?php wp_footer() ?>
