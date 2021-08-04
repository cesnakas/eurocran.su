<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

    <div class="container--lg">

        <div class="projects__nav">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="projects__nav__item">
                <div class="projects__nav__box">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>"/>
                </div>
            </div>
			<?endforeach;?>
        </div>

        <div class="container">
            <div class="projects__arr"></div>
        </div>

        <div class="projects__slider">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="projects__slider__item">
                <div class="row">
                    <div class="projects__slider__img">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>"/>
                    </div>
                    <div class="projects__slider__content">
                        <h3><?=$arItem["NAME"]?></h3>
                        <div class="projects__slider__location"><?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?></div>
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        <a class="more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
                    </div>
                </div>
            </div>
			<?endforeach;?>
        </div>
    </div>