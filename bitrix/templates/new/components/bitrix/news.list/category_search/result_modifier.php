<?php
$this->__component->arResultCacheKeys = array_merge($this->__component->arResultCacheKeys, array('ID', 'IBLOCK_ID', 'DISPLAY_PROPERTIES'));
foreach($arResult['ITEMS'] AS &$arItem){
	$arItem['PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width' => 410, 'height' => 250), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, false);
	$arItem['PRICES'] = $arItem['PROPERTIES']['PRICES'];
}
?>