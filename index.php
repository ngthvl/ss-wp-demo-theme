<?php
get_header();
?>
<!--    section 1   -->
<div class="bg-primary text-white">
    <div class="container">
        <div class="row" style="height: 560px;">
            <div class="col-lg-6 col-sm-12 position-relative">
                <h1 class="headline"><?= get_bloginfo("description") ?></h1>
                <h2 class="subheading"><?= get_theme_mod("ss_sub_title") ?></h2>
                <button type="button" class="btn btn-light rounded-1 px-5 mt-5 py-3 btn-lg text-primary">Lorem Ipsum</button>
                <div class="center-box text-white">
                    <h4><?= get_theme_mod("ss_box_title") ?></h4>
                    <div class="inner-box">
                        <h2><?= get_theme_mod("ss_box_stat") ?></h2>
                        <p><?= get_theme_mod("ss_box_description") ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-xl-4">
                <div class="right-box-outer mt-5 w-100">
                    <img src="<?= get_header_image() ?>" alt="">
                </div>
            </div>
        </div>
    </div>

</div>

<!--    Section 2   -->

<div class="bg-white section-2 pt-5 mt-5 d-flex flex-column align-items-center pb-5 mb-4">
    <h3 class="mt-5">
        <?= get_theme_mod('ss_services_title') ?>
    </h3>
    <p><?= get_theme_mod('ss_services_description') ?></p>
    <div class="w-100 container position-relative ps-4 pe-4 pb-4">
        <div class="row row-cols-3">
            <?php
            $args = array(
                'post_type'   => array('our_services'),
                'post_status' => 'publish',
                'posts_per_page' => '5',
            );
            query_posts( $args );
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
            endif;
            ?>
            <div class="col mt-4">
                <div class="card mt-4 border-0" style="height: 332px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-end">
                        <h2 class="text-primary"><?= get_theme_mod('ss_services_end_card_title') ?></h2>
                        <p class="w-100 text-center mt-2" id="ss_services_end_card_description"><?= get_theme_mod('ss_services_end_card_description') ?></p>
                        <a href="<?= get_theme_mod('ss_services_end_card_btn_url') ?>" class="btn btn-outline-primary mt-2 px-5 py-3"><?= get_theme_mod('ss_services_end_card_btn_lbl') ?></a>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?= get_template_directory_uri() . '/assets/blue angle.svg'?>" alt="" class="img-fluid position-absolute blue-angle">
        <img src="<?= get_template_directory_uri() . '/assets/grey angle.svg'?>" alt="" class="img-fluid position-absolute grey-angle">
    </div>
</div>


<div class="section-3 bg-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card section-card bg-transparent rounded-0 me-5">
                    <div class="card-body px-4 pb-4 row row-cols-2">
                        <div class="col mt-4">
                            <div class="card card-info bg-primary rounded-0">
                                <div class="card-body text-center py-5">
                                    <h1 class="text-secondary"><?= get_theme_mod('ss_about_us_box1_title') ?></h1>
                                    <p class="text-white"><?= get_theme_mod('ss_about_us_box1_subtitle') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <div class="card card-info bg-primary rounded-0">
                                <div class="card-body text-center py-5">
                                    <h1 class="text-secondary"><?= get_theme_mod('ss_about_us_box2_title') ?></h1>
                                    <p class="text-white"><?= get_theme_mod('ss_about_us_box2_subtitle') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <div class="card card-info bg-primary rounded-0">
                                <div class="card-body text-center py-5">
                                    <h1 class="text-secondary"><?= get_theme_mod('ss_about_us_box3_title') ?></h1>
                                    <p class="text-white"><?= get_theme_mod('ss_about_us_box3_subtitle') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <div class="card card-info bg-primary rounded-0">
                                <div class="card-body text-center py-5">
                                    <h1 class="text-secondary"><?= get_theme_mod('ss_about_us_box4_title') ?></h1>
                                    <p class="text-white"><?= get_theme_mod('ss_about_us_box4_subtitle') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pe-5 left-info d-flex flex-column justify-content-center">
                <h1><?= get_theme_mod("ss_about_us_title") ?></h1>
                <p class="mt-3"><?= get_theme_mod("ss_about_us_description") ?></p>
                <div>
                    <a href="<?= get_theme_mod('ss_about_us_btn_url') ?>" class="btn btn-outline-primary px-5 py-3"><?= get_theme_mod('ss_about_us_btn_label') ?></a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="section-4 pt-5 pb-5">
    <h3 class="mt-5 text-center mb-5">
        <?= get_theme_mod('ss_clients_title') ?>
    </h3>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <?php
            $args = array(
                'post_type'   => array('our_clients'),
                'post_status' => 'publish',
                'posts_per_page' => '5',
            );
            query_posts( $args );
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div>

