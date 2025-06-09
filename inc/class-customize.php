<?php 

class Class_customize{
    
    public function __construct(){
        add_action('customize_register', [$this, 'customizeBackground']);
    }

    public function customizeBackground($wp_customize){

        $default_background = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCkBgHEoncxcKe20RxZiyhnWme3WZO9QYRKT7jA6VJuMoZvbTE-yBALMHHG8BcCvVmrk27ZD1GllfrdbgIdvs3unpy4sWthWsRtmey6SKDwrejzwy6_gM-tdnCfdS9jiTcsOS55Ycv_vC3oVKmGNN3no961TFf2BUu0BGvv8I5QgiimoAPoXLvnUcyaytZeAR8zHSufptLZaA1KazfELZwZhOtbCMSeeMMMM2OkHrbnXKsMO9hnU1l85bsdQh4TWTbh_M3evxzzSRY';
        $wp_customize->add_section('hero-section', array(
            'title' => __('Hero Section', 'portfolio'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('hero-background-image', array(
            'default' => $default_background,
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero-background-image-control', array(
            'label' => __('Background Image', 'portfolio'),
            'section' => 'hero-section',
            'settings' => 'hero-background-image'
        )));


    }
}
?>