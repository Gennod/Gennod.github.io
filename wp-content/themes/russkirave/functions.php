<?php
add_action("wp_enqueue_scripts", "russkirave_styles");

function russkirave_styles()
{
  wp_enqueue_style("russkirave-style", get_stylesheet_uri());
}

  // function russkirave_scripts() {
  //   wp_enqueue_script('russkirave-scripts', get_template_directory_uri() . "/assets/js/main.js", array(), null, true);
  // }

  add_theme_support('custom-logo');
  add_theme_support('menus');

  add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

  function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main'){
      $atts['class'] = "navigation__link";

      if ($item->current) {
        $atts['class'] .= " navigation__link--active";
      }

    };

    return $atts;
  }
