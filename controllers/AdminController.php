<?php


class AdminController
{
    public function actionIndex(){
        // подключаем вид с отображением страницы входа
        require ROOT . '/views/admin/index.php';

        return true;
    }

}