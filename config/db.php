<?php
 // Инициализация подключения к БД
 $dblocation = "127.0.0.1";
$dbname = "daf.local";
$dbuser = "root";
$dbpass = "";

// Соединяемся с БД (в общем)
$db = mysql_connect($dblocation, $dbuser, $dbpass);

// Проверка на ошибки подключения
if(! $db) {
  echo "Ошибка доступа к БД";
  exit();
}

// Кодировка по умолчанию utf8 для текущего соединения
mysql_set_charset('utf8');

// Подключение к конкретной БД
if(! mysql_select_db($dbname, $db)) {
  echo "Ошибка доступа к БД: {$dbname}";
  exit();
}
