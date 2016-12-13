<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language->language ?>" xml:lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">
<head>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php echo $head ?>
  <title><?php echo $head_title ?></title>
  <?php echo $styles ?>
  <?php echo $scripts ?>
</head>

<body>

<div class="hide"><a href="#content" title="<?php echo t('Skip navigation') ?>." accesskey="2"><?php echo t('Skip navigation') ?></a>.</div>

<table id="primary-menu" summary="Navigation elements." border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td id="home" width="10%">
      <?php if ($logo) : ?>
        <a href="<?php echo $front_page ?>" title="<?php echo t('Home') ?>"><img src="<?php echo $logo ?>" alt="<?php echo t('Home') ?>" border="0" /></a>
      <?php endif; ?>
    </td>

    <td id="site-info" width="20%">
      <?php if ($site_name) : ?>
        <div class='site-name'><a href="<?php echo $front_page ?>" title="<?php echo t('Home') ?>"><?php echo $site_name ?></a></div>
      <?php endif; ?>
      <?php if ($site_slogan) : ?>
        <div class='site-slogan'><?php echo $site_slogan ?></div>
      <?php endif; ?>
    </td>
    <td class="primary-links" width="70%" align="center" valign="middle">
      <?php echo theme('links', $primary_links, ['class' => 'links', 'id' => 'navlist']) ?>
    </td>
  </tr>
</table>

<table id="secondary-menu" summary="Navigation elements." border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td class="secondary-links" width="75%"  align="center" valign="middle">
      <?php echo theme('links', $secondary_links, ['class' => 'links', 'id' => 'subnavlist']) ?>
    </td>
    <td width="25%" align="center" valign="middle">
      <?php echo $search_box ?>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div><?php echo $header ?></div></td>
  </tr>
</table>

<table id="content" border="0" cellpadding="15" cellspacing="0" width="100%">
  <tr>
    <?php if ($left != ''): ?>
    <td id="sidebar-left">
      <?php echo $left ?>
    </td>
    <?php endif; ?>

    <td valign="top">
      <?php if ($mission != ''): ?>
      <div id="mission"><?php echo $mission ?></div>
      <?php endif; ?>

      <div id="main">
        <?php if ($title != ''): ?>
          <?php echo $breadcrumb ?>
          <h1 class="title"><?php echo $title ?></h1>

          <?php if ($tabs != ''): ?>
            <div class="tabs"><?php echo $tabs ?></div>
          <?php endif; ?>

        <?php endif; ?>

        <?php if ($show_messages && $messages != ''): ?>
          <?php echo $messages ?>
        <?php endif; ?>

        <?php if ($help != ''): ?>
            <div id="help"><?php echo $help ?></div>
        <?php endif; ?>

      <!-- start main content -->
      <?php echo $content; ?>
      <?php echo $feed_icons; ?>
      <!-- end main content -->

      </div><!-- main -->
    </td>
    <?php if ($right != ''): ?>
    <td id="sidebar-right">
      <?php echo $right ?>
    </td>
    <?php endif; ?>
  </tr>
</table>

<table id="footer-menu" summary="Navigation elements." border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="center" valign="middle">
    <?php if (isset($primary_links)) : ?>
      <?php echo theme('links', $primary_links, ['class' => 'links primary-links']) ?>
    <?php endif; ?>
    <?php if (isset($secondary_links)) : ?>
      <?php echo theme('links', $secondary_links, ['class' => 'links secondary-links']) ?>
    <?php endif; ?>
    </td>
  </tr>
</table>

<?php if ($footer_message || $footer) : ?>
<div id="footer-message">
    <?php echo $footer_message.$footer; ?>
</div>
<?php endif; ?>
<?php echo $closure; ?>
</body>
</html>
