<?php

namespace Elementor;

use Elementor\Widget_Base;


class Wotc_Testimonial_Slider extends Widget_Base
{

    public function get_name()
    {
        return 'wot_testimonial_slider';
    }

    public function get_title()
    {
        return esc_html__('Testimonial Slider', 'wot-elementor-widgets');
    }

    public function get_script_depends()
    {
        return ['wot-testimonial-slider-scripts'];
    }

    public function get_icon()
    {
        return 'eicon-slider-album';
    }

    public function get_categories()
    {
        return ['wot-elementor-widgets-section'];
    }

    protected function _register_controls()
    {
        require_once (WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-testimonial-slider-controller/wot-testimonial-slider-content-contorller.php');
        require_once (WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-testimonial-slider-controller/wot-testimonial-slider-style-contorller.php');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $navigation_type = isset($settings['wot_testimonial_slider_navigation_type']) ? $settings['wot_testimonial_slider_navigation_type'] : 'arrow_and_dots';
        $slider_autoplay = $settings['wot_testimonial_slider_autoplay'];
        $pauseonhover = $settings['wot_testimonial_slider_pause_on_hover'] === 'yes' ? 'data-pause=true' : 'data-pause=false';
        $infinity_loop = $settings['wot_testimonial_slider_infinite_loop'] === 'yes' ? 'data-infinite=true' : 'data-infinite=false';
        $slider_autoplay = $settings['wot_testimonial_slider_autoplay'] === 'yes' ? 'data-animationspeed=' . esc_attr($settings['wot_testimonial_slider_animation_speed']) . '' : 'data-animationspeed="false"';
        ?>
        <div class="wot-testimonial-slider-main" id="testimonial-slider-container">
            <div class="wot-testimonial-slider-inner">
                <div class="wot-slider wot-slider-slide-row" id="wot-testimonial-slider-id" <?php echo esc_attr($pauseonhover) . " " . esc_attr($infinity_loop) . " " . esc_attr($slider_autoplay); ?>>
                    <?php foreach ($settings['wot_testimonial_slider'] as $testimonial): ?>
                        <div class="wot-slider-slide-repeater">
                            <div class="wot-slider-slide-hero-img">
                                <img src="<?php echo esc_url($testimonial['wot_testimonial_image']['url']); ?>"
                                    alt="<?php echo esc_attr($testimonial['wot_testimonial_name']); ?>">
                            </div>
                            <div class="wot-testimonial-slider-content">
                                <div class="wot-testimonial-slider-description">
                                    <p><?php echo esc_html($testimonial['wot_testimonial_content']); ?></p>
                                </div>
                                <div class="wot-testimonial-slider-name">
                                    <h2><?php echo esc_html($testimonial['wot_testimonial_name']); ?></h2>
                                </div>
                                <div class="wot-testimonial-slider-designation">
                                    <p><?php echo esc_html($testimonial['wot_testimonial_company']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if ($navigation_type === 'arrow_and_dots' || $navigation_type === 'dots'): ?>
                    <div class="wot-testimonial-slider-indicator">
                        <?php foreach ($settings['wot_testimonial_slider'] as $index => $testimonial): ?>
                            <span class="btn<?php echo $index === 0 ? ' wot-active' : ''; ?>"></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($navigation_type === 'arrow_and_dots' || $navigation_type === 'arrow'): ?>
                <div class="wot-testimonialSliderButton">
                    <button class="slider-button-prev">
                        <?php
                        if (isset($settings['wot_testimonial_slider_navigation_type_previous_icon'])):
                            $prev_icon_value = $settings['wot_testimonial_slider_navigation_type_previous_icon'];
                            if (is_array($prev_icon_value) && !empty($prev_icon_value['value'])):
                                if ($prev_icon_value['library'] === 'svg'):
                                    $prev_svg_url = $prev_icon_value['value']['url'];
                                    // Handle SVG
                                    ?>
                                    <img src="<?php echo esc_url($prev_svg_url); ?>" alt="Previous SVG">
                                    <?php
                                else:
                                    $prev_icon_class = $prev_icon_value['value'];
                                    // Handle font awesome icon
                                    ?>
                                    <i class="<?php echo esc_attr($prev_icon_class); ?>"></i>
                                    <?php
                                endif;
                            endif;
                        endif;
                        ?>
                    </button>
                    <button class="slider-button-next">
                        <?php
                        if (isset($settings['wot_testimonial_slider_navigation_type_next_icon'])):
                            $next_icon_value = $settings['wot_testimonial_slider_navigation_type_next_icon'];
                            if (is_array($next_icon_value) && !empty($next_icon_value['value'])):
                                if ($next_icon_value['library'] === 'svg'):
                                    $next_svg_url = $next_icon_value['value']['url'];
                                    // Handle SVG
                                    ?>
                                    <img src="<?php echo esc_url($next_svg_url); ?>" alt="Next SVG">
                                    <?php
                                else:
                                    $next_icon_class = $next_icon_value['value'];
                                    // Handle font awesome icon
                                    ?>
                                    <i class="<?php echo esc_attr($next_icon_class); ?>"></i>
                                    <?php
                                endif;
                            endif;
                        endif;
                        ?>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <?php
    }


}
Plugin::instance()->widgets_manager->register(new Wotc_Testimonial_Slider());
?>