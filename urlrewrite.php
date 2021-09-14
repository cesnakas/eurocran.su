<?php
$arUrlRewrite = [
	1 => [
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/catalog/index.php",
		"SORT" => 100,
	],
	2 => [
		"CONDITION" => "#^\\??(.*)#",
		"RULE" => "&$1",
		"ID" => "bitrix:catalog.smart.filter",
		"PATH" => "/local/templates/main/components/bitrix/news/cat/section.php",
		"SORT" => 100,
	],
	3 => [
		"CONDITION" => "#^/uslugi/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/uslugi/index.php",
		"SORT" => 100,
	],
	4 => [
		"CONDITION" => "#^/objekty/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/objekty/index.php",
		"SORT" => 100,
	],
	5 => [
		"CONDITION" => "#^/stati/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/stati/index.php",
		"SORT" => 100,
	],
];
