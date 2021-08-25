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
		'SEF_FOLDER' => '/catalog/',
		'SEF_URL_TEMPLATES' => [
			'news' => '',
			'section' => '#SECTION_CODE#/',
			'detail' => '~element.php?ELEMENT_ID=#ELEMENT_ID#',
		]
	]
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>