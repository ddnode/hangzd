<div class='admin-panes clear-block '>
  <?php if ($layout == 'vertical'): ?>

    <?php foreach ($panels as $key => $panel): ?>
      <div class='admin-pane <?php if (!isset($first)) {
    print 'admin-pane-active';
} ?> admin-pane-<?php echo $key ?>'>
        <h2 class='admin-pane-title'><?php echo $labels[$key] ?></h2>
        <div class='admin-pane-content clear-block'><?php echo $panel ?></div>
      </div>
      <?php $first = true ?>
    <?php endforeach; ?>

  <?php else: ?>

    <div class='admin-pane-tabs'>
      <?php foreach ($panels as $key => $panel): ?>
        <h2 class='admin-pane-title'><?php echo $labels[$key] ?></h2>
      <?php endforeach; ?>
    </div>

    <?php foreach ($panels as $key => $panel): ?>
      <div class='admin-pane <?php if (!isset($first)) {
    print 'admin-pane-active';
} ?> admin-pane-<?php echo $key ?>'>
        <div class='admin-pane-content clear-block'><?php echo $panel ?></div>
      </div>
      <?php $first = true ?>
    <?php endforeach; ?>

  <?php endif; ?>

  <?php echo drupal_render($others) ?>
</div>
