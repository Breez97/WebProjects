window.onload = function() {
    let allDiv = document.querySelectorAll('div.content-container');

    for(let i = 0; i < allDiv.length; i++) {
        AddEvents(allDiv[i]);
    }

    function AddEvents(element) {
        element.addEventListener('dblclick', Fill);
    }

    function Fill() {
        let inputText = this.querySelector('.inputText');
        let button = this.querySelector('.addButton');
        let divText = this.querySelector('.text-container');
        inputText.style.display = 'block';
        button.style.display = 'block';

        button.addEventListener('click', function() {
            divText.textContent = inputText.value;
            button.remove();
            inputText.remove();
            divText.parentNode.removeEventListener('dblclick', Fill);
        });
    }
}