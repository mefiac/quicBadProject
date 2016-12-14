<?php
/* @var $this yii\web\View */
use  app\widgets\LeftMenu\LeftMenu;
?>
<?php
echo LeftMenu::widget([
]);
?>

<div id='content'>
    <div id='table_div'>

        <div class='table_head'>
            <h3>Баннеры</h3>
        </div>
        <div class='table_head'>
            <div class="form_input">
                <div class="input_group add_project">

                    <a href='/banner/add' class='save'>Добавить баннер</a>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th class='table_num'>#</th>
                <th class='table_chek'>
                    <input type="checkbox" class='checkbox_anime' id="all" />
                    <label class='chekbox_label' for="all"></label>
                </th>
                <th class='table_name'>Имя</th>
                <th class='table_name'>Пользователь</th>
                <th class='table_action last_th'>Действие</th>
            </tr>
            <tbody id='main_tbody' data-table=''>


            </tbody>
        </table>
    </div>
</div>