<?php
// Контроллер главной страницы

// Подключение модели(работа с MySQL запросами)
include_once '../models/ProductsModel.php';

function testAction()
{
  echo "1222string";
}

// Формирование главной страницы
// объект $smarty - шаблонизатор
function indexAction($smarty) {
  $rsProducts = getAllPropetiesProducts();
  // d($rsProducts);
  $smarty->assign('pageTitle', 'Главная страница сайта');

  loadTemplate($smarty, 'index');
}
