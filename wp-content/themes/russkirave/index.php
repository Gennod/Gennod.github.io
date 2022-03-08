<?php get_header() ?>

<div class="dashboard">
  <h1 class="dashboard__name"><?php the_field('header_title') ?></h1>
  <p class="dashboard__text">
    <?php the_field('header_descr') ?>
  </p>
  <h2 class="dashboard__title"><?php the_field('dashboard_title') ?></h2>
  <h2 class="dashboard__subtitle dashboard__subtitle--legendary">Legendary</h2>
  <ul class="dashboard__list">
    <?php

    $posts = get_posts(array(
      'numberposts' => -1,
      'category_name' => "nft_legendary",
      'orderby' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <li data-color="<?php echo the_field("nft_color");?>" data-buy-src="<?php the_field('nft_buy-src') ?>" data-src="<?php the_field('nft_img') ?>" data-alt="<?php echo the_title(); ?>" data-descr="<?php the_field('nft_descr') ?>" data-price="<?php the_field('nft_price') ?>" data-title="<?php echo the_title(); ?>" id="show-modal" class="dashboard__item dashboard__item--<?php echo the_field("nft_color");?>">
        <a href="#">
          <img src="<?php the_field('nft_img') ?>" alt="image" />
          <div class="dashboard__item-name">
            <div>
              <span><?php the_title(); ?></span>
            </div>
            <span class="dashboard__item-owner">
              <?php the_field('nft_owner') ?>
            </span>
          </div>
        </a>
      </li>

    <?php
    }

    wp_reset_postdata();
    ?>

  </ul>
  <h2 class="dashboard__subtitle dashboard__subtitle--epic">Epic</h2>
  <ul class="dashboard__list">
    <?php

    $posts = get_posts(array(
      'numberposts' => -1,
      'category_name' => "nft_epic",
      'orderby' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <li data-color="<?php echo the_field("nft_color");?>" data-buy-src="<?php the_field('nft_buy-src') ?>" data-src="<?php the_field('nft_img') ?>" data-alt="<?php echo the_title(); ?>" data-descr="<?php the_field('nft_descr') ?>" data-price="<?php the_field('nft_price') ?>" data-title="<?php echo the_title(); ?>" id="show-modal" class="dashboard__item dashboard__item--<?php echo the_field("nft_color");?>">
        <a href="#">
          <img src="<?php the_field('nft_img') ?>" alt="image" />
          <div class="dashboard__item-name">
            <div>
              <span><?php the_title(); ?></span>
            </div>
            <span class="dashboard__item-owner">
              <?php the_field('nft_owner') ?>
            </span>
          </div>
        </a>
      </li>

    <?php
    }

    wp_reset_postdata();
    ?>

  </ul>
  <h2 class="dashboard__subtitle dashboard__subtitle--rare">Rare</h2>
  <ul class="dashboard__list">
    <?php

    $posts = get_posts(array(
      'numberposts' => -1,
      'category_name' => "nft_rare",
      'orderby' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <li data-color="<?php echo the_field("nft_color");?>" data-buy-src="<?php the_field('nft_buy-src') ?>" data-src="<?php the_field('nft_img') ?>" data-alt="<?php echo the_title(); ?>" data-descr="<?php the_field('nft_descr') ?>" data-price="<?php the_field('nft_price') ?>" data-title="<?php echo the_title(); ?>" id="show-modal" class="dashboard__item dashboard__item--<?php echo the_field("nft_color");?>">
        <a href="#">
          <img src="<?php the_field('nft_img') ?>" alt="image" />
          <div class="dashboard__item-name">
            <div>
              <span><?php the_title(); ?></span>
            </div>
            <span class="dashboard__item-owner">
              <?php the_field('nft_owner') ?>
            </span>
          </div>
        </a>
      </li>

    <?php
    }

    wp_reset_postdata();
    ?>

  </ul>
  <h2 class="dashboard__subtitle dashboard__subtitle--common">Common</h2>
  <ul class="dashboard__list">
    <?php

    $posts = get_posts(array(
      'numberposts' => -1,
      'category_name' => "nft_common",
      'orderby' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <li data-color="<?php echo the_field("nft_color");?>" data-buy-src="<?php the_field('nft_buy-src') ?>" data-src="<?php the_field('nft_img') ?>" data-alt="<?php echo the_title(); ?>" data-descr="<?php the_field('nft_descr') ?>" data-price="<?php the_field('nft_price') ?>" data-title="<?php echo the_title(); ?>" id="show-modal" class="dashboard__item dashboard__item--<?php echo the_field("nft_color");?>">
        <a href="#">
          <img src="<?php the_field('nft_img') ?>" alt="image" />
          <div class="dashboard__item-name">
            <div>
              <span><?php the_title(); ?></span>
            </div>
            <span class="dashboard__item-owner">
              <?php the_field('nft_owner') ?>
            </span>
          </div>
        </a>
      </li>

    <?php
    }

    wp_reset_postdata();
    ?>

  </ul>
  <div class="dashboard__describe">
    <p class="dashboard__text">
      This collection contains completed works. Once you have
      bought them, you become their full owner. After the launch
      of the TON-based trading platform, we will transfer your
      tokens to your wallet.
    </p>
    <div class="dashboard__name dashboard__name--center">
      Subscribe or ask a question
    </div>
    <a href="https://t.me/russkirave_community" class="dashboard__social">
      <div class="dashboard__social-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.45777 16.6546L8.37511 13.0893C8.37377 13.0879 5.27377 12.1213 5.27377 12.1213C4.91911 12.0106 4.90177 11.5133 5.24977 11.3799L17.0511 6.82792C17.4871 6.65992 17.9364 7.04259 17.8404 7.49992L15.8578 16.8439C15.7418 17.3919 15.0978 17.6359 14.6484 17.3026L11.8324 15.2226L10.1724 16.8386C9.93911 17.0626 9.55244 16.9626 9.45777 16.6546V16.6546Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        Channel
      </div>
    </a>
  </div>
</div>
<?php get_footer(); ?>