<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? require($_SERVER['DOCUMENT_ROOT'].'/tehnika/meta.php');
$page = $APPLICATION->GetCurPage();?>
<?
if($page=="/tehnika/") { ?>
	<h1>Аренда спецтехники </h1>
<?} else {
	if (isset($seo_h1) && $seo_h1 != '') { ?>
		<h1><? echo $seo_h1; ?></h1>
	<? } else { ?>
		<h1><? echo $arResult["SECTION"]["PATH"][0]['NAME'];//$arResult["NAME"]; ?></h1>
	<? }
}?>




<?
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

<div class="filter clearfix"><form action="<?=$pureURI?>" method="GET">
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
</form></div>

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