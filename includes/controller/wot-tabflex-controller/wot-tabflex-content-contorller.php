<?php

// --------------------------Content Tab Start-----------------------------------------------//
if ( ! defined( 'ABSPATH' ) ) exit;
use Elementor\Controls_Manager;
use Elementor\Repeater;

$this->start_controls_section(
    'tabflex_tabs_container',
    [
        'label' => esc_html__('Tabs', "wot-elementor-widgets"),
    ]
);

$repeater = new Repeater();

$this->add_control(
    'tabflex_tab_orientation',
    [
        'label' => esc_html__('Tab Orientation', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'tabFlex_vertical' => esc_html__('Vertical', "wot-elementor-widgets"),
            'tabFlex_horizontal' => esc_html__('Horizontal', "wot-elementor-widgets"),
        ],
        'default' => 'tabFlex_vertical',
    ]
);

$repeater->add_control(
    'tabflex_tab_title_text',
    [
        'label' => esc_html__('Title', "wot-elementor-widgets"),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Tab-Title', "wot-elementor-widgets"),
        'placeholder' => esc_html__('Tab-Title', "wot-elementor-widgets"),
        'label_block' => true,
        'dynamic' => [
            'active' => true,
        ],
    ]
);

$repeater->add_control(
    'tabflex_tabhead_title_icon_type',
    [
        'label' => esc_html__('Title Image Type', "wot-elementor-widgets"),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'not_select' => esc_html__('Select Image/Icon', "wot-elementor-widgets"),
            'title_image' => esc_html__('Image', "wot-elementor-widgets"),
            'title_icon' => esc_html__('Icon', "wot-elementor-widgets"),
        ],
        'default' => 'title_image',
    ]
);

$repeater->add_control(
    'tabflex_tabhead_title_img',
    [
        'label' => esc_html__('Image', "wot-elementor-widgets"),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/title-Icon.webp',
        ],
        'condition' => [
            'tabflex_tabhead_title_icon_type' => 'title_image',
        ],
    ]
);

$repeater->add_control(
    'tabflex_tabhead_title_icon',
    [
        'label' => esc_html__('Select Icon', "wot-elementor-widgets"),
        'type' => Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-rocket',
            'library' => 'solid'
        ],
        'label_block' => false,
        'skin' => 'inline',
        'condition' => [
            'tabflex_tabhead_title_icon_type' => 'title_icon'
        ]
    ]
);

$repeater->add_control(
    'tabflex_tabhead_subtitle_switches',
    [
        'label' => esc_html__('Enable SubTitle', "wot-elementor-widgets"),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Yes', "wot-elementor-widgets"),
        'label_off' => esc_html__('No', "wot-elementor-widgets"),
        'default' => 'yes',
    ]
);

$repeater->add_control(
    'tabflex_tabhead_tab_subtitle',
    [
        'label' => esc_html__('Sub-Title', "wot-elementor-widgets"),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Lorem ipsum is placeholder text commonly used in the graphic', "wot-elementor-widgets"),
        'dynamic' => [
            'active' => true,
        ],
        'condition' => [
            'tabflex_tabhead_subtitle_switches' => 'yes',
        ],
    ]
);

$repeater->add_control(
    'tabflex_tab_main_content',
    [
        'label' => esc_html__('Content', "wot-elementor-widgets"),
        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', "wot-elementor-widgets"),
        'placeholder' => esc_html__('Tab Content', "wot-elementor-widgets"),
        'type' => Controls_Manager::WYSIWYG,
    ]
);

$repeater->add_control(
    'tabflex_content_image',
    [
        'label' => esc_html__('Content Image', "wot-elementor-widgets"),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/defualts.webp',
        ],
    ]
);

$this->add_control(
    'tabflex',
    [
        'label' => esc_html__('Tabs Items', "wot-elementor-widgets"),
        'type' => Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'tabflex_tabhead_title_icon_type' => 'title_image',
                'tabflex_tabhead_title_icon' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/title-Icon.webp',
                ],
                'tabflex_tab_title_text' => esc_html__('Tab-Title-1', "wot-elementor-widgets"),
                'tab_sub_title' => esc_html__('Lorem ipsum is placeholder text commonly used in the graphic', "wot-elementor-widgets"),
                'tabflex_content_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/defualts.webp',
                ],
                'tabflex_tab_main_content' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', "wot-elementor-widgets"),
            ],
            [
                'tabflex_tabhead_title_icon_type' => 'title_image',
                'tabflex_tabhead_title_icon' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/title-Icon.webp',
                ],
                'tabflex_tab_title_text' => esc_html__('Tab-Title-2', "wot-elementor-widgets"),
                'tab_sub_title' => esc_html__('Lorem ipsum is placeholder text commonly used in the graphic', "wot-elementor-widgets"),
                'tabflex_content_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/defualts.webp',
                ],
                'tabflex_tab_main_content' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', "wot-elementor-widgets"),
            ],
            [
                'tabflex_tabhead_title_icon_type' => 'title_image',
                'tabflex_tabhead_title_icon'      => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/title-Icon.webp',
                ],
                'tabflex_tab_title_text' => esc_html__('Tab-Title-3', "wot-elementor-widgets"),
                'tab_sub_title' => esc_html__('Lorem ipsum is placeholder text commonly used in the graphic', "wot-elementor-widgets"),
                'tabflex_content_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabflex/images/defualts.webp',
                ],
                'tabflex_tab_main_content' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', "wot-elementor-widgets"),
            ],
        ],
        'title_field' => '{{{ tabflex_tab_title_text }}}',
    ]
);



$this->end_controls_section();

// --------------------------end controll Tab Start-----------------------------------------------//
