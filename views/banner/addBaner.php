<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 14.12.2016
 * Time: 12:01
 */
use  app\widgets\LeftMenu\LeftMenu;
?>
<?php
echo LeftMenu::widget([
]);
?>

<div id='content'>
<table class="table table-striped">
    <tr>
        <td>Описание</td>
        <td><input type="text" name="opis" id="opis"></td>
    </tr>
    <tr>
        <td>Ссылка по клику</td>
        <td><input type="text" name="silka" id="silka"></td>
    </tr>
    <tr>
        <td>Вышота</td>
        <td><input type="number" name="hei" id="hei"></td>
    </tr>
    <tr>
        <td>Ширина</td>
        <td><input type="number" name="shir" id="shir"></td>
    </tr>
    <tr>
        <td>Время начала показа</td>
        <td><input type="datetime-local" name="shir" id="shir"></td>
    </tr>
    <tr>
        <td>Время конца показа</td>
        <td><input type="datetime-local" name="shir" id="shir"></td>
    </tr>
    <tr>
        <td>Выберите площадку</td>
        <td><select><option value="1">Укажите площадку</option></select></td>
    </tr>
    <tr>
        <td>Выберите хозяина площадки</td>
        <td><select><option value="1">Укажите хозяина</option></select></td>
    </tr>
    <tr>
        <td> Выберите архив с баннером</td>
        <td><input type="file"></td>
    </tr>
    <tr><td >Создать данный банеер для показа?</td><td><button>Создать</button></td></tr>
</table>

</div>