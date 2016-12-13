<?php
?>

<div class="comment <?php echo $comment_classes; ?> clear-block">
  <?php echo $picture ?>
  
  <?php if ($comment->new): ?>
  <a id="new"></a>
  <span class="new"><?php echo $new ?></span>
  <?php endif; ?>
  
  <h3 class="title"><?php echo $title ?></h3>
  <div class="submitted">
    <?php echo $submitted ?>
  </div>
  
  <div class="content">
    <?php echo $content ?>
    
    <?php if ($signature): ?>
    <div class="signature">
      <?php echo $signature ?>
    </div>
    <?php endif; ?>
  </div>
  
  <?php if ($links): ?>
  <div class="links">
    <?php echo $links ?>
  </div>
  <?php endif; ?>
  
</div><!-- /comment -->