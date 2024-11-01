<?php

if ( ! defined( 'ABSPATH' ) ) exit;
use Elementor\Widget_Base;

class Wotc_TabFlex_Widget extends Widget_Base
{

    
    public function get_name()
    {
        return 'wot_tabflex';
    }

    public function get_title()
    {
        return esc_html__('TabFlex', "wot-elementor-widgets");
    }

    public function get_script_depends()
    {
        return ['wot-tabflex-scripts'];
    }

    public function get_icon()
    {
        return 'eicon-lightbox';
    }

    public function get_categories()
    {
        return ['wot-elementor-widgets-section'];
    }

    protected function _register_controls()
    {
        require_once(WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-tabflex-controller/wot-tabflex-content-contorller.php');
        require_once(WOTC_ELEMENTOR_WIDGETS_PATH . 'includes/controller/wot-tabflex-controller/wot-tabflex-style-contorller.php');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $id_int = substr($this->get_id_int(), 0, 3);
        $tabflex_tab_orientation = sanitize_text_field($settings['tabflex_tab_orientation']);
        $tabflex_tabs_container_class = $tabflex_tab_orientation === 'tabFlex_horizontal' ? 'tabFlex_horizontal' : 'tabFlex_vertical';
        ?>
        <div id="tabFlex_TabMainContainer-<?php echo esc_attr($id_int); ?>" class="tabFlex_TabMainContainer">
            <?php if (!empty($settings['tabflex']) && is_array($settings['tabflex'])): ?>
                <div
                    class="<?php echo esc_attr("tabFlex_TabTwoColParent tabFlex_DFlex tabFlex_align_center $tabflex_tabs_container_class"); ?>">
                    <div class="<?php echo esc_attr("$tabflex_tabs_container_class tabFlex_tabsTop"); ?>">
                        <label
                            class="tabFlex_expandTabb"><?php echo esc_html__('All Categories', 'wot-elementor-widgets'); ?></label>
                        <div class="<?php echo esc_attr("$tabflex_tabs_container_class tabFlex_tabsToggle"); ?>">
                            <div class="tabFlex_forResponsiveView">
                                <ul>
                                    <?php foreach ($settings['tabflex'] as $index => $tab):
                                        $tab_count = $index + 1;
                                        $tab_title_setting_key = $this->get_repeater_setting_key('tabflex_tab_title_text', 'tabflex', $index);
                                        $this->add_render_attribute($tab_title_setting_key, [
                                            'id' => 'tabFlex_TabTitleCount-' . esc_attr($id_int . $tab_count),
                                            'class' => ['tabFlex_tabHead'],
                                            'aria-selected' => $tab_count === 1 ? 'true' : 'false',
                                            'data-tab' => esc_attr($tab_count),
                                            'tabindex' => esc_attr($tab_count),
                                            'data-tabid' => '#tabFlex_TabListCount-' . esc_attr($id_int . $tab_count),
                                        ]);
                                        ?>
                                        <li>
                                            <a <?php $this->print_render_attribute_string($tab_title_setting_key); ?>>
                                                <div class="tabFlex_TabTitlesDetails">
                                                    <div
                                                        class="tabFlex_TabTitleSvgIconTop tabFlex_DFlex <?php echo esc_attr($settings['tabflex_tab_icon_position'] ? "tab-icon-" . $settings['tabflex_tab_icon_position'] : ""); ?>">
                                                        <?php if ($tab['tabflex_tabhead_title_icon_type'] === 'title_image' && !empty($tab['tabflex_tabhead_title_img']['url'])): ?>
                                                            <div class="tabFlex_TabHeadIcon tabFlex_DFlex tabFlex_align_center tabFlex_justify_center">
                                                                <img src="<?php echo esc_url($tab['tabflex_tabhead_title_img']['url']); ?>"
                                                                    alt="">
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if ($tab['tabflex_tabhead_title_icon_type'] === 'title_icon' && !empty($tab['tabflex_tabhead_title_icon'])): ?>
                                                            <div class="tabFlex_TabHeadIcon tabFlex_DFlex tabFlex_align_center tabFlex_justify_center">
                                                                <?php \Elementor\Icons_Manager::render_icon($tab['tabflex_tabhead_title_icon'], ['aria-hidden' => 'true']); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($tab['tabflex_tab_title_text'])): ?>
                                                            <div class="tabFlex_TabHeadTitle">
                                                                <<?php echo esc_attr($settings['tabflex_title_element']); ?>>
                                                                    <?php echo esc_html($tab['tabflex_tab_title_text']); ?>
                                                                </<?php echo esc_attr($settings['tabflex_title_element']); ?>>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if (!empty($tab['tabflex_tabhead_tab_subtitle'])): ?>
                                                        <div class="tabFlex_TabHeadSubTitle">
                                                            <p><?php echo esc_html($tab['tabflex_tabhead_tab_subtitle']); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tabFlex_tabContentPart">
                        <?php foreach ($settings['tabflex'] as $index => $tab):
                            $tab_count = $index + 1;
                            $tab_content_setting_key = $this->get_repeater_setting_key('tabflex_tab_main_content', 'tabflex', $index);
                            $this->add_render_attribute($tab_content_setting_key, [
                                'id' => 'tabFlex_TabListCount-' . esc_attr($id_int . $tab_count),
                                'class' => ['tabFlex_showAllTabContent', 'tabFlex_Tab_Content'],
                                'aria-selected' => $tab_count === 1 ? 'true' : 'false',
                                'data-tab' => esc_attr($tab_count),
                                'role' => 'tabpanel',
                                'tabindex' => esc_attr($tab_count),
                                'aria-labelledby' => 'tabFlex_TabTitleCount-' . esc_attr($id_int . $tab_count),
                                'aria-hidden' => 'false',
                            ]);
                            if (!empty($tab['tabflex_tab_main_content']) || !empty($tab['tabflex_content_image']['url'])):
                                ?>
                                <div <?php $this->print_render_attribute_string($tab_content_setting_key); ?>>
                                    <div
                                        class="tabFlex_TabAllContentMain tabFlex_DFlex <?php echo esc_attr($settings['tabflex_right_side_image_position'] ? "tabFlex_imageContent-" . $settings['tabflex_right_side_image_position'] : ""); ?>">
                                        <?php if (!empty($tab['tabflex_content_image']['url'])): ?>
                                            <div class="tabFlex_TabContentImagePart">
                                                <img src="<?php echo esc_url($tab['tabflex_content_image']['url']); ?>"
                                                    alt="<?php echo esc_attr($tab['tabflex_tab_title_text']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($tab['tabflex_tab_main_content']) || !empty($tab['tabflex_tab_title_text'])): ?>
                                            <div class="tabFlex_TabContentTextPart">
                                                <?php if (!empty($tab['tabflex_tab_title_text'])): ?>
                                                    <div class="tabFlex_RightSideTabTitle">
                                                        <<?php echo esc_attr($settings['tabflex_right_side_tab_title_element']); ?>>
                                                            <?php echo esc_html($tab['tabflex_tab_title_text']); ?>
                                                        </<?php echo esc_attr($settings['tabflex_right_side_tab_title_element']); ?>>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if (!empty($tab['tabflex_tab_main_content'])): ?>
                                                    <div class="tabFlex_RightSideTextContent">
                                                        <?php echo wp_kses_post($tab['tabflex_tab_main_content']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php
    }
}

\Elementor\Plugin::instance()->widgets_manager->register(new Wotc_TabFlex_Widget());


?>