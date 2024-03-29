<?php

/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 * - $admin_links: A rendered list of administrative links
 * - $admin_links_raw: A list of administrative links suitable for theme('links')
 *
 * @ingroup views_templates
 */

/**
 * $skinr variable and <div class="inner content"> added for Fusion theming.
 */
?>
<div id="view-id-<?php echo $name; ?>-<?php echo $display_id; ?>" class="<?php echo $classes; ?> <?php echo $skinr; ?>">
  <?php if ($admin_links): ?>
    <div class="views-admin-links views-hide">
      <?php echo $admin_links; ?>
    </div>
  <?php endif; ?>
  <div class="inner content">
    <?php if ($header): ?>
      <div class="view-header">
        <?php echo $header; ?>
      </div>
    <?php endif; ?>

    <?php if ($exposed): ?>
      <div class="view-filters">
        <?php echo $exposed; ?>
      </div>
    <?php endif; ?>

    <?php if ($attachment_before): ?>
      <div class="attachment attachment-before">
        <?php echo $attachment_before; ?>
      </div>
    <?php endif; ?>

    <?php if ($rows): ?>
      <div class="view-content">
        <?php echo $rows; ?>
      </div>
    <?php elseif ($empty): ?>
      <div class="view-empty">
        <?php echo $empty; ?>
      </div>
    <?php endif; ?>

    <?php if ($pager): ?>
      <?php echo $pager; ?>
    <?php endif; ?>

    <?php if ($attachment_after): ?>
      <div class="attachment attachment-after">
        <?php echo $attachment_after; ?>
      </div>
    <?php endif; ?>

    <?php if ($more): ?>
      <?php echo $more; ?>
    <?php endif; ?>

    <?php if ($footer): ?>
      <div class="view-footer">
        <?php echo $footer; ?>
      </div>
    <?php endif; ?>

    <?php if ($feed_icon): ?>
      <div class="feed-icon">
        <?php echo $feed_icon; ?>
      </div>
    <?php endif; ?>
  </div><!-- /views-inner -->
</div> <?php /* class view */ ?>
