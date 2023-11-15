<html>
    <head>
        <title>Добавление товара</title>
        <link rel="stylesheet" type="text/css" href="./style-add.css">
    </head>
    <body>
        <form action="server.php" method="GET">
            <table align="center">
                <tr>
                    <td colspan="2" class="mainText">Добавление нового товара</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Выберите категорию товара : </td>
                    <td>
                        <div>
                            <input type="radio" name="categoryProduct" value="Мужская одежда" checked>Мужская одежда<br>
                            <input type="radio" name="categoryProduct" value="Женская одежда">Женская одежда<br>
                            <input type="radio" name="categoryProduct" value="Детская одежда">Детская одежда<br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Выберите подкатегорию товара : </td>
                    <td>
                        <select name="subCategoryProduct">
                            <option value="Футболки">Футболки</option>
                            <option value="Джинсы">Джинсы</option>
                            <option value="Рубашки">Рубашки</option>
                            <option value="Платья">Платья</option>
                            <option value="Блузки">Блузки</option>
                            <option value="Юбки">Юбки</option>
                            <option value="Куртки">Куртки</option>
                            <option value="Шорты">Шорты</option>
                            <option value="Комбинезоны">Комбинезоны</option>
                    </td>
                </tr>
                <tr>
                    <td>Введите название товара : </td>
                    <td>
                        <input name="nameProduct" type="text" placeholder="Название..." required>
                    </td>
                </tr>
                <tr>
                    <td>Укажите цену : </td>
                    <td>
                        <input name="priceProduct" type="number" placeholder="1000..." min="0" max="10000" required>
                    </td>
                </tr>
                <tr>
                    <td>Укажите изображение : </td>
                    <td>
                        <input name="imageProduct" type="file" required>
                    </td>
                </tr>
                <tr>
                    <td>Укажите описание товара : </td>
                    <td>
                        <textarea name="descriptionProduct" cols="24" rows="4" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="buttonCenter">
                            <input type="submit" class="submitText"></input>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>