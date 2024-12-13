<section class="layout-pt-md">
    <div class="container">
        <?php if (!has_post_thumbnail()):?>
        <div class="ratio ratio-16:9 rounded-8 bg-image js-lazy"
             data-bg="<?= get_template_directory_uri() ?>/assets/img/blog/blog-single/images.png"></div>
        <?php else: ?>
        <div class="ratio ratio-16:9 rounded-8 bg-image js-lazy relative"
             data-bg="<?=get_the_post_thumbnail_url()?>">
            <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                <div>
                    <div class="px-15 rounded-200 bg-purple-1">
                        <span class="text-11 lh-1 uppercase fw-500 text-white ">بازدید</span>
                        <span class="text-11 lh-1 uppercase fw-500 text-white "><?=YtPostCounter::get(get_the_ID()) ?></span>
                    </div>
                </div>

                <div>
                    <div class="px-15 rounded-200 bg-green-1">
                        <span class="text-11 lh-1 uppercase fw-500 text-white ">دقیقه</span>
                        <span class="text-11 lh-1 uppercase fw-500 text-white "><?=YtReadTime::get(get_the_content()) ?></span>                    </div>
                </div>

            </div>
        </div>

        <?php endif; ?>
    </div>
</section>
