<?php
// --------------------------style Tab Start-----------------------------------------------//
if ( ! defined( 'ABSPATH' ) ) exit;
use Elementor\Controls_Manager;

$this->start_controls_section(
    'tabflex_tab_general_style_section',
    [
        'label' => __('General', "wot-elementor-widgets"),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'tabflex_tab_generala_style',
    [
        'label' => esc_html__('Title', "wot-elementor-widgets"),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->start_controls_tabs('tab_general_style_tabs');
// Normal State Tab
$this->start_controls_tab(
    'tabflex_tab_normal_style',
    [
        'label' => __('Normal', "wot-elementor-widgets"),
    ]
);

$this->add_control(
    'tabflex_tab_normal_style_bg_color',
    [
        'label' => __('Background Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead' => 'background-color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'tabflex_tab_normal_style_border_type',
    [
        'label' => __('Border type', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'none' => __('None', "wot-elementor-widgets"),
            'solid' => __('Solid', "wot-elementor-widgets"),
            'dashed' => __('Dashed', "wot-elementor-widgets"),
            'dotted' => __('Dotted', "wot-elementor-widgets"),
            'double' => __('Double', "wot-elementor-widgets"),
            'groove' => __('Groove', "wot-elementor-widgets"),
            'ridge' => __('Ridge', "wot-elementor-widgets"),
            'inset' => __('Inset', "wot-elementor-widgets"),
            'outset' => __('Outset', "wot-elementor-widgets"),
        ],
        'default' => 'solid',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead' => 'border-style: {{VALUE}};',
        ],
        'separator' => 'before',
    ]
);

$this->add_control(
    'tabflex_tab_normal_style_border_color',
    [
        'label' => __('Border Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'default' => '#ffffff00',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead' => 'border-color: {{VALUE}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_tab_normal_style_border_width',
    [
        'label' => __('Border Width', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px'],
        'default' => [
            'top' => 1,
            'right' => 1,
            'bottom' => 1,
            'left' => 1,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],

    ]
);


$this->add_responsive_control(
    'tabflex_tab_normal_style_border_radius',
    [
        'label' => __('Border Radius', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%'],
        'default' => [
            'top' => 20,
            'right' => 20,
            'bottom' => 20,
            'left' => 20,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],

    ]
);

$this->add_responsive_control(
    'tabflex_tab_main_title_padding',
    [
        'label' => __('Title Padding', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
            'top' => 15,
            'right' => 17,
            'bottom' => 15,
            'left' => 17,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->add_control(
    'tabflex_tab_title_box_gap',
    [
        'label' => __('Title box Gap', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'size' => 30,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsToggle ul' => 'gap: {{SIZE}}{{UNIT}};',
        ],
        'separator' => 'before',
    ]
);
$this->add_control(
    'tabflex_tab_title_box_vs_Content_box_gap',
    [
        'label' => __('Title box Vs Content Box Gap', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'size' => 20,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTwoColParent' => 'gap: {{SIZE}}{{UNIT}};',
        ],
    ]
);
$this->end_controls_tab();

// Hover State Tab
$this->start_controls_tab(
    'tab_hover_style',
    [
        'label' => __('Hover', "wot-elementor-widgets"),
    ]
);

$this->add_control(
    'tabflex_tab_hover_style_bg_color',
    [
        'label' => __('Background Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead:hover' => 'background-color: {{VALUE}};',
        ],
    ]
);


$this->end_controls_tab();

// Active State Tab
$this->start_controls_tab(
    'tabflex_tab_active_style',
    [
        'label' => __('Active', "wot-elementor-widgets"),
    ]
);

$this->add_control(
    'tabflex_tab_active_style_bg_color',
    [
        'label' => __('Background Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead.tabFlex_TabActive' => 'background-color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'tabflex_tab_active_style_border_type',
    [
        'label' => __('Border Type', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'none' => __('None', "wot-elementor-widgets"),
            'solid' => __('Solid', "wot-elementor-widgets"),
            'dashed' => __('Dashed', "wot-elementor-widgets"),
            'dotted' => __('Dotted', "wot-elementor-widgets"),
            'double' => __('Double', "wot-elementor-widgets"),
            'groove' => __('Groove', "wot-elementor-widgets"),
            'ridge' => __('Ridge', "wot-elementor-widgets"),
            'inset' => __('Inset', "wot-elementor-widgets"),
            'outset' => __('Outset', "wot-elementor-widgets"),
        ],
        'default' => 'solid',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead.tabFlex_TabActive' => 'border-style: {{VALUE}};',
        ],
        'separator' => 'before',
    ]
);

$this->add_control(
    'tabflex_tab_active_style_border_color',
    [
        'label' => __('Border Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'default' => '#000000',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead.tabFlex_TabActive' => 'border-color: {{VALUE}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_tab_active_style_border_width',
    [
        'label' => __('Border Width', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px'],
        'default' => [
            'top' => 1,
            'right' => 1,
            'bottom' => 1,
            'left' => 1,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead.tabFlex_TabActive' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_tab_active_style_border_radius',
    [
        'label' => __('Border Radius', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%'],
        'default' => [
            'top' => 20,
            'right' => 20,
            'bottom' => 20,
            'left' => 20,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead.tabFlex_TabActive' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],

    ]
);



$this->end_controls_tab();

$this->end_controls_tabs();

$this->add_control(
    'tabflex_right_side_main_conmtent_style',
    [
        'label' => esc_html__('Content', "wot-elementor-widgets"),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->add_responsive_control(
    'tabflex_tab_rightside_content_padding',
    [
        'label' => __('Content Padding', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabContentPart' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


//---------------------------tab icon start-----------------------------------------------/

$this->start_controls_section(
    'tabflex_tab_icon_style_section',
    [
        'label' => __('Tab Icon', "wot-elementor-widgets"),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);



$this->add_responsive_control(
    'tabflex_tab_icon_gap',
    [
        'label' => __('Icon Gap', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'size' => 10,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop' => 'gap: {{SIZE}}{{UNIT}};',
        ],
    ]
);


$this->add_responsive_control(
    'tabflex_tab_icon_position',
    [
        'label' => __('Icon Position', "wot-elementor-widgets"),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'row' => [
                'title' => __('Left', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-left',
            ],
            'row-reverse' => [
                'title' => __('Right', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-right',
            ],
            'column' => [
                'title' => __('Above', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-top',
            ],
            'column-reverse' => [
                'title' => __('Below', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-bottom',
            ],
        ],
        'default' => 'row',
        'label_block' => true,
        'prefix_class' => 'tab-icon-{{VALUE}}',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop' => 'flex-direction: {{VALUE}};',
        ],
    ]
);


$this->add_control(
    'tabflex_tab_icon_justify_content',
    [
        'label' => __('Icon Justify Content', "wot-elementor-widgets"),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'flex-start' => [
                'title' => __('Start', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-top',
            ],
            'center' => [
                'title' => __('Center', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-middle',
            ],
            'flex-end' => [
                'title' => __('End', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-bottom',
            ],
        ],
        'default' => 'Center',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop' => 'justify-content: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'tabflex_tab_icon_align_items',
    [
        'label' => __('Icon Align Items', "wot-elementor-widgets"),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'flex-start' => [
                'title' => __('Start', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-left',
            ],
            'center' => [
                'title' => __('Center', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-center',
            ],
            'flex-end' => [
                'title' => __('End', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-right',
            ],
        ],
        'default' => 'Center',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop' => 'align-items: {{VALUE}};',
        ],
    ]
);
$this->add_control(
    'tabflex_tab_icon_color',
    [
        'label'  => esc_html__('Color', 'wot-elementor-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#000000',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop i' => 'color: {{VALUE}}',
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop svg' => 'fill: {{VALUE}}',
        ],
    ]
);
// Add other controls for icon style...
$this->add_responsive_control(
    'tabflex_tab_icon_size',
    [
        'label' => esc_html__('Icon Size', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 5,
                'max' => 100,
            ],
        ],
        'default' => [
            'unit' => 'px',
            'size' => 40,
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop i' => 'font-size: {{SIZE}}{{UNIT}};',
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop svg' => 'width: {{SIZE}}{{UNIT}};',
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop img' => 'width: {{SIZE}}{{UNIT}};',
        ],
        'separator' => 'before',
    ]
);

$this->add_responsive_control(
    'tabflex_tab_icon_height',
    [
        'label' => __('Icon Height', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'min' => 5,
                'max' => 100,
            ],
        ],
        'default' => [
            'size' => 40,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop svg' => 'height: {{SIZE}}{{UNIT}};',
            '{{WRAPPER}} .tabFlex_TabTitleSvgIconTop img' => 'height: {{SIZE}}{{UNIT}};',
        ],
    ]
);


$this->add_control(
    'tabflex_tab_icon_border_type',
    [
        'label' => __('Border Type', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'none' => __('None', "wot-elementor-widgets"),
            'solid' => __('Solid', "wot-elementor-widgets"),
            'dashed' => __('Dashed', "wot-elementor-widgets"),
            'dotted' => __('Dotted', "wot-elementor-widgets"),
            'double' => __('Double', "wot-elementor-widgets"),
            'groove' => __('Groove', "wot-elementor-widgets"),
            'ridge' => __('Ridge', "wot-elementor-widgets"),
            'inset' => __('Inset', "wot-elementor-widgets"),
            'outset' => __('Outset', "wot-elementor-widgets"),
        ],
        'default' => 'none',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead .tabFlex_TabHeadIcon' => 'border-style: {{VALUE}};',
        ],
        'separator' => 'before',
    ]
);

$this->add_control(
    'tabflex_tab_icon_border_color',
    [
        'label' => __('Border Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead .tabFlex_TabHeadIcon' => 'border-color: {{VALUE}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_tab_icon_border_width',
    [
        'label' => __('Border Width', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead .tabFlex_TabHeadIcon' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_tab_icon_border_radius',
    [
        'label' => __('Border Radius', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabsTop a.tabFlex_tabHead .tabFlex_TabHeadIcon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);


$this->add_responsive_control(
    'tabflex_tab_icon_padding',
    [
        'label' => __('Padding', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,

        'selectors' => [
            '{{WRAPPER}}  .tabFlex_tabsTop a.tabFlex_tabHead .tabFlex_TabHeadIcon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],

        'separator' => 'before',
    ]
);
$this->end_controls_section();


// --------------------------icon style end-----------------------------------------------//

// --------------------------Tab title style Start-----------------------------------------------//


$this->start_controls_section(
    'tabflex_style_section',
    [
        'label' => __('Title', "wot-elementor-widgets"),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->start_controls_tabs('style_tabs');

$this->add_control(
    'tabflex_title_element',
    [
        'label' => __('Title Element', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'default' => 'h6',
        'options' => [
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'tabflex_tab_title_typography',
        'label' => __('Typography', "wot-elementor-widgets"),
        'selector' => '{{WRAPPER}} .tabFlex_TabHeadTitle h1, {{WRAPPER}} .tabFlex_TabHeadTitle h2, {{WRAPPER}} .tabFlex_TabHeadTitle h3, {{WRAPPER}} .tabFlex_TabHeadTitle h4, {{WRAPPER}} .tabFlex_TabHeadTitle h5, {{WRAPPER}} .tabFlex_TabHeadTitle h6',
    ]
);

$this->add_responsive_control(
    'tabflex_tab_title_padding',
    [
        'label' => __('Padding', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,

        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabHeadTitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],

    ]
);

$this->add_control(
    'tabflex_tab_title_text_color',
    [
        'label' => __('Text Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabHeadTitle' => 'color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();
$this->end_controls_section();


// --------------------------Tab title style end-----------------------------------------------//
// --------------------------sub title style end-----------------------------------------------//
$this->start_controls_section(
    'tabflex_tabhead_tab_subtitle_style_section',
    [
        'label' => __('Sub-Tilte', "wot-elementor-widgets"),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'tabflex_tabhead_tab_subtitle_typography',
        'label' => __('Content Typography', "wot-elementor-widgets"),
        'selector' => '{{WRAPPER}} .tabFlex_TabHeadSubTitle',
    ]
);
$this->add_control(
    'tabflex_tabhead_tab_subtitle_text_color',
    [
        'label' => __('Text Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabHeadSubTitle' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_responsive_control(
    'tabflex_tabhead_tab_subtitle_padding',
    [
        'label' => __('Content Padding', "wot-elementor-widgets"),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
            'top' => 12,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabHeadSubTitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_tabhead_tab_subtitle_text_align',
    [
        'label' => __('Content Text Align', "wot-elementor-widgets"),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => __('Left', "wot-elementor-widgets"),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => __('Center', "wot-elementor-widgets"),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => __('Right', "wot-elementor-widgets"),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => "center",
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabHeadSubTitle' => 'text-align: {{VALUE}};',
        ],
    ]
);
$this->end_controls_section();


// --------------------------right side content style end-----------------------------------------------//
$this->start_controls_section(
    'tabflex_tab_main_content_style_section',
    [
        'label' => __('Content', "wot-elementor-widgets"),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

// Text Section
$this->add_control(
    'tabflex_right_side_tab_title_style',
    [
        'label' => esc_html__('Title', "wot-elementor-widgets"),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->add_control(
    'tabflex_right_side_tab_title_element',
    [
        'label' => __('Title Element', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'default' => 'h6',
        'options' => [
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        ],
    ]
);
$this->add_control(
    'right_side_tabflex_tab_title_text_color',
    [
        'label' => __('Text Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_RightSideTabTitle' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'tabflex_right_side_tab_title_typography',
        'label' => __('Title Typography', "wot-elementor-widgets"),
        'selector' => '{{WRAPPER}} .tabFlex_RightSideTabTitle, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle h1, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle h2, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle h3, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle h4, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle h5, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle h6, 
                       {{WRAPPER}} .tabFlex_RightSideTabTitle p',
        'fields_options' => [
            'font_family' => [
                'label' => __('Font Family', "wot-elementor-widgets"),
            ],
            'font_size' => [
                'label' => __('Font Size', "wot-elementor-widgets"),
            ],
            'font_weight' => [
                'label' => __('Font Weight', "wot-elementor-widgets"),
            ],
            'line_height' => [
                'label' => __('Line Height', "wot-elementor-widgets"),
            ],
            'letter_spacing' => [
                'label' => __('Letter Spacing', "wot-elementor-widgets"),
            ],
            'text_transform' => [
                'label' => __('Text Transform', "wot-elementor-widgets"),
            ],
            'text_decoration' => [
                'label' => __('Text Decoration', "wot-elementor-widgets"),
            ],
        ],
    ]
);
$this->add_control(
    'tabflex_right_side_main_content',
    [
        'label' => esc_html__('Text', "wot-elementor-widgets"),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->add_control(
    'tabflex_tab_main_content_text_color',
    [
        'label' => __('Text Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_RightSideTextContent' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'tabflex_tab_main_content_typography',
        'label' => __('Content Typography', "wot-elementor-widgets"),
        'selector' => '{{WRAPPER}} .tabFlex_RightSideTextContent, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent h1, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent h2, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent h3, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent h4, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent h5, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent h6, 
                       {{WRAPPER}} .tabFlex_RightSideTextContent p',
        'fields_options' => [
            'font_family' => [
                'label' => __('Font Family', "wot-elementor-widgets"),
            ],
            'font_size' => [
                'label' => __('Font Size', "wot-elementor-widgets"),
            ],
            'font_weight' => [
                'label' => __('Font Weight', "wot-elementor-widgets"),
            ],
            'line_height' => [
                'label' => __('Line Height', "wot-elementor-widgets"),
            ],
            'letter_spacing' => [
                'label' => __('Letter Spacing', "wot-elementor-widgets"),
            ],
            'text_transform' => [
                'label' => __('Text Transform', "wot-elementor-widgets"),
            ],
            'text_decoration' => [
                'label' => __('Text Decoration', "wot-elementor-widgets"),
            ],
        ],
    ]
);

$this->add_control(
    'tabflex_main_content_background_color',
    [
        'label' => esc_html__('Background Color', "wot-elementor-widgets"),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tabFlex_tabContentPart' => 'background-color: {{VALUE}};',
        ],
    ]
);
$this->add_responsive_control(
    'tabflex_tab_main_content_text_align',
    [
        'label' => __('Content Text Align', "wot-elementor-widgets"),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => __('Left', "wot-elementor-widgets"),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => __('Center', "wot-elementor-widgets"),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => __('Right', "wot-elementor-widgets"),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => 'center',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabContentTextPart' => 'text-align: {{VALUE}};',
            '{{WRAPPER}} .tabFlex_TabContentImagePart' => 'text-align: {{VALUE}};',
        ],
    ]
);


// Image Section
$this->add_control(
    'tabflex_right_side_image_style',
    [
        'label' => esc_html__('Image', "wot-elementor-widgets"),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$this->add_control(
    'tabflex_right_side_image_gap',
    [
        'label' => __('Gap', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', '%'],
        'default' => [
            'size' => 30,
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabAllContentMain' => 'gap: {{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_right_side_image_position',
    [
        'label' => __('Image Position', "wot-elementor-widgets"),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'row' => [
                'title' => __('Left', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-left',
            ],
            'row-reverse' => [
                'title' => __('Right', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-right',
            ],
            'column' => [
                'title' => __('Above', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-top',
            ],
            'column-reverse' => [
                'title' => __('Below', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-bottom',
            ],
        ],
        'default' => 'row',
        'label_block' => true,
        'prefix_class' => 'tabFlex_imageContent-{{VALUE}}',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabAllContentMain' => 'flex-direction: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'tabflex_right_side_image_justify_content',
    [
        'label' => __('Justify Content', "wot-elementor-widgets"),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'flex-start' => [
                'title' => __('Start', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-top',
            ],
            'center' => [
                'title' => __('Center', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-middle',
            ],
            'flex-end' => [
                'title' => __('End', "wot-elementor-widgets"),
                'icon' => 'eicon-v-align-bottom',
            ],
        ],
        'default' => 'center',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabAllContentMain' => 'justify-content: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'tabflex_right_side_image_align_items',
    [
        'label' => __('Align Items', "wot-elementor-widgets"),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'flex-start' => [
                'title' => __('Start', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-left',
            ],
            'center' => [
                'title' => __('Center', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-center',
            ],
            'flex-end' => [
                'title' => __('End', "wot-elementor-widgets"),
                'icon' => 'eicon-h-align-right',
            ],
        ],
        'default' => 'center',
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabAllContentMain' => 'align-items: {{VALUE}};',
        ],
    ]
);
$this->add_responsive_control(
    'tabflex_right_side_image_width',
    [
        'label' => esc_html__('Image Width', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', '%'],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabContentImagePart img' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'tabflex_right_side_image_height',
    [
        'label' => esc_html__('Image Height', "wot-elementor-widgets"),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', '%'],
        'selectors' => [
            '{{WRAPPER}} .tabFlex_TabContentImagePart img' => 'height: {{SIZE}}{{UNIT}};',
        ],
    ]
);
$this->end_controls_section();
