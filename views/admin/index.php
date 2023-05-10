<?php
require 'views/components/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-7 mb-5">
            <form action="#" class="p-5 bg-white" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Логин</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                    <small id="emailHelp" class="form-text text-muted">Мы никогда не передаем ваши email адреса кому-нибудь другому.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control mb-3" id="exampleInputPassword1" placeholder="Пароль от 8-ми символов">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
           </form>
        </div>
    </div>
</div>
<?php
require 'views/components/footer.php';
?>
