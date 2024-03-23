<!DOCTYPE html>
<html lang="fr">

<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>Portfolio Marion</title>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrap z-40">
    <div class="navigation">
      <header class="grid-header mx-[4rem] md:mx-[1rem] mt-2">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img class="lg:w-[100px] w-[120px]" src="<?php echo wp_get_attachment_url(90); ?>" alt="img" />
        </a>
        <div class="md:header-mobileul hidden md:block">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
            )
          );
          ?>
        </div>
        <div class="md:hidden flex justify-end">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
            )
          );
          ?>
        </div>
      </header>
    </div>