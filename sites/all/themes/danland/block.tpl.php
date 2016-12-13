<?php
// $Id: block.tpl.php,v 1.3 2010/07/19 22:05:33 danprobo Exp $
?>
<div id="block-<?php echo $block->module.'-'.$block->delta; ?>" class="block <?php echo $block_classes; ?>">

<?php if (!empty($block->subject)): ?>
  <h2><?php echo $block->subject ?></h2>
<?php endif; ?>

  <div class="content"><?php echo $block->content ?></div>
</div>
