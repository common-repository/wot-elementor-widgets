<?php
/*
Plugin Name: Wot Elementor Widgets
Plugin URI: https://wordpress.org/plugins/wot-elementor-widgets
Description: It’s a widget collection for Elementor that includes minimalistic tools such as tabs. It is simplified by developers as they can develop without strain their websites. The plugin makes it easy to design dynamic layouts so that users can effortlessly create engaging websites.
Version: 1.0.1
Author: WebOccult Technologies Pvt Ltd
Author URI: https://www.weboccult.com
Text Domain: wot-elementor-widgets
Domain Path: /languages
License:     GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;
class Wotc_Elementor_Widgets_Extension
{
    /**
     * Plugin version.
     *
     * @since 1.0.0
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * Minimum Elementor version required.
     *
     * @since 3.0.0
     * @var string
     */
    const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

    /**
     * Minimum PHP version required.
     *
     * @since 7.0.0
     * @var string
     */
    const MINIMUM_PHP_VERSION = '7.0.0';

    /**
     * Singleton instance.
     *
     * @since 1.0.0
     * @var Wotc_Elementor_Widgets_Extension|null
     */
    private static $_instance = null;

    /**
     * Get singleton instance.
     *
     * @since 1.0.0
     * @return Wotc_Elementor_Widgets_Extension|null Singleton instance of the class.
     */
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        // Include necessary files for WordPress Plugin API
        include_once ABSPATH . 'wp-admin/includes/plugin.php';

        add_action('plugins_loaded', [$this, 'wot_elementor_widgets_init']);
    }

    /**
     * Initialize the plugin.
     *
     * @since 1.0.0
     * @return void
     */
    public function wot_elementor_widgets_init()
    {
        // Check if Elementor plugin is active
        if (!is_plugin_active('elementor/elementor.php')) {
            // Elementor is not active, display admin notice
            add_action('admin_notices', [$this, 'wot_elementor_widgets_admin_notice_missing_elementor']);
            deactivate_plugins(plugin_basename(__FILE__));
            return false;
        }

        // Proceed with plugin initialization if compatible
        if ($this->wot_elementor_widgets_is_compatible()) {
            $this->wot_elementor_widgets_define_constants();
            add_action('wp_enqueue_scripts', [$this, 'wot_elementor_widgets_styles_and_scripts']);
            add_action('elementor/elements/categories_registered', [$this, 'wot_elementor_widgets_init_category']);
            add_action('elementor/widgets/widgets_registered', [$this, 'wot_elementor_widgets_init_widgets']);
            $this->wot_elementor_widgets_load_text_domain();
        }
    }

    /**
     * Check if Elementor is active.
     *
     * @since 1.0.0
     * @return bool Returns true if Elementor is active, otherwise false.
     */
    public function wot_elementor_widgets_is_elementor_active()
    {
        return is_plugin_active('elementor/elementor.php');
    }

    /**
     * 
     * Define plugin constants.
     *
     * @since 1.0.0
     * @return void
     */
    public function wot_elementor_widgets_define_constants()
    {
        if (!defined('WOTC_ELEMENTOR_WIDGETS_URL')) {
            define('WOTC_ELEMENTOR_WIDGETS_URL', trailingslashit(plugins_url('/', __FILE__)));
        }
        if (!defined('WOTC_ELEMENTOR_WIDGETS_PATH')) {
            define('WOTC_ELEMENTOR_WIDGETS_PATH', trailingslashit(plugin_dir_path(__FILE__)));
        }
    }

    /**
     * Load scripts and styles.
     *
     * @since 1.0.0
     * @return void
     */

    public function wot_elementor_widgets_styles_and_scripts()
    {
        // Register and enqueue styles
        wp_enqueue_style('wot-tabflex-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/css/tabflex-style.css', [], '1.0.0');
        // Register and enqueue scripts
        wp_enqueue_script('wot-tabflex-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/js/tabflex-main-scripts.js', ['jquery'], '1.0.0', true);
        // Register and enqueue styles
        wp_enqueue_style('wot-testimonial-slider-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-testimonial-slider/css/testimonial-slider.css', [], '1.0.0');
        // Register and enqueue scripts
        wp_enqueue_script('wot-testimonial-slider-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-testimonial-slider/js/testimonial-slider.js', ['jquery'], '1.0.0', true);
        // Register and enqueue styles
        wp_enqueue_style('wot-tabs-slick-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/css/tabs-slick.css', [], '1.0.0');
        wp_enqueue_style('wot-tabs-slider-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/css/tabs-slider.css', [], '1.0.0');
        // Register and enqueue scripts
        wp_enqueue_script('wot-tabs-slick-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/js/tabs-slick.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('wot-tabs-slider-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/js/tabs-slider.js', ['jquery'], '1.0.0', true);
        if ( ! wp_style_is( 'font-awesome', 'enqueued' ) ) {
            wp_enqueue_style('wot-tabs-slider-fs-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/css/all-fs.css', [], '1.0.0');
        }
        wp_enqueue_style('wot-post-slider-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/css/post-slider.css', [], '1.0.0');
        wp_enqueue_style('wot-post-slider-swiper-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/css/post-slider-swiper.css', [], '1.0.0');
        wp_enqueue_script('wot-post-slider-swiper-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/js/post-slider-swiper.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('wot-post-slider-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/js/post-slider.js', ['jquery'], '1.0.0', true);
    }
    public function wot_elementor_widgets_editor_styles()
    {
        // Register and enqueue styles
        wp_enqueue_style('wot-tabs-slick-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/css/tabs-slick.css', [], '1.0.0');
        wp_enqueue_style('wot-tabs-slider-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/css/tabs-slider.css', [], '1.0.0');
        wp_enqueue_style('wot-post-slider-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/css/post-slider.css', [], '1.0.0');
        wp_enqueue_style('wot-post-slider-swiper-style', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/css/post-slider-swiper.css', [], '1.0.0');
    }

    public function wot_elementor_widgets_editor_scripts()
    {
        // Register and enqueue scripts
        wp_enqueue_script('wot-tabs-slick-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/js/tabs-slick.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('wot-tabs-slider-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/js/tabs-slider.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('wot-post-slider-swiper-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/js/post-slider-swiper.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('wot-post-slider-scripts', WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-post-slider/js/post-slider.js', ['jquery'], '1.0.0', true);
    }
    /**
     * Load text domain for localization.
     *
     * @since 1.0.0
     * @return void
     */
    public function wot_elementor_widgets_load_text_domain()
    {
        load_plugin_textdomain('wot-elementor-widgets', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }

    /**
     * Initialize custom Elementor widgets.
     *
     * @since 1.0.0
     * @return void
     */

    public function wot_elementor_widgets_init_widgets()
    {
        require_once WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/widgets/tabflex.php';
        require_once WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/widgets/testimonial-slider.php';
        require_once WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/widgets/tabs-slider.php';
        require_once WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/widgets/post-slider.php';
    }

    /**
     * Initialize Elementor category.
     *
     * @since 1.0.0
     * @return void
     */
    public function wot_elementor_widgets_init_category()
    {
        \Elementor\Plugin::$instance->elements_manager->add_category(
            'wot-elementor-widgets-section',
            ['title' => esc_html__('Wot Elementor Widgets', 'wot-elementor-widgets')]
        );
    }

    /**
     * Admin Notice
     * Check compatibility with Elementor and PHP versions.
     *
     * @since 1.0.0
     * @return bool Returns true if the plugin is compatible, otherwise false.
     */
    public function wot_elementor_widgets_is_compatible()
    {
        if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', [$this, 'wot_elementor_widgets_admin_notice_minimum_elementor_version']);
            return false;
        }

        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', [$this, 'wot_elementor_widgets_admin_notice_minimum_php_version']);
            return false;
        }
        return true;
    }

    /**
     * Admin Notice
     * Admin notice if Elementor is not exist.
     *
     * @since 3.0.0
     * @return void
     */
    public function wot_elementor_widgets_admin_notice_missing_elementor()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }
        if (!isset($_GET['nonce_field']) || ! wp_verify_nonce( sanitize_text_field( wp_unslash ($_GET['nonce_field']) ), 'wot_elementor_widgets_action')) {
            $message = sprintf(
                // Translators: %1$s represents the plugin name and %2$s represents the dependency name.
                esc_html__('%1$s requires %2$s to be installed and activated.', 'wot-elementor-widgets'),
                esc_html__('Wot Elementor Widgets', 'wot-elementor-widgets'),
                esc_html__('Elementor', 'wot-elementor-widgets')
            );
        }
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', esc_attr($message));
    }

    /**
     * Admin Notice
     * Admin notice if minimum Elementor version is not met.
     *
     * @since 3.0.0
     * @return void
     */
    public function wot_elementor_widgets_admin_notice_minimum_elementor_version()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }
        if (!isset($_GET['nonce_field']) || ! wp_verify_nonce( sanitize_text_field( wp_unslash ($_GET['nonce_field']) ), 'wot_elementor_widgets_action')) {
            $message = sprintf(
                // Translators: %1$s represents the plugin name, %2$s represents the dependency name (e.g., Elementor), and %3$s represents the minimum required version.
                esc_html__('%1$s requires %2$s version %3$s or greater.', 'wot-elementor-widgets'),
                esc_html__('Wot Elementor Widgets', 'wot-elementor-widgets'),
                esc_html__('Elementor', 'wot-elementor-widgets'),
                self::MINIMUM_ELEMENTOR_VERSION
            );
        }
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', esc_attr($message));
    }

    /**
     * Admin Notice
     * Admin notice for minimum PHP version.
     *
     * @since 7.0.0
     * @return void
     */
    public function wot_elementor_widgets_admin_notice_minimum_php_version()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }
        if (!isset($_GET['nonce_field']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_GET['nonce_field'])), 'wot_elementor_widgets_action')) {
            $message = sprintf(
                // Translators: %1$s represents the plugin name, %2$s represents the dependency name (e.g., PHP), and %3$s represents the minimum required version.
                esc_html__('%1$s requires %2$s version %3$s or greater.', 'wot-elementor-widgets'),
                esc_html__('Wot Elementor Widgets', 'wot-elementor-widgets'),
                esc_html__('PHP', 'wot-elementor-widgets'),
                self::MINIMUM_PHP_VERSION
            );
        }
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', esc_attr($message));
    }
}

Wotc_Elementor_Widgets_Extension::instance();
