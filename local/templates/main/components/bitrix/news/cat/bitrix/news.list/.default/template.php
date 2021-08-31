<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/tehnika/meta.php');
$page = $APPLICATION->GetCurPage();
?>

<?php
$pureURI = $_SERVER["REQUEST_URI"];
if (substr_count($pureURI, "?")) {
	$pos = strpos($pureURI, "?");
	$pureURI = substr($pureURI, 0, $pos);
}
$arURI = explode("/", $pureURI);


if (isset($_GET['type']) && $_GET['type'] != 0) {
    // когда пользователь сам указывает параметры фильтра
    $filter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y", "SECTION_ID"=>$_GET["type"]);
} else if (isset($arResult["SECTION"]["PATH"][0]['ID']) && $arResult["SECTION"]["PATH"][0]['ID'] != 0) {
    // когда пользователь заходит в конкретный раздел техники через меню
    $filter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y", "SECTION_ID"=>$arResult["SECTION"]["PATH"][0]['ID']);
} else {
    $filter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y");
}

$q = CIBlockElement::GetList(Array(), $filter, false, false, Array("ID", "PROPERTY_P1", "PROPERTY_P2"));
$arFilter = Array();
while ($a = $q->GetNext()) {
	if ($a["PROPERTY_P1_VALUE"]) { $arFilter["p1"][] = $a["PROPERTY_P1_VALUE"]; }
	if ($a["PROPERTY_P2_VALUE"]) { $arFilter["p2"][] = $a["PROPERTY_P2_VALUE"]; }
}

