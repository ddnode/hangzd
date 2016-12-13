<?php

/**
 * @file
 * Views Slideshow: Single Frame template file.
 */
?>

<div class="skin-<?php echo $settings['views_slideshow_cycle']['skin']; ?>">
  <?php if (isset($top_widget_rendered)): ?>
    <div class="views-slideshow-controls-top clear-block">
      <?php echo $top_widget_rendered; ?>
    </div>
  <?php endif; ?>

  <?php echo $slideshow; ?>

  <?php if (isset($bottom_widget_rendered)): ?>
    <div class="views-slideshow-controls-bottom clear-block">
      <?php echo $bottom_widget_rendered; ?>
    </div>
  <?php endif; ?>
</div>
