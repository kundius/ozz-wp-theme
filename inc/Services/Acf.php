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
          if (function_exists('acf_register_block_type')) {
            // register a testimonial block
            acf_register_block_type(array(
              'name'              => 'files',
              'title'             => __('Files'),
              'description'       => __('A custom files block.'),
              'render_template'   => 'partials/block/content-files.php',
              'category'          => 'formatting',
              'icon'              => 'admin-comments',
              'keywords'          => array('files', 'quote'),
            ));
          }
        });
    }

    /**
     * @return string
     */
    public function get_service_name(): string
    {
        return 'acf';
    }

}
