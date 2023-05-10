<?php
return [
    'contacts' => 'contacts/index', // страница с контактами
    'about' => 'about/index', // страница с контактами
    'help' => 'help/index', // страница с разделом справки
    'news/author/([a-z]+)' => 'news/author/$1', // страница просмотра новостей по автору
    'news/([a-z]+)' => 'news/category/$1', // страница просмотра новостей по категории
    'news/([0-9]+)' => 'news/view/$1', // news/45 -- news/view/45 - просмотр одной новости
    'news' => 'news/index', // страница с разделом новостей "NewsController.php" "actionIndex"
    'admin' => 'admin/index', // страница с разделом управления сайтом "AdminController.php" "actionIndex"
    'admin/([0-9]+)' => 'admin/user/$1', // страница с разделом управления сайтом для одного пользователя
    'subscribe' => 'subscribe/index', //механизм подписки
    '' => 'index/index' // главная страница

];