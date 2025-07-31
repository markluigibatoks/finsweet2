<footer class="main-box bg-dark-blue py-10 lg:py-20 text-white">
    <div class="wrapper">
      <div id="footer-body" class="grid sm:grid-cols-2 lg:flex justify-between gap-5 lg:gap-10 gap-y-10">
        <div class="text-white lg:max-w-[351px]">
          <a id="footer-logo" href="<?php echo site_url('/')?>">
            <div class="xl:pr-16 pr-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.svg" alt="logo" />
            </div>
          </a>

          <div class="mt-8">
            <h2 class="xl:text-h3 text-h5">Bespoke software solutions</h2>
            
            <div class="mt-8 flex gap-4">
              <a href="#" target="_blank" class="hover w-4 h-4 display flex items-center justify-center">
                <?php echo inline_svg('/assets/images/facebook.svg'); ?>
              </a>

              <a href="#" target="_blank" class="hover w-4 h-4 display flex items-center justify-center">
                <?php echo inline_svg('/assets/images/youtube.svg'); ?>
              </a>

              <a href="#" target="_blank" class="hover w-4 h-4 display flex items-center justify-center">
                <?php echo inline_svg('/assets/images/instagram.svg'); ?>
              </a>

              <a href="#" target="_blank" class="hover w-4 h-4 display flex items-center justify-center">
                <?php echo inline_svg('/assets/images/twitter.svg'); ?>
              </a>
            </div>
            
          </div>
        </div>

        <div class="flex gap-10 xl:gap-27">
          <div class="text-white">
            <span class="text-h6">Company</span>
            <ul class="mt-6 text-cap-1 font-medium tracking-0">
              <li>
                <a class="hover:underline max-w-max <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
              </li>
              <li class="mt-6">
                <a class="hover:underline max-w-max <?php echo is_page('careers') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/careers'); ?>">Careers</a>
              </li>
              <li class="mt-6">
                <a class="hover:underline max-w-max <?php echo is_page('services') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/services'); ?>">Services</a>
              </li>
              <li class="mt-6">
                <a class="hover:underline max-w-max <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
              </li>
            </ul>
          </div>

          <div class="text-white">
            <span class="text-h6">Connect</span>
            
            <a href="mailto:hi@finsweet.com" target="_blank" class="mt-6 text-cap-1 font-medium tracking-normal block hover:underline max-w-max">hi@finsweet.com</a>

            <a href="tel:+1234567890" target="_blank" class="mt-4 text-cap-1 font-medium tracking-normal block hover:underline max-w-max">+(123) 456-7890</a>
          </div>
        </div>

        <div class="sm:col-span-2 sm:justify-self-center lg:justify-self-start w-full max-w-[342px]">
            <h2 class="text-h6">Join Newsletter</h2>

            <form method="POST" id="newsletter-form">
              <div class="mt-6 mx-auto lg:mx-0 flex flex-col gap-5 max-w-[512px] w-full relative">
                <input type="email" name="email" placeholder="Type email here" class="w-full bg-white rounded-[31px] px-8 py-4 text-black" />
                <button type="submit" class="cursor-pointer button-primary max-w-max">Subscribe</button>
              </div>
            </form>
        </div>
      </div>

      <div class="mt-20 flex sm:flex-row flex-col justify-between gap-5">
          <div id="copyright" class="sm:order-1 order-2 text-cap-1 font-medium tracking-normal">
              &copy; All rights reserved  <a class="hover:underline" href="<?php echo site_url('/') ?>"><?php echo get_bloginfo(); ?></a>
          </div>
          
          <nav class="sm:order-2 order-1">
            <ul class="text-cap-1 font-medium tracking-0 flex sm:flex-row flex-col lg:gap-8">
              <li>
                <a class="hover:underline max-w-max <?php echo is_page('privacy-policy') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a>
              </li>
              <li>
                <a class="hover:underline max-w-max <?php echo is_page('terms-and-conditions') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/terms-and-conditions'); ?>">Terms & Conditions</a>
              </li>
            </ul>
          </nav>
      </div>
    </div>

    <div class="2xl:w-13 w-2 h-36 bg-primary rounded-tr-[20px] absolute bottom-0 left-0"></div>

    <div class="2xl:w-13 w-2 h-72 bg-primary rounded-l-[20px] absolute top-10 right-0"></div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
