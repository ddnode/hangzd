<?php
// $Id: profile_fields_pane.tpl.php,v 1.1 2009/04/18 02:00:35 merlinofchaos Exp $
/**
 * @file
 * Display profile fields.
 *
 * @todo Need definition of what variables are available here.
 */
?>
<?php if (is_array($vars)): ?>
  <?php  foreach ($vars as $class => $field): ?>
    <dl class="profile-category">
      <dt class="profile-<?php echo $class; ?>"><?php echo $field['title']; ?></dt>
      <dd class="profile-<?php echo $class; ?>"><?php echo $field['value']; ?></dd>
    </dl>
  <?php endforeach; ?>
<?php endif; ?>
