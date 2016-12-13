<?php
/**
 * @file views-view-summary.tpl.php
 * Default simple view template to display a list of summary lines
 *
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <ul class="views-summary">
  <?php foreach ($rows as $id => $row): ?>
    <li><a href="<?php echo $row->url; ?>"<?php echo !empty($classes[$id]) ? ' class="'.$classes[$id].'"' : ''; ?>><?php echo $row->link; ?></a>
      <?php if (!empty($options['count'])): ?>
        (<?php echo $row->count?>)
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
