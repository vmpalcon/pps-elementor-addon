<?php
/**
 * Elementor PPS Hello World Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class PPS_Hello_World_Widget extends \Elementor\Widget_Base
{

	/**
	 * Get widget name.
	 *
	 * Retrieve PPS Hello World widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'PPS Hello World';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve PPS Hello World widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __('PPS Hello World', 'pps-elementor-addon');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve PPS Hello World widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'eicon-import-kit';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the PPS Hello World widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['Boilerplate'];
	}

	/**
	 * Register PPS Hello World widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => __('Content', 'pps-elementor-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'text',
			[
				'label' => __('Text To Display', 'pps-elementor-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => __('PPS Hello World', 'pps-elementor-addon'),
			]
		);

		$this->add_control(
			'text_heading_type',
			[
				'label' => __('Heading Type', 'pps-elementor-addon'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'H2',
				'options' => [
					'p' => __('p', 'pps-elementor-addon'),
					'H1' => __('H1', 'pps-elementor-addon'),
					'H2' => __('H2', 'pps-elementor-addon'),
					'H3' => __('H3', 'pps-elementor-addon'),
					'H4' => __('H4', 'pps-elementor-addon'),
					'H5' => __('H5', 'pps-elementor-addon'),
					'H6' => __('H6', 'pps-elementor-addon'),
				]
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render PPS Hello World widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render()
	{

		$settings = $this->get_settings_for_display();

		echo '<div class="pps-hello-world-elementor-widget">';

		echo '<' . $settings['text_heading_type'] . '>';
		echo $settings['text'];
		echo '</' . $settings['text_heading_type'] . '>';

		echo '</div>';

	}

}