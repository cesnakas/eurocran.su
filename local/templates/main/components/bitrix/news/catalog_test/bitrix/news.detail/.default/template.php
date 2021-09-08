<?php
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

<div class="product-single">
	<div class="container">

		<h1><?=$arResult["NAME"]?></h1>

		<div class="row">

			<div class="product-single__img">

				<div class="product-single__slider" id="product-single__slider">

					<?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo):?>
					<div class="product-single__item">
						<img src="<?=CFile::GetPath($photo)?>"/>
					</div>
					<?endforeach;?>

				</div>

				<div class="product-single__nav" id="product-single__nav">

					<?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo):?>
					<div class="product-single__nav-item">
						<img src="<?=CFile::GetPath($photo)?>"/>
					</div>
					<?endforeach;?>

				</div>

			</div>

			<div class="product-single__info">
				<div class="product-single__table">
					<p> <span>Максимальная грузоподъемность:</span><span>750 т</span></p>
					<p> <span>При вылете стрелы:</span><span>7,00 м</span></p>
					<p> <span>Главная стрела:</span><span>140 м</span></p>
					<p> <span>Максимальная высота подъема:</span><span>191 м</span></p>
					<p> <span>Максимальный вылет стрелы:</span><span>156 м</span></p>
					<p> <span>Решетчатый удлинитель:</span><span>от 14,00 до 105,00 м</span></p>
					<p> <span>Скорость передвижения:</span><span>1,65 км/ч</span></p>
					<p><strong>Стоимость аренды:</strong><strong>Договорная</strong></p><a class="btn btn--full" href="">Заказать</a>
				</div>
			</div>

		</div><!-- /row -->

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
					<h2>Аренда гусеничного крана Liebherr LR 1750</h2>
					<p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
					<p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
					<p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
					<p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/tabs__item1.jpg"/><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/tabs__item2.jpg"/><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/tabs__item3.jpg"/>
				</div>
				<div class="tabs__item" id="harakteristiki">
					<div class="product-single__table">
						<p> <span>Максимальная грузоподъемность:</span><span>750 т</span></p>
						<p> <span>При вылете стрелы:</span><span>7,00 м</span></p>
						<p> <span>Главная стрела:</span><span>140 м</span></p>
						<p> <span>Максимальная высота подъема:</span><span>191 м</span></p>
						<p> <span>Максимальный вылет стрелы:</span><span>156 м</span></p>
						<p> <span>Решетчатый удлинитель:</span><span>от 14,00 до 105,00 м</span></p>
						<p> <span>Скорость передвижения:</span><span>1,65 км/ч</span></p>
						<p><strong>Стоимость аренды:</strong><strong>Договорная</strong></p><a class="btn btn--full" href="">Заказать</a>
					</div>
				</div>
				<div class="tabs__item" id="dokumentatciia">
					<div class="product-single__downloads"><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/download.jpg"/><span>скачать</span></a><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/download.jpg"/><span>скачать</span></a><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/download.jpg"/><span>скачать</span></a><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/download.jpg"/><span>скачать</span></a></div>
				</div>
			</div>
		</div>
		<div class="product-single__content">
			<h2>Заголовок</h2>
			<p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
			<p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
			<p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
			<p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
			<p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
			<p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
			<p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
			<p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
			<p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
			<p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
			<p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
		</div>
	</div>
</div>
