<?php
// Контроллер главной страницы

function testAction()
{
  echo "1222string";
}

// Формирование главной страницы
// объект $smarty - шаблонизатор
function indexAction($smarty) {
  $smarty->assign('pageTitle', 'Главная страница сайта');

  loadTemplate($smarty, 'index');
}
