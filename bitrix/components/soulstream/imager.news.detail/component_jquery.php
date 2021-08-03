<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arScript = array($arParams['IMAGER_DETAIL_SCRIPT'], $arParams['IMAGER_GALLERY_DETAIL_SCRIPT']);

$Jquery    = $arParams['IMAGER_INCLUDE_JQUERY'] == 'Y' ? 'jquery-1.4.2.min.js'  : '';
$Fancybox  = $arParams['IMAGER_INCLUDE_SCRIPT'] == 'Y' && in_array('fancybox',  $arScript) ? 'jquery.fancybox-1.2.6.js'  : '';
$Highslide = $arParams['IMAGER_INCLUDE_SCRIPT'] == 'Y' && in_array('highslide', $arScript) ? 'highslide-with-gallery.js' : '';
$Lightbox  = $arParams['IMAGER_INCLUDE_SCRIPT'] == 'Y' && in_array('lightbox',  $arScript) ? 'jquery.lightbox-0.5.js'    : '';
$Balupton  = $arParams['IMAGER_INCLUDE_SCRIPT'] == 'Y' && in_array('balupton',  $arScript) ? 'jquery.lightbox-1.3.7.js'  : '';

if($Jquery || $Fancybox || $Lightbox || $Highslide || $Balupton)
{
	$APPLICATION->IncludeComponent("soulstream:jquery", "",	array(
		"JQ_JQUERY" => $Jquery,
		"JQ_EASING" => "-",
		"JQ_COLOR" => "-",
		"JQ_MOUSEWHEEL" => "-",
		"JQ_BGIFRAME" => "-",
		"JQ_COOKIE" => "-",
		"JQ_AJAXUPLOAD" => "-",
		"JQ_DROPSHADOW" => "-",
		"JQ_CORNER" => "-",
		"JQ_CYCLE" => "-",
		"JQ_FORM" => "-",
		"JQ_JCOMBOX" => "-",
		"JQ_SPIN" => "-",
		"JQ_TOOLTIP" => "-",
		"JQ_FANCYBOX" => $Fancybox,
		"JQ_LIGHTBOX" => $Lightbox,
		"JQ_HIGHSLIDE" => $Highslide,
		"JQ_BALUPTON" => $Balupton,
		"JQ_UI" => Array("-"),
		"JQ_OTHER" => Array("-"),
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "86400",
		"DEBUG_MODE" => "N" 
	), false, array("HIDE_ICONS"=>"Y"));
}
?>