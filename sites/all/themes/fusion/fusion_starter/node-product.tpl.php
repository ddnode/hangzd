<?php
?>

<div id="node-<?php echo $node->nid; ?>" class="node clear-block <?php echo $node_classes; ?>">
  <div class="inner">
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

    <div id="product-group" class="product-group">
      <div class="images">
        <?php echo $fusion_uc_image; ?>
      </div><!-- /images -->

      <div class="content clearfix">
        <div id="content-body">
          <?php echo $fusion_uc_body; ?>
        </div>

        <div id="product-details" class="clear">
          <div id="price-group">
            <?php echo $fusion_uc_display_price; ?>
            <?php echo $fusion_uc_add_to_cart; ?>
          </div>

          <div id="field-group">
            <?php echo $fusion_uc_weight; ?>
            <?php echo $fusion_uc_dimensions; ?>
            <?php echo $fusion_uc_model; ?>
            <?php echo $fusion_uc_list_price; ?>
            <?php echo $fusion_uc_sell_price; ?>
            <?php echo $fusion_uc_cost; ?>
          </div>
        </div><!-- /product-details -->

        <?php if ($fusion_uc_additional && !$teaser): ?>
        <div id="product-additional" class="product-additional">
          <?php echo $fusion_uc_additional; ?>
        </div>
        <?php endif; ?>

        <?php if ($terms): ?>
        <div class="terms">
          <?php echo $terms; ?>
        </div>
        <?php endif; ?>

        <?php if ($links && !$teaser): ?>
        <div class="links clear">
          <?php echo $links; ?>
        </div>
        <?php endif; ?>
      </div><!-- /content -->
    </div><!-- /product-group -->
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php echo $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div>
