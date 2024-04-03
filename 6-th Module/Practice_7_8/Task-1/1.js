window.onload = function() {
    let btn = document.querySelector('.btn');

    btn.addEventListener('click', function() {
        let fio = document.querySelector('.input_fio').value;
        let number = document.querySelector('.input_phone').value;
        let email = document.querySelector('.input_email').value;
        let review = document.querySelector('.input_review').value;
        
        // Формирование строки вручную
        let str = `fio=${encodeURIComponent(fio)}&number=${encodeURIComponent(number)}&email=${encodeURIComponent(email)}&review=${encodeURIComponent(review)}`;
        
        // Формирование строки автоматически, если данные вытаскиваются из формы
        // let form_id = document.querySelector('#f');
        // let info = new FormData(form_id);
        // let str = "";
        // for(let [key, value] of info) {
        //     if(str == '') str += `${key}=${encodeURIComponent(value)}`;
        //     else str += `&${key}=${encodeURIComponent(value)}`;
        // }

        let request = new XMLHttpRequest();
        request.open('POST', '1.php');
        
        request.setRequestHeader("Content-type", 'application/x-www-form-urlencoded', "charset=utf8");

        request.onreadystatechange = function() {
            if(request.readyState == 4) {
                if(request.status == 200) {
                    document.querySelector('.result').innerHTML = request.responseText;
                }
            }
        };

        request.send(str);
    });
}
