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
          if (function_exists('acf_register_block_type')) {
            acf_register_block_type(array(
              'name'              => 'files',
              'mode'              => 'edit',
              'title'             => __('Files'),
              'description'       => __('A custom files block.'),
              'render_template'   => 'partials/block/content-files.php',
              'category'          => 'formatting',
              'icon'              => 'admin-default',
              'keywords'          => array('files', 'quote'),
            ));
            acf_register_block_type(array(
              'name'              => 'listing',
              'mode'              => 'edit',
              'title'             => __('Listing'),
              'description'       => __('A custom listing block.'),
              'render_template'   => 'partials/block/content-listing.php',
              'category'          => 'formatting',
              'icon'              => 'admin-default',
              'keywords'          => array('listing', 'quote'),
            ));
            acf_register_block_type(array(
              'name'              => 'catalog',
              'mode'              => 'edit',
              'title'             => __('Catalog'),
              'description'       => __('A custom catalog block.'),
              'render_template'   => 'partials/block/content-catalog.php',
              'category'          => 'formatting',
              'icon'              => 'admin-default',
              'keywords'          => array('catalog', 'quote'),
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
