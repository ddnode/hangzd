<?php
/**
 * @file views-ui-edit-view.tpl.php
 * Template for the primary view editing window.
 */
?>
<div class="views-edit-view">
  <?php if ($locked): ?>
    <div class="view-locked">
       <?php echo t('This view is being edited by user !user, and is therefore locked from editing by others. This lock is !age old. Click here to <a href="!break">break this lock</a>.', ['!user' => $locked, '!age' => $lock_age, '!break' => $break]); ?>
    </div>
  <?php endif; ?>
  <div class="views-basic-info clear-block<?php if (!empty($view->changed)) {
    echo ' changed';
}?>">
    <?php if (!is_numeric($view->vid)): ?>
      <div class="view-changed view-new"><?php echo t('New view'); ?></div>
    <?php else: ?>
      <div class="view-changed"><?php echo t('Changed view'); ?></div>
    <?php endif; ?>
    <div class="views-quick-links">
      <?php echo $quick_links ?>
    </div>
    <?php echo t('View %name, displaying items of type <strong>@base</strong>.',
        ['%name' => $view->name, '@base' => $base_table]); ?>
  </div>

  <?php echo $tabs; ?>

  <div id="views-ajax-form">
    <div id="views-ajax-title">
      <?php // This is initially empty?>
    </div>
    <div id="views-ajax-pad">
      <?php /* This is sent in because it is also sent out through settings and
      needs to be consistent. */ ?>
      <?php echo $message; ?>
    </div>
  </div>

  <?php echo $save_button ?>

  <h2><?php echo t('Live preview'); ?></h2>
  <div id='views-live-preview'>
    <?php echo $preview ?>
  </div>
</div>
