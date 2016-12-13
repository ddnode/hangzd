<?php
?>
<div id="block-<?php echo $block->module.'-'.$block->delta; ?>" class="clear-block block block-<?php echo $block->module ?>">

<?php if (!empty($block->subject)): ?>
  <h2><?php echo $block->subject ?></h2>
<?php endif; ?>

  <div class="content"><?php echo $block->content ?></div>
</div>
