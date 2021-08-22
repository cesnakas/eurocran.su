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
<div class="blog-slider">
    <div class="container">

        <h2>Другие статьи</h2>

        <div class="blog-slider__arrows"></div>
        <div class="blog-slider" id="blog-slider">

			<?foreach($arResult["ITEMS"] as $arItem):?>
            <section class="blog-slider__item">

                <picture>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>"/>
                </picture>

                <div class="blog-slider__info">
                    <h2><?= $arItem["NAME"] ?></h2>
                    <p>Компания Liebherr – ведущий поставщик строительной и землеройной техники в мире. Предлагаем автомобильные краны от легкой до тяжелой категории.</p>
                    <a class="btn btn--full" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                </div>

            </section>
            <?endforeach;?>

        </div>
    </div>
</div>
<!--END OBJECTS-->