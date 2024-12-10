<section class="layout-pt-lg layout-pb-lg">
    <div data-anim-wrap class="container">
        <div class="row y-gap-15 justify-between items-end">
            <div class="col-lg-6">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">وبلاگ</h2>

                    <p class="sectionTitle__text ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم است.</p>

                </div>

            </div>

            <div class="col-auto">
                <div class="d-flex justify-center x-gap-15 items-center">
                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-left-hover js-events-slider-prev">
                            <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                    <div class="col-auto">
                        <div class="pagination -arrows js-events-slider-pagination"></div>
                    </div>
                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-right-hover js-events-slider-next">
                            <i class="icon icon-arrow-left"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-60 lg:pt-40 js-section-slider" data-gap="30" data-pagination="js-events-slider-pagination"
             data-nav-prev="js-events-slider-prev" data-nav-next="js-events-slider-next" data-slider-cols="xl-3 lg-2">
            <div class="swiper-wrapper">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                #for post Levels
                        $levels_array = [
                            null,
                            'مقدماتی',
                            'متوسط',
                            'پیشرفته',
                        ];
                        $post_level = get_post_meta(get_the_ID(), '_yt_post_level', true);
                        if (array_key_exists($post_level, $levels_array)) {
                            $post_level_text = $levels_array[$post_level];
                        }
                #for category
                        $category_id = get_post_meta(get_the_ID(), '_yt_category_name' ,true);
                        if (!empty($category_id)) $category_name = get_the_category_by_ID($category_id);
                        ?>
                        <div class="swiper-slide col-lg-3 col-md-6">
                            <div data-anim-child="slide-up delay-2" class="is-in-view">

                                <a href="<?=get_the_permalink()?>" class="coursesCard -type-1 ">
                                    <div class="relative">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="coursesCard__image overflow-hidden rounded-8">
                                                <?php the_post_thumbnail('thumbnail', ['class' => 'w-1/1', 'style' => 'width=300px; height=200px; object-fit: cover;']); ?>
                                                <div class="coursesCard__image_overlay rounded-8"></div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                            <div>
                                                <div class="px-15 rounded-200 bg-purple-1">
                                                    <span class="text-11 lh-1 uppercase fw-500 text-white">ویژه</span>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="px-15 rounded-200 bg-green-1">
                                                    <span class="text-11 lh-1 uppercase fw-500 text-dark-1">پروفروش</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="h-100 pt-15">
                                        <div class="d-flex items-center">
                                            <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                                            <div class="d-flex x-gap-5 items-center">
                                                <div class="icon-star text-9 text-yellow-1"></div>
                                                <div class="icon-star text-9 text-yellow-1"></div>
                                                <div class="icon-star text-9 text-yellow-1"></div>
                                                <div class="icon-star text-9 text-yellow-1"></div>
                                                <div class="icon-star text-9 text-yellow-1"></div>
                                            </div>
                                            <div class="text-13 lh-1 mr-10">(1991)</div>
                                        </div>

                                        <div class="text-17 lh-15 fw-500 text-dark-1 mt-10"><?php the_title() ?></div>

                                        <div class="d-flex x-gap-10 items-center pt-10">

                                            <div class="d-flex items-center">
                                                <div class="ml-8">
                                                    <img src="<?= get_template_directory_uri() ?>/assets/img/coursesCards/icons/1.svg"
                                                         alt="icon">
                                                </div>
                                                <div class="text-14 lh-1">6 دوره</div>
                                            </div>
<!--                                            category-->
                                            <?php if (!empty($category_name)):?>
                                            <div class="d-flex items-center">
                                                <div class="d-flex items-center">
                                                    <i class="icon-play text-15 ml-10"></i>
                                                    <div class="text-13 lh-1"><?=$category_name?></div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
<!--                                            Levels-->
                                            <?php if (!empty($post_level_text)) :?>
                                            <div class="d-flex items-center">
                                                <div class="ml-8">
                                                    <img src="<?= get_template_directory_uri() ?>/assets/img/coursesCards/icons/3.svg"
                                                         alt="icon">
                                                </div>
                                                <div class="text-14 lh-1"><?= $post_level_text ?></div>
                                            </div>
                                            <?php $post_level_text = null; endif;?>

                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    <?php endwhile; endif; ?>


            </div>
        </div>
    </div>
</section>
