<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

	<!--START INFO-BLOCK-->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "objects-single",
        Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_ELEMENT_CHAIN" => "Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "Y",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "3600",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "Y",
			"ELEMENT_CODE" => "",
			"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
			"FIELD_CODE" => array(
				"ID",
				"DETAIL_PICTURE",
				'ITEMS'
            ),
			"FILE_404" => "",
			"GROUP_PERMISSIONS" => array("1"),
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"PAGER_BASE_LINK" => "",
			"PAGER_BASE_LINK_ENABLE" => "Y",
			"PAGER_PARAMS_NAME" => "arrPager",
			"PAGER_SHOW_ALL" => "Y",
			"PAGER_TEMPLATE" => "",
			"PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array("ADRESS","TITLE","DESCRIPTION","KEYWORDS",""),
            "SET_BROWSER_TITLE" => "Y",
            "SET_CANONICAL_URL" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "Y",
            "SHARE_HANDLERS" => array("delicious"),
            "SHARE_HIDE" => "N",
            "SHARE_SHORTEN_URL_KEY" => "",
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_TEMPLATE" => "",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "Y",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "Y"
        )
    );?>
	<!--END INFO-BLOCK-->

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>