<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0 ? '<span class="sep"></span>' : '<span class="sep"></span>');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1){
		$strReturn .= '
			<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
				<span itemprop="name">'.$title.'</span>
			</a>
			'.$arrow.'
			<meta itemprop="position" content="'.($index + 1).'" />';
	} else {
		$strReturn .= '
			<span class="current">'.$title.'</span>';
	}
}

$strReturn .= '</div>';

return $strReturn;
?>