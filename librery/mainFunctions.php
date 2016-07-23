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
