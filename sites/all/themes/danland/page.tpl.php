<?php
// $Id: page.tpl.php,v 1.18 2010/12/02 11:42:42 danprobo Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">
  <head>
  <?php echo $head; ?>
  <title><?php echo $head_title; ?></title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php echo $styles; ?>
   <!--[if IE 6]><link rel="stylesheet" href="<?php echo $base_path.$directory; ?>/style.ie6.css" type="text/css" /><![endif]-->
  <?php echo $scripts; ?>
<!--[if IE 6]>
        <script type="text/javascript" src="<?php echo $base_path.$directory; ?>/scripts/jquery.pngFix.js"></script>
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(document).pngFix();
    });
</script>
<![endif]-->
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#superfish ul.menu").superfish({ 
            delay:       100,                           
            animation:   {opacity:'show',height:'show'},  
            speed:       'fast',                          
            autoArrows:  true,                           
            dropShadows: true                   
        });
  });
</script>
 </head>

<body<?php echo phptemplate_body_class($left, $right); ?>>
<div id="header">
<div id="header-wrapper">
        <div id="header-first">
          <?php if ($logo): ?> 
          <div class="logo">
            <a href="<?php echo $base_path ?>" title="<?php echo t('Home') ?>"><img src="<?php echo $logo ?>" alt="<?php echo t('Home') ?>"/></a>
          </div>
          <?php endif; ?>
        </div><!-- /header-first -->
        <div id="header-middle">
	  <?php if ($site_name) : ?><h2 class="logo-name"><a href="<?php echo $front_page; ?>" title="<?php echo t('Home'); ?>"><?php echo $site_name; ?></a></h2><?php endif; ?>
				<?php if ($site_slogan) : ?><div class='logo-text'><?php echo $site_slogan; ?></div><?php endif; ?>
        </div><!-- /header-middle -->
        <div id="search-box">
          <?php echo $search_box; ?>
        </div><!-- /search-box -->

	<div id="authorize">
      <ul><?php global $user; if ($user->uid != 0) {
    echo '<li class="first">'.t('Logged in as ').'<a href="'.url('user/'.$user->uid).'">'.$user->name.'</a></li>';
    echo '<li><a href="'.url('logout').'">'.t('Logout').'</a></li>';
} else {
    echo '<li class="first"><a href="'.url('user').'">'.t('Login').'</a></li>';
} //print '<li><a href="' .url('user/register'). '">' .t('Register'). '</a></li>'; }?></ul>
	  <?php //print $feed_icons;?>
  </div>

      </div><!-- /header-wrapper -->

</div> <!-- /header -->
<div style="clear:both"></div>
<div id="menu">
<div id="rounded-menu-left"></div>
 <?php if ($primary_links || $superfish_menu): ?>
      <!-- PRIMARY -->
      <div id="<?php echo $primary_links ? 'nav' : 'superfish'; ?>">
        <?php 
                         if ($primary_links) {
                             echo theme('links', $primary_links);
                         } elseif (!empty($superfish_menu)) {
                          echo $superfish_menu;
                      }
        ?>
      </div> <!-- /primary -->
    <?php endif; ?>
<div id="rounded-menu-right"></div>
</div> <!-- end menu -->

 <?php if ($preface_first || $preface_middle || $preface_last) : ?>
    <div style="clear:both"></div>
    <div id="preface-wrapper" class="in<?php echo (bool) $preface_first + (bool) $preface_middle + (bool) $preface_last; ?>">
          <?php if ($preface_first) : ?>
          <div class="column A">
            <?php echo $preface_first; ?>
          </div>
          <?php endif; ?>
          <?php if ($preface_middle) : ?>
          <div class="column B">
            <?php echo $preface_middle; ?>
          </div>
          <?php endif; ?>
          <?php if ($preface_last) : ?>
          <div class="column C">
            <?php echo $preface_last; ?>
          </div>
          <?php endif; ?>
      <div style="clear:both"></div>
    </div>
    <?php endif; ?>

