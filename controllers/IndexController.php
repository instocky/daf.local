<?php
// Контроллер главной страницы

// Подключение модели(работа с MySQL запросами)
include_once '../models/ProductsModel.php';



// Формирование главной страницы
// объект $smarty - шаблонизатор
function indexAction($smarty) {
  $rsProducts = getAllPropetiesProducts();
  $summVk = getStatusRest($rsProducts);
  // d($statusVk);
  $smarty->assign('pageTitle', 'Главная страница сайта');
  $smarty->assign('summVk', $summVk);


  loadTemplate($smarty, 'index');
}
