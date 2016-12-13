<?php
?>
<div class="comment<?php echo ($comment->new) ? ' comment-new' : ''; echo ' '.$status; echo ' '.$zebra; ?>">

  <div class="clear-block">
  <?php if ($submitted): ?>
    <span class="submitted"><?php echo $submitted; ?></span>
  <?php endif; ?>

  <?php if ($comment->new) : ?>
    <span class="new"><?php echo drupal_ucfirst($new) ?></span>
  <?php endif; ?>

  <?php echo $picture ?>

    <h3><?php echo $title ?></h3>

    <div class="content">
      <?php echo $content ?>
      <?php if ($signature): ?>
      <div class="clear-block">
        <div>—</div>
        <?php echo $signature ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($links): ?>
    <div class="links"><?php echo $links ?></div>
  <?php endif; ?>
</div>
