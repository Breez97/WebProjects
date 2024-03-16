#  Веб-программирование

## 6-й семестр

### Содержание:
 - [**Практика 1 (20.02.2024)**](#практика-1)
 - [**Практика 2 (20.02.2024)**](#практика-2)
 - [**Практика 3-4 (05.05.2024)**](#практика-3-4)

### Практика 1:

#### Задание 1: <a href="https://github.com/Breez97/WebProjects/tree/main/6-th%20Module/Practice_1">Код</a>

Создать выпадающее модальное окно с сообщением «Введите число»,
результат сохранить в переменную. Далее создать второе аналогичное окно,
результат сохраняется в переменную.
Далее необходимо вывести результат в виде строки 2 способами:

`alert(Результат суммы a={подставить число} и b={подставить число}
=> {подставить число a} + {подставить число b} = {a+b})`

Аналогичный ответ вывести в консоль браузера через `console.log()`.

---

### Практика 2:

#### Задание 1: <a href="https://github.com/Breez97/WebProjects/tree/main/6-th%20Module/Practice_2/Task_1">Код</a>

На странице создать `div` элемент, внутри которого добавлены элементы:
`h1` и `div(с id=elem2)`. Также на странице (за пределами div элемента),
добавлены: поле формы для ввода текста и кнопка.

Написать `JavaScript код`, который при нажатии на кнопку, вызывает
функцию, которая считывает значение из текстового поля и добавляет его в
`div` элемент с `id=elem2`.
После добавления текста в `div` элемент, поле формы очищается.

#### Задание 2: <a href="https://github.com/Breez97/WebProjects/tree/main/6-th%20Module/Practice_2/Task_2">Код</a>

Создать на странице несколько `div` элементов. Поместить в них различный текст.

С помощью `JavaScript кода` собрать весь текст из элементов `div` в массив и вывести через `console.log()`.

#### Домашнее задание: <a href="https://github.com/Breez97/WebProjects/tree/main/6-th%20Module/Hometasks/Hometask_Practice_1_2">Код</a>

Есть несколько `div` элементов (3 штуки), каждый из которых содержит текст с тегом `p`.
Под `div` расположена кнопка `input type="color"`.

Добавить 2 события на каждый элемент `div`:

- при наведении курсора на элемент (`mouseover`), его цвет (`background-color`) становится тем цветом, который сейчас выбран в `input type="color"`
- когда курсор уходит с элемента (`mouseout`), его цвет становится красным

Изначально `div` элементы не имеют заливки (белого цвета).

---

### Практика 3-4:

#### Задание 1: <a href="">Код</a>

На странице необходимо реализовать 3 `div` элемента, в каждый из них
добавить: `div` элемент (пустой), поле для ввода текста и кнопку. Минимальная
настройка `css` стилей: ширина, высота, отступы – внушение и внутренние, цвет
фона.

Поле для ввода текста и кнопка на момент загрузки страницы скрыты.

Необходимо реализовать следующий функционал:

- При двойном клике по элементу `div` (родительскому – первому
элементу), в блоке отображается ранее скрытое поле для ввода текста и кнопка
добавить.

- При клике на кнопку добавить, текст из поля для ввода текста
переносится в дочерний элемент `div` (второй). Поле для ввода текста и кнопка
удаляют. Событие двойного клика удаляется с родительского элемента.

- Назначать обработчик событие только через метод `addEventListener`.
Назначать обработчик событие только через метод `addEventListener`.
Необходимо реализовать одну функцию (обработчик), которая будет работать
для всех карточек.

![](./misc/Practice_3_4/Practice_3_Task_1_1.png)
![](./misc/Practice_3_4/Practice_3_Task_1_2.png)

#### Задание 2: <a href="">Код</a>
Необходимо реализовать 4 `JS` объекта, которые будут хранить
информацию про товары. Структура объекта:
```
Obj = {
	title: 'название товара',
	desc: 'описание товара',
	price: 'цена',
	status: true||false, // статус товара, в наличие/отсутствует
}
```

На странице представлены 4 пустые карточки для товаров

Первому объекту соответствует первая карточка, второму – вторая, третьему – третья, четвертому – четвертая.

Необходимо связать карточку (шаблон `html`) и объект хранящий в себе информацию про товар.

Каждая карточка содержит в себе элементы `div` для указания в них следующей информации: названия товара, описание, цена + статус наличия товара, кнопка – заполнить информацию. Минимальная настройка `css` стилей: ширина, высота, отступы – внушение и внутренние, цвет фона.

На кнопку `«Заполнить информацию»`, добавлено событие одного клика, которое при нажатии на элемент обращается к объекту, который относится к конкретной карточке товара и потягивает из неё всю информацию про товар. Вместо значения: `true`, `false` – необходимо указать строковое значение: есть в наличии / отсутствует.

После того как данные подставляются в карточку, кнопка становится неактивна и с неё удаляется обработчик события при клике.

Назначать обработчик событие только через метод `addEventListener`. Необходимо реализовать одну функцию (обработчик), которая будет работать для всех карточек.

![](./misc/Practice_3_4/Practice_3_Task_2.png)

---