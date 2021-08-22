<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var \CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!--START OBJECTS-->
<div class="objects-slider">
    <div class="container">

        <h2>Другие объекты</h2>

        <div class="objects-slider__arrows"></div>
        <div class="objects-slider" id="objects-slider">

			<?foreach($arResult["ITEMS"] as $arItem):?>
            <a class="objects-slider__item" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                <picture>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>"/>
                </picture>
                <div class="objects-slider__info">
                    <h2><?= $arItem["NAME"] ?></h2>
                </div>
            </a>
			<?endforeach;?>

        </div>
        <div class="objects-btn">
            <a class="btn" href="/objekty/">Смотреть все </a>

			<?/* if ($arParams["DISPLAY_BOTTOM_PAGER"]) { */?><!--
				<?/*= $arResult["NAV_STRING"] */?>
			--><?/* } */?>
        </div>
    </div>
</div>
<!--END OBJECTS-->