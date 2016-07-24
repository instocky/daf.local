<?php
// Контроллер главной страницы

// Подключение модели(работа с MySQL запросами)
include_once '../models/ProductsModel.php';



// Формирование главной страницы
// объект $smarty - шаблонизатор
function indexAction($smarty) {
  $rsProducts = getAllPropetiesProducts();
  $summVk = getStatusRest($rsProducts);

  $time = getRestInterval($rsProducts);

  $smarty->assign('pageTitle', 'Главная страница сайта');
  $smarty->assign('summVk', $summVk);
  $smarty->assign('vk7', $time[vk7]);
  $smarty->assign('vk15', $time[vk15]);



  loadTemplate($smarty, 'index');
}
