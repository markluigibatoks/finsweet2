<?php 
/*  Template Name: Careers Page
    Template Post Type: page
*/
  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/careers/banner.jpg",
        'alt' => "a group of people working together"
      ),
      'heading' => "We hired people who are very passionate about what they do",
      'description' => "Through True Rich Attended does no end it his mother since real had half every him case in packages enquire we up ecstatic unsatiable saw.",
      'link' => array(
        'url' => '#',
        'text' => "View Positions"
      )
    )
  );

  get_template_part("/partials/careers/section1");
  get_template_part("/partials/front-page/bottom4");
  
  get_footer();
?>