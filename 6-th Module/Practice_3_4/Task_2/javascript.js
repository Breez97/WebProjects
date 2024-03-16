window.onload = function() {
    let allCards = document.querySelectorAll('.card-container');
    
    let objects = [
        {
            'title': 'Куртка',
            'description': 'Теплая, модная куртка с капюшоном для стильного и уютного образа.',
            'price': 3400,
            'status' : false,
        },
        {
            'title': 'Футболка',
            'description': 'Удобная, стильная футболка с красочным принтом для яркого летнего образа.',
            'price': 1200,
            'status' : true,
        },
        {
            'title': 'Кроссовки',
            'description': 'Легкие, комфортные кроссовки с амортизацией для активного образа жизни. ',
            'price': 2100,
            'status' : true,
        },
        {
            'title': 'Кепка',
            'description': 'Стильная кепка с регулируемой посадкой и дышащим материалом.',
            'price': 700,
            'status' : false,
        },
    ];

    for(let i = 0; i < allCards.length; i++) {
        let button = allCards[i].querySelector('button');
        button.setAttribute('data-index', i);
        button.addEventListener('click', AddFunction);
    }

    function AddFunction() {
        let index  = this.getAttribute('data-index');
        let parent = this.parentElement;

        let title = parent.querySelector('#title');
        let description = parent.querySelector('#description');
        let price = parent.querySelector('#price');
        let status = parent.querySelector('#status');

        title.textContent += objects[index]['title'];
        description.textContent += objects[index]['description'];
        price.textContent += objects[index]['price'];
        let statusString = objects[index]['status'] ? "есть в наличии" : "отсутствует";
        status.textContent += statusString;
        
        this.disabled = true;
        this.removeEventListener('click', AddFunction);
    }
}