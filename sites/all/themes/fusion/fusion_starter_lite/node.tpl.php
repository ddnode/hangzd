<?php
?>

<div id="node-<?php echo $node->nid; ?>" class="node <?php echo $node_classes; ?>">
  <div class="inner">
    <?php echo $picture ?>

    <?php if ($page == 0): ?>
    <h2 class="title"><a href="<?php echo $node_url ?>" title="<?php echo $title ?>"><?php echo $title ?></a></h2>
    <?php endif; ?>

    <?php if ($submitted): ?>
    <div class="meta">
      <span class="submitted"><?php echo $submitted ?></span>
    </div>
    <?php endif; ?>

    <div class="content clearfix">
      <?php echo $content ?>
    </div>

    <?php if ($terms): ?>
    <div class="terms">
      <?php echo $terms; ?>
    </div>
    <?php endif; ?>

    <?php if ($links): ?>
    <div class="links">
      <?php echo $links; ?>
    </div>
    <?php endif; ?>
  </div><!-- /inner -->

</div><!-- /node-<?php echo $node->nid; ?> -->
