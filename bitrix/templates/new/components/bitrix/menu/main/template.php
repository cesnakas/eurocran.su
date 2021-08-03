<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="menu row">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</div></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<div class="item">
			<a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a>
				<div class="sub_menu">
		<?else:?>
			<div class="item">
			<a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a>
				<div class="sub_menu">
		<?endif?>
	<?else:?>
		<?if('ГЛАВНАЯ' !== $arItem["TEXT"]):?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<div class="item"><a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a></div>
			<?else:?>
				<div><a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a></div>
			<?endif;?>
		<?endif;?>
	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1):?>
	<?=str_repeat("</div></div>", ($previousLevel-1) );?>
<?endif?>
</nav>
<?endif?>