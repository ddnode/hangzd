<?php
// $Id: page-manager-edit-page.tpl.php,v 1.3 2009/08/19 01:12:24 merlinofchaos Exp $
/**
 * @file
 * Template for the page manager page editor.
 *
 * Variables available:
 * -
 *
 * For javascript purposes the id must not change.
 */
?>
<div id="page-manager-edit">
  <?php echo $locked; ?>
  <div class="page-manager-wrapper">
    <?php if (isset($operations['primary'])): ?>
      <div class="primary-actions clear-block actions">
        <?php echo $operations['primary']; ?>
      </div>
    <?php endif; ?>
    <div class="page-manager-tabs clear-block">
      <div class="page-manager-edit-operations">
        <div class="inside">
          <?php echo $operations['nav']; ?>
        </div>
      </div>
      <div class="page-manager-ajax-pad">
        <div class="inside">
          <div class="content-header">
            <div class="content-title">
              <?php echo $changed; ?>
              <?php echo $content['title']; ?>
            </div>
            <?php if (isset($operations['secondary'])): ?>
              <div class="secondary-actions clear-block actions">
                <?php echo $operations['secondary']; ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="content-content">
            <?php if (!empty($content['description'])): ?>
              <div class="description">
                <?php echo $content['description']; ?>
              </div>
              <?php endif; ?>
            <?php echo $content['content']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $save; ?>
</div>