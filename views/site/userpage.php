<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 14.12.2016
 * Time: 13:15
 */

use app\widgets\LeftMenu\LeftMenu;

echo LeftMenu::widget([
]);

?>
<div id='content'>
    <div class="well"><button class="save">Добавить пользователя</button></div>
<table class="table table-striped">

    <thead>
    <th>Логин</th>
    <th>Ф.И.О</th>
    </thead>
    <?php foreach ($model as $user) { ?>
        <tr>
            <td><?= $user['login'] ?></td>
            <td><?= $user['fio'] ?></td>
        </tr>
    <?php } ?>
</table>
</div>