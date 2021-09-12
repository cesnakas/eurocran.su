<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

    <div class="catalog">
        <div class="container">
            <div class="g-title">
                <h2>Каталог техники</h2>
            </div>
            <div class="catalog__arrows"></div>
            <div class="catalog__dots"></div>
        </div>
        <div class="catalog__slider" id="catalog__slider">

            <? foreach($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$arFileTmp = CFile::ResizeImageGet(
					$arItem["PREVIEW_PICTURE"],
					array("width" => 330, "height" => 200),
					BX_RESIZE_IMAGE_EXACT,
					true,
					false
				);
				?>
            <div class="catalog__item">
                <div class="catalog__row">
                    <div class="catalog__img" style="background:url(<?=$arItem["PREVIEW_PICTURE"]['SRC']?>) 0 0 no-repeat;background-size:cover;"></div>
                    <div class="catalog__title">
                        <h3><?=$arItem['NAME']?></h3>
                    </div>
                    <div class="catalog__info">
	                    <? if(!empty($arItem['PROPERTIES']['P1']['VALUE'])): ?>
                        <div class="catalog__tr">
                            <p><?=$arItem['PROPERTIES']['P1']['NAME']?>:</p>
                            <p><?=$arItem['PROPERTIES']['P1']['VALUE']?></p>
                        </div>
	                    <? endif; ?>
		                <? if(!empty($arItem['PROPERTIES']['P2']['VALUE'])): ?>
                        <div class="catalog__tr">
                            <p><?=$arItem['PROPERTIES']['P2']['NAME']?>:</p>
                            <p><?=$arItem['PROPERTIES']['P2']['VALUE']?></p>
                        </div>
						<? endif; ?>
                        <? if(!empty($arItem['PROPERTIES']['P3']['VALUE'])): ?>
                        <div class="catalog__tr">
                            <p><?=$arItem['PROPERTIES']['P3']['NAME']?>:</p>
                            <p><?=$arItem['PROPERTIES']['P3']['VALUE']?></p>
                        </div>
                        <? endif; ?>
                        <a class="catalog__more" href="<?=$arItem['DETAIL_PAGE_URL']?>">Все характеристики</a>
                    </div>
                    <div class="catalog__btn">
                        <a class="btn btn--full open-modal" href="#submit-request">Арендовать</a>
                    </div>
                </div>
            </div>
			<? endforeach; ?>

        </div>
        <div class="catalog__tocat">
            <a class="btn btn--empty" href="<?SITE_DIR?>catalog/">Перейти в каталог</a>
        </div>
    </div>