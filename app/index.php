<!DOCTYPE html>
<html lang="ru">
  <?php
   include 'functions.php';
   head();
  ?>
  <body><?php label(); ?>
    <div class="page_wrapper"><?php page_header(); ?>
      <main><?php adv(); ?>
        <div class="row">
          <div class="l-content index articles small-20 medium-12 large-13 left">
            <?php article(); ?>
            <?php article(); ?>
            <?php pagination(); ?>
          </div>
          <div class="l-sidebar small-20 medium-7 large-6 columns right">
            <?php searchbar(); ?>
            <?php subscribe(); ?>
            <?php tags(); ?>
            <?php top_authors(); ?>
            <?php youtube_subscribe(); ?>
          </div>
        </div>
      </main><?php footer(); ?>
    </div>
    <div class="footer_bg"></div>
  </body>
</html>