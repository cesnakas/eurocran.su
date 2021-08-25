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
		'SEF_FOLDER' => '/catalog/~index.php/',
		'SEF_URL_TEMPLATES' => [
			'news' => '',
			'section' => '#SECTION_CODE#/',
			'detail' => '#ELEMENT_CODE#/', // '~detail.php?ELEMENT_ID=#ELEMENT_ID#',
		],
		'SECTION_ID' => $_REQUEST['CODE'],
		'ELEMENT_ID' => $_REQUEST['ID'],
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'FIELD_CODE' => [''],
		'DETAIL_PROPERTY_CODE' => ['PARAMS','PHOTO','PDF','PDF2','P1','P2','P3','TYPE','NAMEWIDE','TITLE','DESCRIPTION','KEYWORDS','H1_TITLE','PRICES','PRICES_DET','INHOME','DETAIL_TEXT','PREVIEW_TEXT']
	]
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>