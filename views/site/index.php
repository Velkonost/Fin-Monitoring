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

$this->title = 'Metals';

date_default_timezone_set('Europe/Moscow + 3');

$today = date("d.m.y");

?>
<?php $f = ActiveForm::begin()?>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>


<style type="text/css">

    .inputTable {
        margin: 0 auto; 
        text-align: left;
        border-collapse: separate; 
        border-spacing: 2px;
        
    }

    .inputTable td {
        background-color: #fff8ca;
        padding-left: 5px;
        padding-right: 5px;

        min-height: 73px;
        max-height: 73px;
        height: 73px;
    }

    .types td img {
        max-width: 110px;
        min-width: 110px;

        min-height: 110px;
        max-height: 110px;   
    }



    .types {
        border-collapse: separate; 
        border-spacing: 1px;
        margin-top: 20px;
        /* margin-left: 8%; */
    }

    .types td{
        font-size: 11px;
        line-height: 12px;
        /* padding-bottom: 20px; */
    }
  
    h2 {
        color: black;
        font-weight: normal;
        margin-bottom: 5px;
        letter-spacing: 3px;
        font-style: normal;

    }
    .type {
        margin-bottom: 20px;
    }

    .wrap_types {
        min-width: 1170px;
        width: 1170px;      


		display: none;
		
        margin-top: 30px;
        width: 100%;
        position: relative;
        left: 0;
    }
	.wrap_names {
        min-width: 1170px;
        width: 1170px;

		display: none;
		
        margin-top: 30px;
        
        position: relative;
        left: 0;
    }

    div[name="grey_table_types"] {

        /* width: 100%; */
        background-color: #f1f2f3;
    }

    #arrow {
        display: inline-block;
    }

    #arrow.rotated {
    -webkit-transform : rotate(180deg); 
    -moz-transform : rotate(180deg); 
    -ms-transform : rotate(180deg); 
    -o-transform : rotate(180deg); 
    transform : rotate(180deg); 
	}

	#arroww {
        display: inline-block;
    }

    #arroww.rotated {
        -webkit-transform : rotate(180deg); 
        -moz-transform : rotate(180deg); 
        -ms-transform : rotate(180deg); 
        -o-transform : rotate(180deg); 
        transform : rotate(180deg); 
    }

    .hidden {
        display: none;
    }

    .select_tp {
        padding-left: 0;
        padding-right: 0;
        width: 215px;
        min-width: 215px;
        max-width: 215px;
    }

    #nonselected_type {
        width:215px; 
        min-width: 215px;
        max-width: 215px;
    }
    
    #selectType {
        width:215px;
        text-align: center;
    }

    .in_selected_type {
        display: inline-block;
        max-height: 73px; 
        width: 100%;
    }
    .selected_type_img {
        height: 73px; 
        width: 73px; 
        display: inline-block; 
        vertical-align: top;
    }

    #type_selected{
        width: 130px;
        display: inline-block; 
        font-size: 14px;
        margin-left: 5px;
        line-height: 14px;
    }

    #nonselected_name {
        width:215px; 
        min-width: 215px;
        max-width: 215px;
        text-align: center;
    }


    .select_nm {
        padding-left: 0;
        padding-right: 0;
        width: 215px;
        min-width: 215px;
        max-width: 215px;
    }
    
    #selectName {
        width:215px;
        text-align: center;
    }

    .in_selected_name {
        display: inline-block;
        max-height: 73px; 
        width: 100%;
    }
    .selected_name_img {
        height: 73px; 
        width: 73px; 
        display: inline-block; 
        vertical-align: top;
    }

    #name_selected{
        width: 135px;
        display: inline-block; 
        font-size: 12px;
        margin-left: 5px;
        line-height: 14px;
    }

    .btn_submit {
        margin-left: 45%;
        margin-top: 45px;
        font-family: inherit;
        font-size: 18px;
        background-color: #FCDA33;
        width: 150px;
        height: 50px;
        text-align: center;
        display: inline-block;

        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

</style>
<section>

 <table class="inputTable" >

    <tbody  style="min-width: 1170px; width: 1170px; max-width: 1170px">
                <tr class='hidden-row'>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><?=$today?></td>

                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><div id="time"></div></td>

                   
                    <td id="nonselected_type"><div class="testType" onclick="showFun()" id = "selectType"><span style="display: inline-block;">Тип</span><div id="arrow">&#9660;</div></div></td>

                    <td id="selected_type" class="hidden"><div class="in_selected_type"><img src="../web/img/metall.jpeg" class="selected_type_img"><div id="type_selected"><h6 id="type_selected_title" style="margin-top: 0px"></h6><p id="type_selected_desc"></p> </div></div></td>
					

					<td id="nonselected_name"><div onclick="showNames()" id = "selectName"><span style="display: inline-block;">Наименование</span><div id="arroww">&#9660;</div></div></td>

                    <td id="selected_name" class="hidden"><div class="in_selected_name"><img src="../web/img/metall.jpeg" class="selected_name_img"><div id="name_selected"><h6 id="name_selected_title" style="margin-top: 0px">Накладка геральдика</h6><p id="name_selected_desc"> под эмаль со сферами по периметру, Детали Бронза</p> </div></div></td>
					
                    <td><?=$f->field($form, 'operation')->dropDownList($items, ['id' => "selectOperation", 'style' => 'box-shadow: inset 0px 0px 0px 0px black;border: 0px;width:100px;background-color: #fff8ca', 'options' => [''=>['selected'=>true]]])->label('');?></td>


                    <td><?=$f->field($form, 'massa')->textInput(['style' => 'width:70px', 'type'=>'text', 'placeholder' => 'Грамм'])->label('')?></td>
                    <td><?= $f->field($form, 'value')->textInput(['style' => 'width:70px', 'type'=>'text', 'placeholder' => 'Штук'])->label('')?></td>

                    <td><?=$f->field($form, 'status')->dropDownList($items, ['id' => "selectStatus", 'style' => 'box-shadow: inset 0px 0px 0px 0px black;border: 0px;width:100px; background-color: #fff8ca', 'options' => [''=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'from')->dropDownList($items, ['id' => "selectFrom", 'style' => 'box-shadow: inset 0px 0px 0px 0px black;border: 0px;width:100px; background-color: #fff8ca', 'options' => [''=>['selected'=>true]]])->label('');?></td>
                    <td><?=$f->field($form, 'to')->dropDownList($items, ['id' => "selectTo", 'style' => 'box-shadow: inset 0px 0px 0px 0px black;border: 0px;width:100px; background-color: #fff8ca', 'options' => [''=>['selected'=>true]]])->label('');?></td>

                </tr>
    </tbody>
</table>

<?= Html::submitButton('Ввод', ['id'=>'future', 'name' => 'button_save', 'class' => 'btn_submit']) ?>
<?php ActiveForm::end(); ?>

    <div name="grey_table_types" style="left:0; margin-top:30px;width: 100%; position: absolute; height:440px; z-index: -1"></div>
    <div name="grey_table_types" style="left:0; margin-top:710px;width: 100%; position: absolute; height:260px; z-index: -1"></div>
    <div class="wrap_types" id = "wrap_types">
        <div class="">
            <table class="types">
                <caption><h2>Металлы</h2></caption>
                
                <tr>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Бронза чистая')">
                            <tr><td><img src="../web/img/мбч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Бронза</td></tr>
                            <tr><td>чистая</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Бронза вторичная')">
                            <tr><td><img src="../web/img/мбв.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Бронза</td></tr>
                            <tr><td>вторичная</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Серебро 999 чистое')">
                            <tr><td><img src="../web/img/мс999ч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Серебро 999</td></tr>
                            <tr><td>чистое</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Серебро 925 вторичное')">
                            <tr><td><img src="../web/img/мс925в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Серебро 925</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Золото 999 чистое')">
                            <tr><td><img src="../web/img/мз999ч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото 999</td></tr>
                            <tr><td>чистое</td></tr>

                        </table>
                       
                    </td>
                   <td>
                        <table class="type" onclick="selectType('Металл', 'Золото белое 585 вторичное')">
                            <tr><td><img src="../web/img/мзб585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото белое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Золото желтое 585 вторичное')">
                            <tr><td><img src="../web/img/мзж585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                     <td>
                        <table class="type" onclick="selectType('Металл', 'Золото розовое 585 вторичное')">
                            <tr><td><img src="../web/img/мзр585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Золото белое 750 вторичное')">
                            <tr><td><img src="../web/img/мзб750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                   <td>
                        <table class="type" onclick="selectType('Металл', 'Золото желтое 750 вторичное')">
                            <tr><td><img src="../web/img/мзж750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                     <td>
                        <table class="type" onclick="selectType('Металл', 'Золото розовое 750 вторичное')">
                            <tr><td><img src="../web/img/мзр750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото розовое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Бронза чистая')">
                            <tr><td><img src="../web/img/мбч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Бронза</td></tr>
                            <tr><td>чистая</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Бронза вторичная')">
                            <tr><td><img src="../web/img/мбв.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Бронза</td></tr>
                            <tr><td>вторичная</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Серебро 999 чистое')">
                            <tr><td><img src="../web/img/мс999ч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Серебро 999</td></tr>
                            <tr><td>чистое</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Серебро 925 вторичное')">
                            <tr><td><img src="../web/img/мс925в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Серебро 925</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Золото 999 чистое')">
                            <tr><td><img src="../web/img/мз999ч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото 999</td></tr>
                            <tr><td>чистое</td></tr>

                        </table>
                       
                    </td>
                   <td>
                        <table class="type" onclick="selectType('Металл', 'Золото белое 585 вторичное')">
                            <tr><td><img src="../web/img/мзб585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото белое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Золото желтое 585 вторичное')">
                            <tr><td><img src="../web/img/мзж585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                     <td>
                        <table class="type" onclick="selectType('Металл', 'Золото розовое 585 вторичное')">
                            <tr><td><img src="../web/img/мзр585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металл', 'Золото белое 750 вторичное')">
                            <tr><td><img src="../web/img/мзб750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                   <td>
                        <table class="type" onclick="selectType('Металл', 'Золото желтое 750 вторичное')">
                            <tr><td><img src="../web/img/мзж750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                     <td>
                        <table class="type" onclick="selectType('Металл', 'Золото розовое 750 вторичное')">
                            <tr><td><img src="../web/img/мзр750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото розовое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                </tr>
            </table>
        </div>

        <table class="types">
                <caption><h2>Лигатуры</h2></caption>
                
                <tr>
                    <td>
                        <table class="type" onclick="selectType('Лигатура', 'серебро')">
                            <tr><td><img src="../web/img/лс.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>серебро</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Лигатура', 'белое золото')">
                            <tr><td><img src="../web/img/лбз.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>белое золото</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Лигатура', 'желтое золото')">
                            <tr><td><img src="../web/img/лжз.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>желтое золото</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Лигатура', 'розовое золото')">
                            <tr><td><img src="../web/img/лрз.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>розовое золото</td></tr>
                        </table>
                    </td>
                   
                </tr>
        </table>
        <table class="types">
                <caption><h2>Детали</h2></caption>
                
                <tr>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Бронза')">
                            <tr><td><img src="../web/img/дб.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Бронза</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Серебро 925')">
                            <tr><td><img src="../web/img/дс925.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Серебро 925</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Золото белое 585')">
                            <tr><td><img src="../web/img/дзб585.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото белое 585</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Золото желтое 585')">
                            <tr><td><img src="../web/img/дзж585.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Золото розовое 585')">
                            <tr><td><img src="../web/img/дзр585.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Золото белое 750')">
                            <tr><td><img src="../web/img/дзб750.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Золото желтое 750')">
                            <tr><td><img src="../web/img/дзж750.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Деталь', 'Золото розовое 750')">
                            <tr><td><img src="../web/img/дзр750.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото розовое 750</td></tr>
                        </table>
                    </td>
                   
                </tr>
        </table>
        <table class="types">
                <caption><h2>Полуфабрикаты</h2></caption>
                
                <tr>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Бронза')">
                            <tr><td><img src="../web/img/пб.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Бронза</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Серебро 925')">
                            <tr><td><img src="../web/img/пc925.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Серебро 925</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Золото белое 585')">
                            <tr><td><img src="../web/img/пзб585.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото белое 585</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Золото желтое 585')">
                            <tr><td><img src="../web/img/пзж585.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Золото розовое 585')">
                            <tr><td><img src="../web/img/пзр585.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Золото белое 750')">
                            <tr><td><img src="../web/img/пзб750.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Золото желтое 750')">
                            <tr><td><img src="../web/img/пзж750.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикат', 'Золото розовое 750')">
                            <tr><td><img src="../web/img/пзр750.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото розовое 750</td></tr>
                        </table>
                    </td>
                   
                </tr>
        </table>
    </div>
    <div class="wrap_names" id = "wrap_names">
        <div class="grey_table_types">
            <table class="types">
                <caption><h2>ЧТО ТО ДРУГОЕ</h2></caption>
                
                <tr>
                    <td>
                        <table class="type" onclick="selectName()">
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
                <caption><h2>Лигатуры</h2></caption>
                
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
</section>

<script>
clock();
var arrow = document.getElementById('arrow');
var arrowName = document.getElementById('arroww');

var visible = false;

var visibleNames = false;

var type_selected = false;
var name_selected = false;

var greys = document.getElementsByName('grey_table_types');
    
for (var i = 0; i <= greys.length - 1; i++) {
    greys[i].style.display = 'none';
}


function showFun() {
    if(visible) {
        document.getElementById('wrap_types' ).style.display = 'none';
    
        for (var i = 0; i <= greys.length - 1; i++) {
            greys[i].style.display = 'none';
        }

        visible = false;
		arrow.classList.toggle('rotated');
    } else {
        document.getElementById('wrap_types' ).style.display = 'block';
    
        for (var i = 0; i <= greys.length - 1; i++) {
            greys[i].style.display = 'block';
        }

        visible = true;
		arrow.classList.toggle('rotated');
    }
}

function showNames() {
    if(visibleNames) {
		document.getElementById('wrap_types' ).style.display = 'none';
		arrowName.classList.toggle('rotated');
        document.getElementById('wrap_names' ).style.display = 'none';

        for (var i = 0; i <= greys.length - 1; i++) {
            greys[i].style.display = 'none';
        }


        visibleNames = false;
    } else if(!visibleNames  &&type_selected){
		arrowName.classList.toggle('rotated');
        document.getElementById('wrap_names' ).style.display = 'block';

        for (var i = 0; i <= greys.length - 1; i++) {
            greys[i].style.display = 'block';
        }
        visibleNames = true;
    }
}

function clock() {
    var d = new Date();
    
    var hours = d.getHours();
    var minutes = d.getMinutes();
    var seconds = d.getSeconds();

   
    if (hours <= 9) hours = "0" + hours;
    if (minutes <= 9) minutes = "0" + minutes;
    if (seconds <= 9) seconds = "0" + seconds;

    date_time = hours + ":" + minutes;
    document.getElementById("time").innerHTML = date_time;
     setTimeout("clock()", 1000);
}

function selectType(name, desc) {

    document.getElementById('type_selected_title').innerText = name;
    document.getElementById('type_selected_desc').innerText = desc;

	document.getElementById('wrap_types' ).style.display = 'none';
	document.getElementById('wrap_names' ).style.display = 'block';

    document.getElementById('nonselected_type').setAttribute('class', 'hidden');
    document.getElementById('selected_type').setAttribute('class', 'select_tp');
    document.getElementById('selected_type').setAttribute('style', 'padding:0');

    type_selected = true;
}

function selectName(name) {
    console.log(name);

    document.getElementById('nonselected_name').setAttribute('class', 'hidden');
    document.getElementById('selected_name').setAttribute('class', 'select_nm');
    document.getElementById('selected_name').setAttribute('style', 'padding:0');

    type_selected = true;
}


</script>
