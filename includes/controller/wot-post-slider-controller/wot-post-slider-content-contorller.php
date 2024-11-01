<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'wot_post_slider_content_section',
    [
        'label' => __('Post Slider Options', 'wot-elementor-widgets'),
        'tab' => Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'wot_post_slider_posts_per_page',
    [
        'label' => __('Posts Count', 'wot-elementor-widgets'),
        'type' => Controls_Manager::NUMBER,
        'default' => 5,
    ]
);

$this->add_control(
    'wot_post_slider_order',
    [
        'label' => __('Order', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SELECT,
        'default' => 'DESC',
        'options' => [
            'ASC' => __('Ascending', 'wot-elementor-widgets'),
            'DESC' => __('Descending', 'wot-elementor-widgets'),
        ],
    ]
);

$this->add_control(
    'wot_post_slider_excerpt_words',
    [
        'label' => esc_html__( 'Excerpt Words Count', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'words' ],
        'range' => [
            'words' => [
                'min' => 10,
                'max' => 100,
                'step' => 5,
            ]
        ],
        'default' => [
            'unit' => 'words',
            'size' => 15,
        ],
    ]
);

$this->add_control(
    'wot_post_slider_excerpt_words_hr',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'wot_post_slider_show_date',
    [
        'label' => __('Show Published Date', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'wot-elementor-widgets'),
        'label_off' => __('Hide', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'wot_post_slider_date_format',
    [
        'label' => esc_html__('Date Format', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'F j, Y' => gmdate('F j, Y'), 
            'd-m-Y' => gmdate('d-m-Y'),  
            'd/m/Y' => gmdate('d/m/Y'),  
            'd M Y' => gmdate('d M Y'),  
            'Y-m-d' => gmdate('Y-m-d'),  
            'm/d/Y' => gmdate('m/d/Y'),  
        ],
        'default' => 'F j, Y',
        'condition' => [
            'wot_post_slider_show_date' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_date_format_hr',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'wot_post_slider_show_categories',
    [
        'label' => __('Show Categories', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'wot-elementor-widgets'),
        'label_off' => __('Hide', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'wot_post_slider_show_categories_page_link',
    [
        'label' => __('Add Categories Page Link', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'wot-elementor-widgets'),
        'label_off' => __('No', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'wot_post_slider_show_categories' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_show_categories_page_link_hr',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'wot_post_slider_show_author',
    [
        'label' => __('Show Author', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'wot-elementor-widgets'),
        'label_off' => __('Hide', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'wot_post_slider_show_author_page_link',
    [
        'label' => __('Add Author Page Link', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'wot-elementor-widgets'),
        'label_off' => __('No', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'wot_post_slider_show_author' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_show_author_page_link_hr',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'wot_post_slider_show_excerpt',
    [
        'label' => __('Show Excerpt', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'wot-elementor-widgets'),
        'label_off' => __('Hide', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'wot_post_slider_show_featured_image',
    [
        'label' => __('Show Featured Image', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'wot-elementor-widgets'),
        'label_off' => __('Hide', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'wot_post_slider_show_featured_image_hr',
    [
        'type' => Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'wot_post_slider_show_button',
    [
        'label' => __('Show Button', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'wot-elementor-widgets'),
        'label_off' => __('Hide', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'wot_post_slider_button_title',
    [
        'label' => esc_html__( 'Button Title', 'wot-elementor-widgets' ),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__( 'Read More', 'wot-elementor-widgets' ),
        'placeholder' => esc_html__( 'Type your button title here', 'wot-elementor-widgets' ),
        'condition' => [
            'wot_post_slider_show_button' => 'yes',
        ],
    ]
);

$this->add_control(
    'wot_post_slider_button_target_blank',
    [
        'label' => __('Open Blog In New Tab', 'wot-elementor-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'wot-elementor-widgets'),
        'label_off' => __('No', 'wot-elementor-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'wot_post_slider_show_button' => 'yes',
        ],
    ]
);

$this->end_controls_section();

