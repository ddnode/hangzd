<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <?php if (!empty($title)) : ?>
    <h3><?php echo $title; ?></h3>
  <?php endif; ?>
  <<?php echo $options['type']; ?>>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php echo $classes[$id]; ?>"><?php echo $row; ?></li>
    <?php endforeach; ?>
  </<?php echo $options['type']; ?>>
</div>