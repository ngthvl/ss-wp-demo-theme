<div class="col">
    <div class="card mt-4 border-0" style="background: url(<?= the_post_thumbnail_url(); ?>);background-size: cover">

        <div class="card-body d-flex flex-column align-items-center justify-content-end" style="background: rgba(0,0,0,0.5)">
            <h2><?= the_title(); ?></h2>
            <p class="w-100 text-center mt-2" id="ss_services_end_card_description"><?= the_content() ?></p>
            <?php if(the_field('enable_button')): ?>
            <a href="<?= the_field('button_url') ?>" class="btn btn-outline-primary mt-2 px-5 py-3"><?= the_field('button_label') ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
