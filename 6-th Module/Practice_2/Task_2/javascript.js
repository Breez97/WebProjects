window.onload = function () {
    let array = [];
    let selects = document.querySelectorAll('div.text-container');

    for(let i = 0; i < selects.length; i++) {
        array.push(selects[i].textContent);
    }

    console.log(array);
}