$arFilter["p1"] = array_unique($arFilter["p1"]);
sort($arFilter["p1"], SORT_NUMERIC);
$arFilter["p2"] = array_unique($arFilter["p2"]);
sort($arFilter["p2"], SORT_NUMERIC);
?>

    <div class="container">
        <h1>Каталог техники</h1>
        <div class="sub_cats row">
            <div><a href="">40 тонн</a></div>
            <div><a href="">50 тонн</a></div>
            <div><a href="">65 тонн</a></div>
            <div><a href="">68 тонн</a></div>
            <div><a href="">70 тонн</a></div>
            <div><a href="">82,5 тонн</a></div>
            <div><a href="">82,5 тонн</a></div>
            <div><a href="">84 тонн</a></div>
            <div><a href="">85 тонн</a></div>
            <div><a href="">90 тонн</a></div>
            <div><a href="">93,8 тонн</a></div>
            <div><a href="">95 тонн</a></div>
            <div><a href="">112,5 тонн</a></div>
            <div><a href="">120 тонн</a></div>
            <div><a href="">131,6 тонн</a></div>
            <div><a href="">150 тонн</a></div>
            <div><a href="">160 тонн</a></div>
            <div><a href="">200 тонн</a></div>
            <div><a href="">250 тонн</a></div>
            <div><a href="">280 тонн</a></div>
            <div><a href="">300 тонн</a></div>
            <div><a href="">350 тонн</a></div>
            <div><a href="">400 тонн</a></div>
            <div><a href="">500 тонн</a></div>
            <div><a href="">750 тонн</a></div>
        </div>
    </div>

    <div class="cats__main">
        <div class="container">

            <div class="filter-btn">
                <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/filter1.svg"/>
            </div>

            <!--START SUB_CATS-->
            <accide class="sidebar">
                <div class="sidebar__box">
                    <div class="sidebar__title">Параметры</div>
                    <div class="sidebar__item">
                        <div class="sidebar__body"><strong>Вид техники</strong>
                            <label class="checkbox">
                                <input type="checkbox" name="">
                                <div class="input"> Мобильные краны</div>
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="">
                                <div class="input"> Гусеничные краны</div>
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="">
                                <div class="input"> Низкорамные тралы</div>
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="">
                                <div class="input"> Модульные платформы</div>
                            </label>
                        </div>
                        <div class="sidebar__body"><strong>Грузоподъемность т.</strong>
                            <div class="ranges">
                                <div class="ranges__inputs">
                                    <div class="amount-min">
                                        <input type="number" value="75">
                                    </div>
                                    <div class="amount-max">
                                        <input type="number" value="300">
                                    </div>
                                </div>
                                <div class="slider-range" data-min="40" data-max="750" data-val="[75, 300]"></div>
                            </div>
                        </div>
                        <div class="sidebar__body"><strong>Высота подъема, м.</strong>
                            <div class="ranges">
                                <div class="ranges__inputs">
                                    <div class="amount-min">
                                        <input type="number" value="15">
                                    </div>
                                    <div class="amount-max">
                                        <input type="number" value="70">
                                    </div>
                                </div>
                                <div class="slider-range" data-min="10" data-max="84" data-val="[15, 70]"></div>
                            </div><strong>Высота подъема, м.</strong>
                            <div class="ranges">
                                <div class="ranges__inputs">
                                    <div class="amount-min">
                                        <input type="number" value="50">
                                    </div>
                                    <div class="amount-max">
                                        <input type="number" value="60">
                                    </div>
                                </div>
                                <div class="slider-range" data-min="50" data-max="60" data-val="[50, 60]"></div>
                            </div>
                            <label class="btn btn--clear"><span>Очистить фильтр</span>
                                <input type="submit" value="Очистить фильтр">
                            </label>
                            <label class="btn btn--dark"><span>Показать</span>
                                <input type="submit" value="Показать">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="sidebar__box">
                    <div class="sidebar__title">Парк техники</div>
                    <div class="sidebar__item">
                        <div class="sidebar__body">
                            <h3 class="active">Мобильные краны Liebherr LTM</h3>
                            <ul class="active">
                                <li> <a href="">LTM 1040 (40 т.)</a></li>
                                <li> <a href="">LTM 1050 (50 т.)</a></li>
                                <li> <a href="">LTM 1070 (70 т.)</a></li>
                                <li> <a href="">LTM 1090 (90 т.)</a></li>
                                <li> <a href="">LTM 1095 (95 т.)</a></li>
                                <li> <a href="">LTM 1120 (120 т.)</a></li>
                                <li> <a href="">LTM 1250 (250 т.)</a></li>
                                <li> <a href="">LTM 1300 (300 т.)</a></li>
                                <li> <a href="">LTM 1400 (400 т.)</a></li>
                                <li> <a href="">LTM 1500 (500 т.)</a></li>
                                <li> <a href="">LTM 1750 (750 т.)</a></li>
                            </ul>
                            <h3>Гусеничные краны Liebherr LR</h3>
                            <ul>
                                <li> <a href="">LTM 1040 (40 т.)</a></li>
                                <li> <a href="">LTM 1050 (50 т.)</a></li>
                                <li> <a href="">LTM 1070 (70 т.)</a></li>
                                <li> <a href="">LTM 1090 (90 т.)</a></li>
                                <li> <a href="">LTM 1095 (95 т.)</a></li>
                                <li> <a href="">LTM 1120 (120 т.)</a></li>
                                <li> <a href="">LTM 1250 (250 т.)</a></li>
                                <li> <a href="">LTM 1300 (300 т.)</a></li>
                                <li> <a href="">LTM 1400 (400 т.)</a></li>
                                <li> <a href="">LTM 1500 (500 т.)</a></li>
                                <li> <a href="">LTM 1750 (750 т.)</a></li>
                            </ul>
                            <h3>Гусеничные краны Liebherr LR</h3>
                            <ul>
                                <li> <a href="">LTM 1040 (40 т.)</a></li>
                                <li> <a href="">LTM 1050 (50 т.)</a></li>
                                <li> <a href="">LTM 1070 (70 т.)</a></li>
                                <li> <a href="">LTM 1090 (90 т.)</a></li>
                                <li> <a href="">LTM 1095 (95 т.)</a></li>
                                <li> <a href="">LTM 1120 (120 т.)</a></li>
                                <li> <a href="">LTM 1250 (250 т.)</a></li>
                                <li> <a href="">LTM 1300 (300 т.)</a></li>
                                <li> <a href="">LTM 1400 (400 т.)</a></li>
                                <li> <a href="">LTM 1500 (500 т.)</a></li>
                                <li> <a href="">LTM 1750 (750 т.)</a></li>
                            </ul>
                            <h3>Гусеничные краны Liebherr LR</h3>
                            <ul>
                                <li> <a href="">LTM 1040 (40 т.)</a></li>
                                <li> <a href="">LTM 1050 (50 т.)</a></li>
                                <li> <a href="">LTM 1070 (70 т.)</a></li>
                                <li> <a href="">LTM 1090 (90 т.)</a></li>
                                <li> <a href="">LTM 1095 (95 т.)</a></li>
                                <li> <a href="">LTM 1120 (120 т.)</a></li>
                                <li> <a href="">LTM 1250 (250 т.)</a></li>
                                <li> <a href="">LTM 1300 (300 т.)</a></li>
                                <li> <a href="">LTM 1400 (400 т.)</a></li>
                                <li> <a href="">LTM 1500 (500 т.)</a></li>
                                <li> <a href="">LTM 1750 (750 т.)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </accide>
            <!--END SUB_CATS-->

            <!--START CATS__CONTENT-->
            <div class="cats__content">
                <form class="cats__filterbar" action="<?=$pureURI?>" method="GET">
                    <div class="cats__sort">
                        <img src="img/content/sorting.svg"/>
                        <select name="">
                            <option value="0">По умолчанию</option>
                            <option value="1" <?=$_GET["type"]==1?"selected":"";?>>Мобильные краны</option>
                            <option value="2" <?=$_GET["type"]==2?"selected":"";?>>Гусеничные краны</option>
                            <option value="3" <?=$_GET["type"]==3?"selected":"";?>>Низкорамный трал</option>
                            <option value="4" <?=$_GET["type"]==4?"selected":"";?>>Модульные платформы</option>
                        </select>
                    </div>
                    <div class="cats__viev">
                        <div class="cats__viev--item cats__viev--tile active">
                            <img src="img/content/viev--tile.svg"/>
                        </div>
                        <div class="cats__viev--item cats__viev--rows">
                            <img src="img/content/viev--rows.svg"/>
                        </div>
                    </div>
                </form>
                <div class="cats__items">
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="catalog__row"><a class="catalog__img" href="" style="background-image:url(img/content/catalog1.jpg)"></a><a class="catalog__title" href="">
                            <h3>Гусеничный кран Liebherr LR 1750</h3></a><a class="catalog__info" href="">
                            <div class="catalog__tr">
                                <p>Грузоподъемность:</p>
                                <p>40 тонн</p>
                            </div>
                            <div class="catalog__tr">
                                <p>Длина стрелы:</p>
                                <p>35 м</p>
                            </div>
                            <div class="catalog__more"><span>Все характеристики</span><img src="img/content/arrow.svg"/>
                            </div></a>
                        <div class="catalog__btn"><a class="btn btn--full" href="">Арендовать</a></div>
                    </div>
                    <div class="pagination"><span class="prev"><img src="img/content/arrow-g-l.svg"/></span><a class="active" href="">1</a><a href="">2</a><a href="">3</a><span></span><span></span><span></span><a href="">5</a><a href="">6</a><a href="">7</a><a class="next" href=""><img src="img/content/arrow-g-r.svg"/></a></div>
                </div>
            </div>
            <!--END CATS__CONTENT-->
        </div>
    </div>

    <!--///////////////////////////////-->

