<?php

/**
 * @file
 * Default views template for displaying a slideshow.
 *
 * - $view: The View object.
 * - $options: Settings for the active style.
 * - $rows: The rows output from the View.
 * - $title: The title of this group of rows. May be empty.
 *
 * @ingroup views_templates
 */
?>

<div class="skin-<?php echo $skin; ?>">
  <?php if (!empty($top_widget_rendered)): ?>
    <div class="views-slideshow-controls-top clear-block">
      <?php echo $top_widget_rendered; ?>
    </div>
  <?php endif; ?>

  <?php echo $slideshow; ?>

  <?php if (!empty($bottom_widget_rendered)): ?>
    <div class="views-slideshow-controls-bottom clear-block">
      <?php echo $bottom_widget_rendered; ?>
    </div>
  <?php endif; ?>
</div>
