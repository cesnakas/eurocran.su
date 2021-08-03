<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult['IMAGER']['SRC']):?>
	<img src="<?=$arResult['IMAGER']['SRC']?>" width="<?=$arResult['IMAGER']['WIDTH']?>" height="<?=$arResult['IMAGER']['HEIGHT']?>" alt="" />
<?else:?>
	<?if($arParams['DEBUG']):?>
		<?ShowError(implode("<br />", $arResult['ERROR']))?>
	<?endif;?>
<?endif;?>