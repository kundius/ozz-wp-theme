<?php

namespace DomenART\Theme\Services;

use DomenART\Theme\Service;
use DomenART\Theme\Service_Container;

class Theme implements Service
{

    /**
     * @param Service_Container $container
     */
    public function register(Service_Container $container): void
    {}

    /**
     * @param Service_Container $container
     */
    public function boot(Service_Container $container): void
    {
        $this->after_setup_theme();
    }

    /**
     * @return string
     */
    public function get_service_name(): string
    {
        return 'theme';
    }

    /**
     * After setup theme
     */
    public function after_setup_theme(): void
    {
        $this->add_theme_supports();
        $this->add_shortcodes();
        $this->i18n();
    }

    /**
     * Set theme supports
     */
    private function add_theme_supports(): void
    {
        \add_filter('wpcf7_load_js', '__return_false');
        \add_filter('wpcf7_load_css', '__return_false');

        \add_image_size('theme-medium', 570, 325, true);

        // Add the theme support basic elements
        \add_theme_support('align-wide');
        \add_theme_support('responsive-embeds');
        \add_theme_support('editor-styles');
        \add_theme_support('wp-block-styles');
        \add_theme_support('post-thumbnails');
        \add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'script', 'style']);

        \add_action('admin_init', function() {
            if (isset($_GET['post'])) {
                $post_ID = $_GET['post'];
            } else if (isset($_POST['post_ID'])) {
                $post_ID = $_POST['post_ID'];
            }

            if (!isset($post_ID) || empty($post_ID)) {
                return;
            }

            $page_template = get_post_meta($post_ID, '_wp_page_template', true);
            if ($page_template == 'template-contacts.php') {
                remove_post_type_support('page', 'editor');
                remove_post_type_support('page', 'thumbnail');
            }
            if ($page_template == 'template-contractors.php') {
                remove_post_type_support('page', 'editor');
                remove_post_type_support('page', 'thumbnail');
            }
            if ($page_template == 'template-price.php') {
                remove_post_type_support('page', 'editor');
                remove_post_type_support('page', 'thumbnail');
            }
            if ($page_template == 'template-services.php') {
                remove_post_type_support('page', 'editor');
                remove_post_type_support('page', 'thumbnail');
            }
            if ($page_template == 'template-catalog.php') {
                remove_post_type_support('page', 'editor');
                remove_post_type_support('page', 'thumbnail');
            }
            if ($page_template == 'template-downloads.php') {
                remove_post_type_support('page', 'editor');
                remove_post_type_support('page', 'thumbnail');
            }
        });
    }

    private function add_shortcodes(): void
    {
        \add_shortcode('template_part', function ($atts, $content = null) {
            $tp_atts = \shortcode_atts([
                'path' =>  null,
            ], $atts);
            ob_start();
            \get_template_part($tp_atts['path']);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        });
    }

    /**
     * i18n
     */
    private function i18n(): void
    {
        // Load theme texdomain
        \load_theme_textdomain('framework-textdomain', \get_theme_file_path('/languages'));
    }

    public static function cut_string($str, $length=50, $postfix='...')
    {
        if ( strlen($str) <= $length)
            return $str;

        $temp = substr($str, 0, $length);
        return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
    }
}
