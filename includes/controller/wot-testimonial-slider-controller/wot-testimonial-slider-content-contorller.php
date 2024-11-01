<?php

use Elementor\Controls_Manager;
use Elementor\Repeater;

$this->start_controls_section(
    'wot_testimonial_slider_container',
    [
        'label' => esc_html__('Testimonial Slider', 'wot-elementor-widgets'),
    ]
);

$repeater = new Repeater();

$repeater->add_control(
    'wot_testimonial_content',
    [
        'label' => esc_html__('Testimonial Content', 'wot-elementor-widgets'),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", 'wot-elementor-widgets'),
    ]
);

$repeater->add_control(
    'wot_testimonial_name',
    [
        'label' => esc_html__('Name', 'wot-elementor-widgets'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('H. Rackham', 'wot-elementor-widgets'),
        'placeholder' => esc_html__('Person-Name', 'wot-elementor-widgets'),
        'label_block' => true,
        'dynamic' => [
            'active' => true,
        ],
    ]
);

$repeater->add_control(
    'wot_testimonial_company',
    [
        'label' => esc_html__('Company', 'wot-elementor-widgets'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Author', 'wot-elementor-widgets'),
    ]
);

$repeater->add_control(
    'wot_testimonial_image',
    [
        'label' => esc_html__('Image', 'wot-elementor-widgets'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-testimonial-slider/images/wot-slide4-img.jpg',
        ],
    ]
);

$this->add_control(
    'wot_testimonial_slider',
    [
        'label' => esc_html__('Testimonials', 'wot-elementor-widgets'),
        'type' => Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'wot_testimonial_content' => esc_html__('My busy schedule leaves little, if any, time for blogging and social media. The Lorem Ipsum Company has been a huge part of helping me grow my business through organic search and content marketing.', 'wot-elementor-widgets'),
                'wot_testimonial_name' => esc_html__('Kelsi Gordon', 'wot-elementor-widgets'),
                'wot_testimonial_company' => esc_html__('Insurance Broker, Brashears Insurance', 'wot-elementor-widgets'),
                'wot_testimonial_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-testimonial-slider/images/wot-slide1-img.jpg',
                ],
            ],
            [
                'wot_testimonial_content' => esc_html__("Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That's how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you'll definitely get the 5-star treatment from the Lorem Ipsum Company!", 'wot-elementor-widgets'),
                'wot_testimonial_name' => esc_html__('Rob Joor', 'wot-elementor-widgets'),
                'wot_testimonial_company' => esc_html__('Owner', 'wot-elementor-widgets'),
                'wot_testimonial_image' => [
                    'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-testimonial-slider/images/wot-slide2-img.jpg',
                ],
            ],
            [
                'wot_testimonial_content' => esc_html__('I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company not only proved itself financially speaking, but the response I have received from customers is incredible. The work is top-notch and I consistently outrank all my competitors on Google.', 'wot-elementor-widgets'),
                'wot_testimonial_name' => esc_html__('Mike Brashears', 'wot-elementor-widgets'),
                'wot_testimonial_company' => esc_html__('CEO', 'wot-elementor-widgets'),
                'wot_testimonial_image' => [
                   'url' => WOTC_ELEMENTOR_WIDGETS_URL . 'assets/wot-testimonial-slider/images/wot-slide3-img.jpg',
                ],
            ],
           
        ],
        'title_field' => '{{{ wot_testimonial_name }}}',
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'wot_testimonial_slider_additional_option',
    [
        'label' => esc_html__('Addition Option', 'wot-elementor-widgets'),
    ]
);

