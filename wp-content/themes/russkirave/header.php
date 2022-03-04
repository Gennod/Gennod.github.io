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
        <ul class="navigation__links">
          <li class="navigation__link">
            <a href="#">About</a>
          </li>
          <li class="navigation__link">
            <a href="#">FAQ</a>
          </li>
          <li class="navigation__link">
            <a href="#">Marketplace</a>
          </li>
        </ul>
      </div>