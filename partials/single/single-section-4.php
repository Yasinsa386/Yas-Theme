<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="blogSection">
            <div class="blogCard">
                <div class="row justify-center">
                    <div class="col-xl-8 col-lg-9 col-md-11">
                        <div class="blogCard__content">
                            <?= get_the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-center pt-30">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="row y-gap-20 justify-between items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <div class="lh-1 text-dark-1 fw-500 ml-30">اشتراک گذاری</div>

                                <div class="d-flex x-gap-15">
                                    <a href="#">Fb</a>
                                    <a href="#">Tw</a>
                                    <a href="#">In</a>
                                    <a href="#">Ln</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $tags = get_the_tags();
                        if ($tags):
                            ?>
                            <div class="col-auto">
                                <div class="row x-gap-10 y-gap-10">
                                    <?php foreach ($tags as $tag): ?>
                                        <div class="col-auto">
                                            <a href="#"
                                               class="badge -sm -light-3 text-11 text-dark-1"><?= $tag->name ?></a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php get_template_part('partials/single/single-section-4', 'author') ?>

            <?php get_template_part('partials/single/single-section-4', 'nexprev') ?>

            <?php get_template_part('partials/single/single-section-4', 'comments') ?>


        </div>
    </div>
</section>
