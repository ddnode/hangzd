<?php
/**
 * @file views-exposed-form.tpl.php
 *
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    echo $q;
  ?>
<?php endif; ?>
<div class="views-exposed-form">
  <div class="views-exposed-widgets clear-block">
    <?php foreach ($widgets as $id => $widget): ?>
      <div class="views-exposed-widget views-widget-<?php echo $id; ?>">
        <?php if (!empty($widget->label)): ?>
          <label for="<?php echo $widget->id; ?>">
            <?php echo $widget->label; ?>
          </label>
        <?php endif; ?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php echo $widget->operator; ?>
          </div>
        <?php endif; ?>
        <div class="views-widget">
          <?php echo $widget->widget; ?>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="views-exposed-widget views-submit-button">
      <?php echo $button; ?>
    </div>
  </div>
</div>
