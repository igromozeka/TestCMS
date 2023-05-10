<?php
// Общие настройки
require 'settings.php';
// Подключение файлов системы
require ROOT . '/components/Debug.php';
require ROOT . '/components/Router.php';
// Открываем сессию
require ROOT . '/components/Session.php';
// Подключение к БД
require ROOT . '/components/DBConnect.php';
// 4. Вызываем методы класса Router
$newRout = new Router();
//Debug::d($newRout);
$newRout->run();