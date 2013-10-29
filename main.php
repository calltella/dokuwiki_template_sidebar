<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
/* include sidebar code */
include(dirname(__FILE__).'/sidebar.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>
  <?php echo tpl_favicon(array('favicon', 'mobile')) ?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">

    <div class="header">
      <div class="logo">
        <?php tpl_link(wl(),'<img height="48" width="48" src="'.tpl_basedir().'images/logo.png">','name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"')?>
        <?php echo $conf['title'] ?>
      </div>
      <div class="breadcrumbs">
        <?php tpl_youarehere() ?>
      </div>
      <div class="clearer"></div>
    </div>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

    <!--// use icons  https://www.iconfinder.com/search/?q=iconset%3Acologne#top //-->
    <div class="bar" id="bar__top">
      <div class="bar-left" id="bar__topleft">
        <?php tpl_actionlink('edit','<img src=',' class="img-icon">',tpl_basedir().'images/1382878283_pencil.png')?>
        <?php tpl_actionlink('admin','<img src=',' class="img-icon">',tpl_basedir().'images/1382878277_config.png')?>
        <?php tpl_actionlink('media','<img src=',' class="img-icon">',tpl_basedir().'images/1382878437_photography.png')?>
        <?php tpl_actionlink('profile','<img src=',' class="img-icon">',tpl_basedir().'images/1382878672_user.png')?>
        <?php tpl_actionlink('index','<img src=',' class="img-icon">',tpl_basedir().'images/1382878831_sitemap.png')?>
        <?php tpl_actionlink('login','<img src=',' class="img-icon">',tpl_basedir().'images/1382878884_sign-out.png')?>
      </div>

      <div class="bar-right" id="bar__topright">
        <?php tpl_actiondropdown()?>
        <?php tpl_searchform()?>&#160;
      </div>

      <div class="clearer"></div>
    </div>

    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

  </div>
  <?php tpl_flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <?php html_sidebar()?>
  <?php if($ACT == 'show') {?>
  <div class="page_with_sidebar">
  <?php }else {?>
  <div class="page">
  <?php } ?>
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

  <div class="clearer"></div>

  <?php tpl_flush()?>

  <div class="stylefoot">

    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
    </div>

   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

    <div class="bar" id="bar__bottom">
      <div class="bar-left" id="bar__bottomleft">
        <?php tpl_actionlink('edit','<img src=',' class="img-icon">',tpl_basedir().'images/1382878283_pencil.png')?>
        <?php tpl_actionlink('history','<img src=',' class="img-icon">',tpl_basedir().'images/1382942644_old-versions.png')?>
        <?php tpl_actionlink('revert','<img src=',' class="img-icon">',tpl_basedir().'images/1382942444_refresh.png')?>
      </div>
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_actionlink('admin','<img src=',' class="img-icon">',tpl_basedir().'images/1382878277_config.png')?>
        <?php tpl_actionlink('media','<img src=',' class="img-icon">',tpl_basedir().'images/1382878437_photography.png')?>
        <?php tpl_actionlink('profile','<img src=',' class="img-icon">',tpl_basedir().'images/1382878672_user.png')?>
        <?php tpl_actionlink('index','<img src=',' class="img-icon">',tpl_basedir().'images/1382878831_sitemap.png')?>
        <?php tpl_actionlink('login','<img src=',' class="img-icon">',tpl_basedir().'images/1382878884_sign-out.png')?>
        <?php tpl_actionlink('top','<img src=',' class="img-icon">',tpl_basedir().'images/1382939787_upcoming-work.png')?>
      </div>
      <div class="clearer"></div>
    </div>

  </div>

  <?php tpl_license(false);?>

</div>
<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
