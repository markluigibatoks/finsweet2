<?php get_header(); ?>

<main class="main-box lg:py-16 py-10">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div class="wrapper">
          <div class="lg:mb-20 mb-10">
            <?php 
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              }
            ?>
          </div>
        </div>
        <div class="mt-8 prose max-w-[752px] mx-auto">
          <div class="flex sm:flex-row flex-col sm:items-center sm:gap-6">
            <div class="flex items-center gap-2">
              <div class="flex items-center justify-center rounded-full overflow-hidden w-8 h-8">
              <?php echo get_avatar(get_the_ID()); ?>
              </div>

              <span><?php echo get_the_author();?></span>
            </div>
            
            <span> Post on  <?php echo get_the_date(); ?> </span>
          </div>

          <h2 class="lg:text-h2 md:text-h4 text-h5 !mt-6 text-secondary"><?php the_title(); ?></h2>

          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
</main>

<?php get_footer(); ?>