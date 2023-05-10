<?php
require ROOT . '/models/Subscribe.php';

class SubscribeController
{
    public function actionIndex(){
        // обрабатыввем подписку
        Subscribe::doSubscribe($_POST['email'],$_POST['fname'],$_POST['lname']);
        header("Location: /",TRUE,301);
        return true;
    }
}