<div style="clear:both"></div>
<div id="wrapper">
<?php if ($left): ?>
			<div id="sidebar-left" class="sidebar">
				<?php echo $left ?>
			</div>
		<?php endif; ?>
<div id="content">
			<?php if ($content_top) : ?><div class="content-top"><?php echo $content_top; ?></div>
			<?php endif; ?>
			<?php// if (!$is_front) print $breadcrumb; ?>
			<?php if ($show_messages) {
            echo $messages;
        } ?>
			<?php if ($tabs) : ?><div class="tabs"><?php echo $tabs; ?></div><?php endif; ?>
			<?php if ($title) : ?><h1 class="title"><?php echo $title; ?></h1><?php endif; ?>
			<?php echo $help; ?>
		      <?php if ($content) : ?><div class="content-middle"><?php echo $content; ?></div>
			<?php endif; ?>
			<?php if ($content_bottom) : ?><div class="content-bottom"><?php echo $content_bottom; ?></div>
			<?php endif; ?>

</div> <!-- end content -->

<?php if ($right): ?>
			<div id="sidebar-right" class="sidebar">
				<?php echo $right; ?>
			</div>
		<?php endif; ?>
<div style="clear:both"></div>
</div> <!-- end wrapper -->

<?php if ($bottom_first || $bottom_middle || $bottom_last) : ?>
    <div style="clear:both"></div>
    <div id="bottom-teaser" class="in<?php echo (bool) $bottom_first + (bool) $bottom_middle + (bool) $bottom_last; ?>">
          <?php if ($bottom_first) : ?>
          <div class="column A">
            <?php echo $bottom_first; ?>
          </div>
          <?php endif; ?>
          <?php if ($bottom_middle) : ?>
          <div class="column B">
            <?php echo $bottom_middle; ?>
          </div>
          <?php endif; ?>
          <?php if ($bottom_last) : ?>
          <div class="column C">
            <?php echo $bottom_last; ?>
          </div>
          <?php endif; ?>
      <div style="clear:both"></div>
    </div>
    <?php endif; ?>

 <?php if ($bottom_1 || $bottom_2 || $bottom_3 || $bottom_4) : ?>
    <div style="clear:both"></div><!-- Do not touch -->
    <div id="bottom-wrapper" class="in<?php echo (bool) $bottom_1 + (bool) $bottom_2 + (bool) $bottom_3 + (bool) $bottom_4; ?>">
          <?php if ($bottom_1) : ?>
          <div class="column A">
            <?php echo $bottom_1; ?>
          </div>
          <?php endif; ?>
          <?php if ($bottom_2) : ?>
          <div class="column B">
            <?php echo $bottom_2; ?>
          </div>
          <?php endif; ?>
          <?php if ($bottom_3) : ?>
          <div class="column C">
            <?php echo $bottom_3; ?>
          </div>
          <?php endif; ?>
          <?php if ($bottom_4) : ?>
          <div class="column D">
            <?php echo $bottom_4; ?>
          </div>
          <?php endif; ?>
      <div style="clear:both"></div>
    </div><!-- Bottom -->
    <?php endif; ?>

<div style="clear:both"></div>
<div id="footer-wrapper">
<div id="footer">
 <?php echo $footer; ?>
</div>
<?php if ($footer_message || $secondary_links) : ?>
<div id="subnav-wrapper">
 <ul><li><?php echo $footer_message; ?></li>
<li><?php if (isset($secondary_links)) : ?><?php echo theme('links', $secondary_links, ['class' => 'links', 'id' => 'subnav']); ?><?php endif; ?></li></ul>
</div>
<?php endif; ?>
</div> <!-- end footer wrapper -->

<div style="clear:both"></div>
<div id="notice"><p>版权所有：北京航众达科技有限公司 公司地址：北京市丰台区<br />联系热线：010-1234567 13910008236<br />Copyright © 2012 京ICP备05020993号</p></div>
<?php echo $closure; ?>
</body>
</html>
