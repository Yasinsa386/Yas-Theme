<body <?php body_class('preloader-visible'); ?> data-barba="wrapper">
<!-- preloader start -->
<div class="preloader js-preloader">
    <div class="preloader__bg"></div>
</div>
<!-- preloader end -->


<main class="main-content  ">

    <header data-anim="fade" data-add-bg="bg-white" class="header -type-4 js-header">


        <div class="header__container py-5 border-bottom-dark">
            <div class="row justify-between items-center">

                <div class="col-auto">
                    <div class="header-left d-flex items-center">

                        <div class="header__logo pl-30 xl:pl-20 md:pl-0">
                            <a data-barba href="index.html">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/general/logo-black.svg"
                                     alt="logo">
                            </a>
                        </div>


                        <div class="header-menu js-mobile-menu-toggle ">
                            <div class="header-menu__content">
                                <div class="mobile-bg js-mobile-bg"></div>

                                <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                    <a href="login.html" class="text-dark-1">ورود</a>
                                    <a href="signup.html" class="text-dark-1 mr-30">ثبت نام</a>
                                </div>


                                <?php
                                include_once YT_BASE_PATH . 'class/YtWalker.php';
                                wp_nav_menu([
                                        'menu' => 'header',
                                        'container' => 'div',
                                        'container_class' => 'menu js-navList',
                                        'container_id' => '',
                                        'container_aria_label' => '',
                                        'menu_class' => 'menu__nav text-dark-1 -is-active',
                                        'walker' => new YtWalker(),
                                    ]
                                )
                                ?>

                                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                    <div class="mobile-footer__number">
                                        <div class="text-17 fw-500 text-dark-1">شماره تماس</div>
                                        <div class="text-17 fw-500 text-purple-1">02188888888</div>
                                    </div>

                                    <div class="lh-2 mt-10">
                                        <div>تهران، خیابان آزادی<br> خیابان ولیعصر جنوبی مجتمع لوتوس طبقه همکف پلاک 260
                                        </div>
                                        <div>hi@example.com</div>
                                    </div>

                                    <div class="mobile-socials mt-10">

                                        <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                            <i class="fa fa-instagram"></i>
                                        </a>

                                        <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                            <i class="fa fa-linkedin"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                                <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                                    <div class="icon-close text-dark-1 text-16"></div>
                                </div>
                            </div>

                            <div class="header-menu-bg"></div>
                        </div>

                    </div>
                </div>


                <div class="col-auto">
                    <div class="header-right d-flex items-center">
                        <div class="header-right__icons text-white d-flex items-center">

                            <div class="">
                                <button class="d-flex items-center text-dark-1" data-el-toggle=".js-search-toggle">
                                    <i class="text-20 icon icon-search"></i>
                                </button>

                                <div class="toggle-element js-search-toggle">
                                    <div class="header-search pt-90 bg-white shadow-4">
                                        <div class="container">
                                            <div class="header-search__field">
                                                <div class="icon icon-search text-dark-1"></div>
                                                <input type="text" class="col-12 text-15 lh-12 text-dark-1 fw-500"
                                                       placeholder="جستجوی دوره">

                                                <button class="d-flex items-center justify-center size-40 rounded-full bg-purple-3"
                                                        data-el-toggle=".js-search-toggle">
                                                    <img src="<?= get_template_directory_uri() ?>/assets/img/menus/close.svg"
                                                         alt="icon">
                                                </button>
                                            </div>

                                            <div class="header-search__content mt-30">
                                                <div class="text-17 text-dark-1 fw-500">دوره های محبوب</div>

                                                <div class="d-flex y-gap-5 flex-column mt-20">
                                                    <a href="courses-single-1.html" class="text-dark-1">دوره نهایی طراحی
                                                        - مبتدی تا پیشرفته</a>
                                                    <a href="courses-single-2.html" class="text-dark-1">طراح و تحلیلگر
                                                        نرم افزار</a>
                                                    <a href="courses-single-3.html" class="text-dark-1">یادگیری مدل سازی
                                                        سه بعدی برای مبتدیان</a>
                                                    <a href="courses-single-4.html" class="text-dark-1">ملزومات طراحی
                                                        تجربه کاربری - Adobe XD UI UX Design</a>
                                                    <a href="courses-single-5.html" class="text-dark-1">کلاس کارشناسی
                                                        ارشد طراحی گرافیک</a>
                                                    <a href="courses-single-6.html" class="text-dark-1">دوره آموزشی
                                                        Adobe Photoshop CC – Essentials</a>
                                                </div>

                                                <div class="mt-30">
                                                    <button class="uppercase underline">برای دیدن همه نتایج جستجو، ENTER
                                                        را فشار دهید
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-search__bg" data-el-toggle=".js-search-toggle"></div>
                                </div>
                            </div>


                            <div class="relative pr-30 sm:pr-15">
                                <button class="d-flex items-center text-dark-1" data-el-toggle=".js-cart-toggle">
                                    <i class="text-20 icon icon-basket"></i>
                                </button>

                                <div class="toggle-element js-cart-toggle">
                                    <div class="header-cart bg-white -dark-bg-dark-1 rounded-8">
                                        <div class="px-30 pt-30 pb-10">

                                            <div class="row justify-between x-gap-40 pb-20">
                                                <div class="col">
                                                    <div class="row x-gap-10 y-gap-10">
                                                        <div class="col-auto">
                                                            <img src="<?= get_template_directory_uri() ?>/assets/img/menus/cart/1.png"
                                                                 alt="image">
                                                        </div>

                                                        <div class="col">
                                                            <div class="text-dark-1 lh-15">دوره نهایی نقاشی از مبتدی تا
                                                                پیشرفته...
                                                            </div>

                                                            <div class="d-flex items-center mt-10">
                                                                <div class="lh-12 fw-500 line-through text-light-1 ml-10">
                                                                    179
                                                                </div>
                                                                <div class="text-15 lh-12 fw-500 text-dark-1">79000
                                                                    تومان
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <button><img
                                                                src="<?= get_template_directory_uri() ?>/assets/img/menus/close.svg"
                                                                alt="icon"></button>
                                                </div>
                                            </div>

                                            <div class="row justify-between x-gap-40 pb-20">
                                                <div class="col">
                                                    <div class="row x-gap-10 y-gap-10">
                                                        <div class="col-auto">
                                                            <img src="<?= get_template_directory_uri() ?>/assets/img/menus/cart/2.png"
                                                                 alt="image">
                                                        </div>

                                                        <div class="col">
                                                            <div class="text-dark-1 lh-15">آموزش ساخت وب سایت خبری با
                                                                React Node
                                                            </div>

                                                            <div class="d-flex items-center mt-10">
                                                                <div class="lh-12 fw-500 line-through text-light-1 ml-10">
                                                                    179
                                                                </div>
                                                                <div class="text-15 lh-12 fw-500 text-dark-1">79000
                                                                    تومان
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <button><img
                                                                src="<?= get_template_directory_uri() ?>/assets/img/menus/close.svg"
                                                                alt="icon"></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="px-30 pt-20 pb-30 border-top-light">
                                            <div class="d-flex justify-between">
                                                <div class="text-18 lh-12 text-dark-1 fw-500">جمع کل:</div>
                                                <div class="text-18 lh-12 text-dark-1 fw-500">659000 تومان</div>
                                            </div>

                                            <div class="row x-gap-20 y-gap-10 pt-30">
                                                <div class="col-sm-6">
                                                    <button class="button py-20 -dark-1 text-white -dark-button-white col-12">
                                                        مشاهده سبد
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button class="button py-20 -purple-1 text-white col-12">تسویه
                                                        حساب
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="d-none xl:d-block pr-30 sm:pr-15">
                                <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                                    <i class="text-11 icon icon-mobile-menu"></i>
                                </button>
                            </div>

                        </div>

                        <div class="header-right__buttons d-flex items-center mr-30 xl:mr-20 lg:d-none">
                            <a href="login.html" class="button -underline text-dark-1">ورود</a>
                            <a href="signup.html"
                               class="button h-50 px-40 -purple-1 -rounded text-white mr-30 xl:mr-20">ثبت نام</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>