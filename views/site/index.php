<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Things;
use yii\helpers\Url;
use yii\helpers;
use yii\web\helpers\CHtml;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php $f = ActiveForm::begin()?>

<style type="text/css">
    /* 58.5 */
    td {
        background-color: #f7ed5b;
       /*  padding-left: 10px;
        padding-right: 10px; */
    }

</style>

 <table class="Russia" style="border-collapse: separate; border-spacing: 1px;">

    <tbody class="hidden_table" style="width: 1170px">
            
        
                <tr class='hidden-row'>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center;">07.07.17</td>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center;">14:36</td>
                    <td><?=$f->field($form, 'article[]')->dropDownList($allarticles, ['id' => "selectName$i", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style' => 'width:175.5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>

                    <td><?=$f->field($form, 'ss[]')->textInput(['value' =>'0', 'type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'ms[]')->textInput(['value' =>'0', 'type'=>'number', 'min' => '0'])->label('')?></td>

                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'options' => ['0'=>['selected'=>true]]])->label('');?></td>

                  
                    
                </tr>
            
    </tbody>
</table>

<?= Html::submitButton('Добавить', ['id'=>'future', 'name' => 'button_save']) ?>
<?php ActiveForm::end(); ?>