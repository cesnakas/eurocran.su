<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!isset($arParams["CACHE_TIME"]))
{
	$arParams["CACHE_TIME"] = 3600;
}

$cache_id = implode(",", $arParams);
$cache_path = SITE_ID.'/soulstream/jquery/';

if($arParams['CACHE_TYPE'] == 'N')
{
	CPHPCache::Clean($arParams['CACHE_TIME'], $cache_id, $cache_path);
}

$obCache = new CPHPCache;
if($obCache->InitCache($arParams['CACHE_TIME'], $cache_id, $cache_path)){
    $vars = $obCache->GetVars();
    $arResult = $vars["CACHE"];
}
if($obCache->StartDataCache()){

	include('functions.php');
	
	$arResult = array();
	$arResult['JS'] = array();
	$arResult['CSS'] = array();
	
	$arResult['PATH_TO_COMPONENT'] = $this->GetPath();
	
	// parse $arParams array & get name of files for include
	foreach ($arParams as $code=>$item)
	{
		if(strpos($code, 'JQ_') !== false && strpos($code, '~JQ_') === false && $item && $item != '-')
		{
			list($prefix, $jsname) = explode('_', $code);
			
			if(is_array($item))
			{
				foreach ($item as $it)
				{
					if($it != '-')
					{
						$arResult['JS'][] = $arResult['PATH_TO_COMPONENT'].'/js/'.strtolower($jsname).'/'.$it;
						$arResult['CSS'][] = $arResult['PATH_TO_COMPONENT'].'/js/'.strtolower($jsname).'/'.JsToCss($it);
					}
				}
			}
			else
			{
				$arResult['JS'][] = $arResult['PATH_TO_COMPONENT'].'/js/'.strtolower($jsname).'/'.$item;
				$arResult['CSS'][] = $arResult['PATH_TO_COMPONENT'].'/js/'.strtolower($jsname).'/'.JsToCss($item);
			}
		}
	}
	
	// check css files
	foreach ($arResult['CSS'] as $src)
	{
		if(is_file($_SERVER['DOCUMENT_ROOT'].$src))
		{
			$arResult['ADD2HEAD'][] = "<link href=\"".$src."\" type=\"text/css\" rel=\"stylesheet\" />";
		}
		
	}
	
	// check js files
	foreach ($arResult['JS'] as $src)
	{
		if(is_file($_SERVER['DOCUMENT_ROOT'].$src))
		{
			$arResult['ADD2HEAD'][] = "<script type=\"text/javascript\" src=\"".$src."\"></script>";
		}
	}

	// set cache
	$obCache->EndDataCache(array(
        "CACHE"=>$arResult,
    ));
}

// add to head js and css files
foreach ($arResult['ADD2HEAD'] as $string)
{
	$GLOBALS["APPLICATION"]->AddHeadString($string, true);
}

$this->IncludeComponentTemplate();
?>