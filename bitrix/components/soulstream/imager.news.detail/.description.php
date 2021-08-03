<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_DETAIL"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_DETAIL_DESC"),
	"ICON" => "/images/news_detail.gif",
	"SORT" => 30,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "soulstream",
		"CHILD" => array(
			"ID" => "ss_imager_news",
			"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
			"SORT" => 10,
			"CHILD" => array(
				"ID" => "ss_imager_news_cmpx",
			),
		),
	),
);

?>