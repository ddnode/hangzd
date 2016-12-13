<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">
  <head>
    <?php echo $head ?>
    <title><?php echo $head_title ?></title>
    <?php echo $styles ?>
    <?php echo $scripts ?>
    <!--[if lt IE 7]>
      <?php echo phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body<?php echo phptemplate_body_class($left, $right); ?>>

<!-- Layout -->
  <div id="header-region" class="clear-block"><?php echo $header; ?></div>

    <div id="wrapper">
    <div id="container" class="clear-block">

      <div id="header">
        <div id="logo-floater">
        <?php
          // Prepare header
          $site_fields = [];
          if ($site_name) {
              $site_fields[] = check_plain($site_name);
          }
          if ($site_slogan) {
              $site_fields[] = check_plain($site_slogan);
          }
          $site_title = implode(' ', $site_fields);
          if ($site_fields) {
              $site_fields[0] = '<span>'.$site_fields[0].'</span>';
          }
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
              echo '<h1><a href="'.check_url($front_page).'" title="'.$site_title.'">';
              if ($logo) {
                  echo '<img src="'.check_url($logo).'" alt="'.$site_title.'" id="logo" />';
              }
              echo $site_html.'</a></h1>';
          }
        ?>
        </div>

        <?php if (isset($primary_links)) : ?>
          <?php echo theme('links', $primary_links, ['class' => 'links primary-links']) ?>
        <?php endif; ?>
        <?php if (isset($secondary_links)) : ?>
          <?php echo theme('links', $secondary_links, ['class' => 'links secondary-links']) ?>
        <?php endif; ?>

      </div> <!-- /header -->

      <?php if ($left): ?>
        <div id="sidebar-left" class="sidebar">
          <?php if ($search_box): ?><div class="block block-theme"><?php echo $search_box ?></div><?php endif; ?>
          <?php echo $left ?>
        </div>
      <?php endif; ?>

      <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php echo $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'.$mission.'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'.($tabs ? ' class="with-tabs"' : '').'>'.$title.'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'.$tabs.'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'.$tabs2.'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php echo $help; ?>
          <div class="clear-block">
            <?php echo $content ?>
          </div>
          <?php echo $feed_icons ?>
          <div id="footer"><?php echo $footer_message.$footer ?></div>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

      <?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php if (!$left && $search_box): ?><div class="block block-theme"><?php echo $search_box ?></div><?php endif; ?>
          <?php echo $right ?>
        </div>
      <?php endif; ?>

    </div> <!-- /container -->
  </div>
<!-- /layout -->

  <?php echo $closure ?>
  </body>
</html>
