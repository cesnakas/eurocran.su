<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

	<!--START INFO-BLOCK-->
    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "blog-single",
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
            "IBLOCK_ID" => "5",
            "IBLOCK_TYPE" => "stati",
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

	<!--START OBJECTS-->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "blog-slider",
        array(
            "IBLOCK_TYPE" => "blog",
            "IBLOCK_ID" => "5",
            "NEWS_COUNT" => "9",
            "SORT_BY1" => 'ID',
            "SORT_ORDER1" => 'ASC',
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "ID",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "DESCRIPTION",
                2 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "~detail.php?ELEMENT_ID=#ELEMENT_ID#",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => '',
            "PARENT_SECTION_CODE" => "",

            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "INCLUDE_SUBSECTIONS" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "show-more",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "COMPONENT_TEMPLATE" => "",
            "STRICT_SECTION_CHECK" => "N",
            "FILE_404" => ""
        ),
        false
    );?>
    <!--END OBJECTS-->

	<!--START MAP-->
	<div class="map"></div>
	<!--END MAP-->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>