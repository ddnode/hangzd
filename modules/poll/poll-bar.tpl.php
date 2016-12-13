<?php

/**
 * @file poll-bar.tpl.php
 * Display the bar for a single choice in a poll
 *
 * Variables available:
 * - $title: The title of the poll.
 * - $votes: The number of votes for this choice
 * - $total_votes: The number of votes for this choice
 * - $percentage: The percentage of votes for this choice.
 * - $vote: The choice number of the current user's vote.
 * - $voted: Set to TRUE if the user voted for this choice.
 *
 * @see template_preprocess_poll_bar()
 */
?>

<div class="text"><?php echo $title; ?></div>
<div class="bar">
  <div style="width: <?php echo $percentage; ?>%;" class="foreground"></div>
</div>
<div class="percent">
  <?php echo $percentage; ?>% (<?php echo format_plural($votes, '1 vote', '@count votes'); ?>)
</div>
