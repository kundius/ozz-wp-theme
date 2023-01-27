<section class="header">
  <div class="ui-container header__container">
    <button class="header__toggle">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="header__logo">
      <a href="/">
        <img src="<?php bloginfo('template_url') ?>/dist/images/logo-light.png" alt="<?php bloginfo('name') ?>" />
      </a>
    </div>

    <div class="header__body">
      <div class="header-contacts">
        <div class="header-contacts__buttons">
          <a href="whatsapp://send?text=Hello&phone=<?php echo preg_replace("/[ \(\)\-]/", "", get_field('theme_whatsapp', 'options')) ?>" class="header-contacts__button header-contacts__button_whatsapp">
            <svg width="22px" height="22px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"></path>
            </svg>
          </a>

          <a href="tg://resolve?domain=<?php echo preg_replace("/[ \(\)\-]/", "", get_field('theme_telegram', 'options')) ?>" class="header-contacts__button header-contacts__button_telegram">
            <svg width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4 c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8 C17,6.9,17.4,7.1,17.1,7.4z"/>
            </svg>
          </a>

          <a href="tel:<?php the_field('theme_phone', 'options') ?>" class="header-contacts__button header-contacts__button_callback js-callback-or-modal">
            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z"></path>
              <path d="M21,10a1,1,0,0,1-1-1,5,5,0,0,0-5-5,1,1,0,0,1,0-2,7,7,0,0,1,7,7A1,1,0,0,1,21,10Z"></path>
              <path d="M17,10a1,1,0,0,1-1-1,1,1,0,0,0-1-1,1,1,0,0,1,0-2,3,3,0,0,1,3,3A1,1,0,0,1,17,10Z"></path>
            </svg>
          </a>
        </div>

        <div class="header-contacts__phone">
          <a href="tel:<?php the_field('theme_phone', 'options') ?>">
            <?php the_field('theme_phone', 'options') ?>
          </a>
        </div>
      </div>

      <?php wp_nav_menu([
        'container' => false,
        'theme_location' => 'menu-main',
        'menu_class' => 'header__menu'
      ]); ?>
    </div>
  </div>
</section>

<section class="intro">
  <div class="ui-container intro__container">
    <div class="intro__title">
      <?php the_field('intro_title', 'options') ?>
    </div>
    <div class="intro__desc">
      <?php the_field('intro_desc', 'options') ?>
    </div>
  </div>
</section>
