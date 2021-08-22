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

<div class="blog">
    <div class="container">

        <h1>СТАТЬИ О СПЕЦТЕХНИКЕ</h1>

        <div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>

				<?php
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

            <section class="blog__item">

                <picture>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>"/>
                </picture>

                <div class="blog__info">
                    <h2><?=$arItem["NAME"]?></h2>
                    <!--<p>Компания Liebherr – ведущий поставщик строительной и землеройной техники в мире. Предлагаем автомобильные краны от легкой до тяжелой категории.</p>-->
					<?=$arItem['PREVIEW_TEXT']?>
                    <a class="btn btn--full" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
                </div>

            </section>
            <?endforeach;?>
        </div>

		<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
			<?=$arResult["NAV_STRING"]?>
		<? } ?>
        <!--<a class="btn btn--empty" href="">Загрузить ещё</a>-->

    </div>
</div>
