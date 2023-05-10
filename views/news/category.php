<?php
// шаблон рубрики
require 'views/components/header.php';
?>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="row">
            <!-- Blog post-->
            <?php foreach ($newsList as $item): ?>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <a href="/news/<?= $item['news_id'] ?>"><img class="card-img-top" src="<?= $item['news_image'] ?>" alt="<?= $item['title'] ?>" /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?= $item['add_date'] ?></div>
                        <h2 class="card-title h4"><?= $item['title'] ?></h2>
                        <p class="card-text card-text-font"><?= $item['short_text'] ?></p>
                        <a class="btn btn-primary" href="/news/<?= $item['news_id'] ?>">Подробнее →</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

где дырв
<?php
require 'views/components/footer.php';

