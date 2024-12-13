<?php
#for view counter
//include 'class/YtPostCounter.php';
YtPostCounter::add(get_the_ID());
#start
get_header(null,['header_name' => 'dark']);

get_template_part('partials/single/single-section','1');
get_template_part('partials/single/single-section','2');
get_template_part('partials/single/single-section','3');
get_template_part('partials/single/single-section','4');
get_template_part('partials/single/single-section','5');

get_footer(null, ['footer_name' => 'dark']);
