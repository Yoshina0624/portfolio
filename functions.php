<?php
add_theme_support( 'post-thumbnails' );

  add_action('wp_enqueue_scripts', 'add_styles');

  function add_styles() {
    // google fonts
    wp_register_style(
      'google-fonts_style',
      'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
      array(),
      '1.0'
    );

    // reset style
    wp_register_style(
      'reset_style',
      get_template_directory_uri() . '/css/reset.css',
      array(),
      '1.0'
    );

    // slick style
    wp_register_style(
      'slick_style',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
      array(),
      '1.0'
    );

    // slick theme style
    wp_register_style(
      'slick-theme_style',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
      array(),
      '1.0'
    );

		// main style
    wp_enqueue_style(
      'main_style',
      get_template_directory_uri() . '/css/main.css',
      array('reset_style', 'google-fonts_style', 'slick_style', 'slick-theme_style'),
      '1.0'
    );
  }

  // jsの読み込み
  add_action('wp_enqueue_scripts', 'add_scripts');
  function add_scripts() {
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');

    // jQuery script
    wp_register_script(
      'jquery_script',
      'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
      array(),
      '1.0'
    );

    // Slick script
    wp_register_script(
      'slick_script',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
      array(),
      '1.0'
    );

    // GSAP3 script
    wp_register_script(
      'gsap_script',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js',
      array(),
      '1.0'
    );

    // GSAP3 ScrollTrigger script
    wp_register_script(
      'gsap-scroll-trigger_script',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js',
      array(),
      '1.0'
    );

      // main script
      wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script', 'slick_script', 'gsap_script', 'gsap-scroll-trigger_script'),
        '1.0'
      );

      wp_enqueue_script(
        'slider_script',
        get_template_directory_uri() . '/js/slider.js',
        array('jquery_script', 'slick_script', 'gsap_script', 'gsap-scroll-trigger_script'),
        '1.0'
      );
  }

  /* main.js にdefer属性を付与 */
  add_filter('script_loader_tag', 'add_defer', 10, 2);
  function add_defer($tag, $handle) {
    // 識別名がmain_script以外はそのまま返却
    if ($handle !== 'main_script') {
      return $tag;
    }

    // deferを追加して返却する
    return str_replace(' src=', ' defer src=', $tag);
  }
?>