<?php

/**
 * @file poll-results-block.tpl.php
 * Display the poll results in a block.
 *
 * Variables available:
 * - $title: The title of the poll.
 * - $results: The results of the poll.
 * - $votes: The total results in the poll.
 * - $links: Links in the poll.
 * - $nid: The nid of the poll
 * - $cancel_form: A form to cancel the user's vote, if allowed.
 * - $raw_links: The raw array of links.
 * - $vote: The choice number of the current user's vote.
 *
 * @see template_preprocess_poll_results()
 */
?>
<div class="poll">
  <?php echo $results; ?>
  <div class="total">
    <?php echo t('Total votes: @votes', ['@votes' => $votes]); ?>
  </div>
  <?php if (!empty($cancel_form)): ?>
    <?php echo $cancel_form; ?>
  <?php endif; ?>
</div>
