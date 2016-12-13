<?php
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */

/**
 * $skinr variable, <div class="inner">, and 'content' in
 * <div class="pane-content content"> added for Fusion theming.
 */
?>
<div class="<?php echo $classes; ?> <?php echo $skinr; ?>" <?php echo $id; ?>>
  <div class="inner">
    <?php if ($admin_links): ?>
      <div class="admin-links panel-hide">
        <?php echo $admin_links; ?>
      </div>
    <?php endif; ?>

    <?php if ($title): ?>
      <h2 class="pane-title block-title"><?php echo $title; ?></h2>
    <?php endif; ?>

    <?php if ($feeds): ?>
      <div class="feed">
        <?php echo $feeds; ?>
      </div>
    <?php endif; ?>

    <div class="pane-content content">
      <?php echo $content; ?>
    </div>

    <?php if ($links): ?>
      <div class="links">
        <?php echo $links; ?>
      </div>
    <?php endif; ?>

    <?php if ($more): ?>
      <div class="more-link">
        <?php echo $more; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
