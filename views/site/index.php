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

    div[name="grey_table_types"], div[name="grey_table_names"] {

        /* width: 100%; */
        background-color: #f1f2f3;
    }

    td[name="name"], td[name="type_of_name"], td[name="desc"] {
        max-width: 100px;
        
    }

    td[name="desc"] {
        /* height: 20px; */
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
        margin: 5px;

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
        margin: 2px;
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

    .name_td {
        height: 38px;
    }

</style>
<section>

 <table class="inputTable" >

    <tbody  style="min-width: 1170px; width: 1170px; max-width: 1170px">
                <tr class='hidden-row'>
                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><?=$today?></td>

                    <td style="max-width: 58.5px; min-width: 58.5px;text-align: center; padding: 0"><div id="time"></div></td>


                    <td id="nonselected_type"><div  class="testType" onclick="showFun()" id = "selectType"><span style="display: inline-block;">Тип</span><div id="arrow">&#9660;</div></div></td>

                    <td id="selected_type" class="hidden"><div   onclick="showFun()" class="in_selected_type"><img id="img_type" src="../web/img/metall.jpeg" class="selected_type_img"><div id="type_selected"><h6 id="type_selected_title" style="margin-top: 0px"></h6><p id="type_selected_desc"></p> </div></div></td>
					

					<td id="nonselected_name"><div onclick="showNames()" id = "selectName"><span style="display: inline-block;">Наименование</span><div id="arroww">&#9660;</div></div></td>

                    <td id="selected_name" class="hidden"><div onclick="showNames()" class="in_selected_name"><img id="img_name" src="../web/img/metall.jpeg" class="selected_name_img"><div id="name_selected"><h6 id="name_selected_title" style="margin-top: 0px">Накладка геральдика</h6><p id="name_selected_desc"> под эмаль со сферами по периметру, Детали Бронза</p><p id="name_selected_type"></p> </div></div></td>
					
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

    <div name="grey_table_types" style="left:0; margin-top:30px;width: 100%; position: absolute; height:260px; z-index: -1"></div>
    <div name="grey_table_types" style="left:0; margin-top:530px;width: 100%; position: absolute; height:260px; z-index: -1"></div>

    <div name="grey_table_names" style="left:0; margin-top:30px;width: 100%; position: absolute; height:260px; z-index: -1"></div>
    <div name="grey_table_names" style="left:0; margin-top:950px;width: 100%; position: absolute; height:680px; z-index: -1"></div>
    <div name="grey_table_names" style="left:0; margin-top:1915px;width: 100%; position: absolute; height:300px; z-index: -1"></div>
    <div class="wrap_types" id = "wrap_types">
        <div class="">
            <table class="types">
                <caption><h2>Металлы</h2></caption>
                
                <tr>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Бронза чистая', 'мбч.png')">
                            <tr><td><img src="../web/img/мбч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Бронза</td></tr>
                            <tr><td>чистая</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Бронза вторичная', 'мбв.png')">
                            <tr><td><img src="../web/img/мбв.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Бронза</td></tr>
                            <tr><td>вторичная</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Серебро 999 чистое', 'мс999ч.png')">
                            <tr><td><img src="../web/img/мс999ч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Серебро 999</td></tr>
                            <tr><td>чистое</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Серебро 925 вторичное', 'мс925в.png')">
                            <tr><td><img src="../web/img/мс925в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Серебро 925</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото 999 чистое', 'мз999ч.png')">
                            <tr><td><img src="../web/img/мз999ч.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото 999</td></tr>
                            <tr><td>чистое</td></tr>

                        </table>
                       
                    </td>
                   <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото белое 585 вторичное', 'мзб585в.png')">
                            <tr><td><img src="../web/img/мзб585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото белое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото желтое 585 вторичное', 'мзж585в.png')">
                            <tr><td><img src="../web/img/мзж585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                     <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото розовое 585 вторичное', 'мзр585в.png')">
                            <tr><td><img src="../web/img/мзр585в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото белое 750 вторичное', 'мзб750в.png')">
                            <tr><td><img src="../web/img/мзб750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                   <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото желтое 750 вторичное', 'мзж750в.png')">
                            <tr><td><img src="../web/img/мзж750в.png"></td></tr>
                            <tr><td>Металл</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                            <tr><td>вторичное</td></tr>

                        </table>
                       
                    </td>
                     <td>
                        <table class="type" onclick="selectType('Металлы', 'Металл', 'Золото розовое 750 вторичное', 'мзр750в.png')">
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
                        <table class="type" onclick="selectType('Лигатуры', 'Лигатура', 'серебро', 'лс.png')">
                            <tr><td><img src="../web/img/лс.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>серебро</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Лигатуры', 'Лигатура', 'белое золото', 'лбз.png')">
                            <tr><td><img src="../web/img/лбз.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>белое золото</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Лигатуры', 'Лигатура', 'желтое золото', 'лжз.png')">
                            <tr><td><img src="../web/img/лжз.png"></td></tr>
                            <tr><td>Лигатура</td></tr>
                            <tr><td>желтое золото</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Лигатуры', 'Лигатура', 'розовое золото', 'лрз.png')">
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
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Бронза', 'дб.png')">
                            <tr><td><img src="../web/img/дб.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Бронза</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Серебро 925', 'дс925.png')">
                            <tr><td><img src="../web/img/дс925.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Серебро 925</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Золото белое 585', 'дзб585.png')">
                            <tr><td><img src="../web/img/дзб585.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото белое 585</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Золото желтое 585', 'дзж585.png')">
                            <tr><td><img src="../web/img/дзж585.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Золото розовое 585', 'дзр585.png')">
                            <tr><td><img src="../web/img/дзр585.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Золото белое 750', 'дзб750.png')">
                            <tr><td><img src="../web/img/дзб750.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Золото желтое 750', 'дзж750.png')">
                            <tr><td><img src="../web/img/дзж750.png"></td></tr>
                            <tr><td>Деталь</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Детали', 'Деталь', 'Золото розовое 750', 'дзр750.png')">
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
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Бронза', 'пб.png')">
                            <tr><td><img src="../web/img/пб.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Бронза</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Серебро 925', 'пc925.png')">
                            <tr><td><img src="../web/img/пc925.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Серебро 925</td></tr>
                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Золото белое 585', 'пзб585.png')">
                            <tr><td><img src="../web/img/пзб585.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото белое 585</td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Золото желтое 585', 'пзж585.png')">
                            <tr><td><img src="../web/img/пзж585.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото желтое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Золото розовое 585', 'пзр585.png')">
                            <tr><td><img src="../web/img/пзр585.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото розовое 585</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Золото белое 750', 'пзб750.png')">
                            <tr><td><img src="../web/img/пзб750.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото белое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Золото желтое 750', 'пзж750.png')">
                            <tr><td><img src="../web/img/пзж750.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото желтое 750</td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectType('Полуфабрикаты', 'Полуфабрикат', 'Золото розовое 750', 'пзр750.png')">
                            <tr><td><img src="../web/img/пзр750.png"></td></tr>
                            <tr><td>Полуфабрикат</td></tr>
                            <tr><td>Золото розовое 750</td></tr>
                        </table>
                    </td>
                   
                </tr>
        </table>
    </div>
    <div class="wrap_names" id = "wrap_names">
            <table class="types">
                <tr>
                    <td>
                        <table class="type" style="margin-top: 75px">
                            <tr><td><img id="select_img_in_name"></td></tr>
                            <tr><td id="select_type_in_name"></td></tr>
                            <tr><td id="select_title_in_name"></td></tr>
                            <tr><td id="select_desc_in_name"></td></tr>

                        </table>
                    </td>
                </tr>          
            </table>
            <table class="types" valign="top">
                <caption><h2>Основы</h2></caption>
                <tr>
                    <td class="name_td">
                        <table class="type" onclick="selectName('1.jpg')">
                            <tr><td><img src="../web/img/1.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('2.jpg')">
                            <tr><td><img src="../web/img/2.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('3.jpg')">
                            <tr><td><img src="../web/img/3.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('4.jpg')">
                            <tr><td><img src="../web/img/4.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName('5.jpg')">
                            <tr><td><img src="../web/img/5.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName('6.jpg')">
                            <tr><td><img src="../web/img/6.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('7.jpg')">
                            <tr><td><img src="../web/img/7.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td class="name_td">
                        <table class="type" onclick="selectName('8.jpg')">
                            <tr><td><img src="../web/img/8.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('9.jpg')">
                            <tr><td><img src="../web/img/9.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName('10.jpg')">
                            <tr><td><img src="../web/img/10.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td class="name_td">
                        <table class="type" onclick="selectName('11.jpg')">
                            <tr><td><img src="../web/img/11.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="name_td">
                        <table class="type" onclick="selectName('12.jpg')">
                            <tr><td><img src="../web/img/12.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('13.jpg')">
                            <tr><td><img src="../web/img/13.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('14.jpg')">
                            <tr><td><img src="../web/img/14.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('15.jpg')">
                            <tr><td><img src="../web/img/15.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName('16.jpg')">
                            <tr><td><img src="../web/img/16.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName('17.jpg')">
                            <tr><td><img src="../web/img/17.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('18.jpg')">
                            <tr><td><img src="../web/img/18.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td class="name_td">
                        <table class="type" onclick="selectName('19.jpg')">
                            <tr><td><img src="../web/img/19.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('20.jpg')">
                            <tr><td><img src="../web/img/20.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName('21.jpg')">
                            <tr><td><img src="../web/img/21.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td class="name_td">
                        <table class="type" onclick="selectName('22.jpg')">
                            <tr><td><img src="../web/img/22.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="name_td">
                        <table class="type" onclick="selectName('23.jpg')">
                            <tr><td><img src="../web/img/23.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('24.jpg')">
                            <tr><td><img src="../web/img/24.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('25.jpg')">
                            <tr><td><img src="../web/img/25.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td class="name_td">
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td class="name_td">
                        <table class="type" onclick="selectName('26.jpg')">
                            <tr><td><img src="../web/img/26.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td class="name_td">
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="types">
                <caption><h2>Накладки</h2></caption>
                <tr>
                    <td>
                        <table class="type" onclick="selectName('27.jpg')">
                            <tr><td><img src="../web/img/27.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('28.jpg')">
                            <tr><td><img src="../web/img/28.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectName('29.jpg')">
                            <tr><td><img src="../web/img/29.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('30.jpg')">
                            <tr><td><img src="../web/img/30.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td>
                        <table class="type" onclick="selectName('31.jpg')">
                            <tr><td><img src="../web/img/31.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td>
                        <table class="type" onclick="selectName('32.jpg')">
                            <tr><td><img src="../web/img/32.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('33.jpg')">
                            <tr><td><img src="../web/img/33.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td>
                        <table class="type" onclick="selectName('34.jpg')">
                            <tr><td><img src="../web/img/34.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('35.jpg')">
                            <tr><td><img src="../web/img/35.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td>
                        <table class="type" onclick="selectName('36.jpg')">
                            <tr><td><img src="../web/img/36.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td>
                        <table class="type" onclick="selectName('37.jpg')">
                            <tr><td><img src="../web/img/37.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                   <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="types">
                <caption><h2>Задние части</h2></caption>  
                <tr>
                    <td>
                        <table class="type" onclick="selectName('38.jpg')">
                            <tr><td><img src="../web/img/38.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('39.jpg')">
                            <tr><td><img src="../web/img/39.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectName('40.jpg')">
                            <tr><td><img src="../web/img/40.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('41.jpg')">
                            <tr><td><img src="../web/img/41.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td>
                        <table class="type" onclick="selectName('42.jpg')">
                            <tr><td><img src="../web/img/42.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="types">
                <caption><h2>Ножки</h2></caption>  
                <tr>
                    <td>
                        <table class="type" onclick="selectName('43.jpg')">
                            <tr><td><img src="../web/img/43.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('44.jpg')">
                            <tr><td><img src="../web/img/44.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>

                        </table>
                       
                    </td>
                    <td>
                        <table class="type" onclick="selectName('45.jpg')">
                            <tr><td><img src="../web/img/45.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                     <td>
                        <table class="type" onclick="selectName('46.jpg')">
                            <tr><td><img src="../web/img/46.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName('47.jpg')">
                            <tr><td><img src="../web/img/47.jpg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
                        </table>
                    </td>
                    <td>
                        <table class="type" onclick="selectName()">
                            <tr><td><img src="../web/img/metall.jpeg"></td></tr>
                            <tr><td name="kind_of_name"></td></tr>
                            <tr><td name="name"></td></tr>
                            <tr><td name="desc"></td></tr>
                            <tr><td name="type_of_name"></td></tr>
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

var usingName = true;

var type_selected = false;
var name_selected = false;

var greys_types = document.getElementsByName('grey_table_types');
var greys_names = document.getElementsByName('grey_table_names');
    
hide_greys_types();
hide_greys_names();

function hide_greys_types() {
    for (var i = 0; i <= greys_types.length - 1; i++) {
        greys_types[i].style.display = 'none';
    }
}

function show_greys_types() {
    for (var i = 0; i <= greys_types.length - 1; i++) {
        greys_types[i].style.display = 'block';
    }
}

function hide_greys_names() {
    for (var i = 0; i <= greys_names.length - 1; i++) {
        greys_names[i].style.display = 'none';
    }
}

function show_greys_names() {
    for (var i = 0; i <= greys_names.length - 1; i++) {
        greys_names[i].style.display = 'block';
    }
}


function showFun() {
    if(visible) {
        document.getElementById('wrap_types' ).style.display = 'none';
    
        hide_greys_types();

        visible = false;
		arrow.classList.toggle('rotated');
    } else {
        document.getElementById('wrap_types' ).style.display = 'block';
        if(visibleNames) {
            document.getElementById('wrap_names' ).style.display = 'none';
            visibleNames = false;

        }
        
        show_greys_types();

        visible = true;
		arrow.classList.toggle('rotated');
    }
}

function showNames() {
    if(visibleNames && usingName) {
		document.getElementById('wrap_types' ).style.display = 'none';
		arrowName.classList.toggle('rotated');
        document.getElementById('wrap_names' ).style.display = 'none';

        hide_greys_names();

        visibleNames = false;
    } else if(!visibleNames  && type_selected && usingName){
		arrowName.classList.toggle('rotated');
        document.getElementById('wrap_names' ).style.display = 'block';

        if (visible) {
            document.getElementById('wrap_types' ).style.display = 'none';
            visible = false;
        }

        show_greys_names();

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

function selectType(type, name, desc, src) {

    $("#img_type").attr("src", "../web/img/" + src);

    document.getElementById('type_selected_title').innerText = name;
    document.getElementById('type_selected_desc').innerText = desc;
	
	if(name == "Металл" || name == "Лигатура"){
		document.getElementById('selectName').style.color = "#CCCCCC";
		usingName = false;
	} else {
		usingName = true;
		document.getElementById('selectName').style.color = "#3d3d3d";
	}
	
	document.getElementById('wrap_types' ).style.display = 'none';

    hide_greys_types();

    document.getElementById('nonselected_type').setAttribute('class', 'hidden');
    document.getElementById('selected_type').setAttribute('class', 'select_tp');
    document.getElementById('selected_type').setAttribute('style', 'padding:0');
	visible = false;
    type_selected = true;

    document.getElementById('select_type_in_name').innerText = type;
    document.getElementById('select_title_in_name').innerText = name;
    document.getElementById('select_desc_in_name').innerText = desc;
    $("#select_img_in_name").attr("src", "../web/img/" + src);
    generateNames(name + " " + desc);
    
}

function selectName(name, desc, type, src) {

    $("#img_name").attr("src", "../web/img/" + 'metall.jpeg');

    document.getElementById('name_selected_title').innerText = name;
    document.getElementById('name_selected_desc').innerText = desc;

    document.getElementById('nonselected_name').setAttribute('class', 'hidden');
    document.getElementById('selected_name').setAttribute('class', 'select_nm');
    document.getElementById('selected_name').setAttribute('style', 'padding:0');
    document.getElementById('wrap_names' ).style.display = 'none';
    hide_greys_names();

    type_selected = true;
}


function generateNames(selected_type_title) {
    var first_index_count = 30;//30
    var second_index_count = 26;
    var third_index_count = 5;
    var forth_index_count = 7;

    var names = ['Щит под дерево', 'Квадрат под дерево', 'Круг под дерево', 'Щит под дерево', 'Квадрат под дерево', 'Круг под дерево', '8 граней', '8 граней', '8 граней', 'Спаси и сохрани', 'Спаси и сохрани', 'Спаси и сохрани', 'Щит европа', 'Щит европа', 'Круг косичка', 'Квадрат косичка', 'Прямоугольная косичка', 'Прямоугольник готика', 'под премиум', 'под премиум', 'Щит ФСБ', 'Омниа квадрат', 'Омниа круг', 'Щит облегченный', 'Фантом', 'Созвездие круг', 'Созвездие фон', 'Круг малый', 'Пупырки', 'под винтажный', 'Геральдика', 'Геральдика классическая', 'Геральдика ребристая', 'Геральдика под эмаль', 'Геральдика под эмаль', 'Геральдика', 'Круг орел', 'Фантом', 'под премиум круглый', 'под премиум квадратный', 'Лев плоский', 'Щит под гравировку', 'Лев классический', 'Лев античный', 'Тигр', 'Лис', 'Бульдог', 'Волк', 'Медведь', '8 граней под гравировку', '8 граней под гравировку', 'Грани характера', 'Грани характера', 'Грани характера', 'Грани характера', 'Грани характера', 'Созвездие', 'Созвездие', 'Фантом', 'под винтажный куб', 'Лев плоский', 'Цельнолитая рефленая', 'малая поворотная', 'Задняя часть малой поворотной ножки', 'Пружина малой поворотной ножки', 'Большая поворотная', 'Задняя часть большой поворотной ножки', 'Пружина большой поворотной ножки'];

    var descs = ['с просветом', ' с просветом', 'с просветом', 'с орнаментом', 'с орнаментом', 'с орнаментом', 'с орнаментом', 'с желобом', 'под гравировку', 'с надписью', 'основа с орнаментом', 'под гравировку', 'стандартный', 'с орнаментом', ' ', ' ', ' ', 'под бриллиант', 'круглый', 'квадратный', ' ', ' ', ' ', ' ', ' ', 'большой', ' ', ' ', ' ', ' ', 'куб', 'под монограмму', 'с камнями', 'со сферами по периметру', 'с орнаментом по ободку', 'Щит и меч', ' ', ' ', ' ', ' ', '(царь зверей)', ' ', '(царь зверей)', '(царь зверей)', '(царь зверей)', '(царь зверей)', '(царь зверей)', '(царь зверей)', '(царь зверей)', 'большая', 'малая', 'под гравировку круглая', 'Звери', 'Георгий победоносец', 'Рыбы', 'Оружие', 'Круг большой', 'Круг малый', ' ', ' ', '(царь зверей)', ' ', ' ', ' ', ' ', ' ', ' ', ' '];

    var kind_of_name = document.getElementsByName('kind_of_name');
    var name = document.getElementsByName('name');
    var desc = document.getElementsByName('desc');
    var type_of_name = document.getElementsByName('type_of_name');

    
    for (var i = 0; i <= first_index_count - 1; i++) {
        kind_of_name[i].innerText = 'Основы';
    }
    for (var i = first_index_count; i <= first_index_count + second_index_count - 1; i++) {
        kind_of_name[i].innerText = 'Накладки';   
    }

    for (var i = first_index_count + second_index_count; i <= third_index_count + first_index_count + second_index_count - 1; i++) {
        kind_of_name[i].innerText = 'Задние части';   
    }

    for (var i = third_index_count + first_index_count + second_index_count; i <= forth_index_count + third_index_count + first_index_count + second_index_count - 1; i++) {
        kind_of_name[i].innerText = 'Ножки';   
    }

    for (var i = 0; i < type_of_name.length; i++) {
        type_of_name[i].innerText = selected_type_title;
    }

    for (var i = 0; i < name.length; i++) {
        name[i].innerHTML = names[i];
        if (descs[i] == ' ') desc[i].style.display = 'none';
        desc[i].innerHTML = descs[i];
    }
}


</script>
