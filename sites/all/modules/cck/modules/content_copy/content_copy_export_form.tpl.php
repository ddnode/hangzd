<?php
// $Id: content_copy_export_form.tpl.php,v 1.1.2.2 2008/10/28 02:11:49 yched Exp $

if ($form['#step'] == 2):
  if ($rows): ?>
    <table id="content-copy-export" class="sticky-enabled">
      <thead>
        <tr>
          <th><?php echo t('Export'); ?></th>
          <th><?php echo t('Label'); ?></th>
          <th><?php echo t('Name'); ?></th>
          <th><?php echo t('Type'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 0;
        foreach ($rows as $row): ?>
          <tr class="<?php echo $count % 2 == 0 ? 'odd' : 'even'; ?>">
          <?php
          switch ($row->row_type):
            case 'field': ?>
              <td><?php echo $row->checkbox; ?></td>
              <td><?php echo $row->indentation; ?><span class="<?php echo $row->label_class; ?>"><?php echo $row->human_name; ?></span></td>
              <td><?php echo $row->field_name; ?></td>
              <td><?php echo $row->type; ?></td>
            <?php break;
            case 'group': ?>
              <td><?php echo $row->checkbox; ?></td>
              <td><?php echo $row->indentation; ?><span class="<?php echo $row->label_class; ?>"><?php echo $row->human_name; ?></span></td>
              <td colspan="2"><?php echo $row->group_name; ?></td>
              <?php break;
            endswitch; ?>
          </tr>
          <?php $count++;
        endforeach; ?>
      </tbody>
    </table>
  <?php endif;
  endif;
echo $submit; ?>