<div class="">
    <form action="<?=$pureURI?>" method="GET">
        <div class="filter-title">Фильтр</div>
        <div class="filter-column">
            <label>Тип:</label>
            <select class="select" name="type">
                <option value="0">выберите</option>
                <option value="1" <?=$_GET["type"]==1?"selected":"";?>>Мобильные краны</option>
                <option value="2" <?=$_GET["type"]==2?"selected":"";?>>Гусеничные краны</option>
                <option value="3" <?=$_GET["type"]==3?"selected":"";?>>Низкорамный трал</option>
                <option value="4" <?=$_GET["type"]==4?"selected":"";?>>Модульные платформы</option>
            </select>
        </div>

    	<div class="filter-column">
    		<label>Грузоподъемность (тонн):</label>
    		<select class="select" name="p1">
    			<option value="0">выберите</option>
    		<? foreach ($arFilter["p1"] as $value) { ?>
    			<option value="<?=$value?>" <?=$_GET["p1"]==$value?"selected":"";?>><?=$value?></option>
    		<? } ?>
    		</select>
    	</div>

    <? //if (!empty($arFilter["p2"])) { ?>
    	<div class="filter-column last-child">
    		<label>Высота подъема (м):</label>
    		<select class="select" name="p2">
    			<option value="0">выберите</option>
    		<? foreach ($arFilter["p2"] as $value) { ?>
    			<option value="<?=$value?>" <?=$_GET["p2"]==$value?"selected":"";?>><?=$value?></option>
    		<? } ?>
    		</select>
    	</div>
    <? //} ?>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function() {
	
	$(".filter select").change(function() {
		$(this).parents("form").submit();
	});
	
});
</script>

