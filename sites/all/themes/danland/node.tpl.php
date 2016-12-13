<?php
// $Id: node.tpl.php,v 1.3 2010/11/11 03:57:45 danprobo Exp $
?>
  <div class="node<?php if ($sticky) {
    echo ' sticky';
} ?><?php if (!$status) {
    echo ' node-unpublished';
} ?>">
    <?php if ($picture) {
    echo $picture;
}?>
    <?php if ($page == 0) {
    ?><h2 class="title"><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h2><?php 
} ?>
    <?php if ($submitted): ?><span class="submitted"><?php echo $submitted; ?></span><?php endif; ?>
    <?php if ($taxonomy): ?><div class="taxonomy"><?php echo $terms; ?></div><?php endif; ?>
    <div class="content"><?php echo $content; ?></div>
	<div style="clear:both"></div>
    <?php if ($links): ?>
      <div class="links"><?php echo $links; ?></div>
    <?php endif; ?>
  </div>
