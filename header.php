<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SS_Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1,
maximum-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Sora">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Rubik">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="w-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container d-flex justify-content-between">
            <?= the_custom_logo(); ?>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <?php
                wp_nav_menu(
                    array(
                        'menu'                  => 'menu-1',
                        'theme_location'        => 'menu-1',
                        'menu_class'            => 'navbar-nav',
                        'container'             => 'ul',
                        'depth'                 => 4,
                        'walker'                => new SSHeaderMenuWalker()
                    )
                );
                ?>
                <ul class="navbar-nav">
                    <li class="ms-3 nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-phone-flip"></i> <?= get_theme_mod('ss_phone_number') ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="tel:<?= get_theme_mod('ss_phone_number') ?>" class="btn btn-outline-light btn-lg py-2 px-5 ms-4">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

