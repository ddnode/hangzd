<?php
// $Id: site-map.tpl.php,v 1.1.2.1 2010/05/22 07:42:48 frjo Exp $

/**
 * @file site-map.tpl.php
 *
 * Theme implementation to display the site map.
 *
 * Available variables:
 * - $message:
 * - $rss_legend:
 * - $front_page:
 * - $blogs:
 * - $books:
 * - $menus:
 * - $faq:
 * - $taxonomys:
 * - $additional:
 *
 * @see template_preprocess()
 * @see template_preprocess_site_map()
 */
?>

<div id="site-map">
  <?php if ($message): ?>
    <div class="site-map-message">
      <?php echo $message; ?>
    </div>
  <?php endif; ?>

  <?php if ($rss_legend): ?>
    <div class="site-map-rss-legend">
      <?php echo $rss_legend; ?>
    </div>
  <?php endif; ?>

  <?php if ($front_page): ?>
    <div class="site-map-front-page">
      <?php echo $front_page; ?>
    </div>
  <?php endif; ?>

  <?php if ($blogs): ?>
    <div class="site-map-blogs">
      <?php echo $blogs; ?>
    </div>
  <?php endif; ?>

  <?php if ($books): ?>
    <div class="site-map-books">
      <?php echo $books; ?>
    </div>
  <?php endif; ?>

  <?php if ($menus): ?>
    <div class="site-map-menus">
      <?php echo $menus; ?>
    </div>
  <?php endif; ?>

  <?php if ($faq): ?>
    <div class="site-map-faq">
      <?php echo $faq; ?>
    </div>
  <?php endif; ?>

  <?php if ($taxonomys): ?>
    <div class="site-map-taxonomys">
      <?php echo $taxonomys; ?>
    </div>
  <?php endif; ?>

  <?php if ($additional): ?>
    <div class="site-map-additional">
      <?php echo $additional; ?>
    </div>
  <?php endif; ?>
</div>
