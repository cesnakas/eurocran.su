<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

<?php
$APPLICATION->IncludeComponent(
	'bitrix:news',
	'catalog',
	[
		'IBLOCK_TYPE' => 'catalog',
		'IBLOCK_ID' => '1',
		'SEF_MODE' => 'Y',
		'SEF_FOLDER' => SITE_DIR.'tehnika/',
		'SEF_URL_TEMPLATES' => [
			'news' => '',
			'section' => '#SECTION_CODE#/',
			'detail' => 'detail.php?ELEMENT_ID=#ELEMENT_ID#',
		],
		'NEWS_COUNT' => '50',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N'
	]
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>