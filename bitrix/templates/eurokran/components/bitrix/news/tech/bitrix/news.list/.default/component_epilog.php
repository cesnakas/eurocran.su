<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
    if($arResult["SECTION"]["PATH"][0]["NAME"]) {
        $q = CIBlockSection::GetList(Array(), Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "ID"=>$arResult["SECTION"]["PATH"][0]['ID']), false, Array("UF_TITLE", "UF_DESCRIPTION", "UF_KEYWORDS"));
        if ($a = $q->GetNext()) {
            $GLOBALS['APPLICATION']->SetTitle($a["UF_TITLE"]);
            $APPLICATION->SetPageProperty('title', $a["UF_TITLE"]);
            $APPLICATION->SetTitle($a["UF_TITLE"]);
        } else {
            $GLOBALS['APPLICATION']->SetTitle($arResult["SECTION"]["PATH"][0]["NAME"]);
            $APPLICATION->SetPageProperty('title', $arResult["SECTION"]["PATH"][0]["NAME"]);
            $APPLICATION->SetTitle($arResult["SECTION"]["PATH"][0]["NAME"]);
        }
    } else {
        $GLOBALS['APPLICATION']->SetTitle("Аренда строительной техники в Москве доступная стоимость, минимальные сроки, высокоекачество предоставляемой техники | eurocran.su");
        $APPLICATION->SetPageProperty('title', "Аренда строительной техники в Москве доступная стоимость, минимальные сроки, высокоекачество предоставляемой техники | eurocran.su");
        $APPLICATION->SetTitle("Аренда строительной техники в Москве доступная стоимость, минимальные сроки, высокоекачество предоставляемой техники | eurocran.su");
    }

?>

