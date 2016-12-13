<?php
?>

<div id="block-<?php echo $block->module.'-'.$block->delta; ?>" class="block block-<?php echo $block->module ?> <?php echo $block_zebra; ?> <?php echo $position; ?> <?php echo $skinr; ?>">
  <div class="inner clearfix">
    <?php if (isset($edit_links)): ?>
    <?php echo $edit_links; ?>
    <?php endif; ?>
    <?php if ($block->subject): ?>
    <h2 class="title block-title"><?php echo $block->subject ?></h2>
    <?php endif; ?>
    <div class="content clearfix">
      <?php echo $block->content ?>
    </div>
  </div><!-- /block-inner -->
</div><!-- /block -->
