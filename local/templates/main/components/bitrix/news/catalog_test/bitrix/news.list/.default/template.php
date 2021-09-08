<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!--START CATS__CONTENT-->
<div class="cats__content">

    <div class="cats__items">
		<?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="catalog__row">

                <a class="catalog__img" href="<?=$arItem["DETAIL_PAGE_URL"]?>" style="background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></a>

                <a class="catalog__title" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    <h3><?=$arItem["NAME"]?></h3>
                </a>

                <a class="catalog__info" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<?php
					$i = 0;
					foreach($arItem["PROPERTIES"]["PARAMS"]["VALUE"] as $key => $value):
						$i++;
						if ($i > 2) break;
						$cutValue = mb_substr($value,0,17);
						$cutKey = mb_substr($arItem['PROPERTIES']['PARAMS']['DESCRIPTION'][$key],0,5);
						?>
                        <div class="catalog__tr">
                            <p><?=$cutValue?>:</p>
                            <p style="min-width: 1%;"><?=$cutKey?></p>
                        </div>
					<?endforeach;?>
                    <div class="catalog__more">
                        <span>Все характеристики</span>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/arrow.svg"/>
                    </div>
                </a>

                <div class="catalog__btn">
                    <a class="btn btn--full" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Арендовать</a>
                </div>
            </div>
		<?endforeach;?>
    </div>

</div>