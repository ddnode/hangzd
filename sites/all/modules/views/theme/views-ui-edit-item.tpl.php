<?php
/**
 * @file views-ui-edit-item.tpl.php
 *
 * This template handles the printing of fields/filters/sort criteria/arguments or relationships.
 */
?>
<?php echo $rearrange; ?>
<?php echo $add; ?>
<div class="views-category-title<?php
  if ($overridden) {
      echo ' overridden';
  }
  if ($defaulted) {
      echo ' defaulted';
  }
  ?>">
  <?php echo $item_help_icon; ?>
  <?php echo $title; ?>
</div>

<div class="views-category-content<?php
  if ($overridden) {
      echo ' overridden';
  }
  if ($defaulted) {
      echo ' defaulted';
  }
  ?>">
  <?php if (!empty($no_fields)): ?>
    <div><?php echo t('The style selected does not utilize fields.'); ?></div>
  <?php elseif (empty($fields)): ?>
    <div><?php echo t('None defined'); ?></div>
  <?php else: ?>
    <?php foreach ($fields as $pid => $field): ?>
      <?php if (!empty($field['links'])): ?>
        <?php echo $field['links']; ?>
      <?php endif; ?>
      <div class="<?php echo $field['class']; if (!empty($field['changed'])) {
      echo ' changed';
  } ?>">
        <?php echo $field['title']; ?>
        <?php echo $field['info']; ?>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
