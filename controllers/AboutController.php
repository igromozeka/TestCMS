<?php


class AboutController
{
    /**
     * метод отображения страницы о проекте
     */
    public function actionIndex(){
        // подключаем вид с отображением страницы с контактами
        require ROOT . '/views/about.php';

        return true;
    }
}