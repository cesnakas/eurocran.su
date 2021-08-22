<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спецтехника ООО \"Компания ЕвроКран\" на объектах");
$APPLICATION->SetPageProperty("description", "Тендеры и объекты, на которых работали наши мобильные краны Liebherr. Фотоотчет компании OOO «ЕвроКран».");
$APPLICATION->SetPageProperty("title", "Спецтехника Liebherr на объектах - фото - ООО \"Компания ЕвроКран\"");
?>

	<!--START OBJECTS-->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "objects",
        array(
            "IBLOCK_TYPE" => "objekty",
            "IBLOCK_ID" => "2",
            "NEWS_COUNT" => "15",
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
            "DETAIL_URL" => SITE_DIR."objekty/#SECTION_CODE#/~detail.php", // #ELEMENT_CODE#/
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
	<!--<div class="objects">
		<div class="container">
			<h1>Работа спецтехники от Компании Еврокран</h1>
			<div class="row">
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
                </a>
            </div>
            <a class="btn btn--empty" href="">Загрузить ещё</a>
		</div>
	</div>-->
	<!--END OBJECTS-->

	<!--START INFO-BLOCK-->
	<div class="info-block">
		<div class="container">
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
	<!--END INFO-BLOCK-->

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>