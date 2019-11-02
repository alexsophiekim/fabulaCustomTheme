<?php

  function mytheme_customize_register( $wp_customize ) {
  //All our sections, settings, and controls will be added here
  $wp_customize->add_setting( 'fabula_BGColour' , array(
      'default'   => '#fffae0',
      'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fabula_BGColourControl', array(
    'label'      => __( 'Background Colour', 'fabulaCustom' ),
    'section'    => 'colors',
    'settings'   => 'fabula_BGColour',
  ) ) );
  $wp_customize->add_setting( 'fabula_footerColour' , array(
      'default'   => '#59caf9',
      'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fabula_footerColourControl', array(
    'label'      => __( 'Footer Colour', 'fabulaCustom' ),
    'section'    => 'colors',
    'settings'   => 'fabula_footerColour',
  ) ) );
  $wp_customize->add_section( 'fabula_copyright' , array(
        'title'      => __('copyright','fabulaCustom'),
        'priority'   => 30,
  ) );
  $wp_customize->add_setting('fabula_theme_copyright', array(
      'default'        => 'Copyright © 2019 Create by Sophie Kim',
      'transport'      => 'refresh',
  ) );
  $wp_customize->add_control('fabula_copyright', array(
     'label'      => __('copyright', 'fabulaCustom'),
     'section'    => 'fabula_copyright',
     'settings'   => 'fabula_theme_copyright'
  ));
  $wp_customize->add_section('fabula_slideshow', array(
       'title'             => __('Slider Images', 'fabulaCustom'),
       'priority'          => 70,
   ));
  $wp_customize->add_setting('fabula_contentImg_1', array(
       'transport'         => 'refresh',
       'height'            => 325,
  ));
  $wp_customize->add_setting('fabula_contentImg_2', array(
       'transport'         => 'refresh',
       'height'            => 325,
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fabula_contentImg_1', array(
       'label'             => __('Slider Image #1', 'fabulaCustom'),
       'section'           => 'fabula_slideshow',
       'settings'          => 'fabula_contentImg_1',
   )));
   $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fabula_contentImg_2', array(
       'label'             => __('Slider Image #2', 'fabulaCustom'),
       'section'           => 'fabula_slideshow',
       'settings'          => 'fabula_contentImg_2',
   )));

}

add_action( 'customize_register', 'mytheme_customize_register' );
    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                body {
                  background-color: <?php echo get_theme_mod('fabula_BGColour', '#fffae0'); ?>;
                }
                footer{
                  background-color: <?php echo get_theme_mod('fabula-fabula_fotterColour','#59caf9'); ?>
                }
                .navColour{
                  background-color: <?php echo get_theme_mod('fabula-fabula_footerColour','#59caf9'); !important?>
                }
            </style>
        <?php
  }
  add_action( 'wp_head', 'mytheme_customize_css');
