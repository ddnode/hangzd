<?php
/**
 * @file views-view-summary-unformatted.tpl.php
 * Default simple view template to display a group of summary lines
 *
 * This wraps items in a span if set to inline, or a div if not.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
  <?php echo(!empty($options['inline']) ? '<span' : '<div').' class="views-summary views-summary-unformatted">'; ?>
    <?php if (!empty($row->separator)) {
    echo $row->separator;
} ?>
    <a href="<?php echo $row->url; ?>"<?php echo !empty($classes[$id]) ? ' class="'.$classes[$id].'"' : ''; ?>><?php echo $row->link; ?></a>
    <?php if (!empty($options['count'])): ?>
      (<?php echo $row->count; ?>)
    <?php endif; ?>
  <?php echo !empty($options['inline']) ? '</span>' : '</div>'; ?>
<?php endforeach; ?>
