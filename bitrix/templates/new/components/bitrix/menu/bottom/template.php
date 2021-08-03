<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!count($arResult)) return;?>

<div class="list">
<? foreach($arResult as $arItem): ?>
	<div><a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a></div>
<? endforeach; ?>
</div>