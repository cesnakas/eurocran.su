<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<h2>Наши Объекты</h2>
<? foreach($arResult["ITEMS"] as $arItem) { ?>
<p>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><br>
	<?=$arItem["PREVIEW_TEXT"]?>
</p>
<? } ?>
<p><a class="more" href="/objekty/">Все объекты</a></p>