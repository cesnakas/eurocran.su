<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спецтехника ООО \"Компания ЕвроКран\" на объектах");
$APPLICATION->SetPageProperty("description", "Тендеры и объекты, на которых работали наши мобильные краны Liebherr. Фотоотчет компании OOO «ЕвроКран».");
$APPLICATION->SetPageProperty("title", "Спецтехника Liebherr на объектах - фото - ООО \"Компания ЕвроКран\"");
?>

    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news",
        "obj",
        array(
            "SEF_MODE" => "Y",
            "SEF_FOLDER" => SITE_DIR."objekty/",
            "SEF_URL_TEMPLATES" => array(
                "news" => "",
                "section" => "#SECTION_CODE#/",
                "detail" => "detail.php?ELEMENT_ID=#ELEMENT_ID#",
            ),

            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "2",
            "NEWS_COUNT" => "15",
            "USE_SEARCH" => "N",
            "USE_RSS" => "N",
            "USE_RATING" => "N",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "ID",
            "SORT_ORDER2" => "ASC",
            "CHECK_DATES" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "SET_TITLE" => "Y",
            "SET_STATUS_404" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "USE_PERMISSIONS" => "N",
            "PREVIEW_TRUNCATE_LEN" => "",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "LIST_PROPERTY_CODE" => array(
                0 => "ADRESS",
                1 => "",
            ),
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "DISPLAY_NAME" => "Y",
            "META_KEYWORDS" => "-",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_PROPERTY_CODE" => array(
                0 => "ADRESS",
                1 => "",
            ),
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PAGER_TEMPLATE" => "",
            "DETAIL_PAGER_SHOW_ALL" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "show-more",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "COMPONENT_TEMPLATE" => "objects",
            "SET_LAST_MODIFIED" => "N",
            "ADD_ELEMENT_CHAIN" => "Y",
            "STRICT_SECTION_CHECK" => "N",
            "DETAIL_SET_CANONICAL_URL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => "",
        ),
        false
    );
    ?>

	<!--START INFO-BLOCK-->
	<div class="info-block">
		<div class="container">
			<?php
			$APPLICATION->IncludeFile(
				SITE_TEMPLATE_PATH.'/include/objects/info-block.php',
				[],
				['SHOW_BORDER' => true, 'MODE' => 'text']
			);?>
		</div>
	</div>
	<!--END INFO-BLOCK-->

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>