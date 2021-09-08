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
		"SEF_FOLDER" => SITE_DIR."tehnika/",
		"SEF_URL_TEMPLATES" => [
			"news" => "",
			"section" => "#SECTION_CODE#/",
			// "detail" => "detail.php?ELEMENT_ID=#ELEMENT_ID#",
			"detail" => "#ELEMENT_CODE#/"
		],
		"SECTION_ID" => $_REQUEST["CODE"],
		"ELEMENT_ID" => $_REQUEST["CODE"],
		"NEWS_COUNT" => "20",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N"
	]
);?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>