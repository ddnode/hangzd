<?php

/**
 * @file aggregator-feed-source.tpl.php
 * Default theme implementation to present the source of the feed.
 *
 * The contents are render above feed listings when browsing source feeds.
 * For example, "example.com/aggregator/sources/1".
 *
 * Available variables:
 * - $source_icon: Feed icon linked to the source. Rendered through
 *   theme_feed_icon().
 * - $source_image: Image set by the feed source.
 * - $source_description: Description set by the feed source.
 * - $source_url: URL to the feed source.
 * - $last_checked: How long ago the feed was checked locally.
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_feed_source()
 */
?>
<div class="feed-source">
  <?php echo $source_icon; ?>
  <?php echo $source_image; ?>
  <div class="feed-description">
    <?php echo $source_description; ?>
  </div>
  <div class="feed-url">
    <em><?php echo t('URL:'); ?></em> <a href="<?php echo $source_url; ?>"><?php echo $source_url; ?></a>
  </div>
  <div class="feed-updated">
    <em><?php echo t('Updated:'); ?></em> <?php echo $last_checked; ?>
  </div>
</div>
