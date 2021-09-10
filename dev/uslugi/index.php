<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Компания Еврокран предлагает аренду спецтехники выгодных условиях. Поможем Вам реализовать строительные и грузоподъемные задачи без значительных финансовых трат. Работаем по Москве и Московской области.");
$APPLICATION->SetTitle("Услуги | eurocran.su");
?>

<?php
$APPLICATION->IncludeComponent(
	'bitrix:news',
	'uslugi',
	[
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => SITE_DIR."uslugi/",
		"SEF_URL_TEMPLATES" => [
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#ELEMENT_CODE#/",
		],
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "11",
		"NEWS_COUNT" => "9",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"DISPLAY_DATE" => "N",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
	],
	false
);?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>