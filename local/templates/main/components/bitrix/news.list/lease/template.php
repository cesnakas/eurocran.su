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

<div class="lease">
	<div class="container">

		<div class="g-title">
			<h1> <span>Спецтехника </span> в аренду</h1>
		</div>

	</div>

	<div class="lease__slider" id="lease__slider">

		<?foreach($arResult['ITEMS'] as $arItem):?>
		<div class="lease__item">
			<div class="row">
				<div class="lease__img">
                    <?=CFile::ShowImage(
                        $arItem['PREVIEW_PICTURE']['SRC'],
                        650,
                        460,
                        'style="width: 650px; height: 460px; object-fit: cover; object-position: center;" alt="'.$arItem['NAME'].'"',
                        $arItem["DETAIL_PAGE_URL"],
                        false
                    );?>
				</div>
				<div class="lease__text">
					<div class="g-title">
						<h3><?=$arItem['NAME']?></h3>
					</div>
                    <?php
                    $str = $arItem['PREVIEW_TEXT'];
                    echo TruncateText($str, 350);
                    ?>
					<div class="lease__btn">
                        <a class="btn btn--full" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Выбрать спецтехнику</a>
                    </div>
				</div>
			</div>
		</div>
        <?endforeach;?>

	</div>

	<div class="lease__arrows"></div>
	<div class="lease__dots"></div>

</div>