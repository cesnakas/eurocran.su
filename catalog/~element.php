<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

	<?$APPLICATION->IncludeComponent(
		'bitrix:news.detail',
		'catalog-single',
		[
			'IBLOCK_TYPE' => 'catalog',
			'IBLOCK_ID' => '1',
			'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
			'ELEMENT_CODE' => $_REQUEST['ELEMENT_CODE'],
			'FIELD_CODE' => ['ID',''],
			'PROPERTY_CODE' => ['PHOTO','P1']
		]
	);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>