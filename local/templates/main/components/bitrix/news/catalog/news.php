<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?php
/*
global $arrFilter;
$arrFilter = [
	// 'FILTER_PROPERTY_CODE' => []
];
*/
$arFilter = Array();
global $arFilter;
$arParams["FILTER_NAME"] = "arFilter";

if ($_GET["type"] && $_GET["type"] != 0) { $arFilter["SECTION_ID"] = $_GET["type"]; }
if ($_GET["p1"] && $_GET["p1"] != 0) { $arFilter["PROPERTY_P1"] = $_GET["p1"]; }
if ($_GET["p2"] && $_GET["p2"] != 0) { $arFilter["PROPERTY_P2"] = $_GET["p2"]; }
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

		<?php
        $curpage = $APPLICATION->GetCurPage();
		$string = $APPLICATION->GetCurPageParam();
		$section = isset($arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"]) ? $arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"] : $arParams["IBLOCK_URL"];
		?>

		<? foreach ($arFilter["p1"] as $value) { ?>
            <div>
                <a<?if(strpos($string, 'arrFilter_2_MIN='.$value.'&'.'arrFilter_2_MAX='.$value) !== false){echo " class='active'";}?> href="<?=$section.'?arrFilter_2_MIN='.$value.'&arrFilter_2_MAX='.$value.'&set_filter=Показать'?>"><?=$value?> тонн</a>
            </div>
		<? } ?>

		<!--
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
		-->
	</div>
</div>

<div class="cats__main">
	<div class="container">

		<div class="filter-btn">
			<img src="img/content/filter1.svg"/>
		</div>

		<aside class="sidebar">
		<?$APPLICATION->IncludeComponent(
			'bitrix:catalog.filter',
			'',
			Array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"FILTER_NAME" => $arParams["FILTER_NAME"],
				"FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
				"PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			),
			$component
		);?>
		</aside>

<?php
$arParams["SET_TITLE"] = "N";
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
		"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
		"NEWS_COUNT"	=>	$arParams["NEWS_COUNT"],
		"SORT_BY1"	=>	$arParams["SORT_BY1"],
		"SORT_ORDER1"	=>	$arParams["SORT_ORDER1"],
		"SORT_BY2"	=>	$arParams["SORT_BY2"],
		"SORT_ORDER2"	=>	$arParams["SORT_ORDER2"],
		"FIELD_CODE"	=>	$arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE"	=>	$arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL"	=>	$arParams["DISPLAY_PANEL"],
		"SET_TITLE"	=>	$arParams["SET_TITLE"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN"	=>	$arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
		"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
		"CACHE_FILTER"	=>	$arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER"	=>	$arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER"	=>	$arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE"	=>	$arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE"	=>	$arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS"	=>	$arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING"	=>	$arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"DISPLAY_DATE"	=>	$arParams["DISPLAY_DATE"],
		"DISPLAY_NAME"	=>	"Y",
		"DISPLAY_PICTURE"	=>	$arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT"	=>	$arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN"	=>	$arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT"	=>	$arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS"	=>	$arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS"	=>	$arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME"	=>	$arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL"	=>	$arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES"	=>	$arParams["CHECK_DATES"],
	),
	$component
);?>

	</div>
</div>