<?php
$category_id = get_post_meta(get_the_ID(), '_yt_category_name' ,true);
if (!empty($category_id)) $category_name = get_the_category_by_ID($category_id);
?>
<section class="page-header -type-1">
    <div class="container">
        <div class="page-header__content">
            <div class="row justify-center text-center">
                <div class="col-auto">
                    <div data-anim="slide-up delay-1">
                        <div class="text-14 text-purple-1 uppercase fw-500 mb-8"><?= $category_name?></div>


                        <h1 class="page-header__title lh-14"><?=get_the_title()?></h1>


                        <p class="page-header__text"><?=get_the_date()?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

