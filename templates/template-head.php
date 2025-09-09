<div class="nav-div">
    <!-- Left back arrow -->
     <div class="site-logo">
      <?php 
      if (function_exists('the_custom_logo')) {
          the_custom_logo(); 
      } else {
          // Fallback: Site name as text
          echo '<h1 class="site-title"><a href="'.home_url().'">'.get_bloginfo('name').'</a></h1>';
      }
      ?>
    </div>

  
    <!-- WordPress Menu -->
    <nav class="menu-nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary-menu',
            'container'      => false,
            'menu_class'     => 'main-navbar',
            'fallback_cb'    => false,
        ]);
        ?>
    </nav>

    <div class="contact-me">
      <button class="contact"><a href="">Contact Me</a></button>
    </div>
</div>
