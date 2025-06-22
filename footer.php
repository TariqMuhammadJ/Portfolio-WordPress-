    <?php wp_footer(); ?>
    <footer class="bg-[#f9fafb] text-[#111418] pt-10 pb-6 border-t border-gray-200">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      
      <!-- Brand or About -->
      <div>
        <h3 class="text-lg font-semibold mb-2"><?php echo esc_html(get_option('yourbrand_name', 'YourBrand')); ?></h3>
        <p class="text-sm text-[#60748a]">
          <?php 
          echo esc_html(get_option('yourbrand_tagline', 'Building Professional WordPress Websites')); ?>
         
        </p>
      </div>

      <!-- Quick Links -->
       <div>
        <h4 class="text-sm font-semibold uppercase mb-3 tracking-wide">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <?php
          $pages = get_pages([
            'sort_column' => 'menu_order',
            'sort_order'  => 'asc',
            'post_status' => 'publish'
          ]);

          foreach ($pages as $page) {
            echo '<li><a href="' . esc_url(get_permalink($page->ID)) . '" class="hover:text-blue-600">' . esc_html($page->post_title) . '</a></li>';
          }
          ?>
        </ul>
      </div>
      
      <!-- Resources -->
      <div>
        <h4 class="text-sm font-semibold uppercase mb-3 tracking-wide">Resources</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-blue-600">Blog</a></li>
          <li><a href="#" class="hover:text-blue-600">Support</a></li>
          <li><a href="#" class="hover:text-blue-600">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-blue-600">Terms</a></li>
        </ul>
      </div>

      <!-- Social -->
      <div>
        <h4 class="text-sm font-semibold uppercase mb-3 tracking-wide">Follow Us</h4>
        <div class="flex space-x-4">
          <a href="#" class="text-[#60748a] hover:text-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="..."/></svg>
          </a>
          <a href="#" class="text-[#60748a] hover:text-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="..."/></svg>
          </a>
          <a href="#" class="text-[#60748a] hover:text-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="..."/></svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-10 border-t border-gray-200 pt-4 text-center text-sm text-[#60748a]">
      &copy; <?php echo date('Y'); ?> YourBrand. All rights reserved.
    </div>
  </div>
</footer>

  </body>
</html>
