<?php
$this->__component->arResultCacheKeys = array_merge($this->__component->arResultCacheKeys, array('ID', 'IBLOCK_ID', 'DISPLAY_PROPERTIES'));
foreach($arResult['ITEMS'] AS &$arItem){
	$arItem['PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width' => 410, 'height' => 250), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, false);
	$arItem['PRICES'] = $arItem['PROPERTIES']['PRICES'];
}
$ID = 10;
$res = CIBlockElement::GetList(Array("NAME"=>"ASC","RAND"=>"ASC"), Array("IBLOCK_ID"=>$ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"), false, Array(), Array("NAME", "PREVIEW_TEXT", "PROPERTY_CATALOG_SECTION"));
while($ob = $res->GetNextElement()){
	$arrF = $ob->GetFields();
	if($arrF["PROPERTY_CATALOG_SECTION_VALUE"] == $arResult["SECTION"]["PATH"][0]["ID"]){
		$arItem['SECTION_VALUE'] = $arrF["PROPERTY_CATALOG_SECTION_VALUE"];
		break;
	}
}
?>