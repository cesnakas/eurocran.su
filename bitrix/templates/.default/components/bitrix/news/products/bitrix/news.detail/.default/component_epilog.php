<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
$q = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "ID"=>$arResult["ID"]), false, Array("nTopCount"=>1), Array("ID", "PROPERTY_TITLE", "PROPERTY_DESCRIPTION", "PROPERTY_KEYWORDS"));
if ($a = $q->GetNext()) {

    $GLOBALS['APPLICATION']->SetTitle($a["PROPERTY_TITLE_VALUE"]);
    $APPLICATION->SetPageProperty('title', $a["PROPERTY_TITLE_VALUE"]);
    $APPLICATION->SetTitle($a["PROPERTY_TITLE_VALUE"]);

} else {
    $GLOBALS['APPLICATION']->SetTitle($arResult["NAME"]);
    $APPLICATION->SetPageProperty('title', $arResult["NAME"]);
    $APPLICATION->SetTitle($arResult["NAME"]);

}



?>