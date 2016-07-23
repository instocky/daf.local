<?php
// константы обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

// Используемый шаблон
$template = 'default';

// Пути к файлам шаблонов Smarty (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplatePostfix', ".tpl");

// Пути к файлам в вебпространстве
define ('TemplateWebPath', "/template/{$template}/");

//> Инициализация шаблона Smarty
// получаем полный путь к файлу Smarty.class.php
require('../librery/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/templates_c');
$smarty->setCacheDir('../tmp/cache');
$smarty->setConfigDir('../librery/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath); // Объявление переменной Smarty templateWebPath и передача значения константы TemplateWebPath
//<
