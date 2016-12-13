<?php
?>
  <div class="comment<?php echo ' '.$status; ?>">
    <?php if ($picture) {
    echo $picture;
} ?>
<h3 class="title"><?php echo $title; ?></h3><?php if ($new != '') {
    ?><span class="new"><?php echo $new; ?></span><?php 
} ?>
    <div class="submitted"><?php echo $submitted; ?></div>
    <div class="content">
     <?php echo $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php echo $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <div class="links">&raquo; <?php echo $links; ?></div>
  </div>
