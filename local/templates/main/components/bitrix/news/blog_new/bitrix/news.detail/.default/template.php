<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="about-single">
    <div class="container">

        <h1><?=$arResult["NAME"]?></h1>

        <p><?=$arResult["PROPERTIES"]["DIOR_DESCRIPT"]["VALUE"]?></p>

        <div class="img-grid">
			<?if(count($arResult["PROPERTIES"]["PHOTO"]["VALUE"]) > 0 && intval($arResult["PROPERTIES"]["PHOTO"]["VALUE"][0]) > 0):?>
				<?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo):?>
                <div>
                    <img src="<?=CFile::GetPath($photo)?>"/>
                </div>
				<?endforeach;?>
			<?endif;?>
        </div>

		<?=$arResult["DETAIL_TEXT"];?>

    </div>
</div>