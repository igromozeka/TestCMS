<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= sitename ?>" />
    <meta name="author" content="Илья Тихонов" />
    <title><?php
        if(array_key_exists(path(), $GLOBALS['nav'])){
            echo $GLOBALS['nav'][path()] . ': :' . sitename;
        }else{
            echo 'Новости'. ': :' . sitename;
        }
        ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/theme/style/style.css">
    <link rel="icon" type="image/x-icon" href="/theme/favicon.ico" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <?php require 'views/components/logo.php';?>
        <?php if (is_front_page()) echo '<p class="navbar-brand">&nbsp;'.sitename.'</p>';
            else echo '<a class="navbar-brand" href="/">&nbsp;'.sitename.'</a>'; ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php require 'views/components/menu.php'; ?>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<!--<header class="py-5 bg-light border-bottom mb-4 bg-image">-->
<header class="py-5 bg-light border-bottom bg-image">
    <div class="container">
        <div class="text-center my-5">
            <?php if(isset($newsList[0]['translation'])):?>
            <?php else: ?>
            <h1 class="fw-bolder"><?php
                if(array_key_exists(path(), $GLOBALS['nav'])){
                    echo $GLOBALS['nav'][path()];
                }else{
                    echo 'Новости';
                }
                ?>
                <?php endif; ?></h1>
            <p class="lead mb-0">
                <?php
                if(array_key_exists(path(), $GLOBALS['nav_desc'])){
                    echo $GLOBALS['nav_desc'][path()];
                }else{
                    echo 'Список новостей';
                }
                ?>
            </p>
        </div>
    </div>
</header>
<!--<div class="container">-->
    <ul class="nav justify-content-center border-bottom bg-dark mb-4">
<!--        <li class="nav-item">-->
<!--            <a class="nav-link active" href="#">Active</a>-->
<!--        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="/news/collections">Коллекции</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news/market">Маркет</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news/fashionweek">Неделя моды</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news/food">Еда</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news/afisha">Афиша</a>
        </li>
<!--        <li class="nav-item">-->
<!--            <a class="nav-link disabled" href="#">Disabled</a>-->
<!--        </li>-->
    </ul>
<!--</div>-->