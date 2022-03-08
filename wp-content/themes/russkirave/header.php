<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name"); echo " | "; bloginfo("description");?></title>
  <?php wp_head() ?>
</head>

<body>
  <div class="home">
    <div class="home__wrapper">
      <div class="navigation">
        <div class="banner">
          <div class="banner__top">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/header/banner.png" alt="banner" />
          </div>
          <div class="banner__bottom">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/header/banner.png" alt="banner" />
          </div>
        </div>
        <div href="#" class="navigation__logo">
          <?php the_custom_logo();?>
        </div>
        <nav class="header__nav">
  


          <?php 
            wp_nav_menu([
              'menu' => 'Main',
              'container' => false,
              'menu_class' => "navigation__links",
              'echo' => true,
              'fallback_cb' => 'wp_page_menu',
              'item_wrap' => '<ul class="navigation__links">%3$s</ul>',
              'depth' => 1
            ]);
            
          ?>

          <!-- <ul class="navigation__links">
            <li class="navigation__link">
              <a href="#">About</a>
            </li>
            <li class="navigation__link">
              <a href="#">FAQ</a>
            </li>
            <li class="navigation__link">
              <a href="#">Marketplace</a>
            </li>
          </ul> -->
        </nav>
        <nav class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>


          <?php 
            wp_nav_menu([
              'menu' => 'Main',
              'container' => false,
              'menu_class' => "navigation__links menu__box",
              'echo' => true,
              'fallback_cb' => 'wp_page_menu',
              'item_wrap' => '<ul class="navigation__links menu__box">%3$s</ul>',
              'depth' => 1
            ]);
            
          ?>

        </nav>
      </div>