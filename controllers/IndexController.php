<?php
require ROOT . '/models/News.php';

class IndexController
{
    public function actionIndex(){
        // подключаем вид с отображением главной страницы

        $news_index = News::getNewsIndex();
        require ROOT . '/views/index.php';
        return true;
    }
}