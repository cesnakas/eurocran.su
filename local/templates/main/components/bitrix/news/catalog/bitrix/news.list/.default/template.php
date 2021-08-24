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

<div class="objects">
	<div class="container">

		<h1>Работа спецтехники от Компании Еврокран</h1>

		<div class="row">

			<?foreach($arResult["ITEMS"] as $arItem):?>

				<?php
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

			<a class="objects__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">

				<picture>
					<img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>" alt="">
				</picture>

				<div class="objects__info">
					<h2><?=$arItem["NAME"]?></h2>
					<p><?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?></p>
				</div>

			</a>
			<?endforeach;?>

			<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
				<?=$arResult["NAV_STRING"]?>
			<? } ?>

			<!--<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500 </h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе		</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>
			<a class="objects__item" href="">
				<picture>
					<img src="<?/*=SITE_TEMPLATE_PATH*/?>/dist/img/content/objects.jpg"/>
				</picture>
				<div class="objects__info">
					<h2>Разгрузка и монтаж трансформатора автокраном LIEBHERR LTM1500</h2>
					<p>г.Туапсе	</p>
				</div>
			</a>-->

        </div>

		<!--<a class="btn btn--empty" href="">Загрузить ещё</a>-->

	</div>
</div>