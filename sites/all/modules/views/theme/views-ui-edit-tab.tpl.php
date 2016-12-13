<?php
/**
 * @file views-ui-edit-tab.tpl.php
 * Template for the primary view editing window.
 */
?>
<div class="clear-block views-display views-display-<?php echo $display->id; if (!empty($display->deleted)) {
    echo ' views-display-deleted';
} ?>">
  <?php // top section?>
  <?php if ($remove): ?>
    <div class="remove-display"><?php echo $remove ?></div>
  <?php endif; ?>
  <?php if ($clone): ?>
    <div class="clone-display"><?php echo $clone ?></div>
  <?php endif; ?>
  <div class="top">
    <div class="inside">
      <?php echo $display_help_icon; ?>
      <span class="display-title">
        <?php echo $title; ?>
      </span>
      <span class="display-description">
        <?php echo $description; ?>
      </span>
    </div>
  </div>

  <?php // left section?>
  <div class="left tab-section">
    <div class="inside">
      <?php // If this is the default display, add some basic stuff here.?>
      <?php if ($default): ?>
        <div class="views-category">
          <div class="views-category-title"><?php echo t('View settings'); ?></div>
          <div class="views-category-content">
            <div class="<?php $details_class; if (!empty($details_changed)) {
    echo ' changed';
}?>">
              <?php echo $details ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php foreach ($categories as $category_id => $category): ?>
        <div class="views-category">
          <div class="views-category-title views-category-<?php echo $category_id; ?>">
            <?php echo $category['title']; ?>
          </div>
          <div class="views-category-content">
            <?php foreach ($category['data'] as $data): ?>
              <div class="<?php
                echo $data['class'];
                if (!empty($data['overridden'])) {
                    echo ' overridden';
                }
                if (!empty($data['defaulted'])) {
                    echo ' defaulted';
                }
                if (!empty($data['changed'])) {
                    echo ' changed';
                }?>">
                <?php echo $data['links'].$data['content'] ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php // middle section?>
  <div class="middle tab-section">
    <div class="inside">
      <div class="views-category">
        <?php echo $relationships; ?>
      </div>
      <div class="views-category">
        <?php echo $arguments; ?>
      </div>
      <?php if (!empty($fields)): ?>
        <div class="views-category">
          <?php echo $fields; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php // right section?>
  <div class="right tab-section">
    <div class="inside">
      <div class="views-category">
        <?php echo $sorts; ?>
      </div>
      <div class="views-category">
        <?php echo $filters; ?>
      </div>
    </div>
  </div>

</div>