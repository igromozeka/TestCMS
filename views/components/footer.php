<?php

?>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">&copy; <?= sitename ?> 2023</p></div>
</footer>





<!-- Modal Форма подписки-->
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Подписка</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="subscribe" method="post">
                    <input type="text" name="fname" id="fname" placeholder="Имя">
                    <span></span><br>
                    <input type="text" name="lname" id="lname" placeholder="Фамилия">
                    <span></span><br>
                    <input type="email" name="email" id="email" placeholder="Адрес email">
                    <span></span><br>
                    <button type="submit" id="sbutton">Подписаться</button>
                    <br><label for="sbutton">Нажимая на кнопку «Подписаться», я подтверждаю данные, хочу получать новости и специальные предложения и ознакомился с <a>Условиями предоставления услуг</a></label>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/cookie.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/subscribe.js"></script>
</body>
</html>
<!--<?php
//Debug::d($_SERVER);
?>-->


