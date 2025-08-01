<?php
  $recent_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  ]);
?>

<main class="main-box bg-light-blue lg:py-27 py-10">
    <div class="wrapper">
      <div class="flex flex-col lg:flex-row gap-10 items-center justify-between">
        <div class="lg:order-1 order-2 lg:max-w-[527px] w-full text-center lg:text-left">
            <h2 class="text-secondary mb-5 lg:mb-6 xl:text-h1 lg:text-h2 md:text-h4 text-h5"><?php echo get_the_title(); ?></h2>
            <p><?php echo wp_trim_words(get_the_excerpt(), 37); ?></p>
            <a href="<?php echo get_the_permalink(); ?>" class="flex gap-2 items-center mt-8 max-w-max mx-auto lg:mx-0 text-primary hover:underline">
              Read More
              <span class="flex items-center justify-center">
                <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow-right.svg'); ?>
              </span>
            </a>
        </div>

        <div class="lg:order-2 order-1  max-w-max mx-auto">
          <?php 
            if (has_post_thumbnail()) {
              the_post_thumbnail('featured-image');
            }
          ?>
        </div>
      </div>
    </div>
</main>

<?php wp_reset_postdata();?>