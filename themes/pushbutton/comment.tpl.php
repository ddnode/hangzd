<?php
?>
<div class="comment<?php echo ' '.$status; ?>">
  <?php if ($picture) : ?>
    <?php echo $picture ?>
  <?php endif; ?>
  <h3 class="title"><?php echo $title ?></h3>
  <div class="submitted"><?php echo $submitted ?><?php if ($comment->new) : ?><span class="new"> *<?php echo $new ?></span><?php endif; ?></div>
  <div class="content">
    <?php echo $content ?>
    <?php if ($signature): ?>
      <div class="clear-block">
        <div>—</div>
        <?php echo $signature ?>
      </div>
    <?php endif; ?>
  </div>
  <!-- BEGIN: links -->
  <div class="links">&raquo; <?php echo $links ?></div>
  <!-- END: links -->
</div>
