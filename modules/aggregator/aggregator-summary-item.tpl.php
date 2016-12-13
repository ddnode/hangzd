<?php

/**
 * @file aggregator-summary-item.tpl.php
 * Default theme implementation to present a linked feed item for summaries.
 *
 * Available variables:
 * - $feed_url: Link to originating feed.
 * - $feed_title: Title of feed.
 * - $feed_age: Age of remote feed.
 * - $source_url: Link to remote source.
 * - $source_title: Locally set title for the source.
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_summary_item()
 */
?>
<a href="<?php echo $feed_url; ?>"><?php echo $feed_title; ?></a> <span class="age"><?php echo $feed_age; ?></span><?php if ($source_url) : ?>, <span class="source"><a href="<?php echo $source_url; ?>"><?php echo $source_title; ?></a></span><?php endif; ?>
