<?php

/**
 * @file book-node-export-html.tpl.php
 * Default theme implementation for rendering a single node in a printer
 * friendly outline.
 *
 * @see book-node-export-html.tpl.php
 * Where it is collected and printed out.
 *
 * Available variables:
 * - $depth: Depth of the current node inside the outline.
 * - $title: Node title.
 * - $content: Node content.
 * - $children: All the child nodes recursively rendered through this file.
 * @see template_preprocess_book_node_export_html()
 */
?>
<div id="node-<?php echo $node->nid; ?>" class="section-<?php echo $depth; ?>">
  <h1 class="book-heading"><?php echo $title; ?></h1>
  <?php echo $content; ?>
  <?php echo $children; ?>
</div>
