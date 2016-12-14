<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 14.12.2016
 * Time: 13:15
 */

use  app\widgets\LeftMenu\LeftMenu;
echo LeftMenu::widget([
]);

?>
<table class="table table-striped">
    <th>Логин</th>  <th>Ф.И.О</th>
    <?php foreach($model as $user)
{ ?>
    <tr><td><?=$user['login']?></td><td><?=$user['fio']?></td></tr>
    <?php } ?>
</table>
