<header class="banner" id="header">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <div class="container">
      <button class="hamburger hamburger--elastic navbar-toggler navbar-toggler-right" type="button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mr-auto',  'menu_id' => 'nav-primary']);
          endif;
        ?>
      </div>
    </div>
  </nav>
</header>