<ul class="catalog-tech clearfix">
<? if(count($arResult["ITEMS"])) { ?>
    <? foreach($arResult["ITEMS"] as $arItem) { ?>
        <?
        $price=strstr($arItem["PROPERTIES"]["PRICES"]["VALUE"], '/', true)
       /* global $USER;
        if($USER->IsAdmin()){
            echo '<pre>';
print_r($arItem["PROPERTIES"]["PRICES"]["VALUE"]);
            echo '</pre>';
        }*/
        ?>
    <li>
    	<a class="tech-img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
    		<span class="catalog-tech-image">
				<? $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array('width'=>260, 'height'=>140), BX_RESIZE_IMAGE_PROPORTIONAL, true);                ?>
				<img src="<?=$file['src']//rIMG($arItem["PREVIEW_PICTURE"]["SRC"], 5, 335, 206)?>" width="<?=$file['width']?>" height="<?=$file['height']?>" title="<?=$arItem["NAME"]?>" alt="<?=$arItem["NAME"]?>">
			</span>
    		<span class="catalog-tech-name"><?=$arItem["NAME"]?><span style='float: right'><?=(($price)?"От ".$price."руб":"договорная")?></span></span>
    	</a>
        <? if ($arItem["PROPERTIES"]["P1"]["VALUE"]) { ?>
   	            <span class="catalog-tech-param clearfix">
    		    <span class="float-right"><?=$arItem["PROPERTIES"]["P1"]["VALUE"]?></span>
    		    <span class="overflow-hidden">Макс. грузоподъемность</span>
    	    </span>
        <? } ?>
        <? if ($arItem["PROPERTIES"]["P2"]["VALUE"]) { ?>
    	    <span class="catalog-tech-param clearfix">
    		    <span class="float-right"><?=$arItem["PROPERTIES"]["P2"]["VALUE"]?></span>
    		    <span class="overflow-hidden">Макс. высота подъема</span>
    	    </span>
        <? } ?>
        <? if ($arItem["PROPERTIES"]["P3"]["VALUE"]) { ?>
    	    <span class="catalog-tech-param clearfix">
    		    <span class="float-right"><?=$arItem["PROPERTIES"]["P3"]["VALUE"]?></span>
    		    <span class="overflow-hidden">Макс. вылет</span>
    	    </span>
        <? } ?>
        <div class="item-buy">
            <a href="#buy-form_<?=$arItem["ID"]?>" class="item-buy-button-sect" rel="modal:open">Быстрый заказ</a>
        </div>

        <div  style="display: none" >
            <div id="buy-form_<?=$arItem["ID"]?>" class="buy-form fmodal">
                <h2><?=$arItem["NAME"];?></h2>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="text" name="phone" placeholder="Ваш телефон" required>					
					<p><input type="checkbox" class="agr">Подтвердите свое <a href="#" class="pers">согласие</a> на обработку персональных данных</p>
                    <input type="hidden" name="page" value="<?=$_SERVER['REQUEST_URI']?>">
                    <input type="hidden" name="tover" value="<?=$arItem["NAME"];?>">
                    <input type="hidden" name="action" value="email_order">
                    <div class="buy-form-messages success"></div>
                    <div class="buy-form-messages error"></div>
                    <input type="submit" value="Заказать">
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                var autoclose;
                $("#buy-form_<?=$arItem["ID"]?> form").submit(function() {
                    var form_data = $(this).serialize(); //собераем все данные из формы
                    $.ajax({
                        type: "POST", //Метод отправки
                        url: "/include/functions.php", //путь до php фаила отправителя
                        data: form_data,
                        success: function(data) {
                            if (data === 'done') {
                                $('.buy-form-messages.success').text('Спасибо за заказ! С Вами скоро свяжутся');
                                $('.buy-form-messages.success').show();
                                $('.buy-form-messages.error').hide();
                                $("#buy-form form")[0].reset();
                                autoclose = setTimeout(function () {
                                    $.fancybox.close();
                                }, 5000)
                            } else {
                                $('.buy-form-messages.error').text('Технические неполадки при отправке сообщения. Пожалуйста, свяжитесь с нами по телефону.');
                                $('.buy-form-messages.success').hide();
                                $('.buy-form-messages.error').show();
                            }
                        }
                    });
                    return false;
                });
                $('html').on('click', '#fancybox-close', function () {
                    clearTimeout(autoclose);
                })
            });
        </script>
    </li>
    <? } ?>
