<?php

namespace DomenART\Theme\Services;

use DomenART\Theme\Service;
use DomenART\Theme\Service_Container;

/**
 * Class Acf
 *
 * @package DomenART\Theme
 */
class Acf implements Service
{

    /**
     * @param Service_Container $container
     */
    public function register(Service_Container $container): void
    {
    }

    /**
     * @param Service_Container $container
     */
    public function boot(Service_Container $container): void
    {
        \acf_add_options_page(array(
            'page_title' => 'Параметры',
            'menu_title' => 'Параметры',
            'menu_slug' => 'acf-options',
            'capability' => 'edit_posts',
            'redirect' => false,
        ));

        add_action('acf/init', function() {
          // check function exists
          if (function_exists('acf_register_block')) {
            // register a testimonial block
            acf_register_block(array(
              'name'              => 'files',
              'title'             => __('Files'),
              'description'       => __('A custom files block.'),
              'render_callback'   => [$this, 'acf_block_render_callback'],
              'category'          => 'formatting',
              'icon'              => 'admin-comments',
              'keywords'          => array( 'files', 'quote' ),
            ));
          }
        });
    }

    function acf_block_render_callback($block) {
      // convert name ("acf/testimonial") into path friendly slug ("testimonial")
      $slug = str_replace('acf/', '', $block['name']);

      // include a template part from within the "template-parts/block" folder
      if (file_exists( get_theme_file_path("/partials/block/content-{$slug}.php"))) {
        include( get_theme_file_path("/partials/block/content-{$slug}.php") );
      }
    }

    /**
     * @return string
     */
    public function get_service_name(): string
    {
        return 'acf';
    }

}
