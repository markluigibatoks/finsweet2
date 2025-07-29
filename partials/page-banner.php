<main class="main-box bg-white lg:py-27 py-10">
    <div class="wrapper">
      <div class="flex flex-col lg:flex-row gap-10 items-center justify-between">
        <div class="lg:order-1 order-2 lg:max-w-[618px] w-full text-center lg:text-left">
            <h2 class="text-secondary mb-5 lg:mb-6 xl:text-h1 lg:text-h2 md:text-h4 text-h5"><?php echo $args['heading']; ?></h2>
            <p><?php echo $args['description']; ?></p>
            <a href="<?php echo $args['link']['url']; ?>" class="block mt-8 max-w-max button-primary mx-auto lg:mx-0"><?php echo $args['link']['text']; ?></a>
        </div>

        <div class="lg:order-2 order-1 max-w-max mx-auto">
          <img class="object-cover w-full h-full rounded-[20px]" src="<?php echo $args['image']['src']; ?>" alt="<?php echo $args['image']['alt']; ?>"/>
        </div>
      </div>
    </div>
</main>