<?php

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>">
  <head>
    <title><?php echo $head_title ?></title>
    <?php echo $head ?>
    <?php echo $styles ?>
    <?php echo $scripts ?>
  </head>

  <body<?php echo $body_class ?>>

    <!-- Layout -->
    <?php if (!$hide_header) {
    ?>
    <div id="toppanel">
      <div id="panel">
       <?php echo $slider ?>
        <div id="slider-left">
          <?php if ($slider_left) {
        print $slider_left;
    } ?>
        </div>
         <div id="slider-right">
          <?php if ($slider_right) {
        print $slider_right;
    } ?>
        </div>
        <div id="slider-middle">
          <?php if ($slider_middle) {
        print $slider_middle;
    } ?>
        </div>
      </div> <!-- /login -->
      <div id="toppanel-head">
        <div id="go-home">
          <?php if (isset($go_home)) {
        print $go_home;
    } ?>
        </div>
        <div id="admin-links">
          <?php if (isset($rootcandy_user_links)) {
        print $rootcandy_user_links;
    } ?>
        </div>
        <?php if (!$hide_panel) {
        ?>
        <div id="header-title" class="clearfix">
          <ul id="toggle"><li><?php echo $panel_navigation ?></li></ul>
        </div>
        <?php 
    } ?>
      </div>
    </div>
    <?php 
} ?>
    <div id="page-wrapper"><div id="page-wrapper-content">
      <?php echo $header ?>
      <div id="navigation" class="clearfix<?php echo $rootcandy_navigation_class ?>">
        <?php echo $rootcandy_navigation ?>

      <?php
      if ($logo) {
          echo '<img src="'.check_url($logo).'" alt="'.$site_name.'" id="logo" />';
      }
      ?>
      </div>

      <div id="breadcrumb" class="alone">
        <?php if ($title): print '<h2 id="title">'.$title.'</h2>'; endif; ?>
        <?php echo $breadcrumb; ?>
      </div>

      <div id="content-wrap">
        <div id="inside">
          <?php if ((arg(0) == 'admin' and (arg(2))) || $admin_left) {
          ?>
            <div id ="sidebar-left">
              <?php
              echo $admin_left; ?>
            </div>
          <?php 
      } ?>
          <?php if ($admin_right) {
          ?>
            <div id ="sidebar-right">
              <?php
              echo $admin_right; ?>
            </div>
          <?php 
      } ?>
          <div id="content">
            <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr"><div class="content-in">
              <?php
                // TODO
                // $menu_sublinks = menu_navigation_links('navigation', 3);
                // if ($menu_sublinks) {
                //  print theme('links', $menu_sublinks, array('id' => 'rootcandy-menu'));
                // }
              ?>
              <?php if (isset($tabs) && $tabs): print '<div id="tabs-primary"><ul class="tabs primary">'.$tabs.'</ul></div><div class="level-1 clear-block">'; endif; ?>
              <?php if (isset($tabs2) && $tabs2): print '<div id="tabs-secondary"><ul class="tabs secondary">'.$tabs2.'</ul></div><div class="level-2 clear-block">'; endif; ?>
              <?php
                //dashboard
                if (isset($dashboard)) {
                    ?>
                <div id="dashboard" class="clearfix">
                  <div id="dashboard-left">
                    <?php echo $dashboard_left ?>
                  </div>
                  <div id="dashboard-right">
                    <?php echo $dashboard_right ?>
                  </div>
                </div>
              <?php

                } else {
                    echo $help;
                    echo $messages;
                }
              ?>
              <?php
                if (!$hide_content) {
                    echo $content;
                }
              ?>
              <?php if (isset($tabs2) && $tabs2): print '</div>'; endif; ?>
              <?php if (isset($tabs) && $tabs): print '</div>'; endif; ?>
            </div><br class="clear" /></div></div></div></div></div></div></div></div>
          </div>
        </div>
      </div>
      <?php if ($footer) {
                  ?>
        <div id="footer">
          <?php echo $footer; ?>
        </div>
      <?php 
              } ?>
    </div></div>
    <!-- /layout -->
    <?php echo $closure ?>
  </body>
</html>
