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

 <table class="Russia" style="border-collapse: separate; border-spacing: 1px;">

    <tbody class="hidden_table">
            
        
                <tr class='hidden-row'>
                    <td><span>07.07.17</span></td>
                    <td><span>14:36</span></td>
                    <td><?=$f->field($form, 'article[]')->dropDownList($allarticles, ['id' => "selectName$i", 'style'=>'width:205px; margin-left:5px;','options' => ['0'=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'names[]')->dropDownList($allclothes, ['id' => "selectArticle$i", 'style'=>' width: 200px; margin-left:5px', 'options' => ['0'=>['selected'=>true]]])->label('');?></td>

                    <td><?=$f->field($form, 'ss[]')->textInput(['style'=>'width:98%' ,'value' =>'0', 'type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'ms[]')->textInput(['style'=>'width:98%' ,'value' =>'0', 'type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'ls[]')->textInput(['style'=>'width:98%' , 'value' =>'0','type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'xls[]')->textInput(['style'=>'width:98%' ,'value' =>'0', 'type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'xxls[]')->textInput(['style'=>'width:98%' , 'value' =>'0','type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'xxxls[]')->textInput(['style'=>'width:98%' , 'value' =>'0','type'=>'number', 'min' => '0'])->label('')?></td>
                    <td><?= $f->field($form, 'prices[]')->textInput(['style'=>'width:98%' , 'value' =>'0','type'=>'number', 'min' => '0'])->label('')?></td>
                    
                </tr>
            
    </tbody>
</table>

<?= Html::submitButton('Добавить', ['id'=>'future', 'name' => 'button_save']) ?>
<?php ActiveForm::end(); ?>