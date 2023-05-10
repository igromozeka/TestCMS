<?php
//Новости одна страиниуца
require 'views/components/header.php';
?>

<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="/news/<?= $news_item['news_id'] ?>"><img class="card-img-top" src="<?= $news_item['news_image'] ?>" alt="<?= $news_item['title'] ?>" /></a>
                <div class="card-body">
                    <div class="small text-muted"><?= $news_item['add_date'] ?></div>
                    <h2 class="card-title"><?= $news_item['title'] ?></h2>
                    <p class="card-text"><?= $news_item['text'] ?></p>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Автор: <strong><?= $news_item['fname'].' '.$news_item['lname']?></strong></div>
                <div class="card-body"><em><?= $news_item['biography'] ?></em></div>
            </div>
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Поиск</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Что искать…" aria-label="" aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Искать</button>
                    </div>
                </div>
            </div>
            <!-- Tegs widget-->
            <div class="card mb-4">
                <div class="card-header">Теги</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Мода</a></li>
                                <li><a href="#!">Красота</a></li>
                                <li><a href="#!">Путешествия</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Культура</a></li>
                                <li><a href="#!">Выставка</a></li>
                                <li><a href="#!">Жизнь</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Подписка</div>
                <div class="card-body"><!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subscribeModal">Подписаться</button></div>
            </div>

        </div>
    </div>
</div>
<?php
require 'views/components/footer.php';
?>
