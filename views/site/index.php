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

    table {
       margin: 0 auto; 
    text-align: left;
    

    }

    td {
        background-color: #fff8ca;

    }

    td{
        padding-left: 10px;
        padding-right: 10px;
    }

</style>

 <table style="border-collapse: separate; border-spacing: 2px;">

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

<?= Html::submitButton('Добавить', ['id'=>'future', 'name' => 'button_save']) ?>
<?php ActiveForm::end(); ?>