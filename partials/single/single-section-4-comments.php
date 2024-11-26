<div class="row justify-center pt-30">
    <div class="col-xl-8 col-lg-9 col-md-11">
        <div class="blogPost -comments">
            <div class="blogPost__content">
                <h2 class="text-20 fw-500">
                    دیدگاه کاربران
                </h2>

                <ul class="comments__list mt-30">
                    <li class="comments__item">
                        <div class="comments__item-inner md:direction-column">
                            <div class="comments__img ml-20">
                                <div class="bg-image rounded-full js-lazy" data-bg="<?=get_template_directory_uri()?>/assets/img/avatars/1.png"></div>
                            </div>

                            <div class="comments__body md:mt-15">
                                <div class="comments__header">
                                    <h4 class="text-17 fw-500 lh-15">
                                        علی صالحی
                                        <span class="text-13 text-light-1 fw-400">3 روز قبل</span>
                                    </h4>

                                    <div class="stars"></div>
                                </div>

                                <h5 class="text-15 fw-500 mt-15">بهترین دوره آموزشی</h5>
                                <div class="comments__text mt-10">
                                    <p>این دوره بسیار کاربردی است. پروفسور سمیعی دقیقاً هر الگوریتم را توضیح می دهد و حتی سعی می کند مفاهیم ریاضی و آماری پشت هر الگوریتم را شهودی ارائه دهد. بسیار از شما متشکرم.</p>
                                </div>

                                <div class="comments__helpful mt-20">
                                    <span class="text-13 text-purple-1">آیا این دیدگاه مفید بود؟</span>
                                    <button class="button text-13 -sm -purple-1 text-white">بله</button>
                                    <button class="button text-13 -sm -light-7 text-purple-1">خیر</button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="comments__item">
                        <div class="comments__item-inner md:direction-column">
                            <div class="comments__img ml-20">
                                <div class="bg-image rounded-full js-lazy" data-bg="<?=get_template_directory_uri()?>/assets/img/avatars/1.png"></div>
                            </div>

                            <div class="comments__body md:mt-15">
                                <div class="comments__header">
                                    <h4 class="text-17 fw-500 lh-15">
                                        علی صالحی
                                        <span class="text-13 text-light-1 fw-400">3 روز قبل</span>
                                    </h4>

                                    <div class="stars"></div>
                                </div>

                                <h5 class="text-15 fw-500 mt-15">بهترین دوره آموزشی</h5>
                                <div class="comments__text mt-10">
                                    <p>این دوره بسیار کاربردی است. پروفسور سمیعی دقیقاً هر الگوریتم را توضیح می دهد و حتی سعی می کند مفاهیم ریاضی و آماری پشت هر الگوریتم را شهودی ارائه دهد. بسیار از شما متشکرم.</p>
                                </div>

                                <div class="comments__helpful mt-20">
                                    <span class="text-13 text-purple-1">آیا این دیدگاه مفید بود؟</span>
                                    <button class="button text-13 -sm -purple-1 text-white">بله</button>
                                    <button class="button text-13 -sm -light-7 text-purple-1">خیر</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="respondForm pt-30">
            <h3 class="text-20 fw-500">
                ثبت دیدگاه
            </h3>

            <div class="mt-30">
                <h4 class="text-16 fw-500">آیا این وبلاگ را دوست داشتید؟</h4>
                <div class="d-flex x-gap-10 pt-10">
                    <div class="icon-star text-14 text-yellow-1"></div>
                    <div class="icon-star text-14 text-yellow-1"></div>
                    <div class="icon-star text-14 text-yellow-1"></div>
                    <div class="icon-star text-14 text-yellow-1"></div>
                    <div class="icon-star text-14 text-yellow-1"></div>
                </div>
            </div>

            <form class="contact-form respondForm__form row y-gap-30 pt-30" action="#">
                <div class="col-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">عنوان</label>
                    <input type="text" name="title" placeholder="وبلاگ عالی">
                </div>
                <div class="col-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">متن دیدگاه</label>
                    <textarea name="comment" placeholder="نظر خود را بنویسید..." rows="8"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" id="submit" class="button -md -purple-1 text-white">
                        ثبت
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
