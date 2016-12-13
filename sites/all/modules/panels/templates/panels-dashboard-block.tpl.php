<?php
?>
<div class="dashboard-block">
  <h3 class="dashboard-title"><?php echo $block['title']; ?></h3>
  <div class="dashboard-content <?php echo $block['class']; ?>">
    <?php echo $block['content']; ?>
    <?php if (!empty($block['link'])): ?>
      <div class="links">
        <?php echo $block['link']; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
