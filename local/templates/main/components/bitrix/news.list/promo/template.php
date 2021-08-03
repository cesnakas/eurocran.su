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
			<div class="promo__item" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/content/sl1.jpg)">
				<div class="promo__num">01/<span>02</span></div>
				<div class="promo__row">
					<div class="promo__content">
						<div class="g-title">
							<h2>Аренда спецтехники Liebherr для любых задач</h2>
						</div>
						<p>Мобильные, гусеничные и башенные краны LIEBHERR в аренду для любых задач и грузов. работаем по всей России</p>
						<div class="promo__btns"><a class="btn btn--full" href="">Заказать звонок</a><a class="btn btn--empty" href="">Каталог техники</a></div>
					</div>
				</div>
			</div>
			<div class="promo__item" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/content/sl1.jpg)">
				<div class="promo__num">02/<span>02</span></div>
				<div class="promo__row">
					<div class="promo__content">
						<div class="g-title">
							<h2>Аренда спецтехники Liebherr для любых задач</h2>
						</div>
						<p>Мобильные, гусеничные и башенные краны LIEBHERR в аренду для любых задач и грузов. работаем по всей России</p>
						<div class="promo__btns"><a class="btn btn--full" href="">Заказать звонок</a><a class="btn btn--empty" href="">Каталог техники</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="promo__arrows"></div>
		<div class="promo__bottom-text"></div>

	</div>
</div>