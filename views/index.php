<?php
// шаблон главной страницы сайта
require 'views/components/header.php';
?>
    <div class="container">
        <div class="row">
            <!-- Записи 5 штук -->
            <div class="col-lg-8">
                <!-- Новая-->
                <div class="card mb-4">
                    <a href="/news/<?= $news_index[0]['news_id'] ?>"><img class="card-img-top" src="<?= $news_index[0]['news_image'] ?>" alt="<?= $news_index[0]['title'] ?>" /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?= $news_index[0]['add_date'] ?></div>
                        <h2 class="card-title"><?= $news_index[0]['title'] ?></h2>
                        <p class="card-text card-text-font"><?= $news_index[0]['short_text'] ?></p>
                        <a class="btn btn-primary" href="/news/<?= $news_index[0]['news_id'] ?>">Далее →</a>
                    </div>
                </div>
                <!-- Еще 4-->
                <div class="row">
                <?php
                array_shift($news_index);
                foreach ($news_index as $item):?>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <a href="/news/<?= $item['news_id'] ?>"><img class="card-img-top" src="<?= $item['news_image'] ?>" alt="<?= $item['title'] ?>" /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $item['add_date'] ?></div>
                                <h2 class="card-title h4"><?= $item['title'] ?></h2>
                                <p class="card-text card-text-font"><?= $item['short_text'] ?></p>
                                <a class="btn btn-primary" href="/news/<?= $item['news_id'] ?>">Далее →</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
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