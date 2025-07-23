<div class="main-box bg-secondary pt-24 pb-8">
  <div class="wrapper">
    <div class="flex flex-col md:flex-row gap-5 justify-between">
      <div class="max-w-[628px] w-full text-center md:text-left">
          <h2 class="lg:text-h2 md:text-h4 text-h5 lg:mb-12 mb-10">Have an idea? I can help you to Start your project</h2>
          <p class="text-paragraph-large opacity-60">Say hello to me 👋</p>
          <a href="mailto:james@finsweet.com" class="block mt-2 max-w-max md:text-h3 text-h5 hover:underline opacity-85 md:mx-0 mx-auto">james@finsweet.com</a>
      </div>

      <div class="mt-10 md:mt-0 md:mx-0 mx-auto w-full max-w-[368px]">
          <div class="flex gap-8 items-center">
            <div class="max-w-max">
              <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/footer-img1.png" alt="james robertson"/>
            </div>
            <div>
              <h2 class="mb-2 lg:text-h3 md:text-h4 text-h5 opacity-85">James Robertson</h2>
              <span class="md:text-paragraph-large text-paragraph opacity-60">Webflow Developer</span>
            </div>
          </div>

          <div class="mt-10 flex md:gap-5 gap-3 items-center">
            <div class="flex items-center justify-center cursor-pointer hover:opacity-50">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/facebook.svg'); ?>
            </div>
            <div class="flex items-center justify-center cursor-pointer hover:opacity-50">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/instagram.svg'); ?>
            </div>
            <div class="flex items-center justify-center cursor-pointer hover:opacity-50">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/twitter.svg'); ?>
            </div>
            <div class="flex items-center justify-center cursor-pointer hover:opacity-50">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/dribble.svg'); ?>
            </div>
            <div class="flex items-center justify-center cursor-pointer hover:opacity-50">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/behance.svg'); ?>
            </div>
          </div>
      </div>
    </div>

    <div class="mt-24 flex flex-col md:flex-row md:justify-between items-center gap-5">
      <div id="copyright" class="order-2 md:order-1 opacity-60 lg:text-left text-center text-white">
        &copy; <?php echo date('Y')?> <a class="hover:underline" href="<?php echo site_url('/') ?>"><?php echo get_bloginfo(); ?></a> Powered by Webflow
      </div>

      <nav class="order-1 md:order-2">
        <ul class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <li>
              <a class="text-menu-link hover:underline" href="<?php echo site_url('/about-me')?>">About me</a>
            </li>
            <li>
              <a class="text-menu-link hover:underline" href="#">Services</a>
            </li>
            <li>
              <a class="text-menu-link hover:underline" href="#">My Work</a>
            </li>
            <li>
              <a class="text-menu-link hover:underline" href="<?php echo site_url('/contact-me')?>">Contact me</a>
            </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
