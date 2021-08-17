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

<div class="leters">
	<div class="container">
		<div class="g-title">
			<h2>Клиенты говорят о нас</h2>
		</div>
		<div class="leters__arrows"></div>
		<div class="leters__slider" id="leters__slider">
			<?php
            foreach($arResult['ITEMS'] as $arItem):
            ?>
			<div class="leters__item">
				<?=CFile::ShowImage(
					$arItem['PREVIEW_PICTURE']['SRC'],
					'',
					'',
					'alt="'.$arItem['NAME'].'"',
					// $arItem["DETAIL_PAGE_URL"],
					false
				);?>
			</div>
            <?php
            endforeach;
            ?>
		</div>
		<div class="leters__dots"></div>
	</div>
</div>
