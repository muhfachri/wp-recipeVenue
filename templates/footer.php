<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<div id="footer">
  <footer class="container container-custom">
    <div class="footer-wrapper">
      <div id="footer-left" class="">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav mr-auto flex-row',  'menu_id' => 'nav-primary']);
        endif;
        ?>
      </div>
      <?php $logo_satu = get_field('logo_satu', 'option'); ?>
      <?php $logo_dua = get_field('logo_dua', 'option'); ?>
      <?php $description_logo = get_field('description_logo', 'option'); ?>
      <div id="footer-right" class="navbar navbar-default flex-row align-items-center">
        <a href="#"><img src=<?php echo $logo_satu ?> class="img-fluid recipe"/></a>
        <a href="#"><?php echo $description_logo ?><img src=<?php echo $logo_dua ?> class="img-fluid tci"/></a>
      </div>
      <div class="clearfix"></div>
    </div>

  </footer>
  <div class="copyright">
    <p>Copyright ©<?php echo date("Y"); ?> Recipe Venue All Rights Reserved</p>
  </div>
</div>