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

<?/*
<div class="objects-single">
	<div class="container">

        <h1><?=$arResult["NAME"]?></h1>

        <p><?=$arResult["PREVIEW_TEXT"]?></p>

		<div class="objects-single__arrows"></div>
		<div class="objects-single__slider" id="objects-single__slider">
			<? if(count($arResult["PROPERTIES"]["PHOTO"]["VALUE"]) > 0 && intval($arResult["PROPERTIES"]["PHOTO"]["VALUE"][0]) > 0):?>
			<? foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo): ?>
			<div class="objects-single__item">
				<img src="<?=CFile::GetPath($photo)?>">
			</div>
            <?endforeach;?>
			<?endif;?>
		</div>

		<div class="objects-single__nav" id="objects-single__nav">
			<?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo):?>
			<div class="objects-single__nav-item">
				<img src="<?=CFile::GetPath($photo)?>"/>
			</div>
			<?endforeach;?>
		</div>

        <?=$arResult["DETAIL_TEXT"];?>

		<?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "objects-slider",
        array(
            "IBLOCK_TYPE" => "objekty",
            "IBLOCK_ID" => "2",
            "NEWS_COUNT" => "9",
            "SORT_BY1" => 'ID',
            "SORT_ORDER1" => 'ASC',
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "ID",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "DESCRIPTION",
                2 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "~detail.php?ELEMENT_ID=#ELEMENT_ID#",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => '',
            "PARENT_SECTION_CODE" => "",

            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "INCLUDE_SUBSECTIONS" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "show-more",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "COMPONENT_TEMPLATE" => "",
            "STRICT_SECTION_CHECK" => "N",
            "FILE_404" => ""
        ),
        false
    );?>

	</div>
</div>
*/?>

<!--START INFO-BLOCK-->
<div class="product-single">
    <div class="container">

        <h1><?=$arResult['NAME']?></h1>

        <div class="row">
            <div class="product-single__img">
                <div class="product-single__slider" id="product-single__slider">

					<?foreach($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo):?>
                    <div class="product-single__item">
                        <?=CFile::ShowImage($photo)?>
                    </div>
                    <?endforeach;?>

                </div>

                <div class="product-single__nav" id="product-single__nav">

                    <div class="product-single__nav-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/product-single.jpg"/>
                    </div>

                    <div class="product-single__nav-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/product-single.jpg"/>
                    </div>
                    <div class="product-single__nav-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/product-single.jpg"/>
                    </div>
                    <div class="product-single__nav-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/product-single.jpg"/>
                    </div>
                    <div class="product-single__nav-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/product-single.jpg"/>
                    </div>

                </div>
            </div>

            <div class="product-single__info">
                <div class="product-single__table">
                    <p><span>Максимальная грузоподъемность:</span><span>750 т</span></p>
                    <p><span>При вылете стрелы:</span><span>7,00 м</span></p>
                    <p><span>Главная стрела:</span><span>140 м</span></p>
                    <p><span>Максимальная высота подъема:</span><span>191 м</span></p>
                    <p><span>Максимальный вылет стрелы:</span><span>156 м</span></p>
                    <p><span>Решетчатый удлинитель:</span><span>от 14,00 до 105,00 м</span></p>
                    <p><span>Скорость передвижения:</span><span>1,65 км/ч</span></p>
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
                    <h2>Аренда гусеничного крана Liebherr LR 1750</h2>
                    <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций,
                        нефтеперерабатывающих заводов, на строительных площадках мостов и при монтаже ветросиловых
                        установок. </p>
                    <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой,
                        105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем,
                        деррик-оборудованием и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
                    <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют
                        обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
                    <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу
                        13 x 13 м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/tabs__item1.jpg"/><img
                            src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/tabs__item2.jpg"/><img
                            src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/tabs__item3.jpg"/>
                </div>
                <div class="tabs__item" id="harakteristiki">
                    <div class="product-single__table">
                        <p><span>Максимальная грузоподъемность:</span><span>750 т</span></p>
                        <p><span>При вылете стрелы:</span><span>7,00 м</span></p>
                        <p><span>Главная стрела:</span><span>140 м</span></p>
                        <p><span>Максимальная высота подъема:</span><span>191 м</span></p>
                        <p><span>Максимальный вылет стрелы:</span><span>156 м</span></p>
                        <p><span>Решетчатый удлинитель:</span><span>от 14,00 до 105,00 м</span></p>
                        <p><span>Скорость передвижения:</span><span>1,65 км/ч</span></p>
                        <p><strong>Стоимость аренды:</strong><strong>Договорная</strong></p><a class="btn btn--full"
                                                                                               href="">Заказать</a>
                    </div>
                </div>
                <div class="tabs__item" id="dokumentatciia">
                    <div class="product-single__downloads"><a href=""><img
                                    src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/download.jpg"/><span>скачать</span></a><a
                                href=""><img src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/download.jpg"/><span>скачать</span></a><a
                                href=""><img src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/download.jpg"/><span>скачать</span></a><a
                                href=""><img src="<?= SITE_TEMPLATE_PATH ?>/dist/img/content/download.jpg"/><span>скачать</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-single__content">
            <h2>Заголовок</h2>
            <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих
                заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
            <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой,
                105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием
                и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
            <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют
                обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
            <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13
                м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
            <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих
                заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
            <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой,
                105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием
                и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
            <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют
                обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
            <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13
                м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.Гусеничный кран LR
                1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на
                строительных площадках мостов и при монтаже ветросиловых установок. </p>
            <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой,
                105-метровым управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием
                и 400-тонным подвесным противовесом или балластировочной тележкой. </p>
            <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют
                обеспечить экономичную транспортировку этого подъемного крана к строительной площадке. </p>
            <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13
                м. Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
        </div>
    </div>
</div>
<!--END INFO-BLOCK-->