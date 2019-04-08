<!DOCTYPE html>
<html <?php language_attributes( $doctype ) ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('name'); ?>"/>
  <meta name="contact" content="<?php bloginfo('admin_email'); ?>" />
  <meta name="copyright" content="" />
  <meta name="robots" content="index, follow" />
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/assets/img/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/img/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/icon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/img/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/img/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?> ">
  <?php wp_head(); ?>
</head>
<body>
  <section id="leftSide">
    <figure class="myLogo">
      <a href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="">
      </a>
    </figure>
    <nav id="motherMenu">
      <?php wp_nav_menu( array( 'theme_location' => 'menu1' ) ); ?>
    </nav>
  </section>
  <section id="rightSide">
    <!-- #Header -->
    <header id="rightHeader">
      <!-- #Menu -->
      <span id="menuOpen" class="pull-left">
        <i class="fa fa-bars"></i>
      </span>
      <!-- #Arama Butonu-->
      <span id="search" class="pull-left">
        <i class="fa fa-search"></i>
      </span>
      <!-- #Arama Kapsam -->
      <section id="searchInner">
        <!-- #Arama Kapat -->
        <span id="closesearchInner">
          <i class="fa fa-close"></i>
        </span>
        <!-- #Arama Alanı -->
        <div id="searchBoxInner">
          <form method="get" id="searchform" action="<?php bloginfo('url'); ?>" >
            <div id="searchBox">
              <input placeholder="Ne Aramıştınız!" type="text" value="" name="s" id="s" required>
              <div id="searchBtn">
                <input type="submit" name="" value=" ">
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- #Logo -->
      <figure class="myLogo">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="">
        </a>
      </figure>
      <div class="clearfix"></div>
    </header>
    <!-- #GlobalInner -->
    <section id="globalInner">
      <?php get_sidebar(); ?>
