function DisplayNone(){
 document.getElementById('SubscribeA').style.visibility = 'hidden';
}

if (!('ok' === getCookie('Subscribe'))){
    //вывод фформы
    setCookie('Subscribe', 'ok', {secure: true, 'max-age': 604800});
    document.getElementById('SubscribeA').innerHTML = '<form action="subscribe" method="post">' +
        '<h1>Подписка</h1>' +
        '<input type="text" name="fname" id="fname" placeholder="Имя">' +
        '<span></span><br>' +
        '<input type="text" name="lname" id="lname" placeholder="Фамилия">' +
        '<span></span><br>' +
        '<input type="email" name="email" id="email" placeholder="Адрес email">' +
        '<span></span><br>' +
        // '<input type="checkbox" id="newsletter-ok" name="newsletter-ok" class="newsletter-ok" checked="">' +
        // '<label htmlFor="newsletter-ok">Я подтверждаю данные, хочу получать новости и специальные предложения и ознакомился с <span>Условиями предоставления услуг</span></label>' +
        // '<span></span><br>' +
        '<button type="submit" id="sbutton" disabled>Подписаться</button>' +
        '<br><label for="sbutton">Нажимая на кнопку «Подписаться», я подтверждаю данные, хочу получать новости и специальные предложения и ознакомился с <a>Условиями предоставления услуг</a></label>' +
        '<br><input type="button" value="Закрыть" onclick="return DisplayNone();">' +
        '</form>' +
        '';
    document.getElementById('SubscribeA').style.visibility = 'visible';

    let fname = document.getElementById('fname');
    let lname = document.getElementById('lname');
    let email = document.getElementById('email');
    let sbutton = document.getElementById('sbutton');

    function EmailCheck(e_mail){
        if(e_mail.length <= 2){
            email.setAttribute ('class', 'error');
            return false;
        }
        if(!/^[\w\-\.]+\@[\w-\.]+\.[\w]{2,5}$/.test(e_mail)){
            email.setAttribute ('class', 'error');
            return false;
        }
        email.setAttribute ('class', 'error stop');
        return true;
    }
// Окончания ввода
    fname.addEventListener('blur', function(){
        if(fname.value.length <= 1){
            fname.setAttribute ('class', 'error');
            fnamep.innerHTML = 'Поле не может быть пустым и должно быть больше одного символа';
        } else{
            fnamep.innerHTML = '';
        }
    }, true);

    lname.addEventListener('blur', function(){
        if(lname.value.length <= 1){
            lname.setAttribute ('class', 'error');
            lnamep.innerHTML = 'Поле не может быть пустым и должно быть больше одного символа';
        }else{
            lnamep.innerHTML = '';
        }
    }, true);

    email.addEventListener('blur', function(){EmailCheck(email.value)}, true);

// focus
    fname.addEventListener('focus', function(){fnamep.innerHTML = ''; fname.setAttribute ('class', 'error stop');}, true);

    lname.addEventListener('focus', function(){lnamep.innerHTML = ''; lname.setAttribute ('class', 'error stop');}, true);

    email.addEventListener('focus', function(){emailp.innerHTML = ''; email.setAttribute ('class', 'error stop');}, true);

// отправка
    sbutton.addEventListener('submit', function(){if(fname.value.length <= 1 || lname.value.length <= 1) alert('Вы неправильно заполнили форму')}, false);
}
// deleteCookie('Subscribe');