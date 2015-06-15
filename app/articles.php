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
          <div class="l-content__articles articles small-20 medium-12 large-13 left">
            <p>Приветствую Вас, уважаемый посетитель моего блога по предоставлению ответов на множество вопросов, которые тревожат людей или не дают им возможности раскрыть свои таланты. В этом разделе собраны все статьи написаны мною с момента основания блога. Надеюсь, Вы найдете полезные ответы на свои вопросы, а так же, откроете новые возможности, о которых раньше даже и не догадывались!</p>
            <h3 class="articles--header">Публикации:</h3>
            <ul>
              <li class="articles--cat"><i class="icon-blog"></i><a href="">Блоговедение</a>
                <ul class="articles--cat--list">
                  <li><a href="">7 ошибок блоггера</a></li>
                  <li><a href="">Дачные хитрости</a></li>
                  <li><a href="">Что делать , чтоб рассада томатов не вытягивалась?</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-home"></i><a href="">Дом</a>
                <ul class="articles--cat--list">
                  <li><a href="">Разбился градусник? Как собрать ртуть</a></li>
                  <li><a href="">Удаление пыли без химии</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-food"></i><a href="">Еда</a>
                <ul class="articles--cat--list">
                  <li><a href="">Какие продукты нельзя есть натощак - ваш идеальный завтрак</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-money"></i><a href="">Заработок</a>
                <ul class="articles--cat--list">
                  <li><a href="">Блинный Дом - вечная игра с выводом денег</a></li>
                  <li><a href="">Заработок без вложений или как заработать на своем браузере?</a></li>
                  <li><a href="">Как заработать в играх с выводом денег. Вся правда</a></li>
                  <li><a href="">Обзор нововведений в проекте Блинный Дом - Мельница</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-life"></i><a href="">Из жизни</a>
                <ul class="articles--cat--list">
                  <li><a href="">Из медика в блоггеры</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-internet"></i><a href="">Интернет</a>
                <ul class="articles--cat--list">
                  <li><a href="">Яндекс Деньги. Или как пройти идентификацию Яндекс кошелька</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-news"></i><a href="">Новости</a>
                <ul class="articles--cat--list">
                  <li><a href="">Задачи на Май. План действий</a></li>
                  <li><a href="">Мое участие в конкурcе на лучший блог по мнению Isif-life.ru</a></li>
                  <li><a href="">Первая запись на блоге</a></li>
                  <li><a href="">С праздником Дня Победы</a></li>
                  <li><a href="">Старт денежных конкурсов на блоге tips-life.ru</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-good"></i><a href="">Полезные советы</a>
                <ul class="articles--cat--list">
                  <li><a href="">Загрузочная флешка? Не проблема</a></li>
                  <li><a href="">Как быстро сделать снимок экрана?</a></li>
                  <li><a href="">Как начинать работу с понедельника</a></li>
                  <li><a href="">Как удалить жвачку с одежды</a></li>
                </ul>
              </li>
              <li class="articles--cat"><i class="icon-book"></i><a href="">Саморазвитие</a>
                <ul class="articles--cat--list">
                  <li><a href="">Откладываешь на потом - ты теряешь жизнь</a></li>
                </ul>
              </li>
            </ul>
            <h4 class="articles--header">Страницы</h4>
            <ul class="articles--sitemap">
              <li><a href="">Интересное на блоге tips-life.ru</a></li>
              <li><a href="">Обратная связь</a></li>
              <li><a href="">Конкурсы</a></li>
              <li><a href="">Реклама</a></li>
              <li><a href="">Об авторе</a></li>
              <li><a href="">Все статьи блога</a></li>
            </ul>
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