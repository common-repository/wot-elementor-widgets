<?php

namespace Elementor;

use Elementor\Widget_Base;


class Wotc_Tabs_Slider extends Widget_Base
{

    public function get_name()
    {
        return 'wot_tabs_slider';
    }

    public function get_title()
    {
        return esc_html__('Tabs Slider', 'wot-elementor-widgets');
    }

    public function get_script_depends()
    {
        return ['wot-tabs-slider-scripts'];
    }

    public function get_icon()
    {
        return 'eicon-slider-vertical';
    }

    public function get_categories()
    {
        return ['wot-elementor-widgets-section'];
    }

    protected function _register_controls()
    {
        require_once(WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-tabs-slider-controller/wot-tabs-slider-content-contorller.php');
        require_once(WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-tabs-slider-controller/wot-tabs-slider-style-contorller.php');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        
        $prev_icon_value = isset($settings['wot_tabs_slider_navigation_type_previous_icon']['value']['url'])
            ? esc_url($settings['wot_tabs_slider_navigation_type_previous_icon']['value']['url'])
            : esc_attr($settings['wot_tabs_slider_navigation_type_previous_icon']['value']);
        
        $next_icon_value = isset($settings['wot_tabs_slider_navigation_type_next_icon']['value']['url'])
            ? esc_url($settings['wot_tabs_slider_navigation_type_next_icon']['value']['url'])
            : esc_attr($settings['wot_tabs_slider_navigation_type_next_icon']['value']);

        echo '<div class="wot-tab-slider" data-prev-icon="' . esc_attr($prev_icon_value) . '" data-next-icon="' . esc_attr($next_icon_value) . '">';
        echo '<div class="wot-tab-slider-module-inner">';
        echo '<div class="wot-tab-slider-left">';
    
        foreach ($settings['wot_tabs_slider'] as $slide) {
            echo '<div class="wot-tab-slider-card">';
            echo '<div class="wot-tab-slider-card-inner">';
    
            if (!empty($slide['wot_tabs_icon'])) {
                echo '<div class="wot-tab-slider-icon">';
                echo '<img src="' . esc_url($slide['wot_tabs_icon']['url']) . '" alt="#">';
                echo '</div>';
            }
    
            if (!empty($slide['wot_tabs_title']) || !empty($slide['wot_tabs_subtitle'])) {
                echo '<div class="wot-tab-slider-title">';
                if (!empty($slide['wot_tabs_title'])) {
                    echo '<h6>' . esc_html($slide['wot_tabs_title']) . '</h6>';
                }
                if (!empty($slide['wot_tabs_subtitle'])) {
                    echo '<span>' . esc_html($slide['wot_tabs_subtitle']) . '</span>';
                }
                echo '</div>';
            }
    
            echo '</div>';
            echo '</div>';
        }
    
        echo '</div>';
        echo '<div class="wot-tab-slider-right">';
    
        foreach ($settings['wot_tabs_slider'] as $slide) {
            echo '<div>';
            echo '<div class="wot-tab-slider-card-content">';
            echo '<div class="wot-tab-slider-card-content-inner">';
    
            if (!empty($slide['wot_tabs_image']['url'])) {
                echo '<div class="wot-tab-slider-card-content-left-image">';
                echo '<img src="' . esc_url($slide['wot_tabs_image']['url']) . '" alt="#">';
                echo '</div>';
            }
    
            echo '<div class="wot-tab-slider-card-content-right">';
    
            if (!empty($slide['wot_tabs_title'])) {
                echo '<div class="wot-tab-slider-card-content-title">';
                echo '<h2>' . esc_html($slide['wot_tabs_title']) . '</h2>';
                echo '</div>';
            }
    
            if (!empty($slide['wot_tabs_subtitle'])) {
                echo '<div class="wot-tab-slider-card-content-sub-title">';
                echo '<h3>' . esc_html($slide['wot_tabs_subtitle']) . '</h3>';
                echo '</div>';
            }
    
            if (!empty($slide['wot_tabs_content'])) {
                echo '<div class="wot-tab-slider-card-content-description">';
                echo wp_kses_post($slide['wot_tabs_content']);  // Allow safe HTML for content
                echo '</div>';
            }
    
            if (!empty($slide['wot_tabs_button_text']) && !empty($slide['wot_tabs_button_link']['url'])) {
                echo '<div class="wot-tab-slider-card-content-button">';
                echo '<a class="wot-tab-slider-button" href="' . esc_url($slide['wot_tabs_button_link']['url']) . '"';
                if (!empty($slide['wot_tabs_button_link']['is_external'])) {
                    echo ' target="_blank"';
                }
                if (!empty($slide['wot_tabs_button_link']['nofollow'])) {
                    echo ' rel="nofollow"';
                }
                echo '>' . esc_html($slide['wot_tabs_button_text']) . '</a>';
                echo '</div>';
            }
    
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    protected function _content_template()
    {
?>
        <# var slides=settings.wot_tabs_slider; 
        var prevIconValue = typeof settings.wot_tabs_slider_navigation_type_previous_icon.value === 'object' 
        ? settings.wot_tabs_slider_navigation_type_previous_icon.value.url 
        : settings.wot_tabs_slider_navigation_type_previous_icon.value;

        var nextIconValue = typeof settings.wot_tabs_slider_navigation_type_next_icon.value === 'object' 
        ? settings.wot_tabs_slider_navigation_type_next_icon.value.url 
        : settings.wot_tabs_slider_navigation_type_next_icon.value;
        
        #>
            <div class="wot-tab-slider" data-prev-icon="{{prevIconValue}}" data-next-icon="{{nextIconValue}}">
                <div class="wot-tab-slider-module-inner">
                    <div class="wot-tab-slider-left">
                        <# _.each( slides, function( slide ) { #>
                            <div class="wot-tab-slider-card">
                                <div class="wot-tab-slider-card-inner">
                                    <# if ( slide.wot_tabs_icon.url ) { #>
                                        <div class="wot-tab-slider-icon">
                                            <img src="{{ slide.wot_tabs_icon.url }}" alt="#">
                                        </div>
                                    <# } #>
                                    <# if (slide.wot_tabs_title || slide.wot_tabs_subtitle ) { #>
                                        <div class="wot-tab-slider-title">
                                            <h6>{{ slide.wot_tabs_title }}</h6>
                                            <span>{{ slide.wot_tabs_subtitle }}</span>
                                        </div>
                                    <# } #>
                                </div>
                            </div>
                            <# } ); #>
                    </div>
                    <div class="wot-tab-slider-right">
                        <# _.each( slides, function( slide ) { #>
                            <div>
                                <div class="wot-tab-slider-card-content">
                                    <div class="wot-tab-slider-card-content-inner">
                                        <# if ( slide.wot_tabs_image.url ) { #>
                                            <div class="wot-tab-slider-card-content-left-image">
                                                <img src="{{ slide.wot_tabs_image.url }}" alt="#">
                                            </div>
                                        <# } #>
                                        <div class="wot-tab-slider-card-content-right">
                                            <# if ( slide.wot_tabs_title ) { #>
                                                <div class="wot-tab-slider-card-content-title"><h2>{{{ slide.wot_tabs_title }}}</h2></div>
                                            <# } #>
                                            <# if ( slide.wot_tabs_subtitle ) { #>
                                                <div class="wot-tab-slider-card-content-sub-title"><h3>{{ slide.wot_tabs_subtitle }}</h3></div>
                                            <# } #>
                                            <# if ( slide.wot_tabs_content ) { #>
                                                <div class="wot-tab-slider-card-content-description">{{{ slide.wot_tabs_content }}}</div>
                                            <# } #>
                                            <# if ( slide.wot_tabs_button_text ) { #>
                                                <div class="wot-tab-slider-card-content-button"><a class="wot-tab-slider-button" href="{{ slide.wot_tabs_button_link.url }}">{{ slide.wot_tabs_button_text }}</a></div>
                                            <# } #>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <# } ); #>
                    </div>
                </div>
            </div>
    <?php
    }
}
Plugin::instance()->widgets_manager->register(new Wotc_Tabs_Slider());
