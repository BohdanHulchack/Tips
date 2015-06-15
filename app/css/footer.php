      <footer class="l-footer row">
      <?php 
          wp_nav_menu( 
            array( 
              'theme_location' => 'header-menu-top',
              'items_wrap'     => '<ul class="l-footer--menu">%3$s</ul>',
            ) 
          ); 
        ?>
        <div class="l-footer--copyright left">
          <?= date("Y"); ?><a href="<?php bloginfo('url') ?>">tips-life.ru <br></a><?php bloginfo() ?></div>
          <div class="l-footer--stats right">
          <a href="http://www.liveinternet.ru/?tips-life.ru" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/img/liveinternet.png" alt=""/>
          </a>
          </div>
      </footer>
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css"/>
      
      <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic,100&amp;amp;ubset=latin,cyrillic" rel="stylesheet" type="text/css"/>
    </div>
    <?php wp_footer() ?>
  </body>
</html>