$this->add_control(
    'wot_testimonial_slider_navigation_type',
    [
        'label' => esc_html__('Navigation Type', 'wot-elementor-widgets'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'arrow_and_dots' => esc_html__('Arrow and Dots', 'wot-elementor-widgets'),
            'dots' => esc_html__('Dots', 'wot-elementor-widgets'),
            'arrow' => esc_html__('Arrow', 'wot-elementor-widgets'),
            'none' => esc_html__('None', 'wot-elementor-widgets'),
        ],
        'default' => 'arrow_and_dots',
    ]
);
$this->add_control(
    'wot_testimonial_slider_navigation_type_previous_icon',
    [
        'label' => esc_html__( 'Previous Arrow Icon', 'wot-elementor-widgets' ),
        'type' => \Elementor\Controls_Manager::ICONS,
        'fa4compatibility' => 'icon',
        'skin' => 'inline',
        'label_block' => false,
        'default' => [
            'value' => 'eicon-chevron-left', 
        ],
        'skin_settings' => [
            'inline' => [
                'none' => [
                    'label' => 'Default',
                    'icon' => 'eicon-chevron-left',
                ],
                'icon' => [
                    'icon' => 'eicon-star',
                ],
            ],
        ],
        'recommended' => [
            'fa-regular' => [
                'arrow-alt-circle-left',
                'caret-square-left',
            ],
            'fa-solid' => [
                'angle-double-left',
                'angle-left',
                'arrow-alt-circle-left',
                'arrow-circle-left',
                'arrow-left',
                'caret-left',
                'caret-square-left',
                'chevron-circle-left',
                'chevron-left',
                'long-arrow-alt-left',
            ],
        ],
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '!=',
                    'value' => 'none',
                ],
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '!=',
                    'value' => 'dots',
                ],
            ],
        ],
    ]
);

$this->add_control(
    'wot_testimonial_slider_navigation_type_next_icon',
    [
        'label' => esc_html__( 'Next Arrow Icon', 'wot-elementor-widgets' ),
        'type' => \Elementor\Controls_Manager::ICONS,
        'fa4compatibility' => 'icon',
        'skin' => 'inline',
        'label_block' => false,
        'default' => [
            'value' => 'eicon-chevron-right',
        ],
        'skin_settings' => [
            'inline' => [
                'none' => [
                    'label' => 'Default',
                    'icon' => 'eicon-chevron-right',
                ],
                'icon' => [
                    'icon' => 'eicon-star',
                ],
            ],
        ],
        'recommended' => [
            'fa-regular' => [
                'arrow-alt-circle-right',
                'caret-square-right',
            ],
            'fa-solid' => [
                'angle-double-right',
                'angle-right',
                'arrow-alt-circle-right',
                'arrow-circle-right',
                'arrow-right',
                'caret-right',
                'caret-square-right',
                'chevron-circle-right',
                'chevron-right',
                'long-arrow-alt-right',
            ],
        ],
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '!=',
                    'value' => 'none',
                ],
                [
                    'name' => 'wot_testimonial_slider_navigation_type',
                    'operator' => '!=',
                    'value' => 'dots',
                ],
            ],
        ],
    ]
);
$this->add_control(
    'wot_testimonial_slider_autoplay',
    [
        'label' => esc_html__( 'Autoplay', 'wot-elementor-widgets' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'On', 'wot-elementor-widgets' ),
        'label_off' => esc_html__( 'Off', 'wot-elementor-widgets' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);
$this->add_control(
    'wot_testimonial_slider_pause_on_hover',
    [
        'label' => esc_html__('Pause on Hover', 'wot-elementor-widgets'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('On', 'wot-elementor-widgets'),
        'label_off' => esc_html__('Off', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'wot_testimonial_slider_autoplay' => 'yes',
        ],
    ]
);
$this->add_control(
    'wot_testimonial_slider_animation_speed',
    [
        'label' => esc_html__('Animation Speed (ms)', 'wot-elementor-widgets'),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => 3000, 
        'min' => 500,
        'description' => esc_html__('Enter animation speed in milliseconds. Set to 0 to disable auto slide.', 'wot-elementor-widgets'),
        'condition' => [
            'wot_testimonial_slider_autoplay' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_testimonial_slider_infinite_loop',
    [
        'label' => esc_html__('Infinite Loop', 'wot-elementor-widgets'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('On', 'wot-elementor-widgets'),
        'label_off' => esc_html__('Off', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->end_controls_section();