<? } else { ?>
	<?
	$fSections = CIBlockSection::GetList(
		false,
		Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" => $arResult["SECTION"]['PATH'][0]['ID'], "ACTIVE"=>"Y", "GLOBAL_ACTIVE"=>"Y", "SECTION_ACTIVE" => "Y"),
		false,
		Array("UF_HIDE_FILTER_MSG"),
		false
	);
	$flSections = $fSections->Fetch();
	if (!$flSections['UF_HIDE_FILTER_MSG']) { ?>
		<li style="width: 100%;">Вероятно у нас есть необходимая вам техника. Позвоните по телефону +7 (495) 226-20-30 и уточните ваши требования.</li>
	<? } ?>
	
<? } ?>
</ul>

<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
	<?=$arResult["NAV_STRING"]?>
<? } ?>

<?
// тексты описания из админки
if ($_SERVER['REQUEST_URI'] == '/tehnika/') {
    echo $arResult['DESCRIPTION'];
} elseif (!isset($_GET['PAGEN_1'])) {
	if ($arResult["SECTION"]['PATH'][0]['ID'] == 7) {
		if (!isset($arURI)) {
			$pureURI = $_SERVER["REQUEST_URI"];
			if (substr_count($pureURI, "?")) {
				$pos = strpos($pureURI, "?");
				$pureURI = substr($pureURI, 0, $pos);
			}
			$arURI = explode("/", $pureURI);
		}
		do {
			$cur_code = array_pop($arURI);
		} while(!$cur_code);

		$abcSections = CIBlockSection::GetList(
			false,
			Array("CODE" => $cur_code, "ACTIVE"=>"Y")
		);
		$getSomeInfo = $abcSections->Fetch();

		echo $getSomeInfo['DESCRIPTION'];
	} else {
		echo $arResult['SECTION']['PATH'][0]['DESCRIPTION'];
	}	
}
?>



<?
//$APPLICATION->SetTitle($arResult["SECTION"]["PATH"][0]['NAME']);
//$APPLICATION->SetPageProperty('title', $arResult["SECTION"]["PATH"][0]['NAME']);
?>