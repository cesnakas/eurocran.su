<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	
include('functions.php');

$arResult = array();
$arResult['PATH_TO_JS'] = dirname(__FILE__).'/js/';
$arResult['JS'] = GetJs($arResult['PATH_TO_JS']);

foreach ($arResult['JS'] as $arJs)
{
	$jsname = $arJs['NAME'];
	$arResult['VALUE'][$jsname]['-'] = ' ';
	foreach ($arJs['FILES'] as $arFile)
	{
		$arResult['VALUE'][$jsname][$arFile['NAME']] = $arFile['NAME'];
	}
}

$arComponentParameters = array(
	"PARAMETERS" => array(
		"JQ_JQUERY" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['jquery'],
			"DEFAULT" => "",
		),
		"JQ_EASING" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_EASING"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['easing'],
			"DEFAULT" => "",
		),
		"JQ_COLOR" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_COLOR"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['color'],
			"DEFAULT" => "",
		),
		"JQ_MOUSEWHEEL" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_MOUSEWHEEL"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['mousewheel'],
			"DEFAULT" => "",
		),
		"JQ_BGIFRAME" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_BGIFRAME"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['bgiframe'],
			"DEFAULT" => "",
		),
		"JQ_COOKIE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_COOKIE"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['cookie'],
			"DEFAULT" => "",
		),
		"JQ_AJAXUPLOAD" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_AJAXUPLOAD"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['ajaxupload'],
			"DEFAULT" => "",
		),
		"JQ_DROPSHADOW" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_DROPSHADOW"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['dropshadow'],
			"DEFAULT" => "",
		),
		"JQ_CORNER" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_CORNER"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['corner'],
			"DEFAULT" => "",
		),
		"JQ_CYCLE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_CYCLE"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['cycle'],
			"DEFAULT" => "",
		),
		"JQ_FORM" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_FORM"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['form'],
			"DEFAULT" => "",
		),
		"JQ_JCOMBOX" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_JCOMBOX"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['jcombox'],
			"DEFAULT" => "",
		),
		"JQ_SPIN" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_SPIN"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['spin'],
			"DEFAULT" => "",
		),
		"JQ_TOOLTIP" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_TOOLTIP"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['tooltip'],
			"DEFAULT" => "",
		),
		"JQ_FANCYBOX" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_FANCYBOX"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['fancybox'],
			"DEFAULT" => "",
		),
		"JQ_LIGHTBOX" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_LIGHTBOX"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['lightbox'],
			"DEFAULT" => "",
		),
		"JQ_HIGHSLIDE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_HIGHSLIDE"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['highslide'],
			"DEFAULT" => "",
		),
		"JQ_BALUPTON" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_BALUPTON"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['balupton'],
			"DEFAULT" => "",
		),
		"JQ_NFLIGHTBOX" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_NFLIGHTBOX"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['nflightbox'],
			"DEFAULT" => "",
		),
		"JQ_UI" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_UI"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['ui'],
			"DEFAULT" => "",
			"MULTIPLE" => "Y",
			"SIZE" => "5",
		),
		"JQ_JQUERYOTHER" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_JQUERYOTHER"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['jqueryother'],
			"DEFAULT" => "",
			"MULTIPLE" => "Y",
			"SIZE" => "5",
		),
		"JQ_OTHER" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SS_JQUERY_OTHER"),
			"TYPE" => "LIST",
			"VALUES" => $arResult['VALUE']['other'],
			"DEFAULT" => "",
			"MULTIPLE" => "Y",
			"SIZE" => "5",
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>3600),
		"DEBUG_MODE" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("SS_DEBUG_MODE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
	),
);
?>