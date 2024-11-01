<?php
namespace Elementor;

$this->start_controls_section(
    'wot_tabs_slider_general_style_section',
    [
        'label' => __('General', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

///----------General settings----------///
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name' => 'wot_tabs_slider_background',
        'types' => ['classic', 'gradient', 'video'],
        'selector' => '{{WRAPPER}} .wot-tab-slider',
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 20,
            'right' => 20,
            'bottom' => 20,
            'left' => 20,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'wot_tabs_slider_border',
        'selector' => '{{WRAPPER}} .wot-tab-slider',
        'fields_options' => [
            'border' => [
                'default' => 'solid',
            ],
            'width' => [
                'default' => [
                    'top' => 1,
                    'right' => 1,
                    'bottom' => 1,
                    'left' => 1,
                    'isLinked' => true,
                ],
            ],
            'color' => [
                'default' => '#000000',
            ],
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'wot_tabs_slider_title_style_section',
    [
        'label' => __('Left Content', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'wot_tabs_slider_tab_style_heading',
    [
        'label' => esc_html__( 'Tab Styles', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_tab_style_padding',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 0,
            'bottom' => 10,
            'left' => 0,
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .wot-tab-slider-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_icon_style_heading',
    [
        'label' => esc_html__( 'Title Icon Styles', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'wot_tabs_slider_icon_border',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-current .wot-tab-slider-icon',
    ]
);

$this->add_control(
    'wot_tabs_slider_icon_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-current .wot-tab-slider-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_icon_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 4,
            'right' => 4,
            'bottom' => 4,
            'left' => 4,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-current .wot-tab-slider-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_title_style_heading',
    [
        'label' => esc_html__( 'Title Styles', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_tabs_slider_title_typography',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .wot-tab-slider-title h6',
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
                'default' => 600,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1,
                ],
            ],
        ],
    ]
);


$this->start_controls_tabs(
    'wot_tabs_slider_title_style_tabs'
);

$this->start_controls_tab(
    'wot_tabs_slider_title_style_normal_tab',
    [
        'label' => esc_html__( 'Normal', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_title_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .wot-tab-slider-title' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_tabs_slider_title_style_active_tab',
    [
        'label' => esc_html__( 'Active', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_title_active_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-current .wot-tab-slider-title> *' => 'color: {{VALUE}};',
        ],
        'default'=>'#cc3366',
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->add_control(
    'wot_tabs_slider_subtitle_style_heading',
    [
        'label' => esc_html__( 'Subtitle Styles', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_tabs_slider_subtitle_typography',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-title span',
        'fields_options' => [
            'typography' => [
                'default' => 'default',
            ],
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
            ],
            'font_weight' => [
                'default' => 500,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1,
                ],
            ],
        ],
    ]
);

$this->start_controls_tabs(
    'wot_tabs_slider_subtitle_style_tabs'
);

$this->start_controls_tab(
    'wot_tabs_slider_subtitle_style_normal_tab',
    [
        'label' => esc_html__( 'Normal', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_subtitle_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .wot-tab-slider-title span' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_tabs_slider_subtitle_style_active_tab',
    [
        'label' => esc_html__( 'Active', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_subtitle_active_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-current .wot-tab-slider-title span' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();

$this->start_controls_section(
    'wot_tabs_slider_center_style_section',
    [
        'label' => __('Image Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_center_image_padding',
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
            '{{WRAPPER}} .wot-tab-slider-card-content-left-image' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'wot_tabs_slider_center_image_border',
        'selector' => '{{WRAPPER}} .wot-tab-slider-card-content-left-image img',
        'fields_options' => [
            'border' => [
                'default' => 'solid',
            ],
            'width' => [
                'default' => [
                    'top' => 1,
                    'right' => 1,
                    'bottom' => 1,
                    'left' => 1,
                    'isLinked' => true,
                ],
            ],
            'color' => [
                'default' => '#E6E6E5',
            ],
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_center_image_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider-card-content-left-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'wot_tabs_slider_right_content_style_section',
    [
        'label' => __('Right Content', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'wot_tabs_slider_right_content_title_style_heading',
    [
        'label' => esc_html__( 'Title Style', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_tabs_slider_right_content_title_style_typography',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-card-content-title h2',
        'fields_options' => [
            'typography' => [
                'default' => 'default',
            ],
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 28,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 24,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
            ],
            'font_weight' => [
                'default' => 600,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1,
                ],
            ],
        ],
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_right_content_title_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 0,
            'bottom' => 10,
            'left' => 0,
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-card-content-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_right_content_title_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-card-content-title h2' => 'color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_right_content_subtitle_style_heading',
    [
        'label' => esc_html__( 'Subtitle Style', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_tabs_slider_right_content_subtitle_style_typography',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-card-content-sub-title h3',
        'fields_options' => [
            'typography' => [
                'default' => 'default',
            ],
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
                    'size' => 16,
                ],
            ],
            'font_weight' => [
                'default' => 400,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1,
                ],
            ],
        ],
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_right_content_subtitle_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 0,
            'bottom' => 10,
            'left' => 0,
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-card-content-sub-title h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_right_content_subtitle_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-card-content-sub-title h3' => 'color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_right_content_description_style_heading',
    [
        'label' => esc_html__( 'Description Style', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_tabs_slider_right_content_description_style_typography',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-card-content-description',
        'fields_options' => [
            'typography' => [
                'default' => 'default',
            ],
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
            ],
            'font_weight' => [
                'default' => 400,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1.5,
                ],
            ],
        ],
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_right_content_description_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 0,
            'bottom' => 10,
            'left' => 0,
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-card-content-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_right_content_description_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-card-content-description' => 'color: {{VALUE}};',
        ],
        'default' =>'#363333d4',
    ]
);

$this->add_control(
    'wot_tabs_slider_button_style_heading',
    [
        'label' => esc_html__( 'Button Styles', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'wot_tabs_slider_button_typography',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button',
        'fields_options' => [
            'typography' => [
                'default' => 'default',
            ],
            'font_family' => [
                'default' => 'Roboto',
            ],
            'font_size' => [
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
            ],
            'font_weight' => [
                'default' => 500,
            ],
            'line_height' => [
                'default' => [
                    'unit' => 'em',
                    'size' => 1,
                ],
            ],
        ],
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_button_margin',
    [
        'label' => __('Margin', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 0,
            'bottom' => 10,
            'left' => 0,
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_button_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 10,
            'right' => 20,
            'bottom' => 10,
            'left' => 20,
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'wot_tabs_slider_button',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button',
    ]
);

$this->add_control(
    'wot_tabs_slider_button_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 5,
            'right' => 5,
            'bottom' => 5,
            'left' => 5,
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->start_controls_tabs(
    'wot_tabs_slider_button_style_tabs'
);

$this->start_controls_tab(
    'wot_tabs_slider_button_style_normal_tab',
    [
        'label' => esc_html__( 'Normal', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_button_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button' => 'color: {{VALUE}};',
        ],
        'default'=>'#cc3366',
    ]
);

$this->add_control(
    'wot_tabs_slider_button_bg_color',
    [
        'label' => __('Background Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button' => 'background-color: {{VALUE}};',
        ],
        'default'=>'#fff',
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_tabs_slider_button_style_hover_tab',
    [
        'label' => esc_html__( 'Hover', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_button_hover_font_color',
    [
        'label' => __('Font Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button:hover' => 'color: {{VALUE}};',
        ],
        'default'=>'#fff',
    ]
);

$this->add_control(
    'wot_tabs_slider_button_bg_hover_color',
    [
        'label' => __('Background Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-right .wot-tab-slider-button:hover' => 'background-color: {{VALUE}};',
        ],
        'default'=>'#cc3366',
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();

$this->start_controls_section(
    'wot_tabs_slider_arrow_style_section',
    [
        'label' => __('Arrow Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'wot_tabs_slider_arrow_padding',
    [
        'label' => __('Padding', 'wot-elementor-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'], // Add relevant size units here
        'default' => [
            'top' => 20,
            'right' => 20,
            'bottom' => 20,
            'left' => 20,
            'unit' => 'px',
        ],
        'tablet_default' => [
            'top' => 15,
            'right' => 15,
            'bottom' => 15,
            'left' => 15,
            'unit' => 'px',
        ],
        'mobile_default' => [
            'top' => 10,
            'right' => 10,
            'bottom' => 10,
            'left' => 10,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up,{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'wot_tabs_slider_arrow_border',
        'selector' => '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up,{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down',
        'fields_options' => [
            'border' => [
                'default' => 'solid',
            ],
            'width' => [
                'default' => [
                    'top' => 1,
                    'right' => 1,
                    'bottom' => 1,
                    'left' => 1,
                    'isLinked' => true,
                ],
            ],
            'color' => [
                'default' => '#000000',
            ],
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_arrow_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
        'default' => [
            'top' => 50,
            'right' => 50,
            'bottom' => 50,
            'left' => 50,
            'unit' => '%',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up,{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->start_controls_tabs(
    'wot_tabs_slider_arrow_style_tabs'
);

$this->start_controls_tab(
    'wot_tabs_slider_arrow_style_normal_tab',
    [
        'label' => esc_html__( 'Normal', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_arrow_button_color',
    [
        'label' => __('Button Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up, {{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down' => 'color: {{VALUE}};',
        ],
        'default'=>'#000',
    ]
);

$this->add_control(
    'wot_tabs_slider_arrow_button_bgcolor',
    [
        'label' => __('Button Background Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up, {{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down' => 'background-color: {{VALUE}};',
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-dots li.slick-active' => 'background-color: {{VALUE}};color: {{VALUE}};',
        ],
        'default'=>'#fff',
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_tabs_slider_arrow_style_hover_tab',
    [
        'label' => esc_html__( 'Hover', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_arrow_hover_button_color',
    [
        'label' => __('Button Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up:hover, {{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down:hover' => 'color: {{VALUE}};',
        ],
        'default'=>'#fff',
    ]
);

$this->add_control(
    'wot_tabs_slider_arrow_hover_button_bgcolor',
    [
        'label' => __('Button Background Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-up:hover, {{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-down:hover' => 'background-color: {{VALUE}};',
        ],
        'default'=>'#000',
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();

$this->start_controls_section(
    'wot_tabs_slider_dots_section',
    [
        'label' => __('Responsive Slider Dots Style', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->start_controls_tabs(
    'wot_tabs_slider_dots_tabs'
);

$this->start_controls_tab(
    'wot_tabs_slider_dots_normal_tab',
    [
        'label' => esc_html__( 'Normal', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_dots_color',
    [
        'label' => __('Button Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-dots' => 'color: {{VALUE}};',
        ],
        'default'=>'#000',
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'wot_tabs_slider_dots_active_tab',
    [
        'label' => esc_html__( 'Active', 'wot-elementor-widgets' ),
    ]
);

$this->add_control(
    'wot_tabs_slider_dots_active_color',
    [
        'label' => __('Button Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .wot-tab-slider .wot-tab-slider-left .slick-dots li.slick-active' => 'color: {{VALUE}};background-color: {{VALUE}};',
        ],
        'default'=>'#cc3366',
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();