<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news",
	"blog_new",
	[
		"IBLOCK_ID" => "5",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/blog/",
		"SEF_URL_TEMPLATES" => [
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#ELEMENT_CODE#/",
		],
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"NEWS_COUNT" => "15",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"USE_SEARCH" => "N",
		"USE_REVIEW" => "N",
		"CHECK_DATES" => "Y",
		// news.list
		"PREVIEW_TRUNCATE_LEN" => "100",
		// news.detail
		"DISPLAY_NAME" => "Y",
		// Other params
		"STRICT_SECTION_CHECK" => "Y",
		"COMPONENT_TEMPLATE" => "blog_new",
	],
	false
);
?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>