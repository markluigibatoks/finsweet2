<div id="drawer" class="absolute top-0 bg-white w-full text-nav-link h-0 overflow-hidden transition-all ease-in-out duration-700">
    <div class="main-box overflow-auto h-full">    
        <div class="wrapper">
            <nav class="pt-30">
                <ul class="flex flex-col gap-12">
                    <li>
                        <a class="text-nav-link font-poppins font-semibold leading-6 text-h5 hover:underline <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li>
                        <a class="text-nav-link font-poppins font-semibold leading-6 text-h5 hover:underline <?php echo is_page('careers') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/careers'); ?>">Careers</a>
                    </li>
                    <li>
                        <a class="text-nav-link font-poppins font-semibold leading-6 text-h5 hover:underline <?php echo is_page('services') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/services'); ?>">Services</a>
                    </li>
                    <li>
                        <a class="text-nav-link font-poppins font-semibold leading-6 text-h5 hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                    </li>
                    <li>
                        <a class="text-nav-link font-poppins font-semibold leading-6 text-h5 hover:underline <?php echo is_page('/contact-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact-us'); ?>">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>