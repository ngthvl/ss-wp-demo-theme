<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SS_Test
 */

?>
<footer class="py-5 container d-flex justify-content-between">
    <div class="d-flex flex-column align-items-baseline">
        <img src="<?= get_theme_mod('ss_footer_logo') ?>" alt="">
        <a href="tel:<?= get_theme_mod('ss_phone_number') ?>" class="btn btn-outline-primary btn-lg py-2 px-5 mt-4">Contact</a>
    </div>

    <div>
        <h4 class="menu-head">Lorem Ipsum</h4>
        <?php
        wp_nav_menu(
            array(
                'menu'                  => 'menu-2',
                'theme_location'        => 'menu-2',
                'menu_class'            => 'list-group list-group-flush p-0',
                'container'             => 'ul',
                'depth'                 => 4,
                'walker'                => new SSFooterMenuWalker()
            )
        );
        ?>
    </div>
    <div>
        <h4 class="menu-head">Lorem Ipsum</h4>
        <?php
        wp_nav_menu(
            array(
                'menu'                  => 'menu-3',
                'theme_location'        => 'menu-3',
                'menu_class'            => 'list-group list-group-flush p-0',
                'container'             => 'ul',
                'depth'                 => 4,
                'walker'                => new SSFooterMenuWalker()
            )
        );
        ?>
    </div>
    <div>
        <h4 class="menu-head">Lorem Ipsum</h4>
        <?php
        wp_nav_menu(
            array(
                'menu'                  => 'menu-4',
                'theme_location'        => 'menu-4',
                'menu_class'            => 'list-group list-group-flush p-0',
                'container'             => 'ul',
                'depth'                 => 4,
                'walker'                => new SSFooterMenuWalker()
            )
        );
        ?>
    </div>
    <div class="socials">
        <button class="btn btn-outline-primary border-0">
            <i class="fa-brands fa-facebook-f"></i>
        </button>
        <button class="btn btn-outline-primary border-0">
            <i class="fa-brands fa-linkedin-in"></i>
        </button>
        <button class="btn btn-outline-primary border-0">
            <i class="fa-brands fa-youtube"></i>
        </button>
        <button class="btn btn-outline-primary border-0">
            <i class="fa-brands fa-instagram"></i>
        </button>
    </div>
</footer>
</div><!-- #page -->


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
