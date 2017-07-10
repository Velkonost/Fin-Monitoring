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
        max-width: 75px;
        min-width: 75px;

        min-height: 75px;
        max-height: 75px;

        
    }
    .types td{
        font-size: 10px;
        padding-bottom: 20px;
    }
  
    h3{
        color: black;
        font-weight: normal;
        margin-bottom: 0px;
    }

</style>

 <table class="inputTable" style="border-collapse: separate; border-spacing: 2px;margin-left:-3%">

    <tbody  style="min-width: 1170px">
                <tr class='hidden-row'>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><?=$today?></td>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><?=date('h:i');?></td>
                    <td><?=$f->field($form, 'article[]')->dropDownList($allarticles, ['id' => "selectName$i", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>

                    <td><?=$f->field($form, 'ss[]')->textInput(['value' =>'0', 'style' => 'width:58.5px', 'type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'ms[]')->textInput(['value' =>'0', 'style' => 'width:58.5px', 'type'=>'number', 'min' => '0'])->label('')?></td>

                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:117px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                </tr>
    </tbody>
</table>

<table class="types">
    <caption><h3>Металлы</h3></caption>
    <tr>
        <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
    </tr>
    <tr>
        <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
         <td>
            <img src="../web/img/metall.jpeg">
            <br>Металл
            <br>Бронза
            <br>Чистая
        </td>
    </tr>


</table>

<?= Html::submitButton('Добавить', ['id'=>'future', 'name' => 'button_save']) ?>
<?php ActiveForm::end(); ?>