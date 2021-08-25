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
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>


<!--START INFO-BLOCK-->
<div class="product-single">
    <div class="container">

        <h1><?=$arResult['NAME']?></h1>

        <div class="row">
            <div class="product-single__img">
                <div class="product-single__slider" id="product-single__slider">

					<?foreach($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo):?>
                    <div class="product-single__item">
                        <img src="<?=CFile::GetPath($photo)?>"/>
                    </div>
                    <?endforeach;?>

                </div>

                <div class="product-single__nav" id="product-single__nav">

					<?foreach($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo):?>
                    <div class="product-single__nav-item">
                        <img src="<?=CFile::GetPath($photo)?>"/>
                    </div>
                    <?endforeach;?>

                </div>
            </div>

            <div class="product-single__info">
                <div class="product-single__table">

					<?foreach($arResult['PROPERTIES']['PARAMS']['VALUE'] as $key=>$value):?>
                    <p><span><?=$value?>:</span><span><?=$arResult['PROPERTIES']['PARAMS']['DESCRIPTION'][$key]?></span></p>
                    <?endforeach;?>
                    <p><strong>Стоимость аренды:</strong><strong>Договорная</strong></p>
                    <a class="btn btn--full" href="">Заказать</a>

                </div>
            </div>
        </div>
        <div class="product-single__tabs tabs">
            <div class="tabs__nav">
                <ul>
                    <li class="active"><a href="#opisanie">Описание</a></li>
                    <li><a href="#harakteristiki">Характеристики</a></li>
                    <li><a href="#dokumentatciia">Документация</a></li>
                </ul>
            </div>
            <div class="tabs__body">
                <div class="tabs__item active" id="opisanie">

					<?=$arResult['DETAIL_TEXT']?>

                    <!--<img src="<?/*= SITE_TEMPLATE_PATH */?>/dist/img/content/tabs__item1.jpg"/>
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/dist/img/content/tabs__item2.jpg"/>
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/dist/img/content/tabs__item3.jpg"/>-->

                </div>
                <div class="tabs__item" id="harakteristiki">
                    <div class="product-single__table">

						<?foreach($arResult['PROPERTIES']['PARAMS']['VALUE'] as $key=>$value):?>
                        <p><span><?=$value?>:</span><span><?=$arResult['PROPERTIES']['PARAMS']['DESCRIPTION'][$key]?></span></p>
						<?endforeach;?>
                        <p><strong>Стоимость аренды:</strong><strong>Договорная</strong></p>

                        <a class="btn btn--full" href="">Заказать</a>

                    </div>
                </div>
                <div class="tabs__item" id="dokumentatciia">
                    <div class="product-single__downloads">
						<?php
						if ($arResult['PROPERTIES']['PDF']['VALUE']) {
                            $dbFile = CFile::GetByID($arResult['PROPERTIES']['PDF']['VALUE']);
                            $arFile = $dbFile->Fetch();
                            $size = round($arFile['FILE_SIZE']/1048576, 2);
						?>
                        <a href="<?=CFile::GetPath($arResult['PROPERTIES']['PDF']['VALUE'])?>" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/download.jpg"/>
                            <span>скачать <?=$size?> МБ</span>
                        </a>
                        <? } ?>

                        <?php
                        if ($arResult['PROPERTIES']['PDF2']['VALUE']) {
							$dbFile = CFile::GetByID($arResult['PROPERTIES']['PDF2']['VALUE']);
							$arFile = $dbFile->Fetch();
							$size = round($arFile['FILE_SIZE']/1048576, 2);
                        ?>
                        <a href="<?=CFile::GetPath($arResult['PROPERTIES']['PDF2']['VALUE'])?>" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/download.jpg"/>
                            <span>скачать <?=$size?> МБ</span>
                        </a>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-single__content">
			<?=$arResult['PREVIEW_TEXT']?>
        </div>
    </div>
</div>
<!--END INFO-BLOCK-->