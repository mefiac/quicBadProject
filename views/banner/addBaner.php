<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 14.12.2016
 * Time: 12:01
 */
use app\widgets\LeftMenu\LeftMenu;

?>
<?php
echo LeftMenu::widget([
]);
?>

<div id='content' xmlns="http://www.w3.org/1999/html">
    <form name="load" method="get" action="/banner/load">
    <table class="table table-striped">
        <tr>
            <td>Описание</td>
            <td><input type="text" name="opis" id="opis" required></td>
        </tr>
        <tr>
            <td>Ссылка по клику</td>
            <td><input type="text" name="silka" id="silka" required></td>
        </tr>
        <tr>
            <td>Время начала показа</td>
            <td><input type="datetime-local" name="time_s" id="te" required></td>
        </tr>
        <tr>
            <td>Время конца показа</td>
            <td><input type="datetime-local" name="time_e" id="ts" required></td>
        </tr>
        <tr>
            <td>Выберите площадку</td>
            <td><select name="plosh" required>
                    <option value="1">Укажите площадку</option>
                </select></td>
        </tr>
        <tr>
            <td>Выберите хозяина площадки</td>
            <td><select name="hoz" required>
                    <option value="1">Укажите хозяина</option>
                </select></td>
        </tr>
        <tr>
            <td colspan="100%">
                <form method="post" enctype="multipart/form-data" target="upload_target">

                    <label>Выберите баннер:
                        <input name="uploadfile" id="upload" type="file" size="30"/>
                    </label>
                    <label>
                        <a class="save"  onClick="setimage();">Загрузить на сервер</a>
                    </label>

                    </p>
                    <iframe id="upload_target" name="upload_target" src="#"
                            style="width:0;height:0;border:0px solid #fff;"></iframe>

                </form>
            </td>
        </tr>
        <tr>
            <input type="hidden" name="_csrf-frontend" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <td>Ширина</td>
            <td><input type="number" onchange="changesy()" value="650" name="hei" id="hei" required></td>
        </tr>
        <tr>
            <td>Вышсота</td>
            <td><input type="number" onchange="changesx()" value="350" name="shiri" id="shiri" required></td>
            <input type="hidden" name="pah" id="path">
        <tr>
            <td colspan="100%">

                <iframe id="frames" src="/images/ban.jpg" width="650"
                        height="360"
                        align="left">
                    Ваш браузер не поддерживает плавающие фреймы!
                </iframe>

            </td>
        </tr>
        <tr>
            <td>Создать данный банеер для показа?</td>
            <td>
                <button class="save">Создать</button>
            </td>
        </tr>
    </table>
</form>
</div>
<script language="javascript" type="text/javascript">
    function changesy() {
        $("#frames").attr('width',
            $('#hei').val());
    }
    function changesx() {
        $("#frames").attr('height',
            $('#shiri').val());
    }

    function setimage() {
        var $input = $("#upload");
        var fd = new FormData;
        fd.append('uploadfile', $input.prop('files')[0]);
        $.ajax({
            url: '/banner/save',
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {

                $("#pah").val('/' +
                    data);
                $("#frames").attr('src', '/' +
                    data);

            }
        });

        return true;
    }
</script>