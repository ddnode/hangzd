<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language->language; ?>" xml:lang="<?php echo $language->language; ?>">
<head>
  <title><?php echo $head_title; ?></title>
  <?php echo $head; ?>
  <?php echo $styles; ?>
  <?php echo $setting_styles; ?>
  <!--[if IE 8]>
  <?php echo $ie8_styles; ?>
  <![endif]-->
  <!--[if IE 7]>
  <?php echo $ie7_styles; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  <?php echo $ie6_styles; ?>
  <![endif]-->
  <?php echo $local_styles; ?>
  <?php echo $scripts; ?>
</head>

<body id="<?php echo $body_id; ?>" class="<?php echo $body_classes; ?>">
  <div id="page" class="page">
    <div id="page-inner" class="page-inner">
      <div id="skip">
        <a href="#main-content-area"><?php echo t('Skip to Main Content Area'); ?></a>
      </div>

      <!-- header-group row: width = grid_width -->
      <div id="header-group-wrapper" class="header-group-wrapper full-width">
        <div id="header-group" class="header-group row <?php echo $grid_width; ?>">
          <div id="header-group-inner" class="header-group-inner inner">
            <?php if ($logo || $site_name || $site_slogan): ?>
            <div id="header-site-info" class="header-site-info block">
              <div id="header-site-info-inner" class="header-site-info-inner inner">
                <?php if ($logo): ?>
                <div id="logo">
                  <a href="<?php echo check_url($front_page); ?>" title="<?php echo t('Home'); ?>"><img src="<?php echo $logo; ?>" alt="<?php echo t('Home'); ?>" /></a>
                </div>
                <?php endif; ?>
                <?php if ($site_name): ?>
                <span id="site-name"><a href="<?php echo check_url($front_page); ?>" title="<?php echo t('Home'); ?>"><?php echo $site_name; ?></a></span>
                <?php endif; ?>
                <?php if ($site_slogan): ?>
                <span id="slogan"><?php echo $site_slogan; ?></span>
                <?php endif; ?>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
            <?php endif; ?>
          </div><!-- /header-group-inner -->
        </div><!-- /header-group -->
      </div><!-- /header-group-wrapper -->

      <!-- main row: width = grid_width -->
      <div id="main-wrapper" class="main-wrapper full-width">
        <div id="main" class="main row <?php echo $grid_width; ?>">
          <div id="main-inner" class="main-inner inner">
            <div id="content-region" class="content-region row nested">
              <div id="content-region-inner" class="content-region-inner inner">
                <a name="main-content" id="main-content"></a>
                <div id="content-inner" class="content-inner block">
                  <div id="content-inner-inner" class="content-inner-inner inner">
                    <?php if ($title): ?>
                    <h1 class="title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($content): ?>
                    <div id="content-content" class="content-content">
                      <?php echo $content; ?>
                    </div><!-- /content-content -->
                    <?php endif; ?>
                  </div><!-- /content-inner-inner -->
                </div><!-- /content-inner -->
              </div><!-- /content-region-inner -->
            </div><!-- /content-region -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->

    </div><!-- /page-inner -->
  </div><!-- /page -->
  <?php echo $closure; ?>
</body>
</html>
