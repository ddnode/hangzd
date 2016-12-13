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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
  <?php echo $head; ?>
  <title><?php echo $head_title; ?></title>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php echo $body_classes; ?>">
  <div id="page">
    <div id="header">
      <div id="logo-title">

        <?php if (!empty($logo)): ?>
          <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>" rel="home" id="logo">
            <img src="<?php echo $logo; ?>" alt="<?php echo t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <div id="name-and-slogan">
          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php echo $base_path ?>" title="<?php echo t('Home'); ?>" rel="home"><span><?php echo $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php echo $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->
      </div> <!-- /logo-title -->

      <?php if (!empty($header)): ?>
        <div id="header-region">
          <?php echo $header; ?>
        </div>
      <?php endif; ?>

    </div> <!-- /header -->

    <div id="container" class="clear-block">

      <?php if (!empty($left)): ?>
        <div id="sidebar-left" class="column sidebar">
          <?php echo $left; ?>
        </div> <!-- /sidebar-left -->
      <?php endif; ?>

      <div id="main" class="column"><div id="main-squeeze">

        <div id="content">
          <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php echo $title; ?></h1><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <div id="content-content" class="clear-block">
            <?php echo $content; ?>
          </div> <!-- /content-content -->
        </div> <!-- /content -->

      </div></div> <!-- /main-squeeze /main -->

      <?php if (!empty($right)): ?>
        <div id="sidebar-right" class="column sidebar">
          <?php echo $right; ?>
        </div> <!-- /sidebar-right -->
      <?php endif; ?>

    </div> <!-- /container -->

    <div id="footer-wrapper">
      <div id="footer">
        <?php echo $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->

  </div> <!-- /page -->

</body>
</html>
