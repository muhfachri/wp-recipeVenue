<header class="banner" id="header">
  <div id="top-header">
    <header class="container container-custom">
      <div id="menu-left" class="navbar navbar-default flex-row flex-wrap align-items-center">
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-fb.png' ?>" class="img-fluid fb"/></a>
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-insta.png' ?>" class="img-fluid"/></a>
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-twitter.png' ?>" class="img-fluid"/></a>
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-youtube.png' ?>" class="img-fluid"/></a>
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-path.png' ?>" class="img-fluid"/></a>
        <button class="btn btn-default btn-bahasa">Indonesia / English</button>
      </div>
      <div id="menu-right" class="navbar navbar-default flex-row flex-wrap align-items-center">
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-tips.png' ?>" class="img-fluid"/>Tips & Trik</a>
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-kategori.png' ?>" class="img-fluid"/>Kategori</a>
        <a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-resep.png' ?>" class="img-fluid"/>Buat Resep</a>
        <button class="btn orange">Daftar atau Masuk</button>
      </div>
      <div class="clearfix"></div>
    </header>
  </div>
  <div id="second-header">
    <header class="container">
      <nav id="main-menu-header" class="navbar navbar-toggleable-md navbar-light">
        <div class="mobile-logo"><a href="#"><img src="<?php echo get_template_directory_uri().'/dist/images/icon-logo.png' ?>" class="img-fluid"/></a></div>
        <button class="hamburger hamburger--elastic navbar-toggler navbar-toggler-right full-width" type="button" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mr-auto navbar-nav',  'menu_id' => 'nav-primary']);
          endif;
          ?>
          <div class="clearfix"></div>
        </div>
      </nav>
    </header>
  </div>
</header>
