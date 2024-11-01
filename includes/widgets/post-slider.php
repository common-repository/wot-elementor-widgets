<?php

namespace Elementor;

use Elementor\Widget_Base;


class Wotc_Post_Slider extends Widget_Base
{
    public function get_name()
    {
        return 'wot_post_slider';
    }

    public function get_title()
    {
        return esc_html__('Post Slider', 'wot-elementor-widgets');
    }

    public function get_script_depends()
    {
        return ['wot-post-slider-scripts'];
    }

    public function get_icon()
    {
        return 'eicon-posts-carousel';
    }

    public function get_categories()
    {
        return ['wot-elementor-widgets-section'];
    }

    protected function _register_controls()
    {
        require_once(WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-post-slider-controller/wot-post-slider-content-contorller.php');
        require_once(WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-post-slider-controller/wot-post-slider-style-contorller.php');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="wot-post-slider">';

        $args = [
            'posts_per_page' => intval($settings['wot_post_slider_posts_per_page']),
            'order' => sanitize_text_field($settings['wot_post_slider_order']),
            'post_type' => 'post',
        ];

        $query = new \WP_Query($args);
        echo '<div class="wot-post-slider-wrp swiper-wrapper">';
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="wot-post-slider-item swiper-slide">';

                // Featured Image
                if ($settings['wot_post_slider_show_featured_image'] === 'yes') {
                    echo '<div class="wot-post-slider-img">' . get_the_post_thumbnail() . '</div>';
                }

                echo '<div class="wot-post-slider-content">';

                // Date
                if ($settings['wot_post_slider_show_date'] === 'yes') {
                    $date_format = sanitize_text_field($settings['wot_post_slider_date_format']);
                    if (!empty($settings['wot_post_slider_custom_date_format'])) {
                        $date_format = sanitize_text_field($settings['wot_post_slider_custom_date_format']);
                    }
                    echo '<span class="wot-post-slider-date">' . esc_html(get_the_date($date_format)) . '</span>';
                }

                // Title
                echo '<h2 class="wot-post-slider-title">' . esc_html(get_the_title()) . '</h2>';

                // Categories
                if ($settings['wot_post_slider_show_categories'] === 'yes') {
                    if ($settings['wot_post_slider_show_categories_page_link'] === 'yes') {
                        echo '<div class="wot-post-slider-categories">' . wp_kses_post(get_the_category_list(', ')) . '</div>';
                    } else {
                        $categories = get_the_category();
                        if ($categories) {
                            echo '<div class="wot-post-slider-categories">';
                            $categories_list = [];
                            foreach ($categories as $category) {
                                // Escape each category name
                                $categories_list[] = esc_html($category->name);
                            }
                            // Escape the output of the implode function
                            echo esc_html(implode(', ', $categories_list));
                            echo '</div>';
                        }
                    }
                }

                // Author
                if ($settings['wot_post_slider_show_author'] === 'yes') {
                    $author_url = esc_url(get_author_posts_url(get_the_author_meta('ID')));
                    $author_name = esc_html(get_the_author());

                    if ($settings['wot_post_slider_show_author_page_link'] === 'yes') {
                        echo '<div class="wot-post-slider-author">' . esc_html('By', 'wot-post-slider') . ' <a href="' . esc_url($author_url) . '">' . esc_html($author_name) . '</a></div>';
                    } else {
                        echo '<div class="wot-post-slider-author">' . esc_html('By', 'wot-post-slider') . ' ' . esc_html($author_name) . '</div>';
                    }
                }

                // Excerpt
                if ($settings['wot_post_slider_show_excerpt'] === 'yes') {
                    echo '<div class="wot-post-slider-excerpt"><p>' . esc_html(wp_trim_words(get_the_content(), intval($settings['wot_post_slider_excerpt_words']['size']), '....')) . '</p></div>';
                }

                // Button
                if ($settings['wot_post_slider_show_button'] === 'yes') {
                    $target_blank = ($settings['wot_post_slider_button_target_blank'] === 'yes') ? ' target="_blank"' : '';
                    echo '<a href="' . esc_url(get_permalink()) . '" class="wot-post-slider-button"' . esc_attr($target_blank) . '>' . esc_html($settings['wot_post_slider_button_title']) . '</a>';
                }

                echo '</div>'; // End of .wot-post-slider-content
                echo '</div>'; // End of .wot-post-slider-item
            }
            wp_reset_postdata();
        }

        echo '</div>'; // End of .wot-post-slider-wrp
        echo '<div class="wot-post-slider-pagination"></div>';
        echo '</div>'; // End of .wot-post-slider
    }
}
Plugin::instance()->widgets_manager->register(new Wotc_Post_Slider());
