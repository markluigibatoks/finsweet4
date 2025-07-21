<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="z-10 relative">
      <div class="z-10 main-box bg-black">
        <div class="wrapper">
          <div class="py-3 lg:py-[30px] flex items-center justify-between">
            <a href="<?php echo site_url('/')?>">
              <div class="xl:pr-16 pr-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
              </div>
            </a>

            <nav class="hidden lg:block">
                <ul class="flex gap-12">
                    <li>
                      <a class="text-menu-link hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                      <a class="text-menu-link hover:underline" href="#">About me</a>
                    </li>
                    <li>
                      <a class="text-menu-link hover:underline" href="#">Services</a>
                    </li>
                    <li>
                      <a class="text-menu-link hover:underline" href="#">My Work</a>
                    </li>
                    <li>
                      <a class="text-menu-link hover:underline" href="#">Contact me</a>
                    </li>
                </ul>
            </nav>
            <?php get_template_part('/partials/drawer-toggle') ?>
          </div>
        </div>
      </div>

      <?php get_template_part('/partials/drawer') ?>
    </div>