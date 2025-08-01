<?php 
/*  Template Name: Services Page
    Template Post Type: page
*/
  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/services/banner.jpg",
        'alt' => "a woman is drinking coffee while working"
      ),
      'heading' => "We serve clients with ground breaking solutions",
      'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo odio, sagittis quis ornare quis.",
      'link' => array(
        'url' => '#',
        'text' => "Work With Us"
      )
    )
  );

  get_template_part("/partials/services/section1");
  get_template_part("/partials/services/section2");
  get_template_part("/partials/services/section3");
  get_template_part("/partials/about-us/section4");
  get_template_part("/partials/front-page/bottom4");
  
  get_footer();
?>