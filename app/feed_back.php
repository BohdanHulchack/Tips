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
          <div class="l-content feed-back small-20 medium-12 large-13 left">
            <h2 class="feed-back--heading">Дорогие друзья, если Вы хотите мне написать, то воспользуйтесь формой обратной связи, которую видите ниже:</h2>
            <form>
              <input type="text" placeholder="Введите Ваше имя" class="feed-back--input mb20">
              <input type="email" placeholder="Введите свой e-mail" class="feed-back--input mb20">
              <input type="text" placeholder="Тема" class="feed-back--input--theme mb20">
              <textarea placeholder="Текст" class="feed-back--text mb20"></textarea>
              <input type="file" id="file" class="feed-back--file left">
              <button class="button right">Отправить</button>
            </form>
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
  </body>
</html>