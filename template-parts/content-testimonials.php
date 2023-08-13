<div class="px-4">
    <div class="card bg-white mt-5 pt-5" style="width: 900px">
        <div class="card-body d-flex flex-column justify-content-center align-items-center px-5 pb-5">
            <div class="position-relative">
                <?= the_post_thumbnail(); ?>
                <img style="top: -1em;left: -1em;" class="position-absolute" src="wp-content/themes/ss-test/assets/quote icn.svg" alt="">
            </div>
            <div class="px-5 mx-5 text-center mt-4" style="font: normal normal normal 24px/34px Rubik;">
                <?= the_content(); ?>
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in condimentum quam. Quisque sed condimentum lectus. Pellentesque suscipit enim sed venenatis pretium.-->
            </div>
            <h4 class="mt-4">
                <?= the_field('name') ?>
<!--                — Firstname L.-->
            </h4>
            <h5 class="mt-4"><?= the_field('job_title') ?>, <?= the_field('company_name') ?></h5>
        </div>
    </div>
</div>