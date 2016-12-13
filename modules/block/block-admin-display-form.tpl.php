<?php

/**
 * @file block-admin-display-form.tpl.php
 * Default theme implementation to configure blocks.
 *
 * Available variables:
 * - $block_regions: An array of regions. Keyed by name with the title as value.
 * - $block_listing: An array of blocks keyed by region and then delta.
 * - $form_submit: Form submit button.
 * - $throttle: TRUE or FALSE depending on throttle module being enabled.
 *
 * Each $block_listing[$region] contains an array of blocks for that region.
 *
 * Each $data in $block_listing[$region] contains:
 * - $data->region_title: Region title for the listed block.
 * - $data->block_title: Block title.
 * - $data->region_select: Drop-down menu for assigning a region.
 * - $data->weight_select: Drop-down menu for setting weights.
 * - $data->throttle_check: Checkbox to enable throttling.
 * - $data->configure_link: Block configuration link.
 * - $data->delete_link: For deleting user added blocks.
 *
 * @see template_preprocess_block_admin_display_form()
 * @see theme_block_admin_display()
 */
?>
<?php
  // Add table javascript.
  drupal_add_js('misc/tableheader.js');
  drupal_add_js(drupal_get_path('module', 'block').'/block.js');
  foreach ($block_regions as $region => $title) {
      drupal_add_tabledrag('blocks', 'match', 'sibling', 'block-region-select', 'block-region-'.$region, null, false);
      drupal_add_tabledrag('blocks', 'order', 'sibling', 'block-weight', 'block-weight-'.$region);
  }
?>
<table id="blocks" class="sticky-enabled">
  <thead>
    <tr>
      <th><?php echo t('Block'); ?></th>
      <th><?php echo t('Region'); ?></th>
      <th><?php echo t('Weight'); ?></th>
      <?php if ($throttle): ?>
        <th><?php echo t('Throttle'); ?></th>
      <?php endif; ?>
      <th colspan="2"><?php echo t('Operations'); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php $row = 0; ?>
    <?php foreach ($block_regions as $region => $title): ?>
      <tr class="region region-<?php echo $region?>">
        <td colspan="<?php echo $throttle ? '6' : '5'; ?>" class="region"><?php echo $title; ?></td>
      </tr>
      <tr class="region-message region-<?php echo $region?>-message <?php echo empty($block_listing[$region]) ? 'region-empty' : 'region-populated'; ?>">
        <td colspan="<?php echo $throttle ? '6' : '5'; ?>"><em><?php echo t('No blocks in this region'); ?></em></td>
      </tr>
      <?php foreach ($block_listing[$region] as $delta => $data): ?>
      <tr class="draggable <?php echo $row % 2 == 0 ? 'odd' : 'even'; ?><?php echo $data->row_class ? ' '.$data->row_class : ''; ?>">
        <td class="block"><?php echo $data->block_title; ?></td>
        <td><?php echo $data->region_select; ?></td>
        <td><?php echo $data->weight_select; ?></td>
        <?php if ($throttle): ?>
          <td><?php echo $data->throttle_check; ?></td>
        <?php endif; ?>
        <td><?php echo $data->configure_link; ?></td>
        <td><?php echo $data->delete_link; ?></td>
      </tr>
      <?php $row++; ?>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </tbody>
</table>

<?php echo $form_submit; ?>
