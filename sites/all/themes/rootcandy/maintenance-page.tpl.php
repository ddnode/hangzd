<?php

/**
 * @file
 * maintenance-page.tpl.php
 *
 * This is an override of the default maintenance page. Used for Garland and
 * Minnelli, this file should not be moved or modified since the installation
 * and update pages depend on this file.
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">
  <head>
    <title><?php echo $head_title ?></title>
    <?php echo $head ?>
    <?php echo $styles ?>
    <?php echo $scripts ?>
  </head>
  <body>

<!-- Layout -->
  <div id="maintenance" class="clearfix">
    <div class="maintenance-icon">
      <?php
        $image = path_to_theme().'/images/maintenance.png';
        echo theme('image', $image);
      ?>
    </div>
    <div class="maintenance-content">
      <h1><?php echo $title ?></h1>
      <div class="maintenance-content-p">
        <?php echo $content ?>
      </div>
    </div>
  </div>
<!-- /layout -->

  </body>
</html>
