<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="catalog clearfix">
<? foreach($arResult["ITEMS"] as $arItem) { ?>
<li>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<span class="catalog-image-block">
		   <span class="catalog-img"><img src="<?=rIMG($arItem["PREVIEW_PICTURE"]["ID"], 5, 235, 138)?>" width="235" height="138" alt=""></span>
		   <span class="catalog-img-note"><?=$arItem["PREVIEW_TEXT"]?></span>
		</span>
		<span class="catalog-name"><?=$arItem["NAME"]?></span>
		<span class="catalog-addr"><?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?></span>
	</a>
</li>
<? } ?>
</ul>

<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
	<?=$arResult["NAV_STRING"]?>
<? } ?>