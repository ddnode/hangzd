<?php
// $Id: content-admin-display-overview-form.tpl.php,v 1.1.2.3 2008/10/09 20:58:26 karens Exp $
?>
<div>
  <?php echo $help; ?>
</div>
<?php if ($rows): ?>
  <table id="content-display-overview" class="sticky-enabled">
    <thead>
      <tr>
        <th><?php echo t('Field'); ?></th>
        <?php if ($basic): ?>
          <th><?php echo t('Label'); ?></th>
        <?php endif; ?>
        <?php foreach ($contexts as $key => $value): ?>
          <th><?php echo $value['title']; ?></th>
          <th><?php echo t('Exclude'); ?></th>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 0;
      foreach ($rows as $row): ?>
        <tr class="<?php echo $count % 2 == 0 ? 'odd' : 'even'; ?>">
          <td><?php echo $row->indentation; ?><span class="<?php echo $row->label_class; ?>"><?php echo $row->human_name; ?></span></td>
          <?php if ($basic): ?>
            <td><?php echo $row->label; ?></td>
          <?php endif; ?>
          <?php foreach ($contexts as $context => $title): ?>
            <td><?php echo $row->{$context}->format; ?></td>
            <td><?php echo $row->{$context}->exclude; ?></td>
          <?php endforeach; ?>
        </tr>
        <?php $count++;
      endforeach; ?>
    </tbody>
  </table>
  <?php echo $submit; ?>
<?php endif; ?>
