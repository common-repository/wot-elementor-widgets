<?php

use Elementor\Controls_Manager;
use Elementor\Repeater;

$this->start_controls_section(
    'wot_tabs_slider_container',
    [
        'label' => esc_html__('Tabs Slider', 'wot-elementor-widgets'),
    ]
);

$repeater = new Repeater();

$repeater->add_control(
    'wot_tabs_icon',
    [
        'label' => esc_html__('Choose Image', 'wot-elementor-widgets'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/images/icon.png',
        ],
    ]
);

$repeater->add_control(
    'wot_tabs_title',
    [
        'label' => esc_html__('Tab Title', 'wot-elementor-widgets'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Tab Title', 'wot-elementor-widgets'),
        'placeholder' => esc_html__('Tab title', 'wot-elementor-widgets'),
        'label_block' => true,
        'dynamic' => [
            'active' => true,
        ],
    ]
);

$repeater->add_control(
    'wot_tabs_subtitle',
    [
        'label' => esc_html__('Tab Subtitle', 'wot-elementor-widgets'),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('Lorem Ipsum text', 'wot-elementor-widgets'),
    ]
);

$repeater->add_control(
    'wot_tabs_image',
    [
        'label' => esc_html__('Choose Image', 'wot-elementor-widgets'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/images/tab-image.png',
        ],
    ]
);

$repeater->add_control(
    'wot_tabs_content',
    [
        'label' => esc_html__('Tabs Content', 'wot-elementor-widgets'),
        'type' => Controls_Manager::WYSIWYG,
        'default' => esc_html__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", 'wot-elementor-widgets'),
    ]
);

$repeater->add_control(
    'wot_tabs_button_text',
    [
        'label' => esc_html__('Button Text', 'wot-elementor-widgets'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Button Text', 'wot-elementor-widgets'),
        'placeholder' => esc_html__('Button Text', 'wot-elementor-widgets'),
        'label_block' => true,
    ]
);

$repeater->add_control(
    'wot_tabs_button_link',
    [
        'label' => __('Button Link', 'wot-elementor-widgets'),
        'type' => Controls_Manager::URL,
        'placeholder' => __('https://your-link.com', 'wot-elementor-widgets'),
        'default' => [
            'url' => '#',
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider',
    [
        'label' => esc_html__('Tabs (Minimum 4)', 'wot-elementor-widgets'),
        'type' => Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'wot_tabs_content' => esc_html__('Leading the company with a vision for innovation and growth, I am committed to ensuring our team delivers cutting-edge solutions to meet our clients\' needs.', 'wot-elementor-widgets'),
                'wot_tabs_title' => esc_html__('John Doe', 'wot-elementor-widgets'),
                'wot_tabs_subtitle' => esc_html__('CEO', 'wot-elementor-widgets'),
                'wot_tabs_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/images/team-member1.webp',
                ],
                'wot_tabs_button_text' => esc_html__('Know More', 'wot-elementor-widgets'),
                'wot_tabs_button_link' => [
                    'url' => '#',
                ],
            ],
            [
                'wot_tabs_content' => esc_html__('Driving our technological strategy, I focus on leveraging the latest innovations to build scalable, secure, and efficient systems for our clients.', 'wot-elementor-widgets'),
                'wot_tabs_title' => esc_html__('Jane Smith', 'wot-elementor-widgets'),
                'wot_tabs_subtitle' => esc_html__('CTO', 'wot-elementor-widgets'),
                'wot_tabs_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/images/team-member2.webp',
                ],
                'wot_tabs_button_text' => esc_html__('Know More', 'wot-elementor-widgets'),
                'wot_tabs_button_link' => [
                    'url' => '#',
                ],
            ],
            [
                'wot_tabs_content' => esc_html__('Creating and executing strategic marketing initiatives, I ensure our brand reaches the right audience and generates measurable growth.', 'wot-elementor-widgets'),
                'wot_tabs_title' => esc_html__('Mark Will', 'wot-elementor-widgets'),
                'wot_tabs_subtitle' => esc_html__('CMO', 'wot-elementor-widgets'),
                'wot_tabs_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/images/team-member3.webp',
                ],
                'wot_tabs_button_text' => esc_html__('Know More', 'wot-elementor-widgets'),
                'wot_tabs_button_link' => [
                    'url' => '#',
                ],
            ],
            [
                'wot_tabs_content' => esc_html__('Overseeing the financial strategy of the company, I focus on sustainable growth and ensuring our financial health is robust.', 'wot-elementor-widgets'),
                'wot_tabs_title' => esc_html__('John Brown', 'wot-elementor-widgets'),
                'wot_tabs_subtitle' => esc_html__('CFO', 'wot-elementor-widgets'),
                'wot_tabs_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-tabs-slider/images/team-member4.webp',
                ],
                'wot_tabs_button_text' => esc_html__('Know More', 'wot-elementor-widgets'),
                'wot_tabs_button_link' => [
                    'url' => '#',
                ],
            ],            
        ],
        'title_field' => '{{{ wot_tabs_title }}}',
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'wot_tabs_slider_additional_option',
    [
        'label' => esc_html__('Arrow Option', 'wot-elementor-widgets'),
    ]
);

$this->add_control(
    'wot_tabs_slider_navigation_type_previous_icon',
    [
        'label' => esc_html__( 'Previous Arrow Icon', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-arrow-up', 
            'library' => 'fa-solid',
        ],
        'recommended' => [
            'fa-solid' => [
                'sort-up',
                'chevron-up',
                'arrow-up',
                'angle-double-up',
                'angle-up',
                'chevron-circle-up',
                'long-arrow-alt-up',
                'caret-up',
            ],
            'fa-regular' => [
                'sort-up',
                'chevron-up',
                'arrow-up',
                'arrow-alt-circle-up',
            ],
            'fa-brands' => [],
        ],
    ]
);

$this->add_control(
    'wot_tabs_slider_navigation_type_next_icon',
    [
        'label' => esc_html__( 'Next Arrow Icon', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-arrow-down',
            'library' => 'fa-solid',
        ],
        'recommended' => [
            'fa-solid' => [
                'sort-down',
                'chevron-down',
                'arrow-down',
                'angle-double-down',
                'angle-down',
                'chevron-circle-down',
                'long-arrow-alt-down',
                'caret-down'
            ],
            'fa-regular' => [
                'sort-down',
                'chevron-down',
                'arrow-down',
                'arrow-alt-circle-down'
            ],
            'fa-brands' => [],
        ],
    ]
);


$this->end_controls_section();
