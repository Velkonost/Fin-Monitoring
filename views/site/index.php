<head>
	<meta charset="utf-8">
</head>
<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Things;
use yii\helpers\Url;
use yii\helpers;
use yii\web\helpers\CHtml;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

date_default_timezone_set('UTC + 3');
$today = date("d.m.y");

?>
<?php $f = ActiveForm::begin()?>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>


<style type="text/css">
    /* 58.5 */

    .inputTable {
       margin: 0 auto; 
    text-align: left;


    }

    .inputTable td {
        background-color: #fff8ca;
        padding-left: 10px;
        padding-right: 10px;
    }
    .types td img {
        max-width: 110px;
        min-width: 110px;

        min-height: 110px;
        max-height: 110px;

        
    }

    .types {
        margin-left: 8%;
    }

    .types td{
        font-size: 12px;
        line-height: 12px;
        /* padding-bottom: 20px; */
    }
  
    h3{
        color: black;
        font-weight: normal;
        margin-bottom: 0px;
    }
    .type {
        margin-bottom: 20px;
    }

    .wrap_types {
              
		display: none;
		
        margin-top: 30px;
        width: 100%;
        position: absolute;
        left: 0;
    }

    .grey_table_types {

        width: 100%;
        background-color: #f1f2f3;
    }

</style>

<script>
document.getElementById('selectType').innerHTML =  'Тип	⯆';

var visible = false;

function showFun() {
    if(visible) {
        document.getElementById('wrap_types' ).style.display = 'none';
        visible = false;
    } else {
        document.getElementById('wrap_types' ).style.display = 'block';
        visible = true;
    }
}

</script>
 <table class="inputTable" style="border-collapse: separate; border-spacing: 2px;margin-left:-3%">

    <tbody  style="min-width: 1170px">
                <tr class='hidden-row'>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><?=$today?></td>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><?=date('h:i');?></td>
                    <td><div class="testType" onclick="showFun()" id = "selectType" 'style: width:175.5px'>Тип	&#9660;</div>
					<?php //$f->field($form, 'type')->textarea(['onclick'=>'showFun()','id' => "selectType", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'name')->dropDownList($allclothes, ['id' => "selectName", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'operation')->dropDownList($allclothes, ['onclick'=>"$('.types').hide();",'id' => "selectOperation", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>

                    <td><?=$f->field($form, 'massa')->textInput(['value' =>'0', 'style' => 'width:58.5px', 'type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'value')->textInput(['value' =>'0', 'style' => 'width:58.5px', 'type'=>'number', 'min' => '0'])->label('')?></td>

                    <td><?=$f->field($form, 'status')->dropDownList($allclothes, ['id' => "selectStatus", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'from')->dropDownList($allclothes, ['id' => "selectFrom", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'to')->dropDownList($allclothes, ['id' => "selectTo", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                </tr>
    </tbody>
</table>

<div class="wrap_types" id = "wrap_types">
    <div class="grey_table_types">
        <table class="types">
            <caption><h3>Металлы</h3></caption>
            
            <tr>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
            </tr>
            <tr>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
            </tr>
        </table>
    </div>

    <table class="types">
            <caption><h3>Лигатуры</h3></caption>
            
            <tr>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
            </tr>
            <tr>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
               <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
                 <td>
                    <table class="type">
                        <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                        <tr><td>Металл</td></tr>
                        <tr><td>Бронза</td></tr>
                        <tr><td>Чистая</td></tr>

                    </table>
                   
                </td>
            </tr>
        </table>
</div>

<?= Html::submitButton('Добавить', ['id'=>'future', 'name' => 'button_save']) ?>
<?php ActiveForm::end(); ?>