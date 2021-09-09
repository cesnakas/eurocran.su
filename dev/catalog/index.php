<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news",
	"catalog_test",
	[
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => SITE_DIR."catalog/",
		"SEF_URL_TEMPLATES" => [
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/"
		],
		"SECTION_ID" => $_REQUEST["ID"],
		"ELEMENT_ID" => $_REQUEST["CODE"],
		"NEWS_COUNT" => "20",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"DETAIL_PROPERTY_CODE" => [
			"PHOTO",
			""
		],
		"USE_FILTER" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "N"
	]
);?>

<?/*$APPLICATION->IncludeComponent(
	"bitrix:news",
	"catalog_test",
	Array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("",""),
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_ID" => $_REQUEST["CODE"],
		"FILTER_FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array("",""),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SECTION_ID" => $_REQUEST["CODE"],
		"SEF_FOLDER" => SITE_DIR."tehnika/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#ELEMENT_CODE#/"
		),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "Y",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N"
	)
);*/?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>