<?php 
/*  Template Name: About Page
    Template Post Type: page
*/
  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/about-us/banner.jpg",
        'alt' => "woman holding a clipboard"
      ),
      'heading' => "We value human, organizational, and operational intelligence, not just artificial",
      'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo odio, sagittis quis ornare quis.",
      'link' => array(
        'url' => '#',
        'text' => "Work With Us"
      )
    )
  );

  get_template_part("/partials/about-us/section1");
  get_template_part("/partials/about-us/section2");
  get_template_part("/partials/about-us/section3");
  get_template_part("/partials/about-us/section4");
  get_template_part("/partials/front-page/bottom4");
  
  get_footer();
?>