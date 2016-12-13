<div class="views-field-<?php echo views_css_safe($view->field[$field]->field); ?>">
  <?php if ($view->field[$field]->label()) {
    ?>
    <label class="view-label-<?php echo views_css_safe($view->field[$field]->field); ?>">
      <?php echo $view->field[$field]->label(); ?>:
    </label>
  <?php 
} ?>
  <div class="views-content-<?php echo views_css_safe($view->field[$field]->field); ?>">
    <?php echo $view->style_plugin->rendered_fields[$count][$field]; ?>
  </div>
</div>
