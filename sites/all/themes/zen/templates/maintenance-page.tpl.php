<?php
/**
 * @file maintenance-page.tpl.php
 *
 * Theme implementation to display a single Drupal page while off-line.
 *
 * All the available variables are mirrored in page.tpl.php. Some may be left
 * blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language; ?>" lang="<?php echo $language->language; ?>" dir="<?php echo $language->dir; ?>">

<head>
  <title><?php echo $head_title; ?></title>
  <?php echo $head; ?>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
</head>
<body class="<?php echo $classes; ?>">

  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>" rel="home" id="logo"><img src="<?php echo $logo; ?>" alt="<?php echo t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <div id="site-name"><strong>
              <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>" rel="home">
              <?php echo $site_name; ?>
              </a>
            </strong></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php echo $site_slogan; ?></div>
          <?php endif; ?>
        </div><!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php echo $header; ?>

    </div></div><!-- /.section, /#header -->

    <div id="main-wrapper"><div id="main" class="clearfix<?php if ($navigation) {
    echo ' with-navigation';
} ?>">

      <div id="content" class="column"><div class="section">

        <?php echo $highlight; ?>

        <?php if ($title): ?>
          <h1 class="title"><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if ($messages): print $messages; endif; ?>

        <?php echo $content_top; ?>

        <div id="content-area">
          <?php echo $content; ?>
        </div>

        <?php echo $content_bottom; ?>

      </div></div><!-- /.section, /#content -->

      <?php if ($navigation): ?>
        <div id="navigation"><div class="section clearfix">

          <?php echo $navigation; ?>

        </div></div><!-- /.section, /#navigation -->
      <?php endif; ?>

      <?php echo $sidebar_first; ?>

      <?php echo $sidebar_second; ?>

    </div></div><!-- /#main, /#main-wrapper -->

    <?php if ($footer || $footer_message): ?>
      <div id="footer"><div class="section">

        <?php if ($footer_message): ?>
          <div id="footer-message"><?php echo $footer_message; ?></div>
        <?php endif; ?>

        <?php echo $footer; ?>

      </div></div><!-- /.section, /#footer -->
    <?php endif; ?>

  </div></div><!-- /#page, /#page-wrapper -->

  <?php echo $page_closure; ?>

  <?php echo $closure; ?>

</body>
</html>
