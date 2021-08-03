<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (!empty($arResult)) { ?>
<div class="h-menu"><ul class="clearfix">

<? foreach($arResult as $arItem) { ?>

	<?if($arItem["SELECTED"]) { ?>
		<li class="active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<? } else { ?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<? } ?>
	
<? } ?>

</ul></div>
<? } ?>