<?php
// $Id: content-admin-field-overview-form.tpl.php,v 1.1.2.6 2009/06/26 18:02:45 yched Exp $
?>
<div>
  <?php echo $help; ?>
</div>
<table id="content-field-overview" class="sticky-enabled">
  <thead>
    <tr>
      <th><?php echo t('Label'); ?></th>
      <th><?php echo t('Weight'); ?></th>
      <th><?php echo t('Name'); ?></th>
      <th><?php echo t('Type'); ?></th>
      <th><?php echo t('Operations'); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count = 0;
    foreach ($rows as $row): ?>
      <tr class="<?php echo $count % 2 == 0 ? 'odd' : 'even'; ?> <?php echo $row->class ?>">
      <?php
      switch ($row->row_type):
        case 'field': ?>
          <td>
            <?php echo $row->indentation; ?>
            <span class="<?php echo $row->label_class; ?>"><?php echo $row->label; ?></span>
          </td>
          <td><?php echo $row->weight.$row->parent.$row->hidden_name; ?></td>
          <td><?php echo $row->field_name; ?></td>
          <td><?php echo $row->type; ?></td>
          <td><?php echo $row->configure; ?>&nbsp;&nbsp;<?php echo $row->remove; ?></td>
          <?php break;
        case 'group': ?>
          <td>
            <?php echo $row->indentation; ?>
            <span class="<?php echo $row->label_class; ?>"><?php echo $row->label; ?></span>
          </td>
          <td><?php echo $row->weight.$row->parent.$row->hidden_name; ?></td>
          <td><?php echo $row->group_name; ?></td>
          <td><?php echo $row->group_type; ?></td>
          <td><?php echo $row->configure; ?>&nbsp;&nbsp;<?php echo $row->remove; ?></td>
          <?php break;
        case 'extra': ?>
          <td>
            <?php echo $row->indentation; ?>
            <span class="<?php echo $row->label_class; ?>"><?php echo $row->label; ?></span>
          </td>
          <td><?php echo $row->weight.$row->parent.$row->hidden_name; ?></td>
          <td colspan="2"><?php echo $row->description; ?></td>
          <td><?php echo $row->configure; ?>&nbsp;&nbsp;<?php echo $row->remove; ?></td>
          <?php break;
        case 'separator': ?>
          <td colspan="5" class="region"><?php echo t('Add'); ?></td>
          <?php break;
        case 'add_new_field': ?>
          <td>
            <?php echo $row->indentation; ?>
            <div class="<?php echo $row->label_class; ?>">
              <div class="content-new"><?php echo theme('advanced_help_topic', 'content', 'add-new-field').t('New field'); ?></div>
              <?php echo $row->label; ?>
            </div>
          </td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->weight.$row->parent.$row->hidden_name; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->field_name; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->type; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->widget_type; ?></td>
          <?php break;
        case 'add_existing_field': ?>
          <td>
            <?php echo $row->indentation; ?>
            <div class="<?php echo $row->label_class; ?>">
              <div class="content-new"><?php echo theme('advanced_help_topic', 'content', 'add-existing-field').t('Existing field'); ?></div>
              <?php echo $row->label; ?>
            </div>
          </td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->weight.$row->parent.$row->hidden_name; ?></td>
          <td colspan="2"><div class="content-new">&nbsp;</div><?php echo $row->field_name; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->widget_type; ?></td>
          <?php break;
       case 'add_new_group': ?>
          <td>
            <?php echo $row->indentation; ?>
            <div class="<?php echo $row->label_class; ?>">
              <div class="content-new"><?php echo theme('advanced_help_topic', 'content', 'add-new-group').t('New group'); ?></div>
              <?php echo $row->label; ?>
            </div>
          </td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->weight.$row->parent.$row->hidden_name; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->group_name; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->group_type; ?></td>
          <td><div class="content-new">&nbsp;</div><?php echo $row->group_option; ?></td>
        <?php break;
      endswitch; ?>
      </tr>
      <?php $count++;
    endforeach; ?>
  </tbody>
</table>

<?php echo $submit; ?>

