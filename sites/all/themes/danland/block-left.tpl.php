<?php
// $Id: block-left.tpl.php,v 1.1 2010/07/19 22:25:16 danprobo Exp $
?>
<div id="block-<?php echo $block->module.'-'.$block->delta; ?>" class="block <?php echo $block_classes; ?>">
  <div class="block-inner">

    <?php if ($block->subject): ?>
      <h2 class="block-title"><?php echo $block->subject; ?></h2>
    <?php endif; ?>

    <div class="block-content">
      <div class="block-content-inner">
        <?php echo $block->content; ?>
      </div>
    </div>

  </div>
</div> <!-- /block -->
