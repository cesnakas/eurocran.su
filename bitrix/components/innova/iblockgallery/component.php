<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	CModule::IncludeModule("iblock");

	$componentPath = $this->GetPath();
	
	
	CJSCore::RegisterExt('INNOVA_IBLOCKGALLERY', array(
			'js' => $componentPath.'/lib/min/tiny-slider.js',
			'css' => $componentPath."/lib/tiny-slider.css",
			'rel' => array()
	)); 
	CUtil::InitJSCore(array('INNOVA_IBLOCKGALLERY'));
	
	CJSCore::RegisterExt('INNOVA_IBLOCKGALLERY_RESIZESENSOR', array(
			'js' => array($componentPath.'/lib/ElementQueries.js', $componentPath.'/lib/ResizeSensor.js'),
			'rel' => array()
	)); 
	CUtil::InitJSCore(array('INNOVA_IBLOCKGALLERY_RESIZESENSOR'));
	
	CJSCore::RegisterExt('INNOVA_IBLOCKGALLERY_ISOTOP', array(
			'js' => $componentPath.'/lib/isotope.pkgd.min.js',
			'rel' => array()
	)); 
	CUtil::InitJSCore(array('INNOVA_IBLOCKGALLERY_ISOTOP'));
	
	CJSCore::RegisterExt('INNOVA_IBLOCKGALLERY_MEDIABOX', array(
			'js' => $componentPath.'/lib/wa-mediabox.min.js',
			'css' => $componentPath."/lib/wa-mediabox.min.css",
			'rel' => array()
	)); 
	CUtil::InitJSCore(array('INNOVA_IBLOCKGALLERY_MEDIABOX'));
	
	if(empty($arParams["TITLE_HOVER"])) $arParams["TITLE_HOVER"] = 'Y';
	if(empty($arParams["DESCRIPTION"])) $arParams["DESCRIPTION"] = 'Y';
	if(empty($arParams["DESCRIPTION_MAX"])) $arParams["DESCRIPTION_MAX"] = 200;
	if(empty($arParams["COUNT_COLS"]) or !is_numeric($arParams["COUNT_COLS"])) $arParams["COUNT_COLS"] = 3;
	if(empty($arParams["COUNT_COLS_MOB"]) or !is_numeric($arParams["COUNT_COLS_MOB"])) $arParams["COUNT_COLS_MOB"] = 2;
	if(empty($arParams["COUNT_IMAGE_PAGE"]) or !is_numeric($arParams["COUNT_IMAGE_PAGE"])) $arParams["COUNT_IMAGE_PAGE"] = 6;
	if(empty($arParams["COUNT_IMAGE"]) or !is_numeric($arParams["COUNT_IMAGE"])) $arParams["COUNT_IMAGE"] = 18;
		
	if(!empty($arParams["IBLOCK_ID"])) {
		
		$arResult['ITEMS'] = array();
		
		$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
		$arNavParam = array('nPageSize' => $arParams["COUNT_IMAGE_PAGE"]);

		$arNavParam['nPageSize'] = $arParams["COUNT_IMAGE"];
		$arNavParam['iNumPage'] = 1;
		
		$arResult['ALL_ITEMS'] = CIBlockElement::GetList(array(), $arFilter, array(), false,  array('ID', 'NAME')); 
		
		if($arResult['ALL_ITEMS'] > $arParams["COUNT_IMAGE"]) $arResult['ALL_ITEMS'] = $arParams["COUNT_IMAGE"];
		
		$res = CIBlockElement::GetList(array('SORT'=>'ASC'), $arFilter, false, $arNavParam);
		while($ob = $res->GetNextElement()) {
			$arFields = $ob->GetFields();
			$arProps = $ob->GetProperties();
			$arResult['ITEMS'][$arFields['ID']] = $arFields;
			$arResult['ITEMS'][$arFields['ID']]['PROPERTIES'] = $arProps;
		}
	}
	
	$this->IncludeComponentTemplate();
?>