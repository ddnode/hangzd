<div id='admin-toolbar' class='<?php echo $position ?> <?php echo $layout ?> <?php echo $behavior ?>'>
  <span class='admin-toggle'><?php echo t('Admin') ?></span>

  <div class='admin-blocks admin-blocks-<?php echo count($blocks) ?>'>
    <div class='admin-tabs clear-block'>
      <?php foreach ($tabs as $bid => $tab): ?>
        <?php echo theme('admin_tab', $tab, $bid); ?>
      <?php endforeach; ?>
    </div>

    <?php foreach ($blocks as $bid => $block): ?>
      <div class='admin-block <?php if (isset($block->class)) {
    print $block->class;
} ?>' id='block-<?php echo $bid ?>'>
        <div class='block-content clear-block'><?php echo $block->content ?></div>
      </div>
    <?php endforeach; ?>
  </div>

</div>
