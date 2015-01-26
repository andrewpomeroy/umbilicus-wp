<div class="side-bg right">
  <!-- <img src="<?php echo (bloginfo('template_directory') . '/assets/img/side.png') ?>"> -->
</div>
<div class="side-bg left">
  <!-- <img src="<?php echo (bloginfo('template_directory') . '/assets/img/side.png') ?>"> -->
</div>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo (bloginfo('template_directory') . '/assets/img/title.png') ?>" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>