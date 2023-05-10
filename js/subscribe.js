if (undefined ===  getCookie('Subscribe')){
    setCookie('Subscribe', 'ok', {secure: true, 'max-age': 604800});
    window.addEventListener('load', function () {
        // элемент, содержащий контент модального окна (например, имеющий id="modal")
        // const elemModal = document.querySelector('#subscribeModal');
        // активируем элемент в качестве модального окна с параметрами по умолчанию
        // const modal = new bootstrap.Modal(elemModal);
        // откроем модальное окно
        // modal.show();
        new bootstrap.Modal(document.querySelector('#subscribeModal')).show();
    });
}
//deleteCookie('Subscribe');