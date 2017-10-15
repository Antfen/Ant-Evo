
<div class="l-page">
  <header class="l-header" role="banner">
    <div class="l-branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <h1 class="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>

  </header>

  <div class="l-main">

    <!-- Parallax boxes -->
    <div class="parallax-box">
      <div class="parallax-logo"><!-- <h1><img src="./sites/all/themes/ant_omega/images/ant-logo.png" title="Anthony Fenwick Artist" alt="Anthony Fenwick Artist"></h1> --></div>
      <div class="parallax-logo-shadow"></div>
    </div>

    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>

<?php

  drupal_add_js(drupal_get_path('theme', 'ant_omega') . '/js/functions.js', array(
    'weight' => 9000, // Something higher than the weight of existing items
    'scope' => 'footer', // Make sure the script tag is rendered in the footer of the page, not the header
    'type' => 'file',
    'group' => JS_THEME,

  ));

  drupal_add_js(drupal_get_path('theme', 'ant_omega') . '/js/parallax.js', array(
    'weight' => 10000, // Something higher than the weight of existing items
    'scope' => 'footer', // Make sure the script tag is rendered in the footer of the page, not the header
    'type' => 'file',
    'group' => JS_THEME,

  ));


