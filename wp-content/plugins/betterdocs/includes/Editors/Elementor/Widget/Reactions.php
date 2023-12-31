<?php

namespace WPDeveloper\BetterDocs\Editors\Elementor\Widget;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;
use WPDeveloper\BetterDocs\Editors\Elementor\BaseWidget;
use Elementor\Group_Control_Border as Group_Control_Border;
use Elementor\Group_Control_Box_Shadow as Group_Control_Box_Shadow;

class Reactions extends BaseWidget {
    public $view_wrapper = 'betterdocs-article-reactions';

    public function get_name() {
        return 'betterdocs-reactions';
    }

    public function get_title() {
        return __( 'Doc Reactions', 'betterdocs' );
    }

    public function get_icon() {
        return 'betterdocs-icon-Reactions';
    }

    public function get_categories() {
        return ['betterdocs-elements-single'];
    }

    public function get_keywords() {
        return ['betterdocs-elements', 'reaction', 'betterdocs', 'heading', 'docs'];
    }

    public function get_style_depends() {
        return ['betterdocs-reactions'];
    }

    public function get_script_depends() {
        return ['betterdocs-reactions'];
    }

    public function get_custom_help_url() {
        return 'https://betterdocs.co/docs/single-doc-in-elementor';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_column_settings',
            [
                'label' => __( 'Box Style', 'betterdocs' ),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'reaction_box_width',
            [
                'label'      => __( 'Width', 'betterdocs' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'max'  => 2500,
                        'step' => 1
                    ]
                ],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reactions' => 'width: {{SIZE}}px;'
                ]
            ]
        );

        $this->add_control(
            'reaction_box_height',
            [
                'label'      => __( 'Height', 'betterdocs' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'max'  => 500,
                        'step' => 1
                    ]
                ],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reactions' => 'height: {{SIZE}}px;'
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'reaction_box_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .betterdocs-article-reactions'
            ]
        );

        $this->add_responsive_control(
            'reaction_box_space', // Legacy control id but new control
            [
                'label'      => __( 'Box Spacing', 'betterdocs' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reactions' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );

        $this->add_responsive_control(
            'reaction_box_padding',
            [
                'label'      => __( 'Box Padding', 'betterdocs' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reactions' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'reaction_box_border_normal',
                'label'    => esc_html__( 'Border', 'betterdocs' ),
                'selector' => '{{WRAPPER}} .betterdocs-article-reactions'
            ]
        );

        $this->add_responsive_control(
            'reaction_box_radius_normal',
            [
                'label'      => esc_html__( 'Border Radius', 'betterdocs' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reactions' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'reaction_box_shadow_normal',
                'selector' => '{{WRAPPER}} .betterdocs-article-reactions'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_settings',
            [
                'label' => __( 'Title', 'betterdocs' ),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'reaction_text',
            [
                'label'   => __( 'Text', 'betterdocs' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'What are your feelings', 'betterdocs-pro' )
            ]
        );

        $this->add_control(
            'reaction_box_title_color',
            [
                'label'     => esc_html__( 'Color', 'betterdocs' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .betterdocs-article-reactions-heading h5' => 'color: {{VALUE}};'
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'reaction_box_title_typography',
                'selector' => '{{WRAPPER}} .betterdocs-article-reactions-heading h5'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_icon_settings',
            [
                'label' => __( 'Icon', 'betterdocs' ),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'reaction_box_icon_area',
            [
                'label'      => __( 'Area', 'betterdocs' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'max'  => 500,
                        'step' => 1
                    ]
                ],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reaction-links li a' => 'height: {{SIZE}}px;width: {{SIZE}}px;'
                ]
            ]
        );

        $this->add_control(
            'reaction_box_icon_size',
            [
                'label'      => __( 'Icon Size', 'betterdocs' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'max'  => 500,
                        'step' => 1
                    ]
                ],
                'selectors'  => [
                    '{{WRAPPER}} .betterdocs-article-reaction-links li a svg' => 'height: {{SIZE}}px;width: {{SIZE}}px;'
                ]
            ]
        );

        $this->add_control(
            'reaction_box_icon_background',
            [
                'label'     => esc_html__( 'Background Color', 'betterdocs' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .betterdocs-article-reaction-links li a' => 'background-color: {{VALUE}};'
                ]
            ]
        );

        $this->add_control(
            'reaction_box_icon_hover_background',
            [
                'label'     => esc_html__( 'Hover Background Color', 'betterdocs' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .betterdocs-article-reaction-links li a:hover' => 'background-color: {{VALUE}};'
                ]
            ]
        );

        $this->add_control(
            'reaction_box_icon_color',
            [
                'label'     => esc_html__( 'Color', 'betterdocs' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .betterdocs-article-reaction-links li a svg path' => 'fill: {{VALUE}};'
                ]
            ]
        );

        $this->add_control(
            'reaction_box_icon_hover_color',
            [
                'label'     => esc_html__( 'Hover Color', 'betterdocs' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .betterdocs-article-reaction-links li a:hover svg path' => 'fill: {{VALUE}};'
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render_callback() {
        $this->views( 'widgets/reactions' );
    }

    public function view_params(){
        return [
            'reactions_text' => $this->attributes['reaction_text']
        ];
    }
}
