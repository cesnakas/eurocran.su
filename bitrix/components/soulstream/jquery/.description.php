<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("SS_JQUERY_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("SS_JQUERY_COMPONENT_DESC"),
	"ICON" => "/images/jquery.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "soulstream",
		"NAME" => GetMessage("SS_JQUERY_COMPONENT_COMPANY"),
		"SORT" => 0,
		"CHILD" => array(
			"ID" => "jquery",
			"NAME" => GetMessage("SS_JQUERY_COMPONENT_CATEGORY"),
			"SORT" => 20,
			"CHILD" => array(
				"ID" => "jquery_cmpx",
			),
		),
	),
);
?>