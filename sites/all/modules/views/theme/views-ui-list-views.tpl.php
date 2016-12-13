<?php
/**
 * @file
 *
 * Displays the list of views on the administration screen.
 */
?>
<p><?php echo $help; ?></p>
<?php echo $widgets; ?>
<?php foreach ($views as $view): ?>
  <table class="views-entry <?php echo $view->classes; ?>">
    <tbody>
      <tr>
        <td class="view-name">
          <?php echo $help_type_icon; ?>
          <?php echo t('<em>@type</em> @base view: <strong>@view</strong>', ['@type' => $view->type, '@view' => $view->name, '@base' => $view->base]); ?>
          <?php if (!empty($view->tag)): ?>
            &nbsp;(<?php echo $view->tag; ?>)
          <?php endif; ?>
        </td>
        <td class="view-ops"><?php echo $view->ops ?></td>
      </tr>
      <tr>
        <td>
          <?php if ($view->title): ?>
            <?php echo t('Title: @title', ['@title' => $view->title]); ?> <br />
          <?php endif; ?>
          <?php if ($view->path): ?>
            <?php echo t('Path: !path', ['!path' => $view->path]); ?> <br />
          <?php endif; ?>
          <?php if ($view->displays): ?>
            <em><?php echo $view->displays; ?> </em><br />
          <?php endif; ?>
        </td>
        <td colspan="2" class="description">
          <?php echo $view->description; ?>
        </td>
      </tr>
    </tbody>
  </table>
<?php endforeach; ?>
