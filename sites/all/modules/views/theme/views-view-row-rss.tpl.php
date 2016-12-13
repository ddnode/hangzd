<?php
/**
 * @file views-view-row-rss.tpl.php
 * Default view template to display a item in an RSS feed.
 *
 * @ingroup views_templates
 */
?>
  <item>
    <title><?php echo $title; ?></title>
    <link><?php echo $link; ?></link>
    <description><?php echo $description; ?></description>
    <?php echo $item_elements; ?>
  </item>
