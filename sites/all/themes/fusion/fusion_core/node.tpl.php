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

    <?php if ($node_top && !$teaser): ?>
    <div id="node-top" class="node-top row nested">
      <div id="node-top-inner" class="node-top-inner inner">
        <?php echo $node_top; ?>
      </div><!-- /node-top-inner -->
    </div><!-- /node-top -->
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

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php echo $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div><!-- /node-<?php echo $node->nid; ?> -->
