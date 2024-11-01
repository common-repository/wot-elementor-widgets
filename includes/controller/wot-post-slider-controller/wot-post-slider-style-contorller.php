<?php
namespace Elementor;

$this->start_controls_section(
    'wot_post_slider_bg_style_section',
    [
        'label' => __('Background Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name' => 'wot_post_slider_background',
        'types' => [ 'classic', 'gradient', 'video' ],
        'selector' => '{{WRAPPER}} .wot-post-slider',
    ]
);

$this->add_control(
    'wot_post_slider_bs_style_heading',
    [
        'label' => esc_html__( 'Slider Box Shadow', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'wot_post_slider_background_box_shadow',
    [
        'label' => esc_html__('Box Shadow', 'wot-elementor-widgets'),
        'type' => Controls_Manager::BOX_SHADOW,
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}};',
        ],
        'default' => [
            'horizontal' => 0,
            'vertical' => 14,
            'blur' => 80,
            'spread' => 0,
            'color' => 'rgba(34, 35, 58, 0.2)',
        ],
    ]
);

$this->add_responsive_control(
    'wot_post_slider_slider_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'default' => [
            'top' => 25,
            'right' => 25,
            'bottom' => 25,
            'left' => 25,
            'unit' => 'px',
            'isLinked' => true,
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'wot_post_slider_image_style_section',
    [
        'label' => __('Image Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'wot_post_slider_show_featured_image' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_image_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 20,
            'right' => 20,
            'bottom' => 20,
            'left' => 20,
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-img,{{WRAPPER}} .wot-post-slider-img:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_image_bs_style_heading',
    [
        'label' => esc_html__( 'Image Box Shadow', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'wot_post_slider_image_box_shadow',
    [
        'label' => esc_html__('Box Shadow', 'textdomain'),
        'type' => Controls_Manager::BOX_SHADOW,
        'selectors' => [
            '{{SELECTOR}} .wot-post-slider-img' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}};',
        ],
        'default' => [
            'horizontal' => 4,
            'vertical' => 13,
            'blur' => 30,
            'spread' => 1,
            'color' => 'rgba(241, 10, 10, 0.15)',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_image_box_overlay_style_heading',
    [
        'label' => esc_html__( 'Image Overlay', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name' => 'wot_post_slider_image_box_overlay',
        'types' => ['gradient'],
        'selector' => '{{WRAPPER}} .wot-post-slider-img:after',
        'fields_options' => [
            'background' => [
                'default' => 'gradient',
            ],
            'color' => [
                'default' => '#fe8a39',
            ],
            'color_b' => [
                'default' => '#fd3838',
            ],
            'gradient' => [
                'default' => [
                    'angle' => 131,
                    'location' => 0,
                    'location_b' => 74,
                    'type' => 'linear',
                ],
            ],
        ],
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'wot_post_slider_date_text_style_section',
    [
        'label' => __('Date Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'wot_post_slider_show_date' => 'yes',
        ],
    ]
);

$this->add_responsive_control(
    'wot_post_slider_date_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_post_slider_date_typography',
        'label' => __('Date Typography', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-post-slider-date',
        'fields_options' => [
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
            ],
            'font_weight' => [
                'default' => 500,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1.4,
                ],
            ],
        ],
    ]
);


$this->add_control(
    'wot_post_slider_date_text_color',
    [
        'label' => __('Date Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#7b7992',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-date' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'wot_post_slider_title_text_style_section',
    [
        'label' => __('Title Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_post_slider_title_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_post_slider_title_typography',
        'label' => __('Title Typography', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-post-slider-title',
        'fields_options' => [
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 24,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 18,
                ],
            ],
            'font_weight' => [
                'default' => 700,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1.4,
                ],
            ],
        ],
    ]
);


$this->add_control(
    'wot_post_slider_title_text_color',
    [
        'label' => __('Text Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#0d0925',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-title' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'wot_post_slider_excerpt_text_style_section',
    [
        'label' => __('Excerpt Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_post_slider_excerpt_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-excerpt' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_post_slider_excerpt_typography',
        'label' => __('Excerpt Typography', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-post-slider-excerpt',
        'fields_options' => [
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
            ],
            'font_weight' => [
                'default' => 400,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1.4,
                ],
            ],
        ],
    ]
);


$this->add_control(
    'wot_post_slider_excerpt_text_color',
    [
        'label' => __('Excerpt Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#4e4a67',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-excerpt,{{WRAPPER}} .wot-post-slider-author' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'wot_post_slider_button_style_section',
    [
        'label' => __('Button Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'wot_post_slider_show_button' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_button_background',
    [
        'label' => __('Button Background', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fd3838',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-button' => 'background-color: {{VALUE}};',
        ],
    ]
);


$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_post_slider_button_text_typography',
        'label' => __('Button Text Typography', 'wot-elementor-widgets'),
        'selector' => '{{WRAPPER}} .wot-post-slider-button',
        'fields_options' => [
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
            ],
            'font_weight' => [
                'default' => 500,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1.4,
                ],
            ],
        ],
    ]
);


$this->add_control(
    'wot_post_slider_button_text_color',
    [
        'label' => __('Button Text Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fff',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-button' => 'color: {{VALUE}};',
        ],
    ]
);

$this->add_responsive_control(
    'wot_post_slider_button_text_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'default' => [
            'top' => 15,
            'right' => 35,
            'bottom' => 15,
            'left' => 35,
            'unit' => 'px',
            'isLinked' => true,
        ],
    ]
);

$this->add_control(
    'wot_post_slider_button_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 50,
            'right' => 50,
            'bottom' => 50,
            'left' => 50,
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'wot_post_slider_link_style_section',
    [
        'label' => __('Link Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_post_slider_link_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-categories,{{WRAPPER}} .wot-post-slider-author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->start_controls_tabs('wot_post_slider_link_tabs');

$this->start_controls_tab(
    'wot_post_slider_link_normal_tab',
    [
        'label' => __('Normal', 'wot-elementor-widgets'),
    ]
);

$this->add_control(
    'wot_post_slider_link_color',
    [
        'label' => __('Link Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fd3838',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-categories a,{{WRAPPER}} .wot-post-slider-author a' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_post_slider_link_hover_tab',
    [
        'label' => __('Hover', 'wot-elementor-widgets'),
    ]
);

$this->add_control(
    'wot_post_slider_link_background_hover',
    [
        'label' => __('Link Hover Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#000000',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-categories a:hover,{{WRAPPER}} .wot-post-slider-author a:hover' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();


$this->start_controls_section(
    'wot_post_slider_dots_style_section',
    [
        'label' => __('Slider Dots Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->start_controls_tabs('wot_post_slider_dots_tabs');

$this->start_controls_tab(
    'wot_post_slider_dots_normal_tab',
    [
        'label' => __('Normal', 'wot-elementor-widgets'),
    ]
);

$this->add_control(
    'wot_post_slider_dots_color',
    [
        'label' => __('Normal Dot Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#062744',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-pagination .swiper-pagination-bullet' => 'background: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_post_slider_dots_active_tab',
    [
        'label' => __('Active', 'wot-elementor-widgets'),
    ]
);

$this->add_control(
    'wot_post_slider_dots_background_active',
    [
        'label' => __('Active Dot Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fd3838',
        'selectors' => [
            '{{WRAPPER}} .wot-post-slider-pagination .swiper-pagination-bullet-active' => 'background: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();
