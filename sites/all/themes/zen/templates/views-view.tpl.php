<?php
/**
 * @file
 * Main view template
 *
 * Variables available:
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - view
 *   - view-[name]
 *   - view-id-[name]
 *   - view-display-id-[display id]
 *   - view-dom-id-[dom id]
 * - $css_name: A css-safe version of the view name.
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
?>
<div class="<?php echo $classes; ?>">
  <?php if ($admin_links): ?>
    <div class="views-admin-links views-hide">
      <?php echo $admin_links; ?>
    </div>
  <?php endif; ?>

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

</div><!-- /.view -->
