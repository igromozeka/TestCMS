<?php


class HelpController
{
    /**
     * метод отображения страницы справки
     */
    public function actionIndex(){
        // подключаем вид с отображением страницы с контактами
        require ROOT . '/views/hepl.php';

        return true;
    }

}