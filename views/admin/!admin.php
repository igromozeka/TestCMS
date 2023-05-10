<?php
// форма логина
if( isset( $_SESSION['user'] )){ // если есть переменные сессии
    echo '<h2>Привет, ' . $_SESSION['user'] . '</h2>';
    echo "<a href='user'>Перейти в профиль</a><br>";
    echo "<a href='exit'>Выйти</a>";
} else {
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $admin_login = 'admin';
        $admin_password = '123456';
        $login = htmlspecialchars(trim($_POST['login']));
        $password = htmlspecialchars(trim($_POST['password']));
        if($login === $admin_login){ // если логин введен верно
            if($password === $admin_password){ // если пароль введен верно
                // установить данные сессии
                $_SESSION['user'] = $login;
                // перенаправить пользователя
                header('Location: /admin');
            }else{ // если пароль введен не верно
                echo 'Неверный пароль';
                unset($_SESSION['user']);
                header('Location: /admin');
            }
        }else{ // если логин введен НЕ верно
            echo 'Неверный логин';
            unset($_SESSION['user']);
            header('Location: /admin');
        }
    }else{
        session_unset();
        ?>
        <form method="post">
            <input type="text" name="login" id="login" placeholder="login">
            <span  id="login-p"></span><br>
            <input type="password" name="password" id="password" placeholder="Password" autocomplete>
            <span  id="password-p"></span>
            <button type="submit" id="sbutton">Войти</button>
        </form>
        <?php
    }
}
