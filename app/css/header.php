<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Блог Максима Козлова</title>
    <meta charset="utf-8"/><!--[if lt IE 9]>
     <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
     <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
     <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script async src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <?php wp_head() ?>
  </head>
  <body>
    <a class="label" href="/">
      <h1 class="label--heading">Блог Максима Козлова</h1>
      <h2 class="label--decription">Полезные советы на каждый день!</h2></a>
    <div class="page_wrapper">
      <header class="l-header row">
  <div class="interest">
    <h3 class="interest--header">Это интересно!</h3>
    <ul class="interest--list">
      <li class="interest--list--item"><a href="post.php">конкурсы</a></li>
      <li class="interest--list--item"><a href="post.php">видеокурсы</a></li>
      <li class="interest--list--item"><a href="post.php">кроссворды</a></li>
      <li class="interest--list--item"><a href="post.php">акции</a></li>
    </ul>
  </div>
        <?php 
          wp_nav_menu( 
            array( 
              'theme_location' => 'header-menu-top',
              'items_wrap'      => '<ul class="l-header--menu">%3$s</ul>',
            ) 
          ); 
        ?>
      </header>