<?php
?>
<div class="node<?php if ($sticky) {
    echo ' sticky';
} ?><?php if (!$status) {
    echo ' node-unpublished';
} ?>">
  <?php echo $picture ?>
  <?php if ($page == 0): ?>
    <h1 class="title"><a href="<?php echo $node_url ?>"><?php echo $title ?></a></h1>
  <?php endif; ?>
    <span class="submitted"><?php echo $submitted ?></span>
    <div class="taxonomy"><?php echo $terms ?></div>
    <div class="content"><?php echo $content ?></div>
    <?php if ($links): ?>
    <div class="links">&raquo; <?php echo $links ?></div>
    <?php endif; ?>
</div>
