<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

	<?php
	$APPLICATION->IncludeComponent(
		'bitrix:news',
		'cat',
		[
			'IBLOCK_ID' => '1',
			'IBLOCK_TYPE' => 'catalog'
		],
		false
	);
	?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>