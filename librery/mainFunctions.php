<?php
// Файл с основными функциями

// Формирование запрашиваемой строаницы
// Исполняется нужный контроллер с заданной функцией
function loadPage($smarty, $controllerName, $actionName = 'index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

// Загрузка шаблона
// $smarty - объект
// $templateName - название файла шаблона
function loadTemplate($smarty, $templateName) {
  $smarty->display($templateName . TemplatePostfix);
}

// Функция отладки. Останавливает работу и возвращает значение переменной $value
function d($value = null, $die = 1) {
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';

    if($die) die;
}

// Функция получения суммы остатка по товару (столбец status)
function getStatusRest($rs) {
  foreach ($rs as $key => $value) {
  $summVk += $value['status'];
  }
  return ($summVk);
}

// // Получение интервалов по текущей дате
// function getInterval($rs) {
//    $dteStart = new DateTime($rs[0]['date']);
//    $dteEnd   = new DateTime("now");
//
//    $dteDiff  = $dteStart->diff($dteEnd);
//    echo $dteDiff->format("%D");
//    if(($dteDiff->format("%D")) > 30) {
//      echo "string";
//    }
//
// }

// Получение остатков по текущей дате
// для интервалов 7 и 15 дней
function getRestInterval($rs) {
   foreach ($rs as $key => $value) {
   $date = $value['date'];
   $dteStart = new DateTime($date);
   $dteEnd   = new DateTime("now");

   $dteDiff  = $dteStart->diff($dteEnd);
   $dteDiff->format("%D");
   if(($dteDiff->format("%D")) > 7) {
     if(($dteDiff->format("%D")) > 15) {
       $vk7 += 1;
       $vk15 += 1;
     }else{
    $vk7 += 1;
   }
 }
 }
 $arrayVk[vk7] = $vk7;
 $arrayVk[vk15] = $vk15;
 
return ($arrayVk);
}