<div class="section-5 pt-5 bg-light w-100 px-0 position-relative">
    <div class="row">
        <div class="offset-4 col-8 mt-3 position-relative p-5 pe-0 bg-offset-3">
            <div class="bg-primary background"></div>
            <img src="<?= get_template_directory_uri() . '/assets/blue angle.svg'?>" alt="" class="img-fluid position-absolute blue-angle">
            <img src="<?= get_template_directory_uri() . '/assets/grey angle.svg'?>" alt="" class="img-fluid position-absolute grey-angle">
        </div>
    </div>
    <div class="position-absolute content">
        <div class="w-100 mb-4">
            <div class="row">
                <div class="col-4">
                    <h3 class="text-primary text-center"><?= get_theme_mod('ss_our_work_title') ?></h3>
                </div>
                <div class="col-8 text-end">
                    <a href="#" class="text-white">View All</a>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            <?php
            $args = array(
                'post_type'   => array('our_work'),
                'post_status' => 'publish',
            );
            query_posts( $args );
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
            endif;
            ?>
        </div>
    </div>

</div>

<div class="section-6 pt-5 w-100 px-0 position-relative pb-5 mb-5">
    <div class="container position-relative mt-5 pt-5 me-0">
        <div class="row">
            <div class="col-8 offset-3">
                <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/Screen Shot 2022-10-10 at 1.34.32 PM.png' ?>" alt="">
            </div>
        </div>
        <div class="position-absolute card-left p-4 pb-0">
            <img src="<?= get_template_directory_uri() . '/assets/blue angle.svg'?>" alt="" class="img-fluid position-absolute blue-angle">
            <div class="card bg-primary rounded-0">
                <div class="card-body pt-5 px-4 text-white">
                    <h3><?= get_theme_mod('ss_our_locations_title') ?></h3>

                    <ul class="list-group list-group-flush">

                        <?php
                        $args = array(
                            'post_type'   => array('our_locations'),
                            'post_status' => 'publish',
                        );
                        query_posts( $args );
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                            endwhile;
                        endif;
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-7 py-5 w-100 bg-light">
    <h3 class="text-center mt-4"><?= get_theme_mod('ss_testimonials_title') ?></h3>
    <p class="mt-3 text-center">
        <?= get_theme_mod('ss_testimonials_description') ?>
    </p>

    <div class="testimonials">
        <?php
        $args = array(
            'post_type'   => array('testimonials'),
            'post_status' => 'publish',
        );
        query_posts( $args );
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
        endif;
        ?>

    </div>
</div>

<div class="section-8 py-5 w-100">
    <div class="container position-relative p-4">
        <div class="card w-100 border-0 rounded-0">
            <div class="card-body text-center text-white d-flex flex-column align-items-center justify-content-center">
                <h3 class=""><?= get_theme_mod('ss_our_projects_title') ?></h3>
                <p class="mt-4"><?= get_theme_mod('ss_our_projects_description') ?></p>
                <a href="<?= get_theme_mod('ss_our_projects_btn_url') ?>" class="btn btn-outline-light btn-lb py-3 px-5 mt-4"><?= get_theme_mod('ss_our_projects_btn_lbl') ?></a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri() . '/assets/blue angle.svg'?>" alt="" class="img-fluid position-absolute blue-angle">
        <img src="<?= get_template_directory_uri() . '/assets/grey angle.svg'?>" alt="" class="img-fluid position-absolute grey-angle">
    </div>
</div>

<div class="newsletter py-5 w-100 bg-primary">
    <div class="container d-flex justify-content-between align-items-center text-white">
        <h2><?= get_theme_mod('ss_footer_newsletter_title') ?></h2>
        <div class="flex-fill d-flex justify-content-end">
            <div class="me-4 custom-group">
                <label class="bg-primary">Name</label>
                <input type="text" class="form-control form-control-lg rounded-1 bg-transparent border-light">
            </div>
            <div class="me-4 custom-group">
                <label class="bg-primary">Email</label>
                <input type="email" class="form-control form-control-lg rounded-1 bg-transparent border-light">
            </div>
            <button class="btn btn-light btn-lg">Sign Up</button>
        </div>
    </div>
</div>

<?php
get_footer();
