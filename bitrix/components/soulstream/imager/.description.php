<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("SS_IMAGER_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("SS_IMAGER_COMPONENT_DESC"),
	"ICON" => "/images/imager.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "soulstream",
		"NAME" => GetMessage("SS_IMAGER_COMPONENT_COMPANY"),
		"SORT" => 0,
		"CHILD" => array(
			"ID" => "imager",
			"NAME" => GetMessage("SS_IMAGER_COMPONENT_CATEGORY"),
			"SORT" => 10,
			"CHILD" => array(
				"ID" => "imager_cmpx",
			),
		),
	),
);

?>