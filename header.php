<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="z-50 sticky top-0">
      <div class="z-10 main-box bg-white">
        <div class="wrapper">
          <div class="py-4 flex items-center justify-between lg:justify-start">
            <a href="<?php echo site_url('/')?>">
              <div class="xl:pr-16 pr-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
              </div>
            </a>

            <nav class="hidden lg:block lg:ml-auto">
                <ul class="flex gap-8">
                    <li>
                      <a class="text-nav-link font-poppins font-semibold leading-6 hover:underline <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li>
                      <a class="text-nav-link font-poppins font-semibold leading-6 hover:underline <?php echo is_page('careers') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/careers'); ?>">Careers</a>
                    </li>
                    <li>
                      <a class="text-nav-link font-poppins font-semibold leading-6 hover:underline <?php echo is_page('services') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/services'); ?>">Services</a>
                    </li>
                    <li>
                      <a class="text-nav-link font-poppins font-semibold leading-6 hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                    </li>
                    <li>
                      <a class="text-nav-link font-poppins font-semibold leading-6 hover:underline <?php echo is_page('/contact-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact-us'); ?>">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <a href="#" aria-label="dummy link" class="ml-auto lg:ml-10 button-secondary">Clone project</a>
            <?php get_template_part('/partials/drawer-toggle') ?>
          </div>
        </div>
      </div>

      <?php get_template_part('/partials/drawer') ?>
    </header>