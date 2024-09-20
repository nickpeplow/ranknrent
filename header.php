<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="bg-light py-2 py-md-3">
  <div class="container">
    <div class="row align-items-center gy-2 gy-md-0">
      <div class="col-md-3 text-center text-md-start order-md-1 order-2">
        <i class="fas fa-phone-alt me-2 fs-4"></i>
        <span class="fs-4"><?php echo get_theme_mod('header_phone', '(123) 456-7890'); ?></span>
      </div>
      <div class="col-md-6 text-center order-md-2 order-1">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<h1><a href="' . esc_url(home_url('/')) . '" style="color: black; text-decoration: none;">' . get_bloginfo('name') . '</a></h1>';
        }
        ?>
      </div>
      <div class="col-md-3 text-center text-md-end order-md-3 order-3">
        <a href="<?php echo esc_url(get_theme_mod('header_cta_link', '#')); ?>" class="btn btn-success btn-lg text-white px-4 py-2 fs-5">
          <?php echo get_theme_mod('header_cta_text', 'Request a Service'); ?>
        </a>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class'     => 'navbar-nav',
        'container'      => false,
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'          => 2,
      ));
      ?>
    </div>
  </div>
</nav>

<style>
  .navbar-nav .menu-item-has-children {
    position: relative;
  }
  .navbar-nav .menu-item-has-children:hover > .sub-menu {
    display: block;
  }
  .navbar-nav .sub-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #198754;
    padding: 0.5rem 0;
    margin-top: 0;
    min-width: 10rem;
    z-index: 1000;
    list-style-type: none;
    border: none;
    border-radius: 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  .navbar-nav .sub-menu .menu-item {
    padding: 0;
  }
  .navbar-nav .sub-menu .menu-item a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 0.5rem 1rem;
  }
  .navbar-nav .sub-menu .menu-item a:hover,
  .navbar-nav .sub-menu .menu-item a:focus {
    background-color: #157347;
    color: white;
  }
  .navbar-nav > .menu-item > a {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    display: block;
  }
  .navbar-nav > .menu-item > a:hover {
    color: rgba(255, 255, 255, 0.8);
  }
</style>