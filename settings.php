<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__,1)); // определяем константу с корнем проекта
const dbname = 'diploma'; // определяем название БД
const dbhost = 'localhost'; // определяем DNS адрес ДБ
const dblogin = 'root'; // определяем login
const dbpassword = ''; // определяем пароль
const sitename = 'Залатывание дыр или Fullstack Новости c Model-View-Controller'; // название сайта
const pathlogo = '/theme/logo.png';// файл с лого
/** меню */
$nav = [
    '' => 'Главная',
    'news' => 'Новости',
    'about' => 'Автор',
    'help' => 'Справка',
    'contacts' => 'Контакты',
    'admin' => 'Войти'
];
/** расширение */
$nav_desc = [
    '' => 'Главная! Залатываем дыры  по принципу MVC',
    'news' => 'Список всех новостей',
    'about' => 'Подробнее об автре проекта',
    'help' => 'Справка о сайте',
    'contacts' => 'Напишите нам скорее',
    'admin' => 'Добро пожаловать в управление сайтом'
];
/** текуший путь */
function path(){
    if(!empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'], '/');// удаляем символы "/" с краев строки
    }
    return null;
}
/** На главной?*/
function is_front_page(){
    if('' === path()) return true;
    return null;
}