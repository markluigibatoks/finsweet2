<div class="main-box lg:pb-32 pb-10 bg-white">
    <div class="wrapper">
        <div class="relative md:p-12 p-5 bg-light-blue rounded-[20px]">
            <div class="md:opacity-100 opacity-10 z-0 absolute -top-4 -right-4 max-w-max select-none">
                <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-icon1.png" alt="ribbon"/>
            </div>

            <div class="z-10 relative overflow-auto flex gap-6 items-center">
                <button type="button" class="button-tertiary cursor-pointer">Business strategy</button>

                <button type="button" class="button-tertiary inactive cursor-pointer">Digitalization</button>

                <button type="button" class="button-tertiary inactive cursor-pointer">Risk assessment</button>
            </div>

            <div class="mt-10 lg:mt-20 flex flex-col lg:flex-row gap-5 justify-between items-center w-full lg:text-left text-center">
                <div class="lg:order-1 order-2 max-w-[572px]">
                    <h2 class="text-secondary mb-4 text-h5 lg:text-h2 md:text-h4">Helping clients with research and strategy for their business</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet eros blandit, hendrerit elit et, mattis purus. Vivamus commodo suscipit tellus et pellentesque. 
                    <br />
                    Mattis purus. Vivamus commodo suscipit tellus et pellent. Curabitur sit amet eros blan esque.
                    </p>
                    <a href="<?php echo site_url('/services'); ?>" class="md:mt-10 mt-5 text-primary hover:underline max-w-max mx-auto lg:mx-0 flex gap-2 items-center">See all services <span class="flex items-center justify-center"><?php echo file_get_contents(get_template_directory() . '/assets/images/arrow-right.svg'); ?> </span></a>
                </div>

                <div class="relative lg:order-2 order-1 w-full max-w-max">
                    <img class="rounded-[20px] object-cover w-full h-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img1.jpg" alt="people are brainstorming"/>
                </div>
            </div>
        </div>
    </div>
</div>