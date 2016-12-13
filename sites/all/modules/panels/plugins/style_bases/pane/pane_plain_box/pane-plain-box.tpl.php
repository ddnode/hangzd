<?php
/**
 * @file
 *
 * Display the box for rounded corners.
 *
 * - $pane: The pane being rendered
 * - $display: The display being rendered
 * - $content: An object containing the content and title
 * - $output: The result of theme('panels_pane')
 * - $classes: The classes that must be applied to the top divs.
 */
?>
<div class="<?php echo $classes ?>">
  <?php echo $output; ?>
</div>
