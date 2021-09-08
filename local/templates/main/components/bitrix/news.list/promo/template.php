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

<div class="promo">
	<div class="container--lg">

		<div class="promo__slider" id="promo__slider">
			<? $i = 1; ?>
			<?foreach($arResult['ITEMS'] as $arItem):?>
			<div class="promo__item" style="background:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>) 0 0 no-repeat;background-size:cover;">
				<div class="promo__num">
					<?
					CModule::IncludeModule('iblock');
					$iblock_id = 3;
					$arFilter = Array('IBLOCK_ID'=>$iblock_id, 'ACTIVE'=>'Y');
					$res_count = CIBlockElement::GetList(Array(), $arFilter, Array(), false, Array());
					?>
					0<?=$i;?>/<span><?=$res_count;?></span>
                </div>
				<div class="promo__row">
					<div class="promo__content">
						<div class="g-title">
							<h2><?=$arItem['NAME']?></h2>
						</div>
						<?=$arItem['PREVIEW_TEXT']?>
						<div class="promo__btns">
                            <a class="btn btn--full open-modal" href="#submit-request">Заказать звонок</a>
                            <a class="btn btn--empty" href="<?=SITE_DIR?>catalog/">Каталог техники</a>
                        </div>
					</div>
				</div>
			</div>
            <? $i++; ?>
			<?endforeach;?>

		</div>

		<div class="promo__arrows"></div>
		<div class="promo__bottom-text"></div>
		
	</div>
</div>