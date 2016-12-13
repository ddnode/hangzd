<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language->language ?>" xml:lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
  <?php echo $head ?>
  <title><?php echo $head_title ?></title>
  <?php echo $styles ?>
  <?php echo $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" id="header">
  <tr>
    <td id="logo">
      <?php if ($logo) {
    ?><a href="<?php echo $front_page ?>" title="<?php echo t('Home') ?>"><img src="<?php echo $logo ?>" alt="<?php echo t('Home') ?>" /></a><?php 
} ?>
      <?php if ($site_name) {
    ?><h1 class='site-name'><a href="<?php echo $front_page ?>" title="<?php echo t('Home') ?>"><?php echo $site_name ?></a></h1><?php 
} ?>
      <?php if ($site_slogan) {
    ?><div class='site-slogan'><?php echo $site_slogan ?></div><?php 
} ?>
    </td>
    <td id="menu">
      <?php if (isset($secondary_links)) {
    ?><?php echo theme('links', $secondary_links, ['class' => 'links', 'id' => 'subnavlist']) ?><?php 
} ?>
      <?php if (isset($primary_links)) {
    ?><?php echo theme('links', $primary_links, ['class' => 'links', 'id' => 'navlist']) ?><?php 
} ?>
      <?php echo $search_box ?>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div><?php echo $header ?></div></td>
  </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <?php if ($left) {
    ?><td id="sidebar-left">
      <?php echo $left ?>
    </td><?php 
} ?>
    <td valign="top">
      <?php if ($mission) {
    ?><div id="mission"><?php echo $mission ?></div><?php 
} ?>
      <div id="main">
        <?php echo $breadcrumb ?>
        <h1 class="title"><?php echo $title ?></h1>
        <div class="tabs"><?php echo $tabs ?></div>
        <?php if ($show_messages) {
    echo $messages;
} ?>
        <?php echo $help ?>
        <?php echo $content; ?>
        <?php echo $feed_icons; ?>
      </div>
    </td>
    <?php if ($right) {
    ?><td id="sidebar-right">
      <?php echo $right ?>
    </td><?php 
} ?>
  </tr>
</table>

<div id="footer">
  <?php echo $footer_message ?>
  <?php echo $footer ?>
</div>
<?php echo $closure ?>
</body>
</html>
