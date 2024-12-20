<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
?>
<div class="row justify-center">
    <div class="col-xl-8 col-lg-9 col-md-11">
        <div class="border-bottom-light py-30">
            <div class="row x-gap-50 justify-between items-center">
<!--                prev post-->
                <?php if (!empty($prev_post)): ?>
                    <div class="col-md-4 col-6">
                        <a href="<?= get_permalink($prev_post->ID) ?>" class="related-nav__item -prev decoration-none">
                            <div class="related-nav__arrow">
                                <i class="icon size-20 pt-5" data-feather="arrow-right"></i>
                            </div>
                            <div class="related-nav__content">
                                <div class="text-17 text-dark-1 fw-500">پست قبلی</div>
                                <p class="text-dark-1 mt-8"><?= $prev_post->post_title ?></p>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="col-auto lg:d-none">
                    <div class="related-nav__icon row">

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                        <div class="col-4">
                            <span></span>
                        </div>

                    </div>
                </div>
<!--                next post-->
                <?php if (!empty($next_post)): ?>
                    <div class="col-md-4 col-6 d-flex justify-end">
                        <a href="<?= get_permalink($next_post->ID) ?>"
                           class="related-nav__item -next text-right decoration-none">
                            <div class="related-nav__content">
                                <div class="text-17 text-dark-1 fw-500">پست بعدی</div>
                                <p class="text-dark-1 mt-8"><?= $next_post->post_title ?></p>
                            </div>
                            <div class="related-nav__arrow">
                                <i class="icon size-20 pt-5" data-feather="arrow-left"></i>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
