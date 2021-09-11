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

<div class="container">

    <h1>Каталог техники</h1>

    <div class="sub_cats row">
        <div><a href="">40 тонн</a></div>
        <div><a href="">50 тонн</a></div>
        <div><a href="">65 тонн</a></div>
        <div><a href="">68 тонн</a></div>
        <div><a href="">70 тонн</a></div>
        <div><a href="">82,5 тонн</a></div>
        <div><a href="">82,5 тонн</a></div>
        <div><a href="">84 тонн</a></div>
        <div><a href="">85 тонн</a></div>
        <div><a href="">90 тонн</a></div>
        <div><a href="">93,8 тонн</a></div>
        <div><a href="">95 тонн</a></div>
        <div><a href="">112,5 тонн</a></div>
        <div><a href="">120 тонн</a></div>
        <div><a href="">131,6 тонн</a></div>
        <div><a href="">150 тонн</a></div>
        <div><a href="">160 тонн</a></div>
        <div><a href="">200 тонн</a></div>
        <div><a href="">250 тонн</a></div>
        <div><a href="">280 тонн</a></div>
        <div><a href="">300 тонн</a></div>
        <div><a href="">350 тонн</a></div>
        <div><a href="">400 тонн</a></div>
        <div><a href="">500 тонн</a></div>
        <div><a href="">750 тонн</a></div>
    </div>

</div>

<div class="cats__main">
	<div class="container">

<?if ($arParams["USE_FILTER"] == "Y"): ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.filter",
        "",
        Array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "FILTER_NAME" => $arParams["FILTER_NAME"],
            "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
            "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        ),
        $component
    );?>
<? endif ?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
	),
	$component
);
?>

	</div>
</div>

<!--START PUT-THE-TECHNIQUE-->
<div class="put-the-technique">
    <div class="container">
        <div class="g-title">
            <h2>Нужна помощь в подборе? </h2>
        </div>
        <form action="">
            <div class="row">
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="Телефон">
                <label class="btn btn--full">Получить консультацию
                    <input type="submit">
                </label>
            </div>
        </form>
    </div>
</div>
<!--END PUT-THE-TECHNIQUE-->

<!--END PUT-THE-TECHNIQUE-->
<div class="product-single__content">
    <div class="container">
        <h2>Заголовок</h2>
        <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих
            заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
        <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым
            управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным
            подвесным противовесом или балластировочной тележкой. </p>
        <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить
            экономичную транспортировку этого подъемного крана к строительной площадке. </p>
        <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м.
            Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
        <p>Гусеничный кран LR 1750 находит свое применение в строительстве электростанций, нефтеперерабатывающих
            заводов, на строительных площадках мостов и при монтаже ветросиловых установок. </p>
        <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым
            управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным
            подвесным противовесом или балластировочной тележкой. </p>
        <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить
            экономичную транспортировку этого подъемного крана к строительной площадке. </p>
        <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м.
            Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.Гусеничный кран LR 1750
            находит свое применение в строительстве электростанций, нефтеперерабатывающих заводов, на строительных
            площадках мостов и при монтаже ветросиловых установок. </p>
        <p>Эта 750-тонная машина имеет универсальное применение со своей 140-метровой основной стрелой, 105-метровым
            управляемым удлинителем стрелы, 21-метровым монтажным удлинителем, деррик-оборудованием и 400-тонным
            подвесным противовесом или балластировочной тележкой. </p>
        <p>Компактные габариты компонентов подъемного крана и их умеренный индивидуальный вес позволяют обеспечить
            экономичную транспортировку этого подъемного крана к строительной площадке. </p>
        <p>Этот 750-тонный кран может также использоваться с выдвижными опорами, имеющими опорную базу 13 x 13 м.
            Результирующая грузоподъемность в этом случае может быть увеличена до 370 %.</p>
    </div>
</div>
<!--END INFO-BLOCK-->

<!--START CONTACTS-B-->
<div class="contacts contacts--block">
    <div class="container">
        <div class="g-title">
            <h2>Контакты</h2>
        </div>
        <div class="row">
            <div class="contacts__info">
                <p>Ежедневно мы развиваемся и стараемся стать лучше для вас, поэтому всегда рады получить от вас
                    обратную связь с пожеланиями и идеями по улучшению наших продуктов!</p>
                <p>Если у вас остались вопросы или есть предложения как стать лучше пишите нам!</p>

                <div class="contacts__loc">
                    <i class="icon">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/location.svg"/>
                    </i>
                    <span> г. Москва, Россия, 117628,м. Бульвар Дмитрия Донского, ул. Куликовская, 12</span>
                </div>
                <div class="contacts__row">
                    <div class="contacts__tel">
                        <i class="icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/phone.svg"/>
                        </i>
                        <span>
                            <a href="tel:+74999299666">+7 (499)929-96-66</a>
                            <a href="tel:+79853645518">+7 (985)364-55-18</a>
                            <a href="tel:+79852262030">+7 (985)226-20-30</a>
                        </span>
                    </div>
                    <div class="contacts__other">
                        <div class="contacts__mail">
                            <i class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/mail.svg"/>
                            </i>
                            <a href="mailto:evro-k@yandex.ru">evro-k@yandex.ru</a>
                        </div>
                        <div class="contacts__schedule">
                            <i class="icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/content/clock.svg"/>
                            </i>
                            <span>10:00 - 17:00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts__form">

                <form action="">
                    <input type="text" placeholder="Ваше имя">
                    <div class="form__row">
                        <input type="tel" placeholder="Ваш телефон*">
                        <input type="email" placeholder="Ваша почта">
                    </div>
                    <textarea name="" placeholder="Оставьте ваш вопрос"></textarea>
                    <label class="checkbox">
                        <input type="checkbox" checked="checked">
                        <div class="input"></div>
                        <span>Я согласен с <a href=""> условиями обработки </a> и использования моих персональных данных</span>
                    </label>
                    <label class="btn btn--full">Оставить заявку
                        <input type="submit">
                    </label>
                </form>

            </div>
        </div>
    </div>
</div>
<!--END CONTACTS-B-->

<!--START MAP-->
<div class="map"></div>
<!--END MAP-->
