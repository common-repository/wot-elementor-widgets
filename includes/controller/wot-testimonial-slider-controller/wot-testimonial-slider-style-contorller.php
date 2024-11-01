<?php
namespace Elementor;

$this->start_controls_section(
    'wot_testimonial_slider_general_style_section',
    [
        'label' => __('General', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

///----------General settings----------///
$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name' => 'wot_testimonial_slider_background',
        'types' => ['classic', 'gradient', 'video'],
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-main',
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->add_control(
    'wot_testimonial_slider_content_general_style',
    [
        'label' => esc_html__('Content General Style', 'wot-elementor-widgets'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'wot_testimonial_slider_content_border',
        'label' => __('Border', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-content',
        'default' => [
            'border' => 'none',
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_content_border_radius',
    [
        'label' => __('Border Radius', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_content_bg_color',
    [
        'label' => __('Backgroud color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-content' => 'background: {{VALUE}};',
        ],
    ]
);


$this->add_control(
    'wot_testimonial_slider_hero_img_general_style',
    [
        'label' => esc_html__('Hero Image Style', 'wot-elementor-widgets'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'wot_testimonial_slider_hero_img_border',
        'label' => __('Border', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-slider-slide-hero-img img',
        'fields_options' => [
            'border' => [
                'default' => 'none',
            ],
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_hero_img_border_radius',
    [
        'label' => __('Border Radius', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-slider-slide-hero-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();

///----------Title Style settings----------///

$this->start_controls_section(
    'wot_testimonial_slider_title_style_section',
    [
        'label' => __('Title', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_title_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-name h2' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'wot_testimonial_slider_title_typography',
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-name h2',
        'fields_options' => [
            'typography' => [
                'default' => 'custom',
            ],
            'font_size' => [
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 24,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
            ],
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_title_space',
    [
        'label' => __('Title Spacing', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'top' => 20,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->end_controls_section();
///----------Designation Style settings----------///
$this->start_controls_section(
    'wot_testimonial_slider_designation_style_section',
    [
        'label' => __('Designation', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_designation_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-designation p' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'wot_testimonial_slider_designation_typography',
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-designation p',
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_designation_space',
    [
        'label' => __('Title Spacing', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'top' => 0,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-designation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->end_controls_section();

///----------Description Style settings----------///
$this->start_controls_section(
    'wot_testimonial_slider_description_style_section',
    [
        'label' => __('Description', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_description_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-description p' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'wot_testimonial_slider_description_typography',
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-description p',
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_description_space',
    [
        'label' => __('Title Spacing', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'top' => 0,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->end_controls_section();

///----------Pagination Style settings----------///
$this->start_controls_section(
    'wot_testimonial_slider_pagination_style_section',
    [
        'label' => __('Pagination', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
        'conditions' => [
            'relation' => 'or',
            'terms' => [
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '==',
                    'value' => 'arrow_and_dots',
                ],
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '==',
                    'value' => 'dots',
                ],
            ],
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_pagination_space',
    [
        'label' => __('Spacing', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'top' => 10,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->start_controls_tabs('wot_testimonial_slider_pagination_tabs');

// Normal State Tab
$this->start_controls_tab(
    'wot_testimonial_slider_pagination_normal_style',
    [
        'label' => __('Normal', 'wot-elementor-widgets'),
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_normal_color',
    [
        'label' => __('Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => "",
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn' => 'background: {{VALUE}};',
        ],
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_indicator_width',
    [
        'label' => __('Width', "wot-testimonial-Font Color-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 2,
                'max' => 50,
            ],
        ],
        'default' => [
            'size' => 15,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_indicator_height',
    [
        'label' => __('Height', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 2,
                'max' => 50,
            ],
        ],
        'default' => [
            'size' => 15,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn' => 'height: {{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'wot_testimonial_slider_pagination_indicator_border',
        'label' => __('Border', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-indicator .btn',

    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_pagination_indicator_border_radius',
    [
        'label' => __('Border Radius', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
            'top' => 50,
            'right' => 50,
            'bottom' => 50,
            'left' => 50,
            'unit' => '%',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_tab();

// Hover State Tab
$this->start_controls_tab(
    'wot_testimonial_slider_pagination_hover_style',
    [
        'label' => __('Hover', 'wot-elementor-widgets'),
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_hover_color',
    [
        'label' => __('Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn:hover' => 'background: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

// Active State Tab
$this->start_controls_tab(
    'wot_testimonial_slider_pagination_active_style',
    [
        'label' => __('Active', 'wot-elementor-widgets'),
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_active_color',
    [
        'label' => __('Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn.wot-active' => 'background: {{VALUE}};',
        ],
        'default' => ""
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_active_indicator_width',
    [
        'label' => __('Width', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 2,
                'max' => 50,
            ],
        ],
        'default' => [
            'size' => 30,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn.wot-active' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'wot_testimonial_slider_pagination_active_indicator_height',
    [
        'label' => __('Height', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 2,
                'max' => 50,
            ],
        ],
        'default' => [
            'size' => 15,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn.wot-active' => 'height: {{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'wot_testimonial_slider_pagination_active_indicator_border',
        'label' => __('Border', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-testimonial-slider-indicator .btn',

    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_pagination_active_border_radius',
    [
        'label' => __('Border Radius', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
            'top' => 15,
            'right' => 15,
            'bottom' => 15,
            'left' => 15,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonial-slider-indicator .btn.wot-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();
$this->end_controls_section();


///----------Navigation Style settings----------///

$this->start_controls_section(
    'wot_testimonial_slider_navigation_style_section',
    [
        'label' => __('Navigation', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
        'conditions' => [
            'relation' => 'or',
            'terms' => [
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '==',
                    'value' => 'arrow_and_dots',
                ],
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '==',
                    'value' => 'arrow',
                ],
            ],
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_navigation_size',
    [
        'label' => __('Width', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 20,
                'max' => 50,
            ],
        ],
        'default' => [
            'size' => 30,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonialSliderButton button i' => 'font-size: {{SIZE}}{{UNIT}};',
            '{{WRAPPER}} .wot-testimonialSliderButton img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_navigation_btn_background_color',
    [
        'label' => __('Background', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => "#48484800",
        'selectors' => [
            '{{WRAPPER}} .wot-testimonialSliderButton button' => 'background: {{VALUE}};',
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_navigation_btn_arrow_color',
    [
        'label' => __('Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => "#000",
        'selectors' => [
            '{{WRAPPER}} .wot-testimonialSliderButton button i' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'wot_testimonial_slider_navigation_btn_border',
        'label' => __('Border', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-testimonialSliderButton button',
        'fields_options' => [
            'border' => [
                'default' => 'none',
            ],
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_navigation_btn_border_radius',
    [
        'label' => __('Border Radius', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonialSliderButton button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->add_responsive_control(
    'wot_testimonial_slider_navigation_btn_padding',
    [
        'label' => __('Spacing', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'top' => 0,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-testimonialSliderButton button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);


$this->end_controls